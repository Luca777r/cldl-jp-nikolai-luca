<?php

function displayComputers()
{
    ?>
    <table class="table table-striped">
        <thead class="table-dark text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">
                <div>Nom</div>
                <div>
                    <a href=""><button class="btn-success"><i class="bi bi-caret-up"></button></i></a>
                    <button class="btn-warning"><i class="bi bi-caret-down"></button></i>
            </div>
            </th>
            <th scope="col"><div>Quantité</div>
                <div>
                    <button class="btn-success"><i class="bi bi-caret-up"></button></i>
                    <button class="btn-warning"><i class="bi bi-caret-down"></button></i>
            </div>
        </th>
            <th scope="col"><div>Si portable</div>
                <div>
                    <button class="btn-success"><i class="bi bi-caret-up"></button></i>
                    <button class="btn-warning"><i class="bi bi-caret-down"></button></i>
            </div>
        </th>
            <th scope="col"><div>Date</div>
                <div>
                    <button class="btn-success"><i class="bi bi-caret-up"></button></i>
                    <button class="btn-warning"><i class="bi bi-caret-down"></button></i>
            </div>
        </th>
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
                <td><a href="?page=form&id=<?= $computer->getId() ?>">
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