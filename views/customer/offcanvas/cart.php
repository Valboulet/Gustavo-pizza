<!-- Offcanvas Cart  -->

<div class="offcanvas offcanvas-end order pb-4" tabindex="-1" id="offcanvasCart">
  <div class="offcanvas-header">
    <h2 class="offcanvas-title">Votre Panier</h2>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h4 class="text-center py-2 order-price">Total : <span id="order-price">0.00</span> €</h4>
    <div class="d-flex justify-content-center mb-3">
      <button type="button" class="btn px-4 py-2 me-2 bt-yes" data-bs-dismiss="offcanvas">
        AJOUTER
      </button>
      <button type="button" class="btn px-4 py-2 bt-no" data-bs-toggle="modal" data-bs-target="#deleteOrderModal">
        TOUT SUPPRIMER
      </button>
    </div>

    <ul class="list-group" id="orderlines">
      <!-- Add all orderlines with JS here (with pizza, extra, drink, icons and select) -->
    </ul>
  </div>
  <hr>
  <div class="offcanvas-footer text-center " id="hourSelect">
    <div class="container px-4">
      <h5 class="mb-3">Choisissez une heure</h5>
      <select class="form-select" id="select-hour" aria-label="Default select example" required>
        <option selected>Heure</option>
        <option value="1">18:30</option>
        <option value="2">19:00</option>
        <option value="3">19:30</option>
        <option value="4">20:00</option>
        <option value="5">20:30</option>
        <option value="6">21:00</option>
        <option value="7">21:30</option>s
        <option value="8">22:00</option>
        <option value="9">22:30</option>
      </select>
      <div class="d-none" id="cart-feedback">
        <small class="text-danger">Veuillez sélectionner une heure</small>
      </div>
      <!-- <div class="form-floating my-2">
        <textarea class="form-control" placeholder="Ajouter un message" id="floatingTextarea2" style="height: 100px">
        </textarea>
        <label for="floatingTextarea2">Message</label>
      </div> -->
      <button type="button" class="btn my-3 px-5 py-4 fw-bold bt-other" id="validate-order"
          data-bs-target="#confirmOrderModal">
        VALIDER MA COMMANDE
      </button>
    </div>
  </div>

</div>