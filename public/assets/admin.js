
const deleteModal = document.getElementById("deleteModal")

function loadModal(modalType){
  if (modalType) {
    modalType.addEventListener('show.bs.modal', event => {
      const button = event.relatedTarget

      switch (modalType) {

        case deleteModal:
          const deleteModalContainer = {
            "id" : button.getAttribute('data-drink-id'),
            "name" : button.getAttribute('data-drink-name')
          } 
          const deleteModalArea = {
            "id" : modalType.querySelector("#drink-id"),
            "name" : modalType.querySelector("#deleteModalTitle")
          }
          deleteModalArea['name'].textContent = deleteModalContainer['name']
          deleteModalArea['id'].value = deleteModalContainer['id']

          break
      } 
    })
  }
}

loadModal(deleteModal)
