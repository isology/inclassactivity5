<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="Activity5-preview.php" method="post">
    <h1>Registration Form </h1>
    Name:  <input type="text" placeholder="" name="name"></input>
    <br>
    Username:  <input type="text" name="username" ></input>
    <br>
    Password:  <input type="password" name="password"></input>
    <br>
    Adress:  <input type="text" name="address"></input>
    <br>
    Country:  
    <select aria-placeholder="select country" name="country">
        <option selected>select a country</option>
        <option value="USA">USA</option>
        <option value="Germany">Germany</option>
        <option value="France">France</option>
    </select>
    <br>
    ZIP Code:  <input type="text" name="ZIP"></input>
    <br>
    Email:  <input type="email" name="email"></input>
    <br>
    Sex:  <input type="radio" >Male</input> <input type="radio">Female</input>
    <br>
    Language:  <input type="checkbox">English</input> <input type="checkbox">French</input> <input type="checkbox">Germany</input>
    <br>
    about: <textarea cols="35" rows="5" name="about"></textarea>
    <br>
    <button name="submit">submit</button>
</form>
</body>
</html>