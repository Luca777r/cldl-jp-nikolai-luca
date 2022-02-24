<?php

function displayComputers()
{
    ?>
    <table class="table table-striped table-hover">
        <thead class="table-dark text-center"">
        <tr>
            <th scope="col" >#</th>
            <th scope="col">Nom</th>
            <th scope="col">Quantité</th>
            <th scope="col">Si portable</th>
            <th scope="col">Date</th>
            <th scope="col">Supprimer</th>
            <th scope="col">Editer</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach (getAllComputers() as $computer) { ?>
            <tr>
                <th scope="row"><?= $computer->getId() ?></th>
                <td><?= $computer->getName() ?></td>
                <td><?= $computer->getQuantity() ?></td>
                <td><?= $computer->getIsLaptop() ?></td>
                <td><?= $computer->getDateAdd()->format("Y-m-d") ?></td>
                <td><a href="?page=designer&del=<?= $computer->getId() ?>">
                        <button class="btn btn-danger">Supprimer</button>
                    </a></td>
                <td><a href="?page=update&id=<?= $computer->getId() ?>">
                        <button class="btn btn-success">Editer</button>
                    </a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

    <?php
    if (isset($_GET['del'])) {
        deleteComputer($_GET['del']);
    }
}