
<!-- Modal Order confirmation -->

<div class="modal fade" id="confirmOrderModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-body modal-content p-5">
      <div class="text-center">
        <h1 class="modal-title mb-4" id="confirmOrderModalTitle">
            Merci !
        </h1>
      </div>
      <div class="text-center mb-4">
        <p class="fs-5">Votre commande n° JB2851 <br>a bien été validée !</p>
        <p>Vous pouvez venir la récupérer à</p>
        <h2 class="fs-1">20:00</h2>
      </div>
      <div class="text-center">
          <a role="button" class="btn bt-classic" href=" <?= $router->url('account') ?>">VOIR MA COMMANDE</a>
      </div>
    </div>
  </div>
</div>
