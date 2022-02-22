<?php
if (isset($_POST['type'])) {
    $type = $_POST['type'];
}
if (isset($_POST['model'])) {
    $sql = "INSERT INTO `Component`(`categorie`, `model`, `brand`, `price`, `quantity`, `dateAdd`, `isPeripheral`) VALUES (':categorie',':model',':brand',':price',':quantity',':dateAdd',':isPeripheral')";
    $pdoStatement = $connection->prepare($sql);
    $_POST['price'] = intval($_POST['price'] * 100);
//    exit(var_dump($_POST));
//    $pdoStatement->bindParam(':categorie', $type);
//    $pdoStatement->bindParam(':model', $_POST['model']);
//    $pdoStatement->bindParam(':brand', $_POST['brand']);
//    $pdoStatement->bindParam(':price', $_POST['price']);
//    $pdoStatement->bindParam(':quantity', $_POST['quantity'], PDO::PARAM_INT);
//    $pdoStatement->bindParam(':numberCreated', $_POST['numberCreated'], PDO::PARAM_INT);
//    $pdoStatement->bindParam(':dateAdd', $_POST['dateAdd']);
//    $pdoStatement->bindParam(':isPeripheral', $_POST['isPeripheral'], PDO::PARAM_INT);
    $count = $pdoStatement->execute([
        ':categorie' => $type,
        ':model' => $_POST['model'],
        ':brand' => $_POST['brand'],
        ':price' => $_POST['price'],
        ':quantity' => $_POST['quantity'],
        ':numberCreated' => $_POST['numberCreated'],
        ':dateAdd' => $_POST['dateAdd'],
        ':isPeripheral' => $_POST['isPeripheral'],
    ]);
    $id = $connection->lastInsertId();

}
?>

    <div class="row d-flex flex-column bg-light p-4">
        <div class="col">
            <h2>Ajouter un <?= $type ?></h2>
        </div>

        <div class="col">
            <form method="post" action>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="model">Model</label>
                        <input name="model" type="text" class="form-control" id="model" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="brand">Marque</label>
                        <input name="brand" type="text" class="form-control" id="brand" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="price">Prix, €</label>
                        <input name="price" type="number" step="0.01" class="form-control" id="price" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="quantity">Quantité de pièces ajouter</label>
                        <input name="quantity" type="number" class="form-control" id="quantity" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dateAdd">Date d'ajout</label>
                        <input name="dateAdd" type="date" class="form-control" id="dateAdd" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input name="isPeripheral" class="form-check-input" type="checkbox" id="isPeripheral">
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
                                <input name="chipset" type="text" class="form-control" id="chipset" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="memory">Mémoire, Go</label>
                                <input name="memory" type="number" class="form-control" id="memory" required>
                            </div>
                        </div>
                        <?php
                        if (isset($id)) {
                            $subStatement = $connection->prepare('INSERT INTO GraphicCard VALUES (:id, :chipset, :memory)');
                            $subStatement->execute([
                                ':id' => $id,
                                ':chipset' => $_POST['chipset'],
                                ':memory' => $_POST['memory']
                            ]);
                        }
                        break;
                    case 'Keyboard':
                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="keypadType">Type clavier</label>
                                <input name="keypadType" type="text" class="form-control" id="keypadType" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check col-md-4">
                                <input name="isWired" class="form-check-input" type="checkbox" id="isWired">
                                <label class="form-check-label" for="isWired">
                                    Sans file
                                </label>
                            </div>
                            <div class="form-check col-md-4">
                                <input name="hasNumKeypad" class="form-check-input" type="checkbox" id="hasNumKeypad">
                                <label class="form-check-label" for="hasNumKeypad">
                                    Avec NumPad
                                </label>
                            </div>
                        </div>
                        <?php
                        break;
                    case 'Monitor':
                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="diagonalSize">Taille diagonale</label>
                                <input name="diagonalSize" type="number" step="0.1" class="form-control"
                                       id="diagonalSize" required>
                            </div>
                        </div>
                        <?php
                        break;
                    case 'Motherboard':
                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="socket">Socket</label>
                                <input name="socket" type="text" class="form-control" id="socket" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="format">Format</label>
                                <input name="format" type="text" class="form-control" id="format" required>
                            </div>
                        </div>
                        <?php
                        break;
                    case 'Mouse':
                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="numKey">Nombre de boutons</label>
                                <input name="numKey" type="number" class="form-control" id="numKey" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check col-md-4">
                                <input name="isWired" class="form-check-input" type="checkbox" id="isWired">
                                <label class="form-check-label" for="isWired">
                                    Sans file
                                </label>
                            </div>
                            <div class="form-check col-md-4">
                                <input name="isPad" class="form-check-input" type="checkbox" id="isPad">
                                <label class="form-check-label" for="isPad">
                                    C'est pad
                                </label>
                            </div>
                        </div>
                        <?php
                        break;
                    case 'PowerSupply':
                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="powerSupply">Alimentation, W</label>
                                <input name="powerSupply" type="number" step="0.1" class="form-control" id="powerSupply"
                                       required>
                            </div>
                        </div>
                        <?php
                        break;
                    case 'Processor':
                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="frequences">Fréquences</label>
                                <input name="frequences" type="number" step="0.01" class="form-control" id="frequences"
                                       required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nbCore">Nombre de pouces</label>
                                <input name="nbCore" type="number" class="form-control" id="nbCore" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="chipset">Chipset</label>
                                <input name="chipset" type="text" class="form-control" id="chipset" required>
                            </div>
                        </div>
                        <?php
                        break;
                    case 'Ram':
                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="typeFrequences">Fréquences</label>
                                <input name="typeFrequences" type="text" class="form-control" id="typeFrequences"
                                       required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="memory">Mémoire, Go</label>
                                <input name="memory" type="number" step="0.01" class="form-control" id="memory"
                                       required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nbStrip">Nombre de barrettes</label>
                                <input name="nbStrip" type="number" class="form-control" id="nbStrip" required>
                            </div>
                        </div>
                        <?php
                        break;
                    case 'StorageSystem':
                        ?>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="memory">Mémoire, Go</label>
                                <input name="memory" type="number" class="form-control" id="memory" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check col-md-4">
                                <input name="isSsd" class="form-check-input" type="checkbox" id="isSsd">
                                <label class="form-check-label" for="isSsd">
                                    SSD
                                </label>
                            </div>
                        </div>
                        <?php
                        break;
                }
                ?>
                <input type="hidden" name="type" value="<?= $type ?>">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>

<?php




