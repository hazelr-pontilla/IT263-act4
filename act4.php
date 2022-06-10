<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Activity for Form Handling</h1>

    <form action="act4-submit_form.php" method="post">
        <p>Name: <br> <input type="text" name="name"></p>
        <p>Age: <br> <input type="text" name="age"></p>
        <p>Gender: <br>
            <select name="gender">
                <option value="male">MALE</option>
                <option value="female">FEMALE</option>
            </select>
        </p>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>