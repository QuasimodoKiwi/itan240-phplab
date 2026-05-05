<?php
include("header.php");

$founder = "Connor Hamilton";
$year = "202X";
$org = "Connor's Laundromat";

?>
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>About Us</h1>
    <p>One day in <?php echo $year ?>, the founder got off his 9-5 shift pushing carts and went to do his laundry at his local laundromat.
        It was a long day, and the founder found himself staring into the window, of a beautiful sunset while listening to the whirr of the machines.
        He noted how peaceful the noise made him feel, and thought to himself that he wants to experience this feeling a little longer.
        Inspired by the strange tranquility he felt, he decided to make a business to work like a laundromat, while recreating the feeling he had.
        That's how <?php echo $founder ?> founded <?php echo $org ?> in Reading, Pennsylvania.</p>

        <h2>Our Purpose</h2>
<blockquote>As the sole business owner, Connor's mission is to address the growing need for laundromats in this day and age with his own shop,
    while creating the same environment of comfort and tranquility he felt inside the laundromat.
</blockquote>

<h1>Our Staff</h1>
    <div class="three-unique">
        <div>
            <h3><?php echo $founder ?></h3>
            <h4>Chief Executive Officer</h4>
            <p>"My hobbies include reading comic books, cooking, and sketching the environment around me!"</p>
        </div>
        <div>
            <h3>Hal Stewart</h3>
            <h4>Chief Financial Officer</h4>
            <p>"I retired from working in a bank for twenty years as its Chief Financial Officer.
                Now, I want to help the community with my knowledge,
                with people like our CEO Connor Hamilton."</p>
        </div>
        <div>
            <h3>Tina Melvins</h3>
            <h4>Chief Operating Officer</h4>
            <p>Outside of my role helping the CEO with business operations,
                my hobbies include biking, bowling, and player the guitar!</p>
        </div>
    </div>
</body>

<?php
include("footer.php");
?>