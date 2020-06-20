<html>
<head>
</head>
<body>
<form action="/users" method="post">
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" name="create">
</form>
</body>
</html>
