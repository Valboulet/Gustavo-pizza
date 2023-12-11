
<!-- Modal Delete Order confirmation -->

<div class="modal fade" id="deleteOrderModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="deleteOrderModalTitle">
            Attention
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="fs-5">Voulez-vous vraiment supprimer cette commande ?</p>
      </div>
      <div class="modal-footer">
        <form action="">
          <input type="hidden" id="drink-id">
          <button type="button" class="btn btn-primary bt-yes">OUI</button>
        </form>
        <button type="button" class="btn btn-primary bt-no" data-bs-dismiss="modal">NON</button>
      </div>
    </div>
  </div>
</div>
