

<!-- Modal Card Add / Modify Products -->
<!-- A relier avec JS :  https://getbootstrap.com/docs/5.3/components/modal/   ------------------------------------------------------------------------------------->

<div class="modal fade" id="addModifyModal" tabindex="-1" aria-labelledby="addModifyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="addModifyModalLabel">Créer produit PHP</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingTitle">
          <label for="floatingTitle">Titre</label>
        </div>
        <div class="input-group mb-3">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingPrice">
            <label for="floatingPrice">Prix</label>
          </div>
          <span class="input-group-text">€</span>
        </div>

        <label for="ingredientsDataList" class="form-label">Ingrédients</label>
          <input class="form-control" list="datalistOptions" id="ingredientsDataList" placeholder="Tapez pour chercher..">
          <datalist id="datalistOptions">
            <option value="Mozarella fior di latte">
            <option value="Sauce tomate">
            <option value="Mozarella">
            <option value="Pepperoni">
            <option value="Oeuf">
          </datalist>

          <div class="form-check">
            <input class="form-check-input custom-control-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Checked checkbox
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>

        <div class="mb-3">
          <label for="selectFile" class="form-label"></label>
          <input type="file" class="form-control" id="selectFile">
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn px-5 py-2 bt-classic">AJOUTER</button>
      </div>
    </div>
  </div>
</div>
