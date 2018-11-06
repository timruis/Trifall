<!DOCTYPE html>
<html lang="en">
<head>


    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("january 1, 2019 23:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <title>Coming Soon 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="size1 bg0 where1-parent">
    <!-- Coutdown -->
    <div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('images/bg.jpg');">
        <div class="wsize2 flex-w flex-c-m cd100 js-tilt">
            <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                <span class="l2-txt1 p-b-9 days" id="days"></span>
                <span class="s2-txt4">Days</span>
            </div>

            <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                <span class="l2-txt1 p-b-9 hours" id="hours"></span>
                <span class="s2-txt4">Hours</span>
            </div>

            <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                <span class="l2-txt1 p-b-9 minutes" id="minutes"></span>
                <span class="s2-txt4">Minutes</span>
            </div>

            <div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
                <span class="l2-txt1 p-b-9 seconds" id="seconds"></span>
                <span class="s2-txt4">Seconds</span>
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
        <div class="wrap-pic1">
            <img src="images/icons/logo.png" alt="LOGO">
        </div>

        <div class="p-t-50 p-b-60">
            <p class="m1-txt1 p-b-36">
                We are working hard to build a great <span class="m1-txt2">Website for a great service</span>, Check <a href="?build=token">this link</a> to have a first look on what we are working!
            </p>
            <p class="m1-txt1 p-b-36">
                Our website is <span class="m1-txt2">Coming Soon</span>, follow us for updates now!
            </p>
            <?php
            if (!empty($_POST["input"])) {

                echo "
					<p  class=\"s2-txt3 p-t-18\">
					<span style=\" ". $_POST["input"] ." </span>
					</p>
					";
            }

            ?>
            <form class="contact100-form validate-form" method="post">
                <div class="wrap-input100 m-b-10 validate-input" data-validate = "Name is required">
                    <input class="s2-txt1 placeholder0 input100" type="text" name="name" placeholder="Your Name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 m-b-20 validate-input" data-validate = "Email is required: ex@abc.xyz">
                    <input class="s2-txt1 placeholder0 input100" type="text" name="email" placeholder="Email Address">
                    <span class="focus-input100"></span>
                </div>

                <div class="w-full">
                    <button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04">
                        Subscribe
                    </button>
                </div>
            </form>


            <p class="s2-txt3 p-t-18">
                And don’t worry, we hate spam too! You can unsubcribe at anytime.
            </p>
        </div>

        <p/>
        <p/>
        <p/>
    </div>
</div>





<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/moment.min.js"></script>
<script src="vendor/countdowntime/moment-timezone.min.js"></script>
<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
<script src="vendor/countdowntime/countdowntime.js"></script>

<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
