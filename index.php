<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php
    include("header.php");
    ?>
    <div class="index-container">
        <div class="index-intro">
            <h1>Welcome to Connor's Laundromat!</h1>
            <h2>Here at Connor's Laundromat, we are dedicated to delivering the best laundry experience for you, always available 24/7!</h2>
            <h3>Last updated: <?php echo  date("F d Y"); ?></h3>
            <h2>Why do your laundry at Connor's Laundromat?</h2>
            <p>The answer is simple: We have 3 unique features here at Connor's Laundromat:</p>
        </div>

        <div class="three-unique">
            <div>
                <h3>24/7 Active Monitoring</h3>
                <img src="images/cisco_security.jpg" alt="">
                <p>Alongside our locations being monitored daily, they are safely monitored, inside and outside for your comfort.</p>
            </div>
            <div>
                <h3>Machine Monitoring</h3>
                <img src="images/holding_phone.jpg" alt="">
                <p>Our washing machines and dryers are equipped with a notification system, alerting you when your machines in use have finished on your cellular device.</p>
            </div>
            <div>
                <h3>Detergent-Efficient</h3>
                <img src="images/open_laundry.png" alt="">
                <p>High-efficiency large-capacity washing machines and soft water technology saves you time and money.</p>
            </div>
        </div>

        <div class="index-question">
            <h4>If you have any questions, please contact us!</h4>
            <button><a href="contact.php">Contact Us!</a></button>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>
</html>