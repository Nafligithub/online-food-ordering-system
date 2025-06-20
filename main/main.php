
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIZZA HUT</title>
    <link rel="stylesheet" href="main.css">
    <style>
        *{
    margin: 0;
    padding: 0;
}
body{
    background: url(image/678.avif);
    background-size: cover;
    background-blend-mode: darken;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.container{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.container h1{
    color: red;
    margin-top: 10px;
    cursor: pointer;
}
.navbar ul li{
    display: inline-block;
    padding: 18px;
    text-transform: uppercase;
}
.navbar ul li a{
    text-decoration: none;
    color: #fff;
    padding: 4px;
    transition: 3.5s;
}
.navbar ul li a:hover{
    box-shadow: 0 3px 50px orangered,0 3px 50px orangered,0 3px 50px orangered,0 3px 50px orangered,0 3px 50px orangered,0 3px 50px orangered;
}
.navbar .container{
    padding: 8px;
    background-color: orangered;
}
.content{
    position: absolute;
    color: rgb(255, 255, 255);
    top:40%;
    left:30%;
}
.content h3{
    font-family: sans-serif;
    font-size: 20px;
    margin-left: 30%;
}
.content h1{
    font-size: 50px;
}
.content p{
    text-align: center;
    margin-top: 17px;
}
.search{
    position: absolute;
    margin-top: 25%;
    margin-left: 42%;
}
.search input{
    outline: none;
    border: none;
    padding: 12px 40px;
    size: 1em;
    width: 100%;
}
.submit{
    position: absolute;
    margin-top: 29%;
    margin-left: 49%;
}
.submit a{
    text-decoration: none;
    color: #fff;
    padding: 12px 25px;
    background-color: orangered;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>PIZZA HUT</h1>
        <div class="navbar">
            <ul>
                <li><a href="main.php">HOME</a></li>
                <li><a href="foodgelary.html">FOOD GALLERY</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="Contact.html">CONTACT</a></li>
                <li><a href="feedback.html">FEEDBACK</a></li>
                <li><a href="login.html">LOGIN</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <h3>Welcome to PIZZA HUT</h3>
        <h1>Rich Healthy and Natural Food</h1>
        <p>Pizza hut is a restaurant located in sri lanka. We have some amazing recipes
           and the most taleted chafe in the country
        </p>
    </div>
    
  <!--  <div class="search">
        <input type="text" placeholder="Search Food">
    </div>
    <div class="submit">
        <a href="#">Submit</a>
    </div>-->
</body>
</html>