//check();

function effect() {
  document.getElementById("nav-links-login-register-btn").style.display =
    "none";
  document.getElementById("retrieveId-h1").style.display = "block";
  document.getElementById("retrieveId-h1-a").style.display = "block";
}

function check() {
  let loggedIn = false;
  let user = localStorage.getItem("id");
  if (user !== null) {
    loggedIn = true;
    if (loggedIn) {
      let hasRole = localStorage.getItem("role");
      if (hasRole === "Applicant") {
        effect();
        //window.location.href = "../src/ApplicantsDashboard.php";
      } else if (hasRole === "System Admin") {
        effect();
        //window.location.href = "../private/admin/SystemAdminDashboard.php";
      } else if (hasRole === "Website Admin") {
        effect();
        //window.location.href = "../private/admin/WebAdminDashboard.php";
      } else if (hasRole === "Human Resource") {
        effect();
        //window.location.href = "../private/admin/HumanResourceDashboard.php";
      } else if (hasRole === "Employee") {
        effect();
        //window.location.href = "../private/EmployeeDashboard.php";
      } else if (hasRole === null) {
        window.location.href = "../index.php";
      }
    }
  }
}
// LOGGED IN CHECKER IS NOT WORKING PROPERLY
