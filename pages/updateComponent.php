<?php

$type = getCategorie($_GET['id']);
$component = readComponent($_GET['id']);
$id = $_GET['id'];

if (!empty($_POST)) {
    $model = $_POST['model'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $dateAdd = $_POST['dateAdd'];
    $isPeripheral = !empty($_POST['isPeripheral']) ? 1 : 0;

    $connection = getDataBaseConnexion();
    $sql = "UPDATE Component SET categorie = '$type', model = '$model', brand = '$brand', price = $price, quantity = $quantity, dateAdd = '$dateAdd', isPeripheral = $isPeripheral WHERE id = '$id' ";
    $connection->exec($sql);
}
?>

<div class="row d-flex flex-column bg-light p-4">
    <div class="col">
        <h2>Update un <?= $type ?></h2>
    </div>

    <?php
    if (isset($_GET['submit'])) {
        echo "<div class='alert alert-success'>Component est mis à jour</div>";
    }
    ?>
    <div class="col">
        <form method="post" action>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="model">Model</label>
                    <input name="model" type="text" class="form-control" id="model"
                           value="<?= $component->getModel() ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="brand">Marque</label>
                    <input name="brand" type="text" class="form-control" id="brand"
                           value="<?= $component->getBrand() ?>" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="price">Prix, €</label>
                    <input name="price" type="number" step="0.01" class="form-control" id="price"
                           value="<?= $component->getPrice() ?>" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="quantity">Quantité de pièces ajouter</label>
                    <input name="quantity" type="number" class="form-control" id="quantity"
                           value="<?= $component->getQuantity() ?>" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="dateAdd">Date d'ajout</label>
                    <input name="dateAdd" type="date" class="form-control" id="dateAdd"
                           value="<?= $component->getDateAdd()->format('Y-m-d') ?>" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="isPeripheral" class="form-check-input" type="checkbox" id="isPeripheral"
                        <?php if ($component->getIsPeripheral()) {
                            echo "checked";
                        } ?>>
                    <label class="form-check-label" for="isPeripheral">
                        Cochez si périphérique
                    </label>
                </div>
            </div>

            <?php
            switch ($type) {
                case 'GraphicCard':
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="chipset">Chipset</label>
                            <input name="chipset" type="text" class="form-control" id="chipset"
                                   value="<?= $component->getChipset() ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="memory">Mémoire, Go</label>
                            <input name="memory" type="number" class="form-control" id="memory"
                                   value="<?= $component->getMemory() ?>" required>
                        </div>
                    </div>
                    <?php
                    if (isset($id) && !empty($_POST)) {
                        $chipset = $_POST['chipset'];
                        $memory = $_POST['memory'];
                        $connection = getDataBaseConnexion();
                        $sql = "UPDATE GraphicCard SET chipset = '$chipset', memory = $memory WHERE id = $id";
                        $connection->exec($sql);
                        header('location: ?page=updateComponent&submit=1&id='.$id);
                    }
                    break;

                case 'Keyboard':
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="keypadType">Type clavier</label>
                            <input name="keypadType" type="text" class="form-control" id="keypadType"
                                   value="<?= $component->getKeypadType() ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check col-md-4">
                            <input name="isWired" class="form-check-input" type="checkbox" id="isWired"
                                <?php if ($component->getIsWired()) {
                                    echo "checked";
                                } ?>>
                            <label class="form-check-label" for="isWired">
                                Sans file
                            </label>
                        </div>
                        <div class="form-check col-md-4">
                            <input name="hasNumKeypad" class="form-check-input" type="checkbox" id="hasNumKeypad"
                                <?php if ($component->getHasNumKeypad()) {
                                    echo "checked";
                                } ?>>
                            <label class="form-check-label" for="hasNumKeypad">
                                Avec NumPad
                            </label>
                        </div>
                    </div>
                    <?php
                    if (isset($id) && !empty($_POST)) {
                        $keypadType = $_POST['keypadType'];
                        $hasNumKeypad = !empty($_POST['hasNumKeypad']) ? 1 : 0;
                        $isWired = !empty($_POST['isWired']) ? 1 : 0;
                        $connection = getDataBaseConnexion();
                        $sql = "UPDATE Keyboard SET keypadType = '$keypadType', hasNumKeypad = '$hasNumKeypad', isWired = '$isWired' WHERE id = $id";
                        $connection->exec($sql);
                        header('location: ?page=updateComponent&submit=1&id='.$id);
                    }
                    break;

                case 'Monitor':
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="diagonalSize">Taille diagonale</label>
                            <input name="diagonalSize" type="number" step="0.1" class="form-control"
                                   id="diagonalSize" value="<?= $component->getDiagonalSize() ?>" required>
                        </div>
                    </div>
                    <?php
                    if (isset($id) && !empty($_POST)) {
                        $diagonalSize = $_POST['diagonalSize'];
                        $connection = getDataBaseConnexion();
                        $sql = "UPDATE Monitor SET diagonalSize = '$diagonalSize' WHERE id = $id";
                        $connection->exec($sql);
                        header('location: ?page=updateComponent&submit=1&id='.$id);
                    }
                    break;

                case 'Motherboard':
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="socket">Socket</label>
                            <input name="socket" type="text" class="form-control" id="socket"
                                   value="<?= $component->getSocket() ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="format">Format</label>
                            <input name="format" type="text" class="form-control" id="format"
                                   value="<?= $component->getFormat() ?>" required>
                        </div>
                    </div>
                    <?php
                    if (isset($id) && !empty($_POST)) {
                        $socket = $_POST['socket'];
                        $format = $_POST['format'];
                        $connection = getDataBaseConnexion();
                        $sql = "UPDATE Motherboard SET socket = '$socket', format = '$format' WHERE id = $id";
                        $connection->exec($sql);
                        header('location: ?page=updateComponent&submit=1&id='.$id);
                    }
                    break;

                case 'Mouse':
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="numKey">Nombre de boutons</label>
                            <input name="numKey" type="number" class="form-control" id="numKey"
                                   value="<?= $component->getNumKey() ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check col-md-4">
                            <input name="isWired" class="form-check-input" type="checkbox" id="isWired"
                                <?php if ($component->getIsWired()) {
                                    echo "checked";
                                } ?>>
                            <label class="form-check-label" for="isWired">
                                Sans file
                            </label>
                        </div>
                        <div class="form-check col-md-4">
                            <input name="isPad" class="form-check-input" type="checkbox" id="isPad"
                                <?php if ($component->getIsPad()) {
                                    echo "checked";
                                } ?>>
                            <label class="form-check-label" for="isPad">
                                C'est pad
                            </label>
                        </div>
                    </div>
                    <?php
                    if (isset($id) && !empty($_POST)) {
                        $numKey = $_POST['numKey'];
                        $isPad = !empty($_POST['isPad']) ? 1 : 0;
                        $isWired = !empty($_POST['isWired']) ? 1 : 0;
                        $connection = getDataBaseConnexion();
                        $sql = "UPDATE Mouse SET numKey = '$numKey', isPad = '$isPad', isWired = '$isWired' WHERE id = $id";
                        $connection->exec($sql);
                        header('location: ?page=updateComponent&submit=1&id='.$id);
                    }
                    break;

                case 'PowerSupply':
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="powerSupply">Alimentation, W</label>
                            <input name="powerSupply" type="number" step="0.1" class="form-control" id="powerSupply"
                                   value="<?= $component->getPowerSupply() ?>" required>
                        </div>
                    </div>
                    <?php
                    if (isset($id) && !empty($_POST)) {
                        $powerSupply = $_POST['powerSupply'];
                        $connection = getDataBaseConnexion();
                        $sql = "UPDATE PowerSupply SET powerSupply = '$powerSupply' WHERE id = $id";
                        $connection->exec($sql);
                        header('location: ?page=updateComponent&submit=1&id='.$id);
                    }
                    break;

                case 'Processor':
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="frequences">Fréquences</label>
                            <input name="frequences" type="number" step="0.01" class="form-control" id="frequences"
                                   value="<?= $component->getFrequences() ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nbCore">Nombre de pouces</label>
                            <input name="nbCore" type="number" class="form-control" id="nbCore"
                                   value="<?= $component->getNbCore() ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="chipset">Chipset</label>
                            <input name="chipset" type="text" class="form-control" id="chipset"
                                   value="<?= $component->getChipset() ?>" required>
                        </div>
                    </div>
                    <?php
                    if (isset($id) && !empty($_POST)) {
                        $frequences = $_POST['frequences'];
                        $nbCore = $_POST['nbCore'];
                        $chipset = $_POST['chipset'];
                        $connection = getDataBaseConnexion();
                        $sql = "UPDATE Processor SET frequences = '$frequences', nbCore = '$nbCore', chipset = '$chipset' WHERE id = $id";
                        $connection->exec($sql);
                        header('location: ?page=updateComponent&submit=1&id='.$id);
                    }
                    break;

                case 'Ram':
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="typeFrequences">Fréquences</label>
                            <input name="typeFrequences" type="text" class="form-control" id="typeFrequences"
                                   value="<?= $component->getTypeFrequences() ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="memory">Mémoire, Go</label>
                            <input name="memory" type="number" step="0.01" class="form-control" id="memory"
                                   value="<?= $component->getMemory() ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nbStrip">Nombre de barrettes</label>
                            <input name="nbStrip" type="number" class="form-control" id="nbStrip"
                                   value="<?= $component->getNbStrip() ?>" required>
                        </div>
                    </div>
                    <?php
                    if (isset($id) && !empty($_POST)) {
                        $memory = $_POST['memory'];
                        $nbStrip = $_POST['nbStrip'];
                        $typeFrequences = $_POST['typeFrequences'];
                        $connection = getDataBaseConnexion();
                        $sql = "UPDATE Ram SET memory = '$memory', nbStrip = '$nbStrip', typeFrequences = '$typeFrequences' WHERE id = $id";
                        $connection->exec($sql);
                        header('location: ?page=updateComponent&submit=1&id='.$id);
                    }
                    break;

                case 'StorageSystem':
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="memory">Mémoire, Go</label>
                            <input name="memory" type="number" class="form-control" id="memory"
                                   value="<?= $component->getMemory() ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check col-md-4">
                            <input name="isSsd" class="form-check-input" type="checkbox" id="isSsd"
                                <?php if ($component->getIsSsd()) {
                                    echo "checked";
                                } ?>>
                            <label class="form-check-label" for="isSsd">
                                SSD
                            </label>
                        </div>
                    </div>
                    <?php
                    if (isset($id) && !empty($_POST)) {
                        $memory = $_POST['memory'];
                        $isSsd = !empty($_POST['isSsd']) ? 1 : 0;
                        $connection = getDataBaseConnexion();
                        $sql = "UPDATE StorageSystem SET memory = '$memory', isSsd = '$isSsd' WHERE id = $id";
                        $connection->exec($sql);
                        header('location: ?page=updateComponent&submit=1&id='.$id);
                    }
                    break;
            }
            ?>
            <input type="hidden" name="type" value="<?= $type ?>">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>




