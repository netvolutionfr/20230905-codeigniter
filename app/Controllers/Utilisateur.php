<?php

namespace App\Controllers;

use App\Models\UtilisateurModel;

class Utilisateur extends BaseController
{
    public function create() {
        $model = model(UtilisateurModel::class);

        $model->create();

        return "Utilisateur créé";
    }
}