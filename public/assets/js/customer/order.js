// Targeting the extrasDrinksModal
const extrasDrinksModal = document.getElementById('extrasDrinksModal')

function loadModal(modalType) {
  if (modalType) {
    modalType.addEventListener('show.bs.modal', event => {
      const button = event.relatedTarget

      switch (modalType) {

        case extrasDrinksModal:
          const extrasDrinksContainer = {
            'name' : button.getAttribute('data-pizza-name'),
            'price' : button.getAttribute('data-pizza-price')
          }
          const extrasDrinksArea = {
            'name' : modalType.querySelector('#pizzaName'),
            'price' : modalType.querySelector('#pizzaPrice'),
            'extra' : modalType.querySelector('#noExtra'),
            'drink' : modalType.querySelector('#noDrink')
          }
          extrasDrinksArea.name.textContent = extrasDrinksContainer.name
          extrasDrinksArea.price.textContent = extrasDrinksContainer.price + ' €'
          extrasDrinksArea.extra.checked = true
          extrasDrinksArea.drink.checked = true

          break
      } 
    })
  }
}

loadModal(extrasDrinksModal)

// Creates an order line in the cart
function createOrderline(pizzaName, extraName, drinkName, orderlinePrice) {
  const cartElmnt = document.getElementById('orderlines')

  const liElmnt = document.createElement('li')
  liElmnt.setAttribute('class', 'list-group-item')
  
  const divElmnt1 = document.createElement('div')
  divElmnt1.setAttribute('class', 'd-flex justify-content-between align-items-center')
  
  const h5Elmnt = document.createElement('h5')
  h5Elmnt.textContent = pizzaName
  
  const divElmnt1a = document.createElement('div')
  
  const aElmnt = document.createElement('a')
  aElmnt.setAttribute('href', '')
  aElmnt.setAttribute('data-bs-toggle', 'modal')
  
  const iElmnt = document.createElement('i')
  iElmnt.setAttribute('class', 'bi bi-pencil me-2')
  iElmnt.setAttribute('data-bs-dismiss', '')
  
  const buttonElmnt = document.createElement('button')
  buttonElmnt.setAttribute('class', 'btn-close')
  buttonElmnt.setAttribute('type', 'button')
  
  const divElmnt2= document.createElement('div')
  divElmnt2.setAttribute('class', 'd-flex justify-content-between align-items-center')
  
  const divElmnt2a = document.createElement('div')
  divElmnt2a.setAttribute('class', 'flex-grow-1')
  
  const smallElmntExtra = document.createElement('small')
  smallElmntExtra.textContent = extraName
  
  const brElmnt = document.createElement('br')
  
  const smallElmntDrink = document.createElement('small')
  smallElmntDrink.textContent = drinkName

  const divElmnt2b = document.createElement('div')
  divElmnt2b.setAttribute('class', 'mx-2')

  const spanElmnt = document.createElement('span')
  spanElmnt.setAttribute('class', 'fw-bold')
  spanElmnt.textContent = orderlinePrice + ' €'
  
  const selectElmnt = document.createElement('select')
  selectElmnt.setAttribute('class', 'form-select nbr-pizza')
  selectElmnt.setAttribute('name', 'quantity')
  
  const optionElmnt1 = document.createElement('option')
  optionElmnt1.setAttribute('value', 1)
  optionElmnt1.setAttribute('selected', true)
  optionElmnt1.textContent = 1
  
  const optionElmnt2 = document.createElement('option')
  optionElmnt2.setAttribute('value', 2)
  optionElmnt2.textContent = 2
  
  const optionElmnt3 = document.createElement('option')
  optionElmnt3.setAttribute('value', 3)
  optionElmnt3.textContent = 3
  
  const optionElmnt4 = document.createElement('option')
  optionElmnt4.setAttribute('value', 4)
  optionElmnt4.textContent = 4
  
  const optionElmnt5 = document.createElement('option')
  optionElmnt5.setAttribute('value', 5)
  optionElmnt5.textContent = 5
  
  const optionElmnt6 = document.createElement('option')
  optionElmnt6.setAttribute('value', 6)
  optionElmnt6.textContent = 6
  
  const optionElmnt7 = document.createElement('option')
  optionElmnt7.setAttribute('value', 7)
  optionElmnt7.textContent = 7
  
  const optionElmnt8 = document.createElement('option')
  optionElmnt8.setAttribute('value', 8)
  optionElmnt8.textContent = 8
  
  const optionElmnt9 = document.createElement('option')
  optionElmnt9.setAttribute('value', 9)
  optionElmnt9.textContent = 9
  
  const optionElmnt10 = document.createElement('option')
  optionElmnt10.setAttribute('value', 10)
  optionElmnt10.textContent = 10
  
  liElmnt.appendChild(divElmnt1)
  divElmnt1.appendChild(h5Elmnt)
  divElmnt1.appendChild(divElmnt1a)
  divElmnt1a.appendChild(aElmnt)
  aElmnt.appendChild(iElmnt)
  divElmnt1a.appendChild(buttonElmnt)

  liElmnt.appendChild(divElmnt2)
  divElmnt2.appendChild(divElmnt2a)
  divElmnt2a.appendChild(smallElmntExtra)
  divElmnt2a.appendChild(brElmnt)
  divElmnt2a.appendChild(smallElmntDrink)
  divElmnt2.appendChild(divElmnt2b)
  divElmnt2b.appendChild(spanElmnt)
  divElmnt2.appendChild(selectElmnt)
  selectElmnt.appendChild(optionElmnt1)
  selectElmnt.appendChild(optionElmnt2)
  selectElmnt.appendChild(optionElmnt3)
  selectElmnt.appendChild(optionElmnt4)
  selectElmnt.appendChild(optionElmnt5)
  selectElmnt.appendChild(optionElmnt6)
  selectElmnt.appendChild(optionElmnt7)
  selectElmnt.appendChild(optionElmnt8)
  selectElmnt.appendChild(optionElmnt9)
  selectElmnt.appendChild(optionElmnt10)
  
  cartElmnt.appendChild(liElmnt)
}

