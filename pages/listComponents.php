<?php
if (isset($_GET['sort'])) {
    $components = orderBy($_GET['sort'], $_GET['direction']);
} else {
    $components = getAllComponents();
}
?>

<table class="table table-striped">
    <thead class="table-dark">
    <tr>
        <th scope="col" class="align-middle">#</th>
        <th scope="col">
            <div>
                Categorie
            </div>
            <div class="d-flex justify-content-start">
                <a href="?page=listComponents&sort=categorie&direction=ASC">
                    <i class="bi bi-caret-down"></i>
                </a>
                <a href="?page=listComponents&sort=categorie&direction=DESC">
                    <i class="bi bi-caret-up"></i>
                </a>
            </div>

        </th>
        <th scope="col" class="align-center">
            <div>
                Model
            </div>
            <div class="d-flex justify-content-start">
                <a href="?page=listComponents&sort=model&direction=ASC">
                    <i class="bi bi-caret-down"></i>
                </a>
                <a href="?page=listComponents&sort=model&direction=DESC">
                    <i class="bi bi-caret-up"></i>
                </a>
            </div>
        </th>
        <th scope="col">
            <div>
                Marque
            </div>
            <div class="d-flex justify-content-start">
                <a href="?page=listComponents&sort=brand&direction=ASC">
                    <i class="bi bi-caret-down"></i>
                </a>
                <a href="?page=listComponents&sort=brand&direction=DESC">
                    <i class="bi bi-caret-up"></i>
                </a>
            </div>
        </th>
        <th scope="col">
            <div>
                Prix
            </div>
            <div class="d-flex justify-content-start">
                <a href="?page=listComponents&sort=price&direction=ASC">
                    <i class="bi bi-caret-down"></i>
                </a>
                <a href="?page=listComponents&sort=price&direction=DESC">
                    <i class="bi bi-caret-up"></i>
                </a>
            </div>
        </th>
        <th scope="col">
            <div>
                Quantité
            </div>
            <div class="d-flex justify-content-start">
                <a href="?page=listComponents&sort=quantity&direction=ASC">
                    <i class="bi bi-caret-down"></i>
                </a>
                <a href="?page=listComponents&sort=quantity&direction=DESC">
                    <i class="bi bi-caret-up"></i>
                </a>
            </div>
        </th>
        <th scope="col">
            <div>
                Nombre de modèles avec cette pieces
            </div>
            <div class="d-flex justify-content-start">
                <a href="?page=listComponents&sort=numberCreated&direction=ASC">
                    <i class="bi bi-caret-down"></i>
                </a>
                <a href="?page=listComponents&sort=numberCreated&direction=DESC">
                    <i class="bi bi-caret-up"></i>
                </a>
            </div>
        </th>
        <th scope="col">
            <div>
                Date d'ajout
            </div>
            <div class="d-flex justify-content-start">
                <a href="?page=listComponents&sort=dateAdd&direction=ASC">
                    <i class="bi bi-caret-down"></i>
                </a>
                <a href="?page=listComponents&sort=dateAdd&direction=DESC">
                    <i class="bi bi-caret-up"></i>
                </a>
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
?>

