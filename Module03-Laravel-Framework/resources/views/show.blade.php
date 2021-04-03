<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="/discount" method="POST">
    @csrf
    <p>
        <input type="text" name="productDescription" placeholder="Product Description">
    </p>
    <p>
        <input type="text" name="listPrice" placeholder="List Price">
    </p>
    <p>
        <input type="text" name="discountPercent" placeholder="Discount Percent">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
</body>
</html>
