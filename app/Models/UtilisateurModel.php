<?php

namespace App\Models;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table = 'utilisateurs';
    protected $allowedFields = ['nom', 'prenom', 'email', 'acceptcgu'];

    public function getUtilisateur($id) {
        // Equivalent SQL :
        // SELECT * FROM utilisateurs WHERE id = $id;
        return $this->asArray()->where(['id' => $id])->first();
    }

    public function create($nom, $prenom, $email) {
        $model = model(UtilisateurModel::class);

        $now = date('Y-m-d H:i:s');

        $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'acceptcgu' => $now
        );

        $model->save($data);
    }
}