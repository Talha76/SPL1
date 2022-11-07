function validatePassword() {
  let password = document.getElementById("password").value;
  let confirm_password = document.getElementById("confirm_password").value;
  let agreement = document.getElementById("agree_terms");
  let message = document.getElementById("error_msg");
  let upcase = /[A-Z]/;
  let locase = /[a-z]/;
  let spchar = /\W/;
  if(password.length < 8) {
    message.innerText = "Password must contain at least 8 characters.";
    message.style.display = "block";
    return false;
  }
  if(!upcase.test(password)) {
    message.innerText = "Password must contain at least an upper-case letter.";
    message.style.display = "block";
    return false;
  }
  if(!locase.test(password)) {
    message.innerText = "Password must contain at least a lower-case letter.";
    message.style.display = "block";
    return false;
  }
  if(!spchar.test(password)) {
    message.innerText = "Password must contain at least a special character.";
    message.style.display = "block";
    return false;
  }
  if(confirm_password != password) {
    message.innerText = "Passwords don't match.";
    message.style.display = "block";
    return false;
  }
  if(!agreement.checked) {
    message.innerHTML = 'You have to agree to the <a href="../home/terms_and_conditions.php">Terms & Conditions</a> and the <a href="../home/privacy_policy.php">Privacy Policy.</a>';
    message.style.display = "block";
    return false;
  }

  message.style.display = "none";
  return true;
}

function validateID() {
  let id = document.getElementById("id").value;
  let pattern = /^\w+$/;
  let message = document.getElementById("error_msg");
  if(id.length == 0) {
    message.innerHTML = "User ID cannot be empty";
    return false;
  }
  if(!pattern.test(id)) {
    message.innerText = "User ID cannot contain any special character.";
    message.style.display = "block";
    return false;
  }
  message.style.display = "none";
  return true;
}

function validateMail() {
  let mail = document.getElementById("email").value;
  let pattern = /^\w+([\.-]?\w+)*\@\w+([\.-]?\w+)*(\.\w{2,3})+$/
  if(!pattern.test(mail)) {
    let message = document.getElementById("error_msg");
    message.style.display = "block";
    message.innerText = "Invalid Email!";
    return false;
  }
  return true;
}

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

const form = document.getElementById('form');
form.addEventListener('submit', (e) => {
  if (!validateID() || !validateMail() || !validatePassword()) {
    e.preventDefault();
  }
})
