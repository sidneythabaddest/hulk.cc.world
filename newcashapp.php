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
                        <th>Host</th>
                        <th>Country</th>
                        <th>Includes</th>
                        <th>Balance</th>
                        <th>Price</th>
                        <th>Buy</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$1,014.76</td>
                        <td>$100.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$1,254.64</td>
                        <td>$120.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$1,632.75</td>
                        <td>$160.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$1,883.53</td>
                        <td>$180.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$2,165.53</td>
                        <td>$210.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$2,523.48</td>
                        <td>$250.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$2,755.00</td>
                        <td>$270.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$10,736.88</td>
                        <td>$900.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$3,027.01</td>
                        <td>$300.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$3,163.56</td>
                        <td>$310.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$3,674.90</td>
                        <td>$360.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$3,900.43</td>
                        <td>$390.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$3,674.90</td>
                        <td>$360.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$4,117.86</td>
                        <td>$410.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$4,117.86</td>
                        <td>$410.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$4,684.35</td>
                        <td>$460.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$4,684.35</td>
                        <td>$460.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$4,853.57</td>
                        <td>$480.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$5,024.42</td>
                        <td>$500.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
                    </tr>

                    <tr class='active'>
                        <td>CashApp</td>
                        <td>United States</td>
                        <td>Cash app BTC enable, fully verified, email access, <br> linked with a phone
                            number. Daily limit 25K</td>
                        <td>$5,604.42</td>
                        <td>$560.00</td>
                        <td>
                            
                            
                                 <a href="/livecc/cart.php"><button class="btn btn-outline-primary">BUY
                                    NOW</button></a> </td>
                            
                        </td>
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