
// Cart validation ---------------------------------------------------------------------------------------------

// Hour select 

const feedback = document.getElementById('cart-feedback');
const validateButton = document.getElementById('validate-order');
const selectedHour = document.getElementById('select-hour');
const modalValidation = document.getElementById('confirmOrderModal');
const orderPrice = document.getElementById('order-price').textContent;
const cartIcon = document.getElementById('cart-icon-div');

// console.log(orderPrice)

validateButton.addEventListener('click', () => {
    // Vérifier si l'option "Heure" est sélectionnée
    if (selectedHour.value === 'Heure') {
        // Afficher le message d'erreur et empêchez le formulaire de se soumettre
        feedback.classList.remove('d-none');
        feedback.classList.add('d-block');
    } else {
        // Cacher le message d'erreur si une heure est sélectionnée
        feedback.classList.remove('d-block');
        feedback.classList.add('d-none');
    }
});

// Show confirmation modal only if an hour is selected hen clicking button
// Set attribute to 'data-bs-toggle' = 'modal' only if an correct hour is selected

selectedHour.addEventListener('change', ()=> {
    if (selectedHour.value !== 'Heure') {
        validateButton.setAttribute('data-bs-toggle', "modal");
    } else {
        validateButton.setAttribute('data-bs-toggle', "");
    }
});

// Cart icon showing green when total price > 0 ---------------------------------------------------------------------------------------------

let showGreenCart = () => {
    if (orderPrice > 0) {
        cartIcon.style.background = '#00A676';
    } else {
        cartIcon.style.background = '#69423A';
    }
};

showGreenCart();