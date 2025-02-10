<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For my Valentine</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body class="body">
    <h1>What's the name of my Valentine?</h1>

    <form action="froms copy chatgpt.php" method="POST">
        <label for="fname" required>First name:</label><br>
        <br>
        <input type="text" id="fname" name="fname" value="Ash" placeholder="Ash"><br>
        <br>
        <label for="lname">Last name:</label><br>
        <br>
        <input type="text" id="lname" name="lname" value="Hoyos" placeholder="Hoyos"><br>
        <br>
        <input type="submit" value="submit">
        <audio autoplay>
            <source src="Elvis Presley  Cant Help Falling In Love Official Audio.mp3">
        </audio>

        <h3>Any comments about my valentine gift for you?</h3>
        <p><label for="my_skibidi">For my cotie patotie valentine:</label></p>
        <textarea id="my_skibidi" name="comments" rows="5" cols="50"></textarea>
        <br>
        <input type="submit" value="submit">
    </form>

    <h2>Do I pass the crush test?</h2>
    <p>Would you like to be my girlfriend? Choose here, otor crush</p>
    <form action="submit.php" method="POST">
        <input type="radio" id="Ehem_yes" name="crush" value="Ehem, yes">
        <label for="Ehem_yes">Yes, slight</label><br>
        <input type="radio" id="Yes_na_yes" name="crush" value="Yes na yes">
        <label for="Yes_na_yes">Yes na Yes</label><br>
        <input type="radio" id="Yes_po_pwedeng_pwede" name="crush" value="Yes po, pwedeng pwede">
        <label for="Yes_po_pwedeng_pwede">Yes pero manligaw ka muna</label><br>

        <h2>Rate how qualified I am to be your girlfriend/future wife</h2>
        <p>Here is the rate bar</p>
        <label for="Gfable">Gfable (between 0 to 10):</label>
        <input type="range" id="Gfable" name="Gfable" min="0" max="10">
        <input type="submit" value="Submit">
    </form>

    <p>This website is my way of asking you po if I can be your girlfriend. Me is so kabado but this is me shooting my shot to my crush (you).</p>
</body>
</html>

<?php
session_start();

// Store form data in session variables
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['comments'] = $_POST['comments'];
    $_SESSION['crush'] = $_POST['crush'];
    $_SESSION['Gfable'] = $_POST['Gfable'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine's Answer Page</title>
</head>
<body>
    <h1>Thank you for submitting!</h1>

    <h2>Your Details:</h2>
    <p>First Name: <?php echo $_SESSION['fname']; ?></p>
    <p>Last Name: <?php echo $_SESSION['lname']; ?></p>
    <p>Comments about the Valentine gift: <?php echo $_SESSION['comments']; ?></p>

    <h2>Crush Test:</h2>
    <p>Do I pass the crush test? <?php echo $_SESSION['crush']; ?></p>

    <h2>Your Rating:</h2>
    <p>Gfable Rating: <?php echo $_SESSION['Gfable']; ?></p>

</body>
</html>


