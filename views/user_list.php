<!DOCTYPE html>
<html>
<head>
    <title>Lista utilizatori</title>
</head>
<body>
    <h1>Utilizatori:</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= htmlspecialchars($user['name']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
