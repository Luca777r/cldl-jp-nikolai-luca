<table class="table table-striped table-hover">
    <thead class="table-dark">
    <tr>
        <th scope="col" class="align-middle">#</th>
        <th scope="col" class="align-middle">Categorie</th>
        <th scope="col" class="align-middle">Model</th>
        <th scope="col" class="align-middle">Marque</th>
        <th scope="col" class="align-middle">Prix</th>
        <th scope="col" class="align-middle">Quantité</th>
        <th scope="col" class="align-middle">Nombre de modèles avec cette pieces</th>
        <th scope="col" class="align-middle">Date d'ajout</th>
        <th scope="col" class="align-middle">Supprimer</th>
        <th scope="col" class="align-middle">Editer</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach (getAllComponents() as $component) { ?>
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
