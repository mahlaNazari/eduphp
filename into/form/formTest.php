<!-- <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    Name : <input type="text" name="fName">
    <input type="submit" value="Save">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['fName']);
    if (empty($name)) {
        echo 'name is empty';
    } else {
        echo $name;
    }
}
?>

<html>

<body>
    <a href="formTest.php?subject=php&web=w3school">
        tstButton
    </a>
</body>

<?php
echo "Study " . $_GET['subject'] . " in the " . $_GET['web'];
?>

</html>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    name : <input type="text" name="finame">
    lname : <input type="text" name="lname">
    <input type="submit" value="save">
</form>
<?php
echo "welcome " . $_GET['finame'] . " " . $_GET['lname'];
?> -->



<?php
$nameErr = $emailErr = $websiteErr = $genderErr = "";
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name">
    <span class="error">*<?php echo $nameErr ?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">*<?php echo $emailErr ?></span>
    <br><br>
    Website: <input type="text" name="website">
    <span class="error">*<?php echo $websiteErr ?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">*<?php echo $genderErr ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $comment;
echo "<br>";
echo $website;
echo "<br>";
echo date("Y/m/d l");
echo "<br>";
date_default_timezone_set("IRAN");
echo date("h:i:sa")
?>