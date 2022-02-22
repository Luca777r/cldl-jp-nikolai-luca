<?php
?>
<form method="POST">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="oui" value="oui" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Oui
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="non" value="non" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
            Non
        </label>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Quantité</label>
        <input type="text" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Date d'ajout</label>
        <input type="text" name="dateadd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>


    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>