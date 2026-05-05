<?php

// format: Service, Description, Price
$services = [
    ["DIY", "With a do-it-yourself service, you're able to wash up to 9 loads in less than an hour at our laundromats. With our company-provided detergent, fabric softener, and dryer sheets provided, you are able to do all of this for the price of $8.", "$8.00"],

    ["Drop off", "Feel like you have a lot of errands to run? No worries! You can drop your laundry off at our location, and our staff will notify you when you're ready to go.", "$11.00"],
    
    ["Delivery", "Connor's Laundromat provides a special delivery service that can pick up your laundry and have them finished and ready for you within a flexible schedule.", "$15.00 + shipping tax"]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once("header.php"); ?>
    
    <h1>Our Services</h1>
    <div class="three-unique services">
        <?php
            foreach($services as $service){
                echo
                "<div>" .
                "<h3>" . $service[0] . "</h3>"
                . "<p>" . $service[1] . "</p>"
                . "<h4>" . $service[2] . "</h4>"
                . "</div>";
            }
        ?>
    </div>
    <div>
        <h5>For any business related inquiries, please make a reference at our contact page.</h5>
        <a href="contact.php"><button>Contact Page</button></a>
    </div>

    <?php include_once("footer.php"); ?>
</body>
</html>
