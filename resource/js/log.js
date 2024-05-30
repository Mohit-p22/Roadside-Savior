const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});


/*Form validation*/
function validateLoginForm() {
    var username = document.getElementById("login-username").value;
    var password = document.getElementById("login-password").value;
    var userType = document.getElementById("user-type").value;

    if (username.trim() === '') {
      alert("Please enter username.");
      return false;
    }
    
    if (password.trim() === '') {
      alert("Please enter password.");
      return false;
    }

    if (userType === 'select') {
        alert("Please select user type.");
        return false;
      }

    return true;
  }

  function validateRegisterForm() {
    var username = document.getElementById("register-username").value;
    var email = document.getElementById("register-email").value;
    var phone = document.getElementById("register-phone").value;
    var password = document.getElementById("register-password").value;
    var confirmPassword = document.getElementById("register-confirm-password").value;

    if (username.trim() === '') {
      alert("Please enter username.");
      return false;
    }

    if (email.trim() === '' || !/\S+@\S+\.\S+/.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }

    if (phone.trim() === '' || !/^\d{10}$/.test(phone)) {
      alert("Please enter a valid 10-digit phone number.");
      return false;
    }

    if (password.trim() === '') {
      alert("Please enter password.");
      return false;
    }

    if (confirmPassword.trim() === '') {
      alert("Please confirm password.");
      return false;
    }

    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }

    return true;
  }

  /*Form validation end*/
  function setDefaultSelect() {
    var select = document.getElementById("user-type");
    select.selectedIndex = 0;
  }

  /*Form switching*/
  function showCustomerFields() {
    document.getElementById("customer-fields").style.display = "block";
    document.getElementById("mechanic-fields").style.display = "none";
}

function showMechanicFields() {
    document.getElementById("customer-fields").style.display = "none";
    document.getElementById("mechanic-fields").style.display = "block";
}

function clearFields() {
  // Clear the value of the username and password fields
  document.getElementById('login-username').value = '';
  document.getElementById('login-password').value = '';
}