let totalPrice = 0
const cartIcon = document.getElementById('cart-icon-div')

// Cart icon showing green when total price > 0 ------------------------------------------------------------------------

const showGreenCart = () => {
  
  if (totalPrice > 0.00) {
    cartIcon.style.background = '#00A676'
  } else if (totalPrice == 0.00) {
    cartIcon.style.background = '#69423A'
  }
}

// 'Ajouter à ma commande' button targeting
const addOrderLine = document.getElementById('addOrderline')
// Event → Create an orderline in the cart
addOrderLine.addEventListener('click', () => {

  const selectedPizzaName = document.getElementById('pizzaName').textContent
  const selectedExtraName = document.querySelector('input[name=extra]:checked').nextElementSibling.textContent
  const selectedDrinkName = document.querySelector('input[name=drink]:checked').nextElementSibling.textContent

  const selectedPizzaPrice = parseFloat(document.getElementById('pizzaPrice').textContent.replace(' €', ''))
  const selectedExtraPrice = parseFloat(
    document.querySelector('input[name=extra]:checked').parentNode.nextElementSibling.textContent.replace(' €', '')
  )
  const selectedDrinkPrice = parseFloat(
    document.querySelector('input[name=drink]:checked').parentNode.nextElementSibling.textContent.replace(' €', '')
  )

  const selectedOrderlinePrice = (selectedPizzaPrice + selectedExtraPrice + selectedDrinkPrice)
  totalPrice += selectedOrderlinePrice
  
  createOrderline(selectedPizzaName, selectedExtraName, selectedDrinkName, selectedOrderlinePrice)
  showGreenCart()
})

