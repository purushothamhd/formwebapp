<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $member = $_POST['Member'];
    $rating = $_POST["rating"];
    $feedback = $_POST['subject'];

    $data = "Name: $name\nEmail: $email\nrating: $rating\nMember: $member\nFeedback: $feedback\n\n";
    $file = fopen("feedback.txt", "a+");
    fwrite($file, $data);
    fclose($file);

    echo "Thank you for your feedback!";
}
?>
