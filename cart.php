<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Tools Shop with verified and best tools, cashapp, paypal, rdp, e.t.c</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body style="background-color:#646D7E;">


    <div class="container-fluid" style="background-color:#52595D; padding: 5px; color: white;">
       
    </div>


    <div class="container-fluid majorBody">
        <div class="row">

            <div class="col-md-4 col-md-offset-4" style="background-color:green; padding: 5px; color: 
            black;">
                <u>
                    <h4 align="center">Make Payments</h4>
                </u>

                <p style="color:black;">Please scan the QR code or copy adress manually to make sure you are
                    using correct address...For any payment you made wait for at least 2-3 confirmation then refresh
                    this payment page.. then proceed to buy items
                </p>
                <img alt="Pay with bitcoin" src="Bitcoin-icon.png" style="margin-left: 100px;" height="170" width="170"
                    data-pagespeed-url-hash="2743743743"
                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                <br><br><label for="btcadress">To This Address</label>

                <input type="text" class="form-control" value="bc1q83vvdds6uwej7t02fmmp9rxdpucxulc3mv9t8s" id="myInput">
                <button style="background-color:#2c3e50; padding: 5px; color: black;><span class=" glyphicon=""
                    glyphicon-copy"=""> Copy </button>
                <br>
                <h5 style="color: black;">Hello! user please note that the above payment adress is for
                    bitcoin users only.</h5><br>
                <h5 align="center">When you get that success
                    message that we have received your money, you can close this page, it will be automatically added
                    upon confirmation </h5><br>

                <div id="messagecontent2" align="center">
                   <br><br>
                    <div id="messagecontent" align="center">
                        <div class="alert alert-danger">Payment not yet completed ! If you sent the money, don't close
                            this page until the transaction is registered !

                        </div>
                    </div>
                </div>

            </div>
        </div>

        
     

        <div class="clearfix"></div>
        <div class="container-fluid" style="background-color:#52595D; padding: 10px; color: white; ">
            <center><a href="https://t.me/Dark_Bucks" target="_blank"></a> </center>
            <center><b> hulk.cc.com </b><sup>® </sup>| Copyright © 2022 , All rights reserved. 2017 - 2022 </center>
        </div>
    </div>
    <!------genral body wraps starts--------------->
    <script src="./js/msg.js"></script>



</body>

</html>