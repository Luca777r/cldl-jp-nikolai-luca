<?php

include_once 'includes/functions/sortout.php';

if (isset($_GET['field'])) {
    $components = orderByComponent($_GET['field'], 'Component', ($_GET['direction']));
} else {
    $components = getAllComponents();
}
?>

<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th scope="col" class="align-middle">Id</th>
            <th scope="col" class="align-middle">
                <div>Categorie</div>
                <div>
                    <a href="?page=listComponents&field=categorie&direction=asc">
                        <i class="bi bi-caret-down"></i>
                    </a>
                    <a href="?page=listComponents&field=categorie&direction=desc">
                        <i class="bi bi-caret-up"></i>
                    </a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <div>Model</div>
                <div>
                    <a href="?page=listComponents&field=model&direction=asc">
                        <i class="bi bi-caret-down"></i>
                    </a>
                    <a href="?page=listComponents&field=model&direction=desc">
                        <i class="bi bi-caret-up"></i>
                    </a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <div>Marque</div>
                <div>
                    <a href="?page=listComponents&field=brand&direction=asc">
                        <i class="bi bi-caret-down"></i>
                    </a>
                    <a href="?page=listComponents&field=brand&direction=desc">
                        <i class="bi bi-caret-up"></i>
                    </a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <div>Prix</div>
                <div class="d-flex">
                    <a href="?page=listComponents&field=price&direction=asc">
                        <i class="bi bi-caret-down"></i>
                    </a>
                    <a href="?page=listComponents&field=price&direction=desc">
                        <i class="bi bi-caret-up"></i>
                    </a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <div>Quantité</div>
                <div>
                    <a href="?page=listComponents&field=quantity&direction=asc">
                        <i class="bi bi-caret-down"></i>
                    </a>
                    <a href="?page=listComponents&field=quantity&direction=desc">
                        <i class="bi bi-caret-up"></i>
                    </a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <div>Nombre de modèles avec cette pieces</div>
                <div>
                    <a href="?page=listComponents&field=numberCreated&direction=asc">
                        <i class="bi bi-caret-down"></i>
                    </a>
                    <a href="?page=listComponents&field=numberCreated&direction=desc">
                        <i class="bi bi-caret-up"></i>
                    </a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <span>Date d'ajout</span>
                <span>
                    <a href="?page=listComponents&field=dateAdd&direction=asc">
                        <i class="bi bi-caret-down"></i>
                    </a>
                    <a href="?page=listComponents&field=dateAdd&direction=desc">
                        <i class="bi bi-caret-up"></i>
                    </a>
                </span>
            </th>
            <th scope="col" class="align-middle">
                <div>Supprimer</div>
                <div>
                    <a href="?page=listComponents&field=isUsed&direction=desc">
                        <i class="bi bi-caret-down"></i>
                    </a>
                    <a href="?page=listComponents&field=isUsed&direction=asc">
                        <i class="bi bi-caret-up"></i>
                    </a>
                </div>
            </th>
            <th scope="col" class="align-middle">Editer</th>
            <th scope="col" class="align-middle">Mouvement de Stock</th>
        </tr>
    </thead>
    <tbody>
        <?php
        /** @var Component $component */
        foreach ($components as $component) {
            checkComponentIsUsed($component->getId());
        ?>
            <tr <?php if ($component->getIsArchived()) {
                    echo 'class="table-danger offset-1"';
                } ?>>
                <th scope="row"><?= $component->getId() ?></th>
                <td><?= $component->getCategorie() ?></td>
                <td><?= $component->getModel() ?></td>
                <td><?= $component->getBrand() ?></td>
                <td><?= $component->getPrice() ?></td>
                <td><?= $component->getQuantity() ?></td>
                <td><?= $component->getNumberCreated() ?></td>
                <td><?= $component->getDateAdd()->format("Y-m-d") ?></td>
                <td>
                    <?php
                    if ($component->getIsUsed() == true) {
                        if ($component->getIsArchived() == true) {
                    ?>
                            <a href="?page=listComponents&archive=<?= $component->getId() ?>">
                                <button class="btn btn-primary">Desarchiver</button>
                            </a>
                        <?php
                        } else {
                        ?>
                            <a href="?page=listComponents&archive=<?= $component->getId() ?>">
                                <button class="btn btn-primary">Archiver</button>
                            </a>
                        <?php
                        }
                    } else {
                        ?>
                        <a href="?page=listComponents&del=<?= $component->getId() ?>">
                            <button class="btn btn-danger">Supprimer</button>
                        </a>
                    <?php
                    }
                    ?>
                </td>
                <td>
                    <a <?php if (!$component->getIsArchived()) { ?> href="?page=updateComponent&id=<?= $component->getId() ?>" <?php } ?>>
                        <button class="btn btn-success <?php if ($component->getIsArchived()) {
                                                            echo 'disabled';
                                                        } ?>">
                            Editer
                        </button>
                    </a>
                </td>
                <td>
                    <!-- Button trigger modal -->
                    <a href="?page=listComponent&id=<?= $component->getId() ?>"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></a>
                    +
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Mouvement de stock</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="?page=stockValidation&id=<?= $component->getId() ?>" method="POST">
                                        <div class="mb-3">
                                            <label for="number" class="form-label">Nombre à ajouter</label>
                                            <input type="number" name="number" value="<?= $component->getId() ?>" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
if (isset($_GET['del'])) {
    deleteComponent($_GET['del']);
}

if (isset($_GET['archive'])) {
    archiveComponent($_GET['archive']);
}
