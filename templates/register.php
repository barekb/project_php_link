{% include "header.php" %}

<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <form class="form-signin" method="POST" action="/register">
            <h2 class="form-signin-heading" style="color: black;">S'inscrire</h2>
            <?php
            if (isset($errorMsg)) {
                echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
            }
            ?>
            <input type="text" class="form-control" name="username" placeholder="Pseudo" required="" autofocus="" style="margin-bottom: 10px;" />
            <input type="password" class="form-control" name="password" placeholder="Mot de Passe (8 charactères)" required="" style="margin-bottom: 10px;" />
            <label style="color: black; margin-bottom: 10px;">Retapez le mot de passe:</label>
            <input type="password" class="form-control" name="passwordRetype" placeholder="Password" required="" style="margin-bottom: 10px;" />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Ok</button>
        </form>
    </div>
</div>

{% include "footer.php" %}