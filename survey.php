<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Анкета опитування</title>
</head>
<body>
    <h1>Анкета опитування</h1>
    <form action="process.php" method="POST">
        <label>Ваше ім’я:</label><br>
        <input type="text" name="name" required><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Як ви оцінюєте наш сервіс?</label><br>
        <select name="service_rating">
            <option value="Відмінно">Відмінно</option>
            <option value="Добре">Добре</option>
            <option value="Задовільно">Задовільно</option>
            <option value="Погано">Погано</option>
        </select><br><br>
        
        <label>Ваші коментарі:</label><br>
        <textarea name="comments"></textarea><br><br>
        
        <button type="submit">Надіслати</button>
    </form>
</body>
</html>
