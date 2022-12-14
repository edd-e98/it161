<?php 
    include('./includes/header.php');
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
        if (empty(($_POST)['name'])){
            $name_err = 'Please fill out your first name.';
        } else {
            $name = $_POST['name'];
        }

        if (empty(($_POST)['pronouns'])) {
            $pronouns = 'Client has declined to give pronouns.';
        }
        else {
            $pronouns = $_POST['pronouns'];
        }

        if (empty(($_POST)['email'])) {
            $email_err = 'Please fill out your email.';
        }
        else {
            $email = $_POST['email'];
        }

        if (empty(($_POST)['phone'])) {
            $phone = 'Client has declined to give phone number.';
        }
        else {
            $phone = $_POST['phone'];
        }

        if (empty(($_POST)['message'])) {
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
            $to = 'dummy@email.com';
            $subject ='Test Email';
            $body = '
                <b>Name: </b>'.$name.' '.PHP_EOL.'
                <b>Pronouns: </b>'.$pronouns.' '.PHP_EOL.'
                <b>E-mail: </b>'.$email.' '.PHP_EOL.'
                <b>Phone: </b>'.$phone.' '.PHP_EOL.'
                <b>Message: </b>'.$message.' '.PHP_EOL.'
            ';
            $headers = array(
                'From' => 'noreply@mystudentswa.com'
            );
            if(!empty($name && $pronouns && $email && $phone && $message)) {
                mail($to, $subject, $body, $headers);
                header('Location:thanks.php');
            }
        }
    } // END if request_method == post
?>
    <main>
        <div class="section">
            <h1 style="text-align: center">Contact Us</h1>
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

                <input type="submit" value="Submit your Query to the House of Cox">
            </form>
        </div>
    </main>
<?php
    include('./includes/footer.php');
?>