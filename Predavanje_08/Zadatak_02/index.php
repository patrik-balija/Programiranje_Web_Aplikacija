<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrik Balija</title>
</head>

<body>
    <form method="POST" action="process.php">
        <label>Unesite ime:</label><br>
        <input type="text" name="fname"><br><br>

                <label>Unesite prezime:</label><br>
        <input type="text" name="lname"><br><br>

        <label>Unesite državu:</label><br>
        <select name="country">
            <option value="Croatia">Croatia</option>
            <option value="USA">USA</option>
            <option value="Germany">Germany</option>
        </select><br><br>
        <input type="submit" value="Registriraj se">
    </form>
</body>

</html>