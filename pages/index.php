<?php
include "header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "models/User.php";
    try {
        User::connexionUser();
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>

<div class="text-center h1">Bienvenue sur le forum Coucou!</div>

<div class="container">
    <div class="text-center h3">Se connecter</div>
    <div class="row justify-content-center align-items-center">
        <form action="profil" method="post" class="w-25">

            <?php if (isset($error)) : ?>
                <div class="mb-3"><?= $error ?></div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pwd" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="register.php">Je n'ai pas encore de compte</a>
        </form>
    </div>
</div>

<?php
include "footer.php";
?>