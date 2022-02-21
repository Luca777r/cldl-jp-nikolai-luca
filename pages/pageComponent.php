<div class="row d-flex flex-column bg-light p-4">
    <div class="col">
        <h2>Ajouter un component</h2>
    </div>

    <div class="col">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="model">Model</label>
                    <input name="model" type="text" class="form-control" id="model">
                </div>
                <div class="form-group col-md-6">
                    <label for="brand">Marque</label>
                    <input name="brand" type="text" class="form-control" id="brand">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="price">Prix, €</label>
                    <input name="price" type="number" class="form-control" id="price">
                </div>
                <div class="form-group col-md-4">
                    <label for="quantity">Quantité de pièces ajouter</label>
                    <input name="quantity" type="number" class="form-control" id="quantity">
                </div>
                <div class="form-group col-md-4">
                    <label for="dateAdd">Date d'ajout</label>
                    <input name="dateAdd" type="date" class="form-control" id="dateAdd">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="isPeripheral" class="form-check-input" type="checkbox" id="isPeripheral">
                    <label class="form-check-label" for="isPeripheral">
                        Cochez si périphérique
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

</div>
