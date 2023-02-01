const form = document.querySelector('form');
const nickname = form.querySelector('input[name="nickname"]');
const email = form.querySelector('input[name="email"]');
const password = form.querySelector('input[name="password"]');
const confirmPassword = form.querySelector('input[name="confirm-password"]');
const registerButton = form.querySelector('button[type="submit"]');
const showPassword = form.querySelector('input[name="show-password"]');

function validateNickname(nickname) {
  const re = /^[a-zA-Z0-9]{3,}$/;
  return re.test(nickname);
}

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
  const nicknameValue = nickname.value;
  const emailValue = email.value;
  const passwordValue = password.value;
  const confirmPasswordValue = confirmPassword.value;

  if (validateNickname(nicknameValue) && validateEmail(emailValue) && validatePassword(passwordValue) && passwordValue === confirmPasswordValue) {
    registerButton.disabled = false;
    registerButton.classList.remove('invalid-button');
  } else {
    registerButton.disabled = true;
    registerButton.classList.add('invalid-button');
  }
}

nickname.addEventListener('input', () => {
  setTimeout(() => {
    checkField(nickname, validateNickname(nickname.value));
    validateForm();
  }, 1000);
});

email.addEventListener('input', () => {
  setTimeout(() => {
    checkField(email, validateEmail(email.value));
    validateForm();
  }, 1000);
});

password.addEventListener('input', () => {
  setTimeout(() => {
    checkField(password, validatePassword(password.value));
    validateForm();
  }, 1000);
});

confirmPassword.addEventListener('input', () => {
  setTimeout(() => {
    checkField(confirmPassword, password.value === confirmPassword.value);
    validateForm();
  }, 1000);
});

showPassword.addEventListener('change', () => {
  if (showPassword.checked) {
    password.type = 'text';
    confirmPassword.type = 'text';
  } else {
    password.type = 'password';
    confirmPassword.type = 'password';
  }
});

