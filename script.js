$(document).ready(function () {
    $("#registrationForm").on("submit", function (e) {
      let name = $("#name").val();
      let email = $("#email").val();
      let phone = $("#phone").val();
  
      if (!name || !email || !phone) {
        alert("All fields are required!");
        e.preventDefault(); // Prevent form submission
      } else {
        alert("Form submitted successfully!");
      }
    });
  });
  
