

<!-- Modal Create product -->

<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3">Créer une boisson</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="<?= $router->url('admin_action_create') ?>" method="post">
        <div class="modal-body p-4">
          <div class="input-group">
            <span class="input-group-text">Nom</span>
            <input class="form-control" type="text" id="drink-name" name="name" required>
          </div>
          <small class="d-none invalid-feedback text-center" id="drink-name-invalid">
            Entrer un nom au format "Boisson 00cl"
          </small>


          <div class="row mt-4">
            <div class="col-7">
              <div class="input-group">
                <span class="input-group-text">Prix</span>
                <input class="form-control" type="text" id="drink-price" name="price" required>
                <span class="input-group-text">€</span>
              </div>
              <small class="d-none invalid-feedback text-center" id="drink-price-invalid">
                Entrer un prix au format "0.00"
              </small>
            </div>

            <div class="col-3 ms-4 mt-2">
              <div class="form-check"> 
                <input class="form-check-input" type="checkbox" id="drink-availability" name="availability" checked>
                <label class="form-check-label" for="drink-availability">Disponible</label>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-center mt-4">
            <button type="button" class="btn px-5 py-2 bt-classic" id="drink-submit">VALIDER</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
