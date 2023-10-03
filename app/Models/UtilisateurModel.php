<?php

namespace App\Models;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table = 'utilisateurs';
    protected $allowedFields = ['nom', 'prenom', 'email', 'acceptcgu', 'iban'];

    public function getUtilisateur($id) {
        // Equivalent SQL :
        // SELECT * FROM utilisateurs WHERE id = $id;
        return $this->asArray()->where(['id' => $id])->first();
    }

    public function create($nom, $prenom, $email, $iban = '') {
        $model = model(UtilisateurModel::class);

        $now = date('Y-m-d H:i:s');

        $config = new \Config\Encryption();
        $config->key = 'Z-W4@Un^|WWL2{ _J*LH8uT<x0R4O9&n,w8u.k|JPr!Ex3I3FRcJ[_Y><X`R(5FZ';
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