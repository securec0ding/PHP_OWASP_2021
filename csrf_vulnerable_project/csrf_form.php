<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF Form</title>
</head>
<body>
    <h2>CSRF Form</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="csrf_token" value="malicious_csrf_token">
        <input type="submit" value="Submit Form">
    </form>
</body>
</html>

