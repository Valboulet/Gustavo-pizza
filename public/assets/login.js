/* Controlling the form fields on the login page */
/* --------------------------------------------- */

// Form targeting
const loginForm = document.getElementById('loginForm')

// Targeting fillable fields in loginForm
const fieldsLogin = {
  'email' : loginForm.querySelector('#emailUser'),
  'password' : loginForm.querySelector('#passwordUser')
}

// Targeting the error message
const errorLogin = {
  'email' : loginForm.querySelector('#emailError'),
  'password' : loginForm.querySelector('#passwordError')
}

// Targeting the button to send form data from loginForm
const buttonLogin = loginForm.querySelector('#submitUser')

// Validates fields on a form
function validateField(field, regex) {
  const valueField = field.value.trim()

  if (!regex.test(valueField)) {
    field.classList.add('is-invalid')
    return false
  } else {
    field.classList.remove('is-invalid')
    return true
  }
}

// Displays an error message under a form field when the entry is incorrect
function displayErrorMessage(isValid, message, key, field) {
  if (!isValid[key]) {
    message[key].classList.remove('d-none')
    message[key].classList.add('d-block')
    setTimeout(function() {
      message[key].classList.remove('d-block')
      message[key].classList.add('d-none')
    }, 20000)
  } else {
    field[key].classList.remove('is-invalid')
    message[key].classList.remove('d-block')
    message[key].classList.add('d-none')
  }
}

// Checking the validity of the form fields after clicking the button
buttonLogin.addEventListener('click', function() {
  const isFieldValid = {
    'email' : validateField(fieldsLogin.email,
      /^(?=.{6,100}$)[a-z0-9._%+-]{1,64}@[a-z0-9.-]{1,63}\.[a-z]{2,}$/),
    'password' : validateField(fieldsLogin.password,
      /^(?=.*[a-zàâäéèêëïîôöùûüÿç])(?=.*[A-ZÀÂÄÉÈÊËÏÎÔÖÙÛÜŸÇ])(?=.*\d)(?=.*[@#!%*$€£?§&-])[A-Za-zàâäéèêëïîôöùûüÿçÀÂÄÉÈÊËÏÎÔÖÙÛÜŸÇ\d@#!%*$€£?§&-]{8,60}$/)
  }
  
  // Display of the message if error
  for (let key in errorLogin) {
    displayErrorMessage(isFieldValid, errorLogin, key, fieldsLogin)
  }

  // Allows you to submit the form if the form fields are correct
  if (!(isFieldValid.email && isFieldValid.password)) {
    buttonLogin.setAttribute('type', 'button')
  } else {
    buttonLogin.setAttribute('type', 'submit')
  }
})