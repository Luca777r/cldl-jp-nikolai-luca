<?php

include_once 'includes/functions/sortout.php';

if (isset($_GET['field'])) {
    $components = orderByComponent($_GET['field'], 'Component', ($_GET['direction']));
} else {
    $components = getAllComponents();
} ?>

    <table class="table table-striped">
        <thead class="table-dark">
        <tr>
            <th scope="col" class="align-middle">Id</th>
            <th scope="col" class="align-middle">
                <div>Categorie</div>
                <div>
                    <a href="?page=listComponents&field=categorie&direction=asc">
                        <button class="btn-success"><i class="bi bi-caret-up"></button>
                        </i></a>
                    <a href="?page=listComponents&field=categorie&direction=desc">
                        <button class="btn-warning"><i class="bi bi-caret-down"></button>
                        </i></a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <div>Model</div>
                <div>
                    <a href="?page=listComponents&field=model&direction=asc">
                        <button class="btn-success"><i class="bi bi-caret-up"></button>
                        </i></a>
                    <a href="?page=listComponents&field=model&direction=desc">
                        <button class="btn-warning"><i class="bi bi-caret-down"></button>
                        </i></a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <div>Marque</div>
                <div>
                    <a href="?page=listComponents&field=brand&direction=asc">
                        <button class="btn-success"><i class="bi bi-caret-up"></button>
                        </i></a>
                    <a href="?page=listComponents&field=brand&direction=desc">
                        <button class="btn-warning"><i class="bi bi-caret-down"></button>
                        </i></a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <div>Prix</div>
                <div>
                    <a href="?page=listComponents&field=price&direction=asc">
                        <button class="btn-success"><i class="bi bi-caret-up"></button>
                        </i></a>
                    <a href="?page=listComponents&field=price&direction=desc">
                        <button class="btn-warning"><i class="bi bi-caret-down"></button>
                        </i></a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <div>Quantité</div>
                <div>
                    <a href="?page=listComponents&field=quantity&direction=asc">
                        <button class="btn-success"><i class="bi bi-caret-up"></button>
                        </i></a>
                    <a href="?page=listComponents&field=quantity&direction=desc">
                        <button class="btn-warning"><i class="bi bi-caret-down"></button>
                        </i></a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <div>Nombre de modèles avec cette pieces</div>
                <div>
                    <a href="?page=listComponents&field=numbercreated&direction=asc">
                        <button class="btn-success"><i class="bi bi-caret-up"></button>
                        </i></a>
                    <a href="?page=listComponents&field=numbercreated&direction=desc">
                        <button class="btn-warning"><i class="bi bi-caret-down"></button>
                        </i></a>
                </div>
            </th>
            <th scope="col" class="align-middle">
                <div>Date d'ajout</div>
                <div>
                    <a href="?page=listComponents&field=dateadd&direction=asc">
                        <button class="btn-success"><i class="bi bi-caret-up"></button>
                        </i></a>
                    <a href="?page=listComponents&field=dateadd&direction=desc">
                        <button class="btn-warning"><i class="bi bi-caret-down"></button>
                        </i></a>
                </div>
            </th>
            <th scope="col" class="align-middle">Supprimer</th>
            <th scope="col" class="align-middle">Editer</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($components as $component) { ?>
            <tr>
                <th scope="row"><?= $component->getId() ?></th>
                <td><?= $component->getCategorie() ?></td>
                <td><?= $component->getModel() ?></td>
                <td><?= $component->getBrand() ?></td>
                <td><?= $component->getPrice() ?></td>
                <td><?= $component->getQuantity() ?></td>
                <td><?= $component->getNumberCreated() ?></td>
                <td><?= $component->getDateAdd()->format("Y-m-d") ?></td>
                <td>
                    <a href="?page=listComponents&del=<?= $component->getId() ?>">
                        <button class="btn btn-danger">Supprimer</button>
                    </a>
                </td>
                <td>
                    <a href="?page=updateComponent&id=<?= $component->getId() ?>">
                        <button class="btn btn-success">Editer</button>
                    </a>
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
