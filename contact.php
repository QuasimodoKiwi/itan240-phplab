<?php
$fullNameErr = $emailErr = $messageErr = $subjectErr = "";
$fullName = $email = $message = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["fullName"])) {
    $fullNameErr = "Name is required";
  } else {
    $fullName = test_input($_POST["fullName"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["message"])) {
    $messageErr = "Please write your message!";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "Please write the subject!";
  } else {
    $subject = test_input($_POST["subject"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <?php
        include("header.php");
        ?>
        
        <div class="contact-container">
            <h1>Contact Us:</h1>
            <form action="contact.php" method="POST">
                <div>
                    <label for="nameInput">Full Name:</label>
                    <input type="text" id="nameInput" name="fullName">
                    <span class="error"><?php echo $fullNameErr ?></span>
                </div>
    
                <div>
                    <label for="email">Email Address:</label>
                    <input type="text" id="email" name="email">
                    <span class="error"><?php echo $emailErr ?></span>
                </div>
    
                <div>
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject">
                    <span class="error"><?php echo $subjectErr ?></span>
                </div>
    
                <div>
                    <label for="message">Message:</label>
                    <input type="text" id="message" name="message">
                    <span class="error"><?php echo $messageErr ?></span>
                </div>
                <input type="submit">
            </form>
    
            <div>
                <h3>Here is our contact info:</h3>
                <h4>1824 WayFord Rd</h4>
                <h4>(926) 810 - 5534</h4>
                <h4>claundromat@business.edu</h4>
            </div>
        </div>

        <?php
        include_once("footer.php");
        ?>
    </body>
</html>
