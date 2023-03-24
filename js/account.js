const email = document.getElementsById("email");
const password = document.getElementsById("password");
email.disabled = true;
password.disabled = true;

function editField(){
   email.disabled = false;
   password.disabled = false;
}