<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrik Balija</title>
</head>

<body>
    <h1>Registracija</h1>
    <form method="POST" action="process.php">

        <label>First name:</label><br>
        <input type="text" name="first-name" required><br><br>
        
        <label>Last name:</label><br>
        <input type="text" name="last-name" required><br><br>
        
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Username:</label><br>
        <input type="text" name="username" required minLength="5" maxLength="10"><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required minLength="4"><br><br>
        
        <select name="country">
            <option value="Croatia">Croatia</option>
            <option value="USA">USA</option>
            <option value="Germany">Germany</option>
        </select><br><br>

        <input type="submit" value="Registriraj se">
    </form>
</body>

</html>