// Targeting cart button
const cartOffcanvas = document.getElementById('offcanvasCart')
// Event → Open the cart
cartOffcanvas.addEventListener('show.bs.offcanvas', () => {

  // Targeting all orderlines in the cart
  const orderlines = document.getElementById('orderlines').querySelectorAll('li')
  totalPrice = 0

  for (i = 0; i < orderlines.length; i++) {
    const orderline = orderlines[i]
    
    const priceOrderline = parseFloat(orderline.querySelector('span').textContent.replace(' €', '')).toFixed(2)
    const quantityOrderline = parseInt(orderline.querySelector('select').options[orderline.querySelector('select').selectedIndex].value)
    totalPrice += (priceOrderline * quantityOrderline)
    
    // Targeting button to delete an orderline
    const closeOrderline = orderline.querySelector('button')

    // Event → Delete an orderline
    closeOrderline.addEventListener('click', () => {
      orderline.remove()
      totalPrice = 0
      // Targeting all orderlines that remain in the cart
      const deleteOrderlines = document.getElementById('orderlines').querySelectorAll('li')

      for (j = 0; j < deleteOrderlines.length; j++) {
        const deleteOrderline = deleteOrderlines[j]
        const deletePriceOrderline = parseFloat(deleteOrderline.querySelector('span').textContent.replace(' €', '')).toFixed(2)
        const deleteQuantityOrderline = parseInt(deleteOrderline.querySelector('select').options[deleteOrderline.querySelector('select').selectedIndex].value)
        totalPrice += (deletePriceOrderline * deleteQuantityOrderline)
      }
      
      document.getElementById('order-price').textContent = totalPrice.toFixed(2)
      showGreenCart()
    })

    // Targeting select to change the quantity
    const selectOrderline = orderline.querySelector('select')

    // Event → Change quantity
    selectOrderline.addEventListener('change', () => {
      totalPrice = 0
      // Target all modified orderlines
      const modifyOrderlines = document.getElementById('orderlines').querySelectorAll('li')

      for (j = 0; j < modifyOrderlines.length; j++) {
        const modifyOrderline = modifyOrderlines[j]
        const modifyPriceOrderline = parseFloat(modifyOrderline.querySelector('span').textContent.replace(' €', '')).toFixed(2)
        const modifyQuantityOrderline = parseInt(modifyOrderline.querySelector('select').options[modifyOrderline.querySelector('select').selectedIndex].value)
        totalPrice += (modifyPriceOrderline * modifyQuantityOrderline)
      }

      document.getElementById('order-price').textContent = totalPrice.toFixed(2)
      showGreenCart()
    })
  }
  
  document.getElementById('order-price').textContent = totalPrice.toFixed(2)
  showGreenCart()
})



// Cart validation -----------------------------------------------------------------------------------------------------

// Hour select 

const feedback = document.getElementById('cart-feedback')
const validateButton = document.getElementById('validate-order')
const selectedHour = document.getElementById('select-hour')
const modalValidation = document.getElementById('confirmOrderModal')

validateButton.addEventListener('click', () => {
  // Vérifier si l'option "Heure" est sélectionnée
  if (selectedHour.value === 'Heure') {
    // Afficher le message d'erreur et empêchez le formulaire de se soumettre
    feedback.classList.remove('d-none')
    feedback.classList.add('d-block')
  } else {
    // Cacher le message d'erreur si une heure est sélectionnée
    feedback.classList.remove('d-block')
    feedback.classList.add('d-none')
  }
})

// Show confirmation modal only if an hour is selected hen clicking button
// Set attribute to 'data-bs-toggle' = 'modal' only if an correct hour is selected

selectedHour.addEventListener('change', () => {
  if (selectedHour.value !== 'Heure') {
    validateButton.setAttribute('data-bs-toggle', "modal")
  } else {
    validateButton.setAttribute('data-bs-toggle', "")
  }
})