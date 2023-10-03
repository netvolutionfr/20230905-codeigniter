<?php
echo session()->getFlashdata('error');
echo validation_list_errors();
?>
<form action="/utilisateurs" method="post">
    <div class="mb-3">
        <label class="form-label" for="nom">Nom</label>
        <input class="form-control" id="nom" type="text" name="nom" value="<?php echo set_value('nom'); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label" for="prenom">Prénom</label>
        <input class="form-control" id="prenom" type="text" name="prenom" value="<?php echo set_value('prenom'); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input class="form-control" id="email" type="email" name="email" value="<?php echo set_value('email'); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label" for="iban">IBAN</label>
        <input class="form-control" id="iban" type="text" name="iban" value="<?php echo set_value('iban'); ?>">
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="check-accept" name="checkaccept">
        <label class="form-check-label" for="check-accept">J'accepte les <a href="#">conditions de traitement des données personnelles</a></label>
    </div>

    <div class="md-3">
        <button type="submit" class="btn btn-primary">Créer un utilisateur</button>
    </div>
</form>