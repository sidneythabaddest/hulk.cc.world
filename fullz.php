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
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="./index.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <header>
        <nav class="parent ">
        <div>
				<img class="logo" src="./map.jpeg" alt="" style="width:25px" margin-left:-10px;>
			</div>
            <ul class="nav-links">
            <li> <a href="/livecc/">HOME <i class="fas fa-home"></i></a> </li>
				<li> <a href="/livecc/newcc.php"> LIVE CC <i class="fas fa-credit-card"></i></a> </li>
				<li> <a href="/livecc/newcashapp.php"> CASHAPP LOGS <i class="fas fa-dollar-circle"></i></a> </li>
                <li> <a href="/livecc/newpaypal.php"> PAYPAL LOGS</a> </li>
                <li> <a href="/livecc/fullz.php"> FULLZ</a> </li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

        </nav>

    </header>
</head>

<body>


    <div class="container-fluid">

        <table class="table table-hover table-striped   table-bordered table-dark">


            <table class="table">
                <thead>
                    <tr>

                        <th> FULLZ CVV </th>
                        <th>DETAILS </th>

                        <th>PRICE</th>

                        <th class="text-center">BUY NOW
                        </th>
                </thead>
                <tbody>
                    <tr>

                        <td>USA FULLZ </td>
                        <td>US dob+ssn CC Fullz(CVV) x10 </td>
                        <td>150 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>

                    <tr>

                        <td>USA FULLZ </td>
                        <td>US dob+ssn CC Fullz(CVV) x15 </td>
                        <td>200 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>USA FULLZ </td>
                        <td>US dob+ssn CC Fullz(CVV) x25 </td>
                        <td>300 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>USA FULLZ </td>
                        <td>US dob+ssn CC Fullz(CVV) x20 </td>
                        <td>230 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>USA FULLZ Premium </td>
                        <td>US dob+ssn CC Fullz(CVV) x50 </td>
                        <td>1000 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>Canada Fullz </td>
                        <td>Canada VISA CC Fullz(CVV) x10 </td>
                        <td>130 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>

                    <tr>

                        <td>Canada Fullz </td>
                        <td>Canada MASTERCARD CC Fullz(CVV) x20 </td>
                        <td>250 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>Canada Fullz </td>
                        <td>Canada VISA CC Fullz(CVV) x30 </td>
                        <td>340 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>Canada Fullz </td>
                        <td>Canada VISA+MASTER CC Fullz(CVV) x50 </td>
                        <td>450 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>Canada Fullz </td>
                        <td>Canada MIXED CC Fullz(CVV) x100 </td>
                        <td>1500 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>

                    <tr>

                        <td>UK Fullz </td>
                        <td>UK Fullz </td>
                        <td>UK Fullz
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>

                    <tr>

                        <td>UK Fullz </td>
                        <td>UK Fullz </td>
                        <td>50 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>UK Fullz </td>
                        <td>UK Fullz </td>
                        <td>50 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>UK Fullz </td>
                        <td>UK Fullz </td>
                        <td>50 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>UK Fullz </td>
                        <td>UK Fullz </td>
                        <td>50 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>Europe Fullz </td>
                        <td>Europe Fullz </td>
                        <td>100 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>

                    <tr>

                        <td>Europe Fullz </td>
                        <td>Europe Fullz </td>
                        <td>50 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>Europe Fullz </td>
                        <td>Europe Fullz </td>
                        <td>50 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>Europe Fullz </td>
                        <td>Europe Fullz </td>
                        <td>50 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>
                    <tr>

                        <td>Europe Fullz </td>
                        <td>Europe Fullz </td>
                        <td>50 USD
                        </td>

                        <td class="text-center">  <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a>  </td></td>
                    </tr>

                </tbody>
            </table>
        </table>
    </div>


    <script>

        $(document).ready(function () {
            $('.menu-btn').click(function () {
                ('.nav-list').addClass('active')
            })

        })

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./index.js"></script>
</body>

</html>