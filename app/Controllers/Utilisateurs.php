<?php

namespace App\Controllers;

use App\Models\UtilisateurModel;

class Utilisateurs extends BaseController
{
    public function new() {
        helper('form');

        return view('templates/header', ['title' => 'Créer un nouvel utilisateur'])
            . view('utilisateurs/create')
            . view('templates/footer');
    }

    public function create() {
        helper('form');

        if (!$this->validate([
            'nom' => 'required|min_length[3]|max_length[255]',
            'prenom' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|min_length[3]|max_length[255]',
            'checkaccept' => 'required'
        ])) {
            return $this->new();
        }

        $post = $this->validator->getValidated();

        $model = model(UtilisateurModel::class);

        $model->create($post['nom'], $post['prenom'], $post['email'], $post['iban']);

        return "Utilisateur créé";
    }
}