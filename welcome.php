<?php 
session_start();

if ( !$_SESSION['loggedin'] || $_SESSION['loggedin'] != true ) {
    header("location: login.php");
    exit;
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="food.css"> -->
    <link rel="stylesheet" media="screen and (max-width :1300px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username']?></title>
    <div class="container">
        
    </div>
<style>
  html {
    scroll-behavior: smooth;
}

* {
    box-sizing: border-box;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

#navbar {
    display: flex;
    align-items: center;
    position: sticky;
    top: 0px;
}

#navbar::before {
    content: "";
    background-color: black;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    z-index: -1;
    opacity: 0.7;
}

#logo {
    margin-left: 5px;
}

#logo img {
    height: 100px;
    width: 100px;
}

#navbar ul li {
    list-style: none;
}

#navbar ul {
    display: flex;
}

#navbar ul li a {
    display: block;
    color: rgb(255, 255, 255);
    text-decoration: none;
    margin: auto;
    padding: 10px 19px;
    font-weight: 500;
    font-size: 25px;
    text-shadow: 2px 1px black;
}

#navbar ul li a:hover {
    color: white;
    background-color: rgb(214, 46, 46);
}

#home {
    display: flex;
    color: white;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    flex-direction: column;
    height: 600px;
}

#home::before {
    content: "";
    position: absolute;
    background: url('images-food/home.avif') no-repeat center center/cover;
    height: 642px;
    width: 100%;
    z-index: -1;
    opacity: 0.9;
    top: 0px;
    left: 0px;
}

#home h1 {
    color: white;
    text-align: center;
    font-family: 'Bree Serif', serif;
}

#home p {
    color: white;
    text-align: center;
    font-size: 1.5rem;
    font-family: 'Bree Serif', serif;
}

.login {
    background-color: rgb(7, 177, 245);
    color: white;
    margin: 5px 5px;
    padding: 11px 20px;
    font-size: 15px;
    border-radius: 15px;
    border: none;
    justify-content: center;
    cursor: pointer;
    text-shadow: 2px 1px black;
    font-weight: 700;
}

#login-button {
    position: absolute;
    right: 20px;
}

.login:hover {
    color: white;
    background-color: black;
}

.login:visited {
    color: blue;
    background-color: white;
}

h1 {
    color: rgb(245, 243, 240);
    font-size: 60px;
    position: relative;
}

#deliver {
    font-size: 25px;
    text-shadow: 2px 1px black;
}

.order {
    position: relative;
    margin: 20px 5px;
    padding: 5px 15px;
    font-size: 20px;
    border: 0;
    border-radius: 15px;
    background: transparent;
}

#search {
    margin: 5px 5px;
    padding: 8px 20px;
    font-size: 15px;
    border: none;
    border-radius: 15px;
}

#search:hover {
    background-color: rgb(47, 46, 46);
    color: white;
}

search:visited {
    color: blue;
}

.order input[type="text"] {
    font-size: 18px;
    margin: 5px 5px;
    padding: 8px 35px;
    border-radius: 25px;
    border: none;
}

.order input[type="text"]:hover {
    background-color: rgb(21, 21, 21);
    color: white;
}

::placeholder {
    color: rgb(68, 72, 74);
}

.order span {
    font-size: 30px;
}

.h-primary {
    font-size: 3.5rem;
    padding: 10px;
    color: black;
}

.h-secondary {
    font-size: 1.9rem;
    padding: 10px;
    margin: 0px;
}

.center {
    text-align: center;
}


/* services section */


/* .services-container {
    background-color: rgb(212, 236, 245);
} */

#services {
    display: flex;
    margin: 5px 50px 5px 50px;
}

#services .box {
    border: 1px solid red;
    padding: 30px 50px;
    margin: 5px 35px 5px 35px;
    border-radius: 20px;
    background-color: rgb(241, 233, 233);
    width: 33%;
}

#services .box img {
    height: 180px;
    display: block;
    margin: auto;
}


/* clients section */

#clients img {
    height: 200px;
    width: 200px;
    padding: 20px;
}

#clients {
    display: flex;
    position: relative;
    width: 100%;
    align-items: center;
    justify-content: center;
}

.services-container2 {
    position: relative;
    height: 500px;
}

.services-container2::before {
    content: "";
    background: url('images-food/katherine-chase-4MMK78S7eyk-unsplash.jpg') no-repeat center center/cover;
    position: absolute;
    height: 70%;
    width: 100%;
    z-index: -1;
}


/* form styling */

.contact {
    background-image: url('images-food/contact-form.jpg');
    background-repeat: no-repeat;
    background-size: 1700px 690px;;
}

.contact .h-primary {
    color: white;
}

#contact-box {
    color: white;
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center;
}

