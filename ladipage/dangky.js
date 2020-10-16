let Clickdata = document.getElementById("button_claim");

let result = document.getElementById("error_text");

let error = document.getElementById("error");

let result_lastName = document.getElementById("error_lastName");

let error_lastName = document.getElementById("error_text_lastName");

let result_email = document.getElementById("error_email");

let error_email = document.getElementById("error_text_email");

let result_password = document.getElementById("error_password");

let error_text_password = document.getElementById("error_text_password");

Clickdata.addEventListener("click", function () {
  let value_firstName = document.getElementById("firstName");
  let value_lastName = document.getElementById("lastName");
  let x = document.getElementById("firstName").value;
  let y = document.getElementById("lastName").value;
  let a = document.getElementById("email").value;
  let z = document.getElementById("password").value;

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (x == "") {
    result.style.display = "block";
    error.style.display = "block";
    document.getElementById("firstName").className = "error";
  } else {
    result.style.display = "none";
    error.style.display = "none";
  }
  if (y == "") {
    result_lastName.style.display = "block";
    error_lastName.style.display = "block";
    document.getElementById("lastName").className = "error";
  } else {
    result_lastName.style.display = "none";
    error_lastName.style.display = "none";
  }
  if (!a.match(mailformat)) {
    result_email.style.display = "block";
    error_email.style.display = "block";
  } else {
    result_email.style.display = "none";
    error_email.style.display = "none";
  }
  if (z == "") {
    result_password.style.display = "block";
    error_text_password.style.display = "block";
  } else {
    result_password.style.display = "none";
    error_text_password.style.display = "none";
  }
});