<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get review data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $review = $_POST["review"];

    // Validate form data (you can add more validation)
    if (empty($name) || empty($email) || empty($review)) {
        echo "Please fill in all fields.";
    } else {
        // Format the review data
        $formattedReview = "Name: $name\nEmail: $email\nReview: $review\n\n";

        // Append the review to the text file (create it if it doesn't exist)
        file_put_contents("reviews.txt", $formattedReview, FILE_APPEND);

        echo "success";
    }
} else {
    echo "Invalid request.";
}
?>