.form-group {
    font-size: 18px;
    margin: 5px 5px;
    padding: 8px 35px;
    border-radius: 25px;
    border: none;
}

.form-group input[type="text"],
textarea {
    font-size: 18px;
    width: 100%;
    border: none;
    border-radius: 25px;
    padding: 7px 7px;
}

#button {
    font-weight: bolder;
    background-color: aqua;
    font-size: 18px;
    width: 70%;
    display: block;
    margin: auto;
    border: none;
    border-radius: 25px;
    padding: 7px 7px;
}

#button:hover {
    cursor: pointer;
    background-color: rgb(3, 108, 149);
    color: white;
}

.form-group input[type="text"]:hover {
    background-color: black;
    color: white;
}

#navbar-2 {
    background-color: grey;
    display: flex;
    position: relative;
}

#navbar-2 ul {
    display: flex;
    list-style-type: none;
    margin: auto;
    padding: 10px;
}

#navbar-2 ul li a {
    text-decoration: none;
    color: white;
    margin: auto;
    padding: 10px 20px;
    font-size: 19px;
    font-weight: 600;
}

#navbar-2 ul li a:hover {
    color: black;
}

</style>

  </head>
  <body>
    
    
    <!-- <div class="container my-3">
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4>
  <p>Hey how are you doing? Welcome to iSecure. You are logged in as <?php echo $_SESSION['username']?>. Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to logout <a href="/phptutorial/loginsystem/logout.php"> using this link.</a></p>
    </div>
    </div> -->
    <header>
    <?php require 'partials/_nav.php' ?>
        <section id="home">

            <div>
                <h1><strong style="color: black;">We </strong> delivier <strong style="color: red ;"> taste</strong> to <br> your life..</h1>
            </div>




            <div class="order">
                <span id="deliver">Get your food <strong style="color: rgb(223, 37, 37);">deliver</strong> at your  door </span> <br> <br>
                <input type="text" class="btn" placeholder="Search your favourite food">
                <button class="btn" id="search">Search</button>

            </div>

        </section>
    </header>

    <br>
    <br>
    <br>
    <br>



    <section class="services-container">
        <h1 class="h-primary  center">Our services</h1>
        <div id="services">
            <div class="box">
                <img src="images-food/fast-food-png-41602 (1).png" alt="">
                <h2 class="h-secondary center">Food ordering</h2>

                <p class="center">Order in for yourself or for the group, with no restrictions on order value
                </p>

            </div>
            <div class="box">
                <img src="images-food/placeholder.png" alt="">
                <h2 class="h-secondary center">Live Order Tracking
                </h2>
                <p class="center">Know where your order is at all times, from the restaurant to your doorstep
                </p>

            </div>
            <div class="box">
                <img src="images-food/delivery-icon-7980.png" alt="">
                <h2 class="h-secondary center">Lightning-Fast Delivery</h2>
                <p class="center">Experienceour superfast delivery for food delivered fresh & on time
                </p>

            </div>

        </div>

    </section>

    <br>
    <br>
    <br>
    <br>


    <section class="services-container2">

        <h1 class="h-primary center ">Our clients</h1>



        <div id="clients">
            <div class="client-items">
                <img src="logo-images/client1.png" alt="">

            </div>
            <div class="client-items">
                <img src="logo-images/facebook-logo-507-128x128.ico" alt="">

            </div>
            <div class="client-items">
                <img src="logo-images/skype-logo-19924-128x128.ico" alt="">

            </div>
            <div class="client-items">
                <img src="logo-images/microsoft-logo-png-2408-256x256.ico" alt="">

            </div>
            <div class="client-items">
                <img src="logo-images/swiggy.png" alt="">

            </div>
            <div class="client-items">
                <img src="logo-images/zomato.png" alt="">

            </div>
        </div>

    </section>


    <section class="contact">
        <h1 class="h-primary center">Contact us</h1>

        <div id="contact-box">

            <div class="formbox">
                <form action="">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="name" id="email" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="name">Phone Number:</label>
                        <input type="text" name="name" id="Phone Number" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="adress">Address:</label>
                        <textarea name="address" id="adress" cols="5" rows="5"></textarea>
                    </div>
                    <div class="formgroup">
                        <input type="button" name="submit" id="button" value="Submit">
                    </div>
            </div>


            </form>
        </div>

        <br>
        <br>
        <br>
        <br>

    </section>



    <footer class="second-navbar">


        <nav id="navbar-2">
            <div class="navigation">
                <ul>
                    <li class="item"><a href="#">FAQ</a></li>
                    <li class="item"><a href="#">Term of use</a></li>
                    <li class="item"><a href="#">Privacy Policy</a></li>
                    <li class="item"><a href="#">Refund Policy</a></li>
                    <li class="item"><a href="#">&copy; 2022 ! Online food</a></li>
                </ul>
            </div>

        </nav>






    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>