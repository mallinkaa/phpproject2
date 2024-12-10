<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $rating = htmlspecialchars($_POST['service_rating']);
    $comments = htmlspecialchars($_POST['comments']);
    $datetime = date("Y-m-d_H-i-s");

    $data = [
        'name' => $name,
        'email' => $email,
        'rating' => $rating,
        'comments' => $comments,
        'submitted_at' => date("Y-m-d H:i:s")
    ];

    $filename = "survey/response_$datetime.json";

    if (!file_exists('survey')) {
        mkdir('survey', 0777, true);
    }

    file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo "<h1>Дякуємо за вашу відповідь!</h1>";
    echo "<p>Час та дата заповнення форми: " . date("Y-m-d H:i:s") . "</p>";
} else {
    echo "Некоректний метод запиту.";
}
?>
