<?php

namespace App\Models;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table = 'utilisateurs';
    protected $allowedFields = ['nom', 'prenom', 'email', 'acceptcgu', 'iban'];
    private $key = '';

    public function __construct()
    {
        parent::__construct();

        $this->key = getenv('encryption.key');
    }

    public function getUtilisateur($id) {
        // Equivalent SQL :
        // SELECT * FROM utilisateurs WHERE id = $id;
        $utilisateur = $this->asArray()->where(['id' => $id])->first();

        if (strlen($utilisateur['iban'])) {
            $config = new \Config\Encryption();
            $config->key = $this->key;
            $encrypter = \Config\Services::encrypter($config);
            $iban = $encrypter->decrypt(hex2bin($utilisateur['iban']));
            $utilisateur['iban'] = $iban;
        }


        return $utilisateur;
    }

    public function create($nom, $prenom, $email, $iban = '') {
        $model = model(UtilisateurModel::class);

        $now = date('Y-m-d H:i:s');

        $config = new \Config\Encryption();
        $config->key = $this->key;
        $encrypter = \Config\Services::encrypter($config);
        $cipheriban = bin2hex($encrypter->encrypt($iban));

        $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'acceptcgu' => $now,
            'iban' => $cipheriban
        );

        $model->save($data);
    }
}