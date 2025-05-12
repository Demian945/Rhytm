<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $data = "Ім'я: " . $name . "\n";
    $data .= "Email: " . $email . "\n";
    $data .= "Телефон: " . $phone . "\n";
    $data .= "------------------------\n";

    $file = "user-info.txt";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Перенаправлення на іншу сторінку
    header("Location: success.html"); // Замініть "ваша_сторінка_подяки.html" на URL вашої сторінки
    exit(); // Забезпечує припинення виконання поточного скрипта після перенаправлення
} else {
    echo "Виникла помилка при обробці форми.";
}
?>