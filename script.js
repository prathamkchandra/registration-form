$(document).ready(function () {
    $("#registrationForm").on("submit", function (event) {
        event.preventDefault();

        // Serialize form data
        const formData = $(this).serialize();

        // Send data to server
        $.post("process.php", formData, function (response) {
            // Display the server's response
            $("#result").html(response).slideDown();
        });
    });
});
