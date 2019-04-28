<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reservation-Successfull</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    
    <style>

    @import url('https://fonts.googleapis.com/css?family=Great+Vibes');
    @import url('https://fonts.googleapis.com/css?family=Tangerine');
    @import url('https://fonts.googleapis.com/css?family=Pacifico');

    :root {
        --shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
            0 6px 20px 0 rgba(0, 0, 0, 0.19);
        --gradient: linear-gradient(to right, #395e81, rgb(203, 119, 206));
    }

    html,
    body {
        margin: 0;
        padding: 0;
    }

    body {
        width: 100%;
        overflow-x: hidden;
    }

    /*-----nav bar-----------------------------*/
    .navbar {
        background-color: rgb(37, 41, 59);
        width: 100%;
        box-shadow: var(--shadow);
        padding: 0px 30px;
    }

    .navbar-brand {
        font-family: 'Great Vibes',
            cursive;
        font-size: 2rem;
        font-weight: bold;
        letter-spacing: 6px;
        color: #ffffff;
    }

    .nav-link {
        color: aliceblue;
        font-size: 25px;
        font-family: 'Times New Roman', Times, serif;
        font-style: italic;
        font-weight: 600;
        float: right;
    }

    .nav-link:hover {
        color: black;
        background-color: beige;
        -webkit-transition: 0.2s;
        transition: 0.2s;
    }

    .login-button {
        box-sizing: border-box;
        border: 2px solid rgb(241, 235, 234);
        border-radius: 10px;
        background: teal;

    }

    .login-button:hover {
        background: white;
        color: black;
    }

    .navbar-toggler {
        background-color: white !important;
        border: 1px solid white !important;
    }

    .navbar-brand:hover {
        color: red;
    }

    .strong {
        color: red;
    }

    .strong:hover {
        color: white;
    }

    /*=======================================================*/
    .main {
        margin: 0;
        padding: 0;
        position: relative;
        width: 100%;
        height: 87.5vh;
        background-image: url(./images/manavabeachresortmoorea_restaurant_13.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .main::after {
        position: absolute;
        content: '';
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.432);
    }

    .name h1{
        position: absolute;
        top: 60%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        color: rgb(11, 37, 61);
        border: 2px solid black;
        font-family: 'Great Vibes',
        cursive;
        font-size: 4rem;
        background-color: white;
        border-radius: 10px;
        font-weight: bolder;
        text-transform: capitalize;
        line-height: 6rem;
        
    }

    @media(max-width:576px) {
        .name h1{
            font-size: 1.5rem;
            line-height: normal;
        }
    }
        
    </style>

</head>

<body>
    <!--==============Nvabar=======================-->
    <nav class="navbar navbar-expand-md navbar-fixed-top">

        <a class="navbar-brand" href="index.php">Spicy<strong class="strong">Scoff</strong>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Reservation.php">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link login-button" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--================================================================================================-->

    <div class="main">

    </div>

    <div class="name">
        <h1>your table has been reserved successfully..!
        </h1>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>