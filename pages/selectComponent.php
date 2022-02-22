<div class="row d-flex flex-column bg-light p-4">
    <div class="col">
        <h2>Choisir type de component</h2>
    </div>

    <div class="col">
        <form method="post" action="?page=pageComponent">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Type component</label>
                <select name="type" class="form-control" id="exampleFormControlSelect1">
                    <?php
                    foreach ($typesComponents as $typeComponent) {
                        ?>
                        <option> <?= $typeComponent ?> </option>
                        <?php
                    }
                    ?>

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Choisir</button>
        </form>
    </div>
</div>
