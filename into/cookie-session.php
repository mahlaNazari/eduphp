<?php
    $cookie_Name = "UserName";
    $cookie_value = "Reza";
    setcookie($cookie_Name, $cookie_value, time() + (86400 * 30), "/");
?>

<html>

<body>
    <?php
    if (!isset($_COOKIE[$cookie_Name])) {
        echo "<br>";
        echo "cookie " . $cookie_Name . " is not set";
    } else {
        echo "<br>";
        echo "cookie " . $cookie_Name . " is set";
        echo "<br>";
        echo "cookie value is " . $_COOKIE[$cookie_Name];
    }
    echo "<br>";
    if(count($_COOKIE)>0){
        echo "cookies are enable";
    }
    else{
        echo "cookies are disabled";
    }
    ?>
</body>

</html>

<!-- <?php
setcookie("UserName","",time()-3600);
?>
<html>
    <body>
        <?php
echo "cookie Username is deleted";
        ?>
    </body>
</html> -->
<?php
session_start();
?>
<!-- <html>
    <body>
        <?php
$_SESSION["UserId"]="10";
$_SESSION["UserLang"]="Persian";

echo "<br>";
echo "session userId is : ".$_SESSION["UserId"];
echo "<br>";
echo "session userLang is : ".$_SESSION["UserLang"]; 
        ?>
    </body>
</html> -->
<html>
    <body>
        <?php
session_unset();
session_destroy();
        ?>
    </body>
</html>