<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form>
<input type="text" name="Username" placeholder="username"><br>
<input type="text" name="Password" placeholder="password">
<br>
<button type="submit" name="submit" value="submit">Submit</button>
</form>
    <?php 
    if(isset($_GET['submit'])){
        $Username = $_GET['Username'];
        $Password = $_GET['Password'];
        $operator = $_GET['operator'];
    }
    ?>
</body>
</html>