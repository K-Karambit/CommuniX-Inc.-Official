function SystemAdminLogout() {
  localStorage.removeItem("id");
  localStorage.removeItem("role");
  window.location.href = "../../private/EmployeeLogin.php";
  alert("You have been logged out");
}

function DropdownClick() {
  document.getElementById("Dropdown").style.display = "block";
}
function NoDropdown() {
  document.getElementById("Dropdown").style.display = "none";
}
