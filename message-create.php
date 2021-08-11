<?php

include "header.php";

?>

<div class="text-center h1">Créer un message</div>
<div class="container shadow p-3 mb-5 bg-white rounded w-50">
    <form action="" method="post">
        <div class="form-floating mb-3">
            <input type="title" class="form-control" id="floatingInput" name="topic" placeholder="Le titre de votre message">
            <label for="floatingInput">Le sujet de votre message</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Votre message" name="message" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Votre message</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>

    </form>
</div>

<?php
include "footer.php";
?>