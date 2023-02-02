const form = document.querySelector('form');
const email = form.querySelector('input[name="email"]');
const password = form.querySelector('input[name="password"]');
const loginButton = form.querySelector('button[type="submit"]');
const showPassword = form.querySelector('input[name="show-password"]');

function validateEmail(email) {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validatePassword(password) {
  const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  return re.test(password);
}

function checkField(field, condition) {
  !condition ? field.classList.add('invalid-field') : field.classList.remove('invalid-field')
}

function validateForm() {
  const emailValue = email.value;
  const passwordValue = password.value;

  if (validateEmail(emailValue) && validatePassword(passwordValue)) {
    loginButton.disabled = false;
    loginButton.classList.remove('invalid-button');
  } else {
    loginButton.disabled = true;
    loginButton.classList.add('invalid-button');
  }
}

email.addEventListener('input', () => {
  setTimeout(() => {
    checkField(email, validateEmail(email.value));
    validateForm();
  }, 200);
});

password.addEventListener('input', () => {
  setTimeout(() => {
    checkField(password, validatePassword(password.value));
    validateForm();
  }, 200);
});

showPassword.addEventListener('change', () => {
  if (showPassword.checked) {
    password.type = 'text';
  } else {
    password.type = 'password';
  }
});