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
            <div class="d-flex justify-content-center">
                <a href="?page=listComponents&sort=categorie&direction=ASC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg>
                </a>
                <a href="?page=listComponents&sort=categorie&direction=DESC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                        <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                    </svg>
                </a>
            </div>

        </th>
        <th scope="col" class="align-middle">
            <span>
                Model
            </span>
            <a href="?page=listComponents&sort=model&direction=ASC">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                    <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                </svg>
            </a>
            <a href="?page=listComponents&sort=model&direction=DESC">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                    <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                </svg>
            </a>
        </th>
        <th scope="col">
            <div>
                Marque
            </div>
            <div class="d-flex justify-content-center">
                <a href="?page=listComponents&sort=brand&direction=ASC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg>
                </a>
                <a href="?page=listComponents&sort=brand&direction=DESC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                        <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                    </svg>
                </a>
            </div>
        </th>
        <th scope="col">
            <div>
                Prix
            </div>
            <div class="d-flex justify-content-center">
                <a href="?page=listComponents&sort=price&direction=ASC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg>
                </a>
                <a href="?page=listComponents&sort=price&direction=DESC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                        <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                    </svg>
                </a>
            </div>
        </th>
        <th scope="col">
            <span>
                Quantité
            </span>
            <div class="d-flex justify-content-center">
                <a href="?page=listComponents&sort=price&direction=ASC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                        <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                    </svg>
                </a>
                <a href="?page=listComponents&sort=price&direction=DESC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                        <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                    </svg>
                </a>
            </div>
        </th>
        <th scope="col" class="d-flex align-items-center" >
            <div>
                Nombre de modèles avec cette pieces
            </div>
                <a href="?page=listComponents&sort=numberCreated&direction=DESC">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                    <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                </svg>
            </a>
            <a href="?page=listComponents&sort=numberCreated&direction=ASC">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
                    <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                </svg>
            </a>
        </th>
        <th scope="col" class="align-middle">Date d'ajout</th>
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

