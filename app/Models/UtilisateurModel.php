<?php

namespace App\Models;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table = 'utilisateurs';
    protected $allowedFields = ['nom', 'prenom', 'email', 'adresse', 'telephone'];

    public function getUtilisateur($id) {
        return $this->asArray()->where(['id' => $id])->first();
    }

    public function create() {
        $model = model(UtilisateurModel::class);

        $data = array(
            'nom' => 'Toto',
            'prenom' => 'Titi'
            );

        $model->save($data);
    }
}