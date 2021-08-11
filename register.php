<?php
include "header.php";
include "models/User.php";

User::createUser();

?>

<div class="container">
    <div class="text-center h3">S'inscrire</div>
    <div class="row justify-content-center align-items-center">
        <form class="w-25" action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Votre prénom</label>
                <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Votre nom</label>
                <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Votre e-mail</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Votre mot de passe</label>
                <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>

<?php
include "footer.php";
?>