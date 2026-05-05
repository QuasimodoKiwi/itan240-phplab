<?php
$images = [
    ["images/dryer.jpg", "Our dryer!", "A dryer"],
    ["images/cleaning_items.png", "Our cleaning items!", "Set of cleaning items."],
    ["images/company_crew.jpg", "Our crew!", "From left to right: Hal Stewart, Connor Hamilton, Tina Melvins"],
    ["images/delivery_truck.jpg", "Our Delivery Truck!", "Company owned delivery truck"],
    ["images/room.jpeg", "The inside of one of our locations!", "View of room from one angle"],
    ["images/room2.jpg", "Another look inside one of our locations!", "View of room from another angle"]
    ];
$imgNum = 1;
include("header.php");
?>

<head>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Our select images!</h1>
    <div class="img-gallery">
        <?php
            foreach($images as $image){
            echo "<figure>" .
                "<img src=\"" . $image[0] . "\" alt=\">" . $image[2] . "\"" . "class=\"img" . $imgNum . "\"" .
                "<figcaption>" . $image[1] . "</figcaption>" .
                "</figure>";
            $imgNum++;
        }
        ?>
    </div>

</body>

<?php
include("footer.php");
?>