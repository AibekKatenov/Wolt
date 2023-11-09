<?php
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

    $name = $_POST["regname"];
    $email = $_POST["regemail"];
    $password = $_POST["regpassword"];
    $reenteredPassword = $_POST["reregpassword"];

    if ($password != $reenteredPassword) {
        echo "Пароли не совпадают";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO User (username, email, password) VALUES ('$name', '$email', '$hashedPassword')";

        if (mysqli_query($conn, $sql)) {
            echo "Пользователь успешно создан";
            header("Refresh: 2; URL=index.html");
            exit();
        } else {
            echo "Ошибка при создании пользователя: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>