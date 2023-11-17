<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $database = "woltdb";
    $username = "woltuser";
    $password = "secret";
    $port = "4005";

    $conn = mysqli_connect($servername, $username, $password, $database, $port);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_POST["loginemail"];
    $password = $_POST["loginpassword"];

    $sql = "SELECT * FROM User WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            echo "Вход успешен";
            $_SESSION['user_email'] = $email;
            header("Location: profile.php");
            exit();
        } else {
            echo "Неправильный пароль";
        }
    } else {
        echo "Пользователь с такой почтой не найден";
    }

    mysqli_close($conn);
}

if($_SERVER["REQUEST_METHOD"] == "GET") {
    echo strtotime(date('Y-m-d H:i:s')) - strtotime($_SESSION['logtime']);
    session_destroy();
}
?>