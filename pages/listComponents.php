<table class="table table-striped table-hover">
    <thead class="table-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Categorie</th>
        <th scope="col">Model</th>
        <th scope="col">Marque</th>
        <th scope="col">Prix</th>
        <th scope="col">Quantité</th>
        <th scope="col">Nombre de modèles avec cette pieces</th>
        <th scope="col">Date d'ajout</th>
        <th scope="col">Supprimer</th>
        <th scope="col">Editer</th>
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
                <a href="?page=update&id=<?= $component->getId() ?>">
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
