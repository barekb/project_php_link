{% include "header.php" %}

<div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <form class="form-signin" method="POST" action="/new">
            <h2 class="form-signin-heading" style="color: black;">Nouvel Article</h2>
            <?php
            if (isset($errorMsg)) {
                echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
            }
            ?>
            <input type="text" class="form-control" name="name" placeholder="name (>= 2 characters)" required="" autofocus="" />
            <input type="text" class="form-control" name="desc" placeholder="Description (>= 2 characters)" required="" />
            <input type="text" class="form-control" name="url" placeholder="url (écrire le lien)" required="" />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
        </form>
    </div>
</div>

{% include "footer.php" %}