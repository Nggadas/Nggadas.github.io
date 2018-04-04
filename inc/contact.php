<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){

    if(empty($_POST["user_email"]) || empty($_POST["user_name"]) || empty($_POST["topic"]) || empty($_POST["message"])){

        echo "All fields required.";

    } else {

        //Form Data
        $user_email = $_POST["user_email"];
        $user_name = $_POST["user_name"];
        $subject = $_POST["topic"];
        $message = $_POST["message"];
        $body = "<strong>Name:</strong>" . $user_name . "<br> <strong>Email:</strong> " . $user_email . "<br><br>" . $message;

        //Load Composer's autoloader
        require 'vendor/autoload.php';

        $mail = new PHPMailer(true);                    // Passing `true` enables exceptions
        try {
            //Server settings
//            $mail->SMTPDebug = 1;                               // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = "enggadas90@gmail.com";             // SMTP username
            $mail->Password = "Chararas5128";                       // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($user_email, $user_name);

            $mail->addAddress("enggadas90@gmail.com", 'Emmanuel Nggadas');     // Add a recipient
            $mail->addReplyTo($user_email, $user_name);

            //    $mail->addReplyTo('info@example.com', 'Information');
            //    $mail->addCC('cc@example.com');
            //    $mail->addBCC('bcc@example.com');

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);

            $mail->send();
            echo "<script>alert('Thanks for your email, I will get back to you as soon as possible.');</script>";

        } catch (Exception $e) {
            echo "<script>alert('Something went wrong with the email. Why not email me directly at enggadas90@gmail.com');</script>";
        }
    }
}

?>

<form action="../index.php" method="post">
    <h1>Contact me</h1>

    <fieldset>
        <legend><span class="number">1</span>Your Information</legend>
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name" placeholder="e.g. John Doe" required>

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email" placeholder="e.g. email@example.com" required>
    </fieldset>

    <fieldset>
        <legend><span class="number">2</span>Your message</legend>
        <label for="name">Topic:</label>
        <input type="text" id="topic" name="topic" placeholder="e.g. build a website" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="10" placeholder="Note: Messages can be composed in HTML."></textarea>
    </fieldset>

    <button type="submit" name="submit">Send</button>
</form>