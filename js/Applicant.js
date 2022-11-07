function ApplicantLogout() {
  localStorage.removeItem("id");
  localStorage.removeItem("role");
  window.location.href = "../public/Login.php";
  alert("You have been logged out");
}

function DropdownClick() {
  document.getElementById("Dropdown").style.display = "block";
}
function NoDropdown() {
  document.getElementById("Dropdown").style.display = "none";
}

function changeBG() {
  document.getElementById("card1").style.background = "#f5f5f5";
  document.getElementById("card2").style.background = "#ffe0e0";
}

function onChangeEffect() {
  document.getElementById("btn-container-yes-no").style.display = "block";
}
