<?php 
    // Initialize our variables
    $name = '';
    $name_err = '';
    $pronouns = '';
    $email = '';
    $email_err = '';
    $phone = '';
    $message = '';
    $message_err = '';
    ob_start();

    // If the server method is post (spoiler alert: once form is submitted, it is)
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        // then check to see if our form has been filled!
        // if empty, assign error. if not, assign variable.
        if (empty($_POST['name'])){
            $name_err = 'Please fill out your first name.';
        } else {
            $name = $_POST['name'];
        }

        if (empty($_POST['pronouns'])) {
            $pronouns = 'Client has declined to give pronouns.';
        }
        else {
            $pronouns = $_POST['pronouns'];
        }

        if (empty($_POST['email'])) {
            $email_err = 'Please fill out your email.';
        }
        else {
            $email = $_POST['email'];
        }

        if (empty($_POST['phone'])) {
            $phone = 'Client has declined to give phone number.';
        }
        else {
            $phone = $_POST['phone'];
        }

        if (empty($_POST['message'])) {
            $message_err = 'Please fill out your message.';
        }
        else {
            $message = $_POST['message'];
        }
        // END if empty, then error
        // If our form is entirely filled out, send an email
        if (isset($_POST['name'],
        $_POST['email'],
        $_POST['message'])) {
            $to = 'emelyn.melton@gmail.com';
            $subject ='Test Email';
            $body = '
                Name: '.$name.' '.PHP_EOL.'
                Pronouns: '.$pronouns.' '.PHP_EOL.'
                E-mail: '.$email.' '.PHP_EOL.'
                Phone: '.$phone.' '.PHP_EOL.'
                Message: '.$message.' '.PHP_EOL.'
            ';
            if(!empty($name) && !empty($pronouns) && !empty($email) && !empty($phone) && !empty($message)) { //form validation
                if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) { //recaptcha validation-- has it been filled out
                    $secretAPIkey = '6LcCHYcjAAAAAJrjMn0UGhibNKGv1h3oIwJa6iPh'; // secret key
                    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']); //recpatcha response-- does it check out on googles end?
                    $response = json_decode($verifyResponse); //decode googles response
                    if($response->success) { //if google says we're good to go, send the email!
                        mail($to, $subject, $body, 'noreply@mystudentswa.com');
                        header('Location:thanks.php');
                    }
                }
            }
        }
    } // END if request_method == post
    include('./includes/header.php');
?>
    <main>
        <div class="section">
            <h1>Contact Us</h1>
            <form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?>" method="post">
                <label>Name</label>
                <input type="text" name="name" value="">
                <span class="error"><?php echo $name_err; ?></span>
                
                <label>Pronouns</label>
                <input type="text" name="pronouns" placeholder = " this field is optional" value="">

                <label>Email</label>
                <input type="email" name="email"  value="">
                <span class="error"><?php echo $email_err; ?></span>

                <label>Phone Number</label>
                <input type="tel" name="phone" placeholder = " this field is optional" value="">

                <label>Message</label>
                <textarea name="message"></textarea>
                <span class="error"><?php echo $message_err; ?></span>

                <div class="g-recaptcha" data-sitekey="6LcCHYcjAAAAAOMRCtEjpKLpVf3O3qS4QpC0muMl"></div>
                
                <input type="submit" value="Submit your Query to the House of Cox">
            </form>
        </div>
    </main>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php
    include('./includes/footer.php');
?>
