<!DOCTYPE html>
<html lang="en">
<head>
    <title>Preview</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(empty($_POST['name'])==true)
{
    echo $_POST["invalid input"]."<br>";
}else{
    echo $_POST['name']."<br>";
}

if(empty($_POST['username'])==true)
{
    echo "invalid input"."<br>";
}else{
    echo $_POST['username']."<br>";
}

if(empty($_POST['password'])==true)
{
    echo "invalid input"."<br>";
}else{
    echo $_POST['password']."<br>";
}

if(empty($_POST['address'])==true)
{
    echo "invalid input"."<br>";
}else{
    echo $_POST['address']."<br>";
}
if(empty($_POST['ZIP'])==true)
{
    echo "invalid input"."<br>";
}else{
    echo $_POST['ZIP']."<br>";
}
if(empty($_POST['email'])==true)
{
    echo "invalid input"."<br>";
}else{
    echo $_POST['email']."<br>";
}
if(empty($_POST['about'])==true)
{
    echo "invalid input"."<br>";
}else{
    echo $_POST['about']."<br>";
}
    ?>
</body>
</html>