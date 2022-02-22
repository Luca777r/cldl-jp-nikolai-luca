<div class="row flex-column">
    <?php
    if (isset($_GET["loginSuccess"]) && $_GET["loginSuccess"] == 1) {
        ?>
        <div class="alert alert-success" role="alert">
            Vous êtes bien connecté
        </div>
        <?php
    }
    ?>
    <h1>Page principal</h1>
</div>

