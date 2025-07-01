function validateForm() {
  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value.trim();
  const errorMsg = document.getElementById("error-message");

  if (username === "" || password === "") {
    errorMsg.textContent = "Please fill in all fields.";
    return false;
  }
  return true;
}
