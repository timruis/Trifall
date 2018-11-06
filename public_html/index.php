<?php
error_reporting( E_ALL );
//makes input readable and well adjusted
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//fills an message above the input field if something is done
function inputMessage($data) {
    $_POST["input"]=$data;
    require_once "page.php";
    exit();
}
function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}
function addGuest($email, $name, $ipadress) {
//sql database log in info
    $dsn = 'mysql:dbname=mysql_trifall.net;host=localhost';
    $user = 'applic';
    $password = 'HOSBSfG80OSVMSHB';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    $c=$dbh->prepare("INSERT INTO `Guests` (`ID`, `Naam`, `Email`, `ipAddress`) VALUES (NULL, :name, :email, :ipadress);");
    $c->bindParam(":email",$email, PDO::PARAM_STR);
    $c->bindParam(":name",$name, PDO::PARAM_STR);
    $c->bindParam(":ipadress",$ipadress, PDO::PARAM_STR);
    $c->execute();
}

function checkEmail($email) {
//sql database log in info
    $dsn = 'mysql:dbname=mysql_trifall.net;host=localhost';
    $user = 'root';
    $password = 'T1321tx020998';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    $b=$dbh->prepare("SELECT * FROM `Guests` WHERE email = :email;");
    $b->bindParam(":email",$email, PDO::PARAM_STR);
    $b->execute();
    return $fD = $b->fetchAll();
}

// input handler
if (isset($_SERVER["REQUEST_METHOD"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "color:#800000\"> Name is required";
            inputMessage($nameErr);
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[\w\-\s]+$/", $name)) {
                $nameErr = "color:#800000\"> Only letters, numbers and white space allowed";
                inputMessage($nameErr);
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "color:#800000\"> Email is required";
            inputMessage($emailErr);
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "color:#800000\"> You've entered an invalid email format";
                inputMessage($emailErr);
            } else {
                $eC = checkEmail($email);
                if (!empty($eC)) {
                    $knownEmailErr = "color:#800000\"> The email is already signed up";
                    inputMessage($knownEmailErr);
                } else {
                    $ipadress = get_client_ip_env();
                    addGuest($email, $name, $ipadress);
                    $message = "color:# #008000\"> Welcome lovely you joined our platform!!";
                    inputMessage($message);
                }
            }

        }
    }
}


if (!isset($_GET['build'])){
    require_once "index.html";
}
elseif($_GET['build']=="token"){
    require_once getcwd()."/Trifall/index.php";
}