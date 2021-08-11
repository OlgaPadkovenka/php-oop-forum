<?php
include "header.php";
include "models/User.php";

?>

<div class="text-center h1">Bienvenue sur le forum Coucou!</div>

<div class="container">
    <div class="text-center h3">Se connecter</div>
    <div class="row justify-content-center align-items-center">
        <form action="auth.php" method="post" class="w-25">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="register.php">Je n'ai pas encore de compte</a>
        </form>
    </div>
</div>

<?php
include "footer.php";
?>