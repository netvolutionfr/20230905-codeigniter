<?php
echo session()->getFlashdata('error');
echo validation_list_errors();
?>
<form action="/utilisateurs" method="post">
    <div class="row">
        <label for="nom">Nom</label>
        <input id="nom" type="text" name="nom" value="<?php echo set_value('nom'); ?>">
    </div>

    <div class="row">
        <label for="prenom">Prénom</label>
        <input id="prenom" type="text" name="prenom" value="<?php echo set_value('prenom'); ?>">
    </div>

    <div class="row">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="<?php echo set_value('email'); ?>">
    </div>

    <div class="row">
        <input type="checkbox" id="check-accept" name="checkaccept">
        <label for="check-accept">J'accepte les <a href="#">conditions de traitement des données personnelles</a></label>
    </div>

    <button type="submit" class="btn btn-primary">Créer un utilisateur</button>
</form>