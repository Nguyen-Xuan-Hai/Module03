<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dictionary</title>
</head>
<body>
<h1>Dictionary</h1>
<form action="show_dictionary" method="POST">
    @csrf
    <p>
        <input type="text" name="dictionary" placeholder="Dictionary">
    </p>
    <p>
        <button type="submit">translate</button>
    </p>
</form>

</body>
</html>
