<?php
if (!isset($utilisateur)) {
    echo "<h2>Utilisateur vide</h2>";
} else {
?>
<ul>
    <li>Nom : <?php echo esc($utilisateur['nom']); ?></li>
    <li>Prénom : <?php echo esc($utilisateur['prenom']); ?></li>
    <li>Email : <?php echo esc($utilisateur['email']); ?></li>
    <li>IBAN : <?php echo esc($utilisateur['iban']); ?></li>
</ul>
<?php
}
?>