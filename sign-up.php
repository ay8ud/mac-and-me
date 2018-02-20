<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->


<html>
<head>
    <title>Mac & Me - Sign Up</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <script type="text/javascript">
        function validate() {

            if (document.myForm.Name.value == "") {
                alert("Please provide your name!");
                document.myForm.Name.focus();
                return false;
            }
            if (document.myForm.EMail.value == "") {
                alert("Please provide your Email!");
                document.myForm.EMail.focus();
                return false;
                Javascript
                355
            }
            if (document.myForm.Zip.value == "" ||
                isNaN(document.myForm.Zip.value) ||
                document.myForm.Zip.value.length != 5) {
                alert("Please provide a zip in the format #####.");
                document.myForm.Zip.focus();
                return false;
            }
            if (document.myForm.Country.value == "-1") {
                alert("Please provide your country!");
                return false;
            }
            return (true);
        }

    </script>

</head>

<body class="no-sidebar">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <div id="header" class="container">

                <!-- Logo -->
                <h1 id="logo"><a href="index.html">Mac & Me</a></h1>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li class="break"><a href="sign-up.html">Sign Up</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                </nav>

            </div>
        </div>


        <div id="footer-wrapper">
            <div id="footer" class="container">
                <div class="log-form" style="text-align: center; width:30%;margin-left:auto;margin-right:auto;">
                    <h2 style="text-align: center">Sign Up</h2>
                    <p></p>
                    <form action="sign-up2.php" method = "post">
                        <p>First Name</p>
                        <input type="text" name="FirstName" placeholder="First Name" />
                        <p></p>

                        <p>Last Name</p>
                        <input type="text" name="LastName" placeholder="Last Name" />
                        <p></p>

                        <p>Email</p>
                        <input type="text" name="Email" placeholder="Email" />
                        <p></p>


                        <p>Password</p>
                        <input type="text" name="Password" placeholder="Password" />
                        <p></p>

                        <p>Re-enter Password</p>
                        <input type="text" name="Password" placeholder="Re-enter Password" />
                        <p></p>

                        <p>Street Address</p>
                        <input type="text" name="Address" placeholder="Street Address" />
                        <p></p>

                        <p>City</p>
                        <input type="text" name="City" placeholder="City" />
                        <p></p>

                        <!--                        <input type="text" title="state" placeholder="State" />-->
                        <p>State</p>
                        <select name="State">
                            <option value="-1" selected>Select State...</option>
                            <option value="1">Alabama</option>
                            <option value="2">Alaska</option>
                            <option value="3">Arizona</option>
                            <option value="4">Arkansas</option>
                            <option value="5">Arizona</option>
                            <option value="6">Arizona</option>
                            <option value="7">Arizona</option>
                            <option value="8">Arizona</option>
                            <option value="9">Arizona</option>
                            <option value="10">Arizona</option>
                            <option value="11">Arizona</option>
                            <option value="12">Arizona</option>
                            <option value="13">Arizona</option>
                            <option value="14">Arizona</option>
                            <option value="15">Arizona</option>
                            <option value="16">Arizona</option>
                            <option value="17">Arizona</option>
                            <option value="18">Arizona</option>
                            <option value="19">Arizona</option>
                            <option value="20">Arizona</option>
                            <option value="21">Arizona</option>
                            <option value="22">Arizona</option>
                            <option value="23">Arizona</option>
                            <option value="24">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>
                            <option value="3">Arizona</option>

                        </select>
                        <p></p>

                        <!--                        	
 ·  ·  ·  · California · Colorado · Connecticut · Delaware · Florida · Georgia · Hawaii · Idaho · Illinois · Indiana · Iowa · Kansas · Kentucky · Louisiana · Maine · Maryland · Massachusetts · Michigan · Minnesota · Mississippi · Missouri · Montana · Nebraska · Nevada · New Hampshire · New Jersey · New Mexico · New York · North Carolina · North Dakota · Ohio · Oklahoma · Oregon · Pennsylvania · Rhode Island · South Carolina · South Dakota · Tennessee · Texas · Utah · Vermont · Virginia · Washington · West Virginia · Wisconsin · Wyoming-->
                        <p>Zip Code</p>
                        <input type="text" name="Zipcode" placeholder="5-digit Zip Code" />
                        <p></p>
                        <p></p>
                        <button type="submit" class="btn">Sign Up</button>
                    </form>
                </div>
                <!--end log form -->
            </div>

        </div>

    </div>

    <!-- Scripts -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

</body>

</html>
