
// Update product drink script ------------------------------------------------

const updateModal = document.getElementById("updateModal")
const createModal = document.getElementById("createModal")
const deleteModal = document.getElementById("deleteModal")
const warningModal = document.getElementById("warningModal")


// Add invalid class if regex is not valid

function validateField(field, regex) {
  const valueField = field.value.trim()

  if (!regex.test(valueField)) {
    field.classList.add('is-invalid')
    return false
  } 
  return true
}

// Show error feedback message and hide after 10 seconds

function displayInvalidMessage(fieldValid, message, key, field) {
  if (!fieldValid[key]) {
    message[key].classList.remove('d-none')
    message[key].classList.add('d-block')
    setTimeout(() => {
      message[key].classList.remove('d-block')
      message[key].classList.add('d-none')
    }, 10000)
  } else {
    field[key].classList.remove('is-invalid')
    message[key].classList.remove('d-block')
    message[key].classList.add('d-none')
}
}

// Load each modal type (update, delete, insert, warning)

function loadModal(modalType){
  if (modalType) {
    modalType.addEventListener('show.bs.modal', event => {
      const button = event.relatedTarget

      switch (modalType) {

        // Modal for update 1 drink

        case updateModal:
          const updateModalContainer = {"id" : button.getAttribute('data-drink-id')} // Retrieve data from the button that opens the modal

          const updateModalArea = {
            "id" : modalType.querySelector("#drink-id"),
            "name" : modalType.querySelector("#drink-name"),
            "price" : modalType.querySelector("#drink-price"),
            "availability" : modalType.querySelector("#drink-availability")
          }
          for (let i = 0; i < datasDrink.length; i++) {
            if (datasDrink[i]['id'] == updateModalContainer['id']) {
              updateModalArea['id'].value = updateModalContainer['id']
              updateModalArea['name'].textContent = datasDrink[i]['name']
              updateModalArea['price'].value = datasDrink[i]['price']
              updateModalArea['availability'].checked = datasDrink[i]['availability']
            }
          }

          const invalidMessageUpdate = {
            "price" : modalType.querySelector('#drink-price-invalid')
          }

          const updateSubmit = modalType.querySelector('#drink-submit')

          updateSubmit.addEventListener('click', () => {
            const priceValid = validateField(updateModalArea['price'], /^[1-9]\.\d{2}$/)
            for (let key in invalidMessageUpdate) {
              displayInvalidMessage(priceValid, invalidMessageUpdate, key, updateModalArea)
            }
            if (!priceValid) {
              updateSubmit.setAttribute('type', 'button')
            } else {
              updateSubmit.setAttribute('type', 'submit')
            }
          })
          break

        // Modal for create 1 drink

        case createModal:
          const createModalArea = {
            "name" : modalType.querySelector('#drink-name'),
            "price" : modalType.querySelector('#drink-price'),
            "availability" : modalType.querySelector('#drink-availability')
          }
          const invalidMessageCreate = {
            "name" : modalType.querySelector('#drink-name-invalid'),
            "price" : modalType.querySelector('#drink-price-invalid')
          }
          const createSubmit = modalType.querySelector('#drink-submit')
          createSubmit.addEventListener('click', () => {
            const fieldValid = {
              "name" : validateField(createModalArea['name'], /^[A-Z][a-zàâäéèêëîïôöùûüç\s-]{0,23}\s([1-9][0-9]|100)cl$/), // Check if input value is correct (see function validateField())
              "price" : validateField(createModalArea['price'], /^[1-9]\.\d{2}$/)
            }
            for (let key in invalidMessageCreate) {
              displayInvalidMessage(fieldValid, invalidMessageCreate, key, createModalArea)
            }
            if (!(fieldValid['name'] && fieldValid['price'])) {
              createSubmit.setAttribute('type', 'button')
            } else {
              createSubmit.setAttribute('type', 'submit')
            }
          })
          break
        
        // Modal for delete 1 drink

        case deleteModal:

          const deleteModalContainer = {"id" : button.getAttribute('data-drink-id')} 

          const deleteModalArea = {
            "id" : modalType.querySelector("#drink-id"),
            "name" : modalType.querySelector("#drink-name"),
          }
          for (let i = 0; i < datasDrink.length; i++) {
            if (datasDrink[i]['id'] == deleteModalContainer['id']) {
              deleteModalArea['id'].value = deleteModalContainer['id']
              deleteModalArea['name'].textContent = datasDrink[i]['name']
            }
          }
          break

        case warningModal:

          const warningModalContainer = {"id" : button.getAttribute('data-drink-id')} 
          
          const warningModalArea = {"name" : modalType.querySelector("#drink-name")}

          for (let i = 0; i < datasDrink.length; i++) {
            if (datasDrink[i]['id'] == warningModalContainer['id']) {
              warningModalArea['name'].textContent = datasDrink[i]['name']
            }
          }
          break

      } 
    })
  }
}
loadModal(updateModal)
loadModal(createModal)
loadModal(deleteModal)
loadModal(warningModal)




