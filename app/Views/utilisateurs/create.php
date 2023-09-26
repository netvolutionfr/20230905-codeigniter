<?php
echo session()->getFlashdata('error');
echo validation_list_errors();
?>
<form action="/utilisateurs" method="post">
    <label for="nom">Nom</label>
    <input id="nom" type="text" name="nom" value="<?php echo set_value('nom'); ?>">

    <label for="prenom">Prénom</label>
    <input id="prenom" type="text" name="prenom" value="<?php echo set_value('prenom'); ?>">

    <label for="email">Email</label>
    <input id="email" type="email" name="email" value="<?php echo set_value('email'); ?>">

    <button type="submit">Créer un utilisateur</button>
</form>