
<!-- Modal Update Product Availability and Price  -->

<div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="drink-name">
          <!-- Drink name -->
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <form action="<?= $router->url('admin_action_update') ?>" method="post">
            <div class="row d-flex align-items-center gx-5 mb-4">
                <div class="col-6 mx-2">
                    <div class="input-group">
                        <span class="input-group-text">Prix</span>
                        <input class="form-control" type="text" id="drink-price" name="price" required>
                        <span class="input-group-text">€</span>
                    </div>
                    <small id="drink-price-invalid" class="invalid-feedback d-none text-center">
                      Entrer un prix au format "0.00"
                    </small>

                </div>
                <div class="col-3 mx-2">
                    <div class="form-check"> 
                        <input class="form-check-input" type="checkbox" id="drink-availability" name="availability">
                        <label class="form-check-label" for="drink-availability">Disponible</label>
                    </div>
                </div>
            </div>
            <input type="hidden" id="drink-id" name="id">
            <div class="d-flex justify-content-center">
              <button type="button" class="btn  text-center bt-yes" id="drink-submit">METTRE À JOUR</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
