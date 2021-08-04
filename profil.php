<?php
include 'header.php';
include './models/Message.php';
include './models/User.php';

?>

<style>
    a:hover {
        color: white;
    }
</style>

<div class="text-center h1">Page de profile</div>
<div class="mt-2 mb-2">
    <div class=" text-center">Nom : </div>
    <div class="text-center">Prénom : </div>
    <div class="text-center">Email : </div>
</div>

<div class="d-flex justify-content-center">
    <button type="button" class="btn btn-outline-primary"><a class="text-decoration-none" href="message-create.php">Créer un message</a></button>
</div>

<div class="text-center h2">Mes messages</div>
<!-- start affichage des messages -->

<div class="text-center h5">Titre: </div>
<div class="text-center">Text : </div>
<div class="text-center">Date : </div>


<!-- end affichage des messages -->

<?php
include "footer.php";
?>