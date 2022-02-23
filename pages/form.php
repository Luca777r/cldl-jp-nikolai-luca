<?php

include_once 'pages/formValidation.php';
var_dump([$_POST]);

?>


<div class="col-6">
    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" name="Name" class="form-control" required>
            <span class="error"> <?php echo $nameErr; ?></span>
        </div>


        <div class="form-check">
            <div>
                <input class="form-check-input" name="IsLaptop" type="radio" value="1">
                <label class="form-check-label" for="exampleRadios1">
                    Laptop
                </label>
            </div>
            <div>
                <input class="form-check-input" name="IsLaptop" type="radio" value="0">
                <label class="form-check-label" for="exampleRadios2">
                    Tour
                </label>
            </div>
            <span class="error"> <?php echo $isLaptopErr; ?></span>
        </div>


        <div class="form-group mt-3">
            <label for="exampleFormControlSelect1">Carte Graphique</label>
            <select class="form-control" name="GraphicCard" required>
                <option selected>Ouvrir le menu</option>
                <?php
                $key = 'GraphicCard';
                foreach (getAllProperties($key) as $property) {
                ?><option value="<?= $property->getId() ?>"><?= $property->getModel(); ?></option>
                <?php } ?>
            </select>
            <span class="error"> <?php echo $graphiccardErr; ?></span>
        </div>


        <label for="exampleFormControlSelect1">Ecran</label>
        <?php
        $key = 'Monitor';
        foreach (getAllProperties($key) as $property) { ?>
            <div class="form-check">
                <input class="form-check-input" name="Monitor" type="checkbox" value="<?= $property->getId() ?>">
                <label class="form-check-label" for="flexCheckDefault">
                    <?= $property->getModel(); ?>
                </label>
                <span class="error"> <?php echo $monitorErr; ?></span>
            </div>
        <?php } ?>


        <div class="form-group mt-3">
            <label for="exampleFormControlSelect1">Carte Mère</label>
            <select class="form-control" name="Motherboard" required>
                <option selected>Ouvrir le menu</option>
                <?php
                $key = 'Motherboard';
                foreach (getAllProperties($key) as $property) {
                ?><option value="<?= $property->getId() ?>"><?= $property->getModel(); ?></option>
                <?php } ?>
            </select>
            <span class="error"><?php echo $motherboardErr; ?></span>
        </div>


        <div class="form-group">
            <label for="exampleFormControlSelect1">Processeur</label>
            <select class="form-control" name="Processor" required>
                <option selected>Ouvrir le menu</option>
                <?php
                $key = 'Processor';
                foreach (getAllProperties($key) as $property) {
                ?><option value="<?= $property->getId() ?>"><?= $property->getModel(); ?></option>
                <?php } ?>
            </select>
            <span class="error"><?php echo $processorErr; ?></span>
        </div>


        <label for="exampleFormControlSelect1">Ram</label>
        <?php
        $key = 'Ram';
        foreach (getAllProperties($key) as $property) { ?>
            <div class="form-check">
                <input class="form-check-input" name="Ram" type="checkbox" value="<?= $property->getId() ?>">
                <label class="form-check-label" for="flexCheckDefault">
                    <?= $property->getModel(); ?>
                </label>
                <span class="error"><?php echo $ramErr; ?></span>
            </div>
        <?php } ?>


        <div class="form-group mt-3">
            <label for="exampleFormControlSelect1">Clavier</label>
            <select class="form-control" name="Keyboard" required>
                <option selected>Ouvrir le menu</option>
                <?php
                $key = 'Keyboard';
                foreach (getAllProperties($key) as $property) {
                ?><option value="<?= $property->getId() ?>"><?= $property->getModel(); ?></option>
                <?php } ?>
            </select>
            <span class="error"><?php echo $keyboardErr; ?></span>
        </div>


        <div class="form-group">
            <label for="exampleFormControlSelect1">Souris</label>
            <select class="form-control" name="Mouse"required>
                <option selected>Ouvrir le menu</option>
                <?php
                $key = 'Mouse';
                foreach (getAllProperties($key) as $property) {
                ?><option value="<?= $property->getId() ?>"><?= $property->getModel(); ?></option>
                <?php } ?>
            </select>
            <span class="error"><?php echo $mouseErr; ?></span>
        </div>


        <label for="exampleFormControlSelect1">Disque Dur</label>
        <?php
        $key = 'StorageSystem';
        foreach (getAllProperties($key) as $property) { ?>
            <div class="form-check">
                <input class="form-check-input" name="StorageSystem" type="checkbox" value="<?= $property->getId() ?>">
                <label class="form-check-label" for="flexCheckDefault">
                    <?= $property->getModel(); ?>
                </label>
                <span class="error"> <?php echo $storageSystemErr; ?></span>
            </div>
        <?php } ?>


        <div class="form-group mt-3">
            <label for="exampleFormControlSelect1">Alimentation</label>
            <select class="form-control" name="PowerSupply" required>
                <option selected>Ouvrir le menu</option>
                <?php
                $key = 'PowerSupply';
                foreach (getAllProperties($key) as $property) {
                ?><option value="<?= $property->getId() ?>"><?= $property->getModel(); ?></option>
                <?php } ?>
            </select>
            <span class="error"> <?php echo $powerSupplyErr; ?></span>
        </div>

<div class="d-flex mt-5">
    <button type="submit" class="btn btn-primary mx-auto">Submit</button>
</div>

</form>
</div>