

<!-- Modal Delete drink Confirmation -->

<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-3" id="drink-name">
          <!-- Drink name -->
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="fs-5" id="drink-availability">Voulez-vous vraiment supprimer ce produit ?</p>
      </div>
      <div class="modal-footer">
        <form action="<?= $router->url('admin_action_delete') ?>" method="post">
          <input type="hidden" id="drink-id" name="id">
          <button type="submit" class="btn bt-yes">OUI</button>
        </form>
        <button type="button" class="btn bt-no" data-bs-dismiss="modal">NON</button>
      </div>
    </div>
  </div>
</div>
