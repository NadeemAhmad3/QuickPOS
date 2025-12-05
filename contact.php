<?php
// contact.php - Handles the form submission

// 1. Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Collect and sanitize input data
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST["message"]));

    // 3. Backend Validation: Check for empty fields
    if (empty($name) || empty($email) || empty($message)) {
        // Error: Redirect back to home with an error flag (Optional logic)
        header("Location: index.php?error=empty_fields#contact");
        exit;
    }

    // 4. Simulate Success (Since we can't send real emails without a server config)
    // In a real app, you would use: mail($to, $subject, $message, $headers);
    
    // 5. Redirect to the Thank You page
    header("Location: thank-you.html");
    exit;

} else {
    // If someone tries to access this file directly, kick them back home
    header("Location: index.php");
    exit;
}
?>