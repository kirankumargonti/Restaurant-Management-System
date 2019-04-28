<?php
  require "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>SpicyScoff</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest     compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- Bootstrap Font awesome icons-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/reservation.css">
    <link rel="stylesheet" type="text/css" href="css/style-reservation.css">
   
    
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

<body>
   
    <!--================================Reservation=============================================-->
    <div class="reservation">
        <h1 class="display-2">Reservation</h1>
    </div>

    <!--====================make a reservation==================================================-->
    <div class="container-fluid style1">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center style1">
                <h1 class="display-2">Make a Reservation</h1>
                <p>Please complete the <strong style="color:red">‘make a reservation’</strong> form below
                    with your reservation request.
                    Your booking is only confirmed if written or
                    verbal confirmation is received from us.
                </p>
            </div>
        </div>
    </div>
    <!--=========================reservation==================================-->


    <div id="booking" class="section">
        <div class="section-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Make your reservation</h1>
                        </div>
                        <form action = "./includes/res.inc.php" method = "post">
                            <div class="form-group">
                                <input class="form-control" type="text" name="rname" placeholder="Name of the customer">
                                <span class="form-label">Username</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="date" name="rdate" required>
                                        <span class="form-label">Date</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="time" name="rtime" required>
                                        <span class="form-label">Check IN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" name="rchairs" required>
                                            <option value="" selected hidden >No of chairs</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="remail" placeholder="Enter your Email">
                                        <span class="form-label">Email</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="tel"  name="rphone" placeholder="Enter your Phone number">
                                        <span class="form-label">Phone</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn" name="reservation-submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script>
        $('.form-control').each(function () {
            floatedLabel($(this));
        });

        $('.form-control').on('input', function () {
            floatedLabel($(this));
        });

        function floatedLabel(input) {
            var $field = input.closest('.form-group');
            if (input.val()) {
                $field.addClass('input-not-empty');
            } else {
                $field.removeClass('input-not-empty');
            }
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>



</body>

</html>
<?php
  require "footer.php";
 ?>
