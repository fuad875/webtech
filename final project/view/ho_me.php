<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Smart Resturant</title>

  <style>
    .nav {
      width: 800px;
      float: right;
    }

    .nav ul {
      margin: 5px auto;
    }

    .nav ul li {
      width: 120px;
      float: left;
      text-align: center;
      padding: 10px;
    }

    .nav ul li a {
      text-decoration: none;
      color: #fff;
    }

    .nav ul li:hover {
      background-color: firebrick;
    }

    .nav ul li a:hover {
      color: black;
    }

    .wel {
      width: 300px;
      height: 539px;
      background-color: darkslategrey;
      opacity: 0.7;
      padding: 55px;
    }

    .wel h1 {
      text-align: center;
      text-transform: uppercase;
      font-weight: 100px;
    }

    .wel h2 {
      text-align: center;
      text-transform: uppercase;
      font-weight: normal;
      margin: 40px auto;
    }

    .wel h4 {
      text-align: justify;
      color: burlywood;
      font-weight: normal;
    }

    .res form {
      text-align: center;
    }

    input[type="button"] {
      background-color: darkslategrey;
      color: white;
      padding: 10px;
      margin: -14px auto;
      outline: none;
      padding-left: 50px;
      padding-right: 50px;
      text-align: center;
    }

    input[type="button"]:hover {
      background-color: firebrick;
      outline: none;
      transition: 2s ease all;
    }

    body {
      font-family: Georgia, "Times New Roman", Times, serif;
      color: white;

      background: url(https://expertphotography.com/wp-content/uploads/2020/06/diy-food-background-8.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }

    .booking-btn {
      text-align: center;
    }

    .fade-in {
      animation: fadeIn ease 5s;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
    }
  </style>
</head>

<body>
  <div class="nav">
    <ul type="none">
      <li><a href="">Home</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="">Contact Us</a></li>
      <li><a href="">Profile</a></li>
      <li><a href="login.php">Log In</a></li>

    </ul>
  </div>
  <div class="wel fade-in">
    <h1>WELCOME</h1>
    <h4>
      Welcome to our resturant.We serve food with love. Hunger gbfiygf hurhf
      ufgrugfurfjhv rgyreg ytfryu wehjgfyi yitr e3r gfhygrir ytryetg
      rcguyfrgetiytriew hygfiyer fqi
    </h4>
    <h2>Reservation</h2>
    <h4>If you want you can also book us for your special day</h4>
    <div class="res"></div>
    <form action="" method="POST">
      <div class="booking-btn">
        <input type="button" value="Book Now" />
      </div>
    </form>
  </div>
</body>

</html>