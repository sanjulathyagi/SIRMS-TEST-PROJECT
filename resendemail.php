<!DOCTYPE html>
<html>
    <head>
        <title>Resend Email</title>
    </head>
    <body>
        <?php
        include 'function.php';
        include 'mail.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);

            $db = dbConn();

            $sql = "SELECT * FROM customers C LEFT JOIN users U ON U.UserId=C.UserId  WHERE C.email='$email'";
            $result = $db->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $myemail = $row['email'];
                $UserId = $row['UserId'];
                $first_name=$row['FirstName'];
                $token = bin2hex(random_bytes(16));

                $sql = "UPDATE users SET token='$token', is_verified='0' WHERE UserId='$UserId'";
                $db->query($sql);

                $msg = "<h1>SUCCESS</h1>";
                $msg .= "<h2>Congratulations</h2>";
                $msg .= "<p>Your account has been successfully created</p>";
                $msg .= "<a href='http://localhost/bittest/verify.php?token=$token'>Click here to verifiy your account</a>";
                sendEmail($myemail, $first_name, "Account Verification", $msg);
                
                echo "Verification email has been sent..!";
            } else {
                echo "Your enter wrong email address!, please check your email address agian.";
            }
        }
        ?>

        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label>Enter Your Email Address</label>
            <input type="text" name="email">
            <button type="submit">Resend</button>
        </form> 
    </body>
</html>

