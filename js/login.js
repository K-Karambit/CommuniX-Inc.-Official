let OTP = localStorage.getItem("otp");

function sendEmail() {
  let receiver = prompt("Please enter your email", "juandelacruz@gmail.com");
  Email.send({
    SecureToken: "ebb215da-e860-4e63-8ca1-b775c2102070",
    To: receiver,
    From: "johnkennethserrano95@gmail.com",
    Subject: "CommuniX Contact Form",
    Body: "<br>OTP: " + OTP,
  }).then((message) => alert("Email sent successfully"));
}
