function goBackToDashboard() {
  main();
}

function effect() {
  document.getElementById("nav-links-login-register-btn").style.display =
    "none";
  document.getElementById("retrieveId-h1").style.display = "block";
  document.getElementById("retrieveId-h1-a").style.display = "block";
}

function main() {
  let loggedIn = false;
  let user = localStorage.getItem("id");
  if (user !== null) {
    loggedIn = true;
    if (loggedIn) {
      let hasRole = localStorage.getItem("role");
      if (hasRole === "Applicant") {
        effect();
        window.location.href = "../src/ApplicantsDashboard.php";
      } else if (hasRole === "System Admin") {
        effect();
        window.location.href = "../private/admin/SystemAdminDashboard.php";
      } else if (hasRole === "Website Admin") {
        effect();
        window.location.href = "../private/admin/WebAdminDashboard.php";
      } else if (hasRole === "Human Resource") {
        effect();
        window.location.href = "../private/admin/HumanResourceDashboard.php";
      } else if (hasRole === "Employee") {
        effect();
        window.location.href = "../private/EmployeeDashboard.php";
      } else if (hasRole === null) {
        window.location.href = "../index.php";
      }
    }
  }
}

function sendEmail() {
  Email.send({
    SecureToken: "ebb215da-e860-4e63-8ca1-b775c2102070",
    To: "johnkennethserrano95@gmail.com",
    From: "johnkennethserrano95@gmail.com",
    Subject: "CommuniX Contact Form",
    Body:
      "<br>From: " +
      document.getElementById("name").value +
      "<br>Subject: " +
      document.getElementById("subject").value +
      "<br>Email: " +
      document.getElementById("email").value +
      "<br>Message: " +
      document.getElementById("message").value,
  }).then((message) => alert("Email sent successfully"));
}
