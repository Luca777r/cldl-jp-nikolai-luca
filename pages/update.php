<?php 

$computer = readComputer($_GET['id']);

if (!empty($_POST)) {
    updateComputer($_GET['id'], $_POST['name'], $_POST['quantity'], $_POST['islaptop'], $_POST['date']);
}


?>

<form action="" method='POST'>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="<?= $computer->getName() ?>">
    </div>
    <div class="mb-3">
        <label for="quantity"  class="form-label">Quantity</label>
        <input type="text" class="form-control" name="quantity" value="<?= $computer->getQuantity() ?>">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio"  name="islaptop" value="1" <?php if ($computer->getIsLaptop() == 1) echo "checked" ?>>
        <label class="form-check-label" for="flexRadioDefault1">
            Laptop
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="islaptop" value="0" <?php if ($computer->getIsLaptop() == 0) echo "checked" ?>>
        <label class="form-check-label" for="flexRadioDefault2">
            Tour
        </label>
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="text" class="form-control" name="date" value="<?= $computer->getDateAdd()->format("Y-m-d") ?>">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

