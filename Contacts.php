<!DOCTYPE html>
<html lang="en" manifest="cache.appache">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="contacts.css">
    <title>Contacts-Echo School</title>

    <style>
        /********Navigation Bar Style*******/
        
        nav ul {
            list-style-type: none;
            padding-left: 17px;
            margin: 0;
            background-color: #c6ecc6;
            overflow: hidden;
        }
        /*************************fixed on scroll**********************/
        
        .fix {
            position: fixed;
            top: 0px;
            width: 1024px;
            z-index: 2;
        }
        /*************************list elements**********************/
        
        nav li {
            float: left;
            height: 40px;
        }
        /*************************list anchor elements on the left**********************/
        
        nav li a {
            padding: 13px 20px;
            text-decoration: none;
            color: #f35300;
            display: block;
            font-family: sans-serif;
            font-size: 13px;
            font-weight: 200;
        }
        /*************************change background color on hover**********************/
        
        nav li a:hover:not(.active) {
            background-color: gray;
        }
        /******************orange background color of the current page*******************/
        
        .active {
            background-color: #000000;
        }
        /***************search button*************/
        
        nav button {
            border: 1px solid #262626;
            border-radius: 0;
            margin: 10px 15px;
            margin-left: 10px;
            padding: 2px 10px;
            font-size: 12px;
            background: #000000;
            font-weight: 500;
            color: white;
            text-transform: uppercase;
            cursor: pointer;
        }
        /***************text input*************/
        
        nav input[type="text"] {
            border: 1px solid #262626;
            padding: 3px 0px 3px 3px;
            margin-top: 10px;
            font-size: 11px;
        }
        /**********************End of Navigation Bar style*********************/
        /***************The Modal(background) style**************/
        
        .modal2 {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }
        /**************Modal Content******************/
        
        .modal2-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 700px;
        }
    </style>
    <script>
        //function of the search button
        function search() {
            var text = "Team Andin Budakova Blendi Dedushi Student";
            var message = document.getElementById("demo");
            var word = document.getElementById('srch').value; //gets the input
            if (word == "") {
                try {
                    throw "empty"; //throws an error if the input is empty
                } catch (err) {
                    message.innerHTML = "Input is " + err; //displays the error
                }
            } else {
                var reg = new RegExp(word, "i"); //creates a regular expression object for matching text with the word
                var res = reg.test(text); //tests whether the word exist on the text(true or false)
                if (res) {
                    var obj = reg.exec(text); //text for a match in the text
                    document.getElementById("demo").innerHTML =
                        "Results:   The word '" + obj + "' was found in position " + obj.index + " in the text: " + obj.input;
                } else {
                    document.getElementById("demo").innerHTML = "No results found.";
                }
            }
            var modal = document.getElementById('Modal2'); //displays the modal
            modal.style.display = "block";

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
    </script>

</head>

<body style="width: 1024px; margin:auto; background-color: #c6ecc6;" onload="startTime()">
    <div style="background-color: white">
        <!--*************HEADER*******************-->
        <header>

            <div class="header">
                <ol style="float:left">
                    <li><button onclick="document.getElementById('id01').style.display='block'" class="btn">Login</button> | </li>
                    <li><button onclick="document.getElementById('id02').style.display='block'" class="btn">Sign up</button></li>
                </ol>

                <ol style="float:right">
                    <li><button onclick="document.getElementById('id01').style.display='block'" class="btn">Login</button> | </li>
                    <li><button onclick="document.getElementById('id02').style.display='block'" class="btn">Sign up</button> | </li>
                    <li><a class="a" href="#bottom"> Bottom</a> | </li>
                    <li><a class="a" href="Contacts.php#team"> Team </a></li>
                </ol>

            </div>
            <br>
            <!--********************** LOGIN MODAL ********************* -->
            <div id="id01" class="modal">

                <!-- ************ MODAL CONTENT ************* -->
                <form class="modal-content animate">
                    <div style="padding: 0px; margin: 5%">
                        <p style="font-size: 30px;float: left;margin: 0px;padding: 0px"><b>Login</b></p>

                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <br><br>
                        </div>
                        <br>
                        <div>
                            <label for="uname" style="font-family: 'Helvetica', sans-serif"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" id="uname" required autocomplete="on">

                            <label for="psw" style="font-family: 'Helvetica', sans-serif"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" id="psw" required>

                            <button id="logInButton" type="submit">Login</button>
                            <label>
                                            <input type="checkbox" checked="checked" name="remember"> Remember me
                                        </label>
                        </div>
                        <br>
                        <div class="bottom-container">
                            <div class="row">
                                <div class="col">
                                    <a href="#" onclick="document.getElementById('id01').style.display='none';document.getElementById('id02').style.display='block'" style="color:white" class="btn-modal">Sign up</a>
                                </div>
                                <div class="col">
                                    <a href="#" style="color:white" class="btn-modal">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="vl">
                            <span class="vl-innertext">Login with Social Media</span>
                        </div>
                        <br><br>
                        <div class="" style="clear: both">
                            <a href="https://web.facebook.com/login" class="fb btn-modal" target="_blank">
                                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                            </a>
                            <a href="https://twitter.com/login" class="twitter btn-modal" target="_blank">
                                <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                            </a>
                        </div>
                        <br>
                        <div style="background-color:white">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="border-radius: 4px">Cancel</button>

                        </div>
                    </div>
                </form>
                <!-- ************** MODAL CONTENT END ************** -->
            </div>
            <!--********************** LOGIN MODAL END ********************* -->
            <hr>
            <!-- -------------- SIGNUP MODAL -------------- -->
            <div id="id02" class="modal">
                <!-- -------------- MODAL CONTENT -------------- -->

                <form class="modal-content1 animate">
                    <div style="padding: 0px; margin: 5%">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>

                        <p style="font-size: 30px;float: left;margin: 0px;padding: 0px"><b>Sign Up</b></p>
                        <br><br>
                        <p>Please fill this form to create an account.</p>

                        <hr>
                        <input style="width: 220px;float: left" type="text" placeholder="First Name" name="name" required autofocus>
                        <input style="width: 220px;float: right" type="text" placeholder="Last Name" name="surname" required>
                        <input type="email" placeholder="Email" name="email" required>
                        <br>
                        <input type="password" placeholder="Password" name="psw" required pattern="[A-Za-z0-9].{6,}" title=" Six or more characters">
                        <br>
                        <input type="password" placeholder="Repeat Password" name="rpsw" required>
                        <div style="display: flex">
                            <p style="padding: 0px;margin: 0px"><b>Gender: </b></p>
                            <input type="radio" name="gender" value="male"> Male<br>
                            <input type="radio" name="gender" value="female"> Female<br>
                            <input type="radio" name="gender" value="Unspecified" checked> Unspecified<br>
                        </div>
                        <br>
                        <div style="display: flex">
                            <label for="bday" style="font-family: 'Helvetica', sans-serif;float: left"><b>Birthday: </b></label>
                            <input style="margin-left: 20px" type="date" id="bday" required>
                        </div>

                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                        <p>Already have an account?<a onclick="document.getElementById('id02').style.display='none';document.getElementById('id01').style.display='block'" href="#" style="color:dodgerblue">Sign In</a> </p>

                        <div style="height: 55px">
                            <button onclick="document.getElementById('id02').style.display='none'" id="signUpCancel" type="button">Cancel</button>
                            <button id="signUpButton" type="submit">Sign Up</button>
                        </div>
                    </div>
                </form>

                <!-- -------------- MODAL CONTENT END -------------- -->
            </div>
            <!-- -------------- SIGNUP MODAL END -------------- -->
            <div id="container">
                <div class="box1">
                    <span style="font-size: 32px;margin:0px;padding:0px">
                        Education

                    </span>
                    <br>
                    <span style="font-size: 12px;margin:0px;padding: 0px">
                    Nurture, Inspire, Flourish
                    </span>

                </div>
                <div class="box2">
                    <img src="Images/eco_schools_logo.jpg" width="468px" height="60px" alt="Llogo" style="float: right;overflow: auto">


                </div>

            </div>

            <!--**********************NAV_BAR*******************-->
            <div id="Modal2" class="modal2">

                <!--**********************Modal Content**********-->
                <div class="modal2-content">
                    <p id="demo"></p>
                </div>

            </div>

            <nav>
                <br>
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Events.php">Events</a></li>
                    <li><a class="active" href="Contacts.php">Contact</a></li>

                    <li style="float:right;"><button onclick="search()">Search</button>
                        <li style="float:right;"><input id="srch" type="text" placeholder="Search Term Here..."></li>
                </ul>
                <br><br>
                <!--*******************************NAV_BAR_END***************************-->
            </nav>
        </header>
        <!-- **************************************HEADER_END******************************** -->



        <!--    ---------------------------------------------------  CONTACTCS  ------------------------------------------------------------------ -->





        <!-- ******************************************************  TEAM  ************************************************************* -->
        <h1 id="team" style="text-align: center; background-color: black; font-family: Arial, Helvetica, sans-serif; color:#f35300;">Team</h1>

        <div class="rresht" id="kontaktet">
            <div class="shtylle">
                <div class="karta">


                    <a href="andin.php ">
                        <img src="Images/bitmoji.png" alt="Andin" style="width:100%"></a>
                    <div class="vazo">
                        <h2>Andin Budakova</h2>

                        <p style="color: grey"> Student</p>

                        <p>
                            <a href="mailto:abudakova02@gmail.com" style=" text-decoration: none; color: white;">
                                <button style="position: relative" class="butoni0">
                                    Contact</button></a>
                        </p>
                    </div>
                </div>
            </div>





            <div class="shtylle">
                <div class="karta">
                    <a href="blendi.php ">
                        <img src="Images/bitmoji2.jpg" alt="Blendi" style="width:100%"></a>
                    <div class="vazo">
                        <h2>Blendi Dedushi</h2>
                        <p style="color: grey">Student </p>

                        <p><a href="mailto:blendi.dedushaj1@gmail.com" style=" text-decoration: none; color: white;"><button style="position: relative" class="butoni0">
                                    Contact</button></a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ************************************************* Contact GET IN TOUCH ************************************************* -->

        <form method="get" action="" id="mainForm">

            <fieldset>
                <legend>Get In Touch</legend>
                <table>
                    <tr>
                        <td colspan="2">
                            <p>
                                <label>First Name</label><br />
                                <input type="text" id="text" name="firstname" placeholder="Your name..." size="80" class="required" />
                            </p>
                            <p>
                                <label>Last Name</label><br />
                                <input type="text" id="text" name="lastname" placeholder="Your last name..." size="80" class="required" />
                            </p>
                            <p>
                                <label>Email</label><br />
                                <input type="email" id="text" name="email" placeholder="Your email..." size="80" class="required" />
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                <label>Continent</label><br />
                                <select name="continent">
                                    <option>Choose continent</option>
                                    <option>Africa</option>
                                    <option>Asia</option>
                                    <option>Europe</option>
                                    <option>North America</option>
                                    <option>South America</option>
                                    <option>Australia</option>
                                    <option>Antarctica</option>
                                </select>
                            </p>
                            <p>
                                <label>Country</label><br />
                                <select name="country">
                                    <option>Choose country</option>
                                    <option>Albania</option>
                                    <option>Brazil</option>
                                    <option>United States</option>
                                    <option>Kosovo</option>
                                    <option>Scotland</option>
                                    <option>Canada</option>
                                    <option>Italy</option>
                                </select>
                            </p>


                            <p>
                                <label>City</label><br />
                                <input type="text" id="text" name="City" placeholder="Your city..." size="80" class="required" />
                            </p>

                        </td>
                        <td>
                            <div class="box">
                                <label>Gender </label><br />
                                <input type="radio" name="gender" value="1">Male<br />
                                <input type="radio" name="gender" value="2" checked>Female<br />
                                <input type="radio" name="gender" value="3" checked>Unspecified<br />

                            </div>
                            <div class="box">
                                <label>Interests </label><br />
                                <input type="checkbox" name="cc">Technology <br />
                                <input type="checkbox" name="cc">Sport <br />
                                <input type="checkbox" name="cc">Science <br />
                                <input type="checkbox" name="cc">Movies<br />
                                <input type="checkbox" name="cc">Vehicles<br />
                                <input type="checkbox" name="cc">Other
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="rectangle">
                                <label>I accept terms and conditions for this website</label>
                                <input type="checkbox" name="accept" class="required">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                <label>Rate this page: <br /></label>
                                <input type="number" min="1" max="5" name="rate" />
                            </p>
                        </td>
                        <td>
                            <div class="box">
                                <p>
                                    <label>Date Taken: <br /></label>
                                    <input type="date" name="date" />
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="rectangle centered">
                                <input type="submit" class="rounded"> <input type="reset" value="Clear Form" class="rounded">

                                <br />

                                <button class="rounded" onclick="getLocation()">Get your coordinates</button>
                                <p id="location" style="color: black; font-weight: bold; "></p>

                            </div>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

        <br>


        <!-- Geolocation -->
        <script>
            var x = document.getElementById("location");

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function showPosition(position) {
                x.innerHTML = "Latitude: " + position.coords.latitude +
                    "<br>Longitude: " + position.coords.longitude;
            }
        </script>
        <!-- / -->



        <script>
            //funksioni qe validon nese fusha eshte e zbrazet
            function EshteZbrazet(inputi) {
                if (inputi.type == "checkbox") {
                    if (inputi.checked) {
                        return false;
                    } else {
                        return true;
                    }
                } else {
                    if (inputi.value == "") {
                        return true;
                    }
                    return false;
                }
            }

            //funksioniqe ngjyros prapavijen e elementit te caktuar
            // ne rast se nuk validohet sipas funksionit
            function NgjyrosPrapavijen(elementi) {
                elementi.parentNode.style.backgroundColor = "#AA0000";
                elementi.style.backgroundColor = "#AA0000";
                elementi.parentNode.style.color = "#FFFFFF";
            }

            //funksioni qe largon ngjyrosjen e prapavijes

            function LargoPrapavijen(elementi) {
                elementi.parentNode.style.backgroundColor = "#FFFFFF";
                elementi.parentNode.style.color = "#000000";
            }

            // ne eventin onload te focus i elemtenteve required japim nje prapavije me ngjyre
            window.onload = function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                // add a zero in front of numbers<10
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
                t = setTimeout(function() {
                    startTime()
                }, 1000);
                var forma = document.getElementById("mainForm");
                var elementetRequired = document.querySelectorAll(".required");
                for (var i = 0; i < elementetRequired.length; i++) {
                    elementetRequired[i].onfocus = function() {
                        this.style.backgroundColor = "#EEEE00";
                    }
                }
                forma.onsubmit = function(e) {
                    var elementet = document.querySelectorAll(".required");
                    for (var j = 0; j < elementet.length; j++) {
                        if (EshteZbrazet(elementet[j])) {
                            e.preventDefault();
                            NgjyrosPrapavijen(elementet[j]);
                        } else {
                            LargoPrapavijen(elementet[j]);
                        }
                    }
                }

            }
        </script>




        <!-----------------------------------------Footer--------------------------------------------------->
        <footer class="footer">
            <div class="details" id="bottom">
                <h3><a href="#" style="text-transform: capitalize;">Stay in the know!</a></h3>
                <hr/>
                <p style="color: antiquewhite;">Please enter your e-mail to join our mailing list</p>
                <form>
                    <input type="email" placeholder="e-mail..." multiple><input type="submit" value="Enter">
                </form>
                <p style="color: antiquewhite;">To unsubscribe please click<a href="#"><b>here</b></a></p>
                <br>
                <p><small><a href="#top">Go to the top</a></small></p>
            </div>
            <div class="details">
                <h3 style="float: center"><a href="#">Services</a></h3>
                <hr>
                <p style="color: antiquewhite;"><a href="#"><b>Apply</b></a> at our schools</p>
                <p style="color: antiquewhite;">Take Scholarship <a href="#"><b>Exam</b></a></p>
                <br>
                <p style="color: antiquewhite;"><i><small>Follow us on social networks</small></i></p>
                <a href="https://web.facebook.com/?_rdc=1&_rdr" target="blank" title="Facebook">
                    <img src="Images/facebook.png" alt="Facebook" style="width: 20px; height: 20px;"> </a>

                <a href="https://www.instagram.com/" target="blank" title="Instagram">
                    <img src="Images/instagram.png" alt="Instagram" style="width: 20px; height: 20px;"> </a>

                <a href="https://www.pinterest.com/" target="blank" title="Pinterest">
                    <img src="Images/pinterest.png" alt="Pintesrest" style="width: 20px; height: 20px;"></a>

                <a href="https://twitter.com/" target="blank" title="Twitter">
                    <img src="Images/twitter.png" alt="Twitter" style="width: 20px; height: 20px;"></a>

                <a href="https://www.youtube.com/" target="blank" title="Youtube">
                    <img src="Images/youtube.png" alt="Youtube" style="width: 20px; height: 20px;"></a>
            </div>
            <div class="details">
                <h3 style="float: center"><a href="Contacts.php">Contacts</a></h3>
                <!--Duhet te hapet new file Contacts.html-->
                <hr>
                <p style="color: lightseagreen; font-size: 14px;"><b>E-mail</b></p>
                <p style="color: antiquewhite; font-size: 14px;"><i>ab.bd@ecoschools.com</i></p>
                <p style="color: lightseagreen; font-size: 14px;"><b>Tel:</b></p>
                <p style="color: antiquewhite; font-size: 14px;"><i>+383-666-999</i></p>
                <p style="color: lightseagreen; font-size: 14px;"><b>Website</b></p>
                <p style="color: antiquewhite; font-size: 14px;"><u><i><a href="#">www.ecoschools.com</a></i></u></p>
            </div>
            <div class="details">
                <h3 style="float: center"><a href="#">About</a></h3>
                <hr>
                <p style="color: antiquewhite;">Our <a href="#mission"><b>Mission</b></a></p>
                <p style="color: antiquewhite;">Address:</p>

                <address style="display: block; font-style: italic; text-align: center;">
        <p style="color: antiquewhite; font-size: 12px;">216 West 52nd Street</p>
        <p style="color: antiquewhite; font-size: 12px;">New York, 10019</p>
        <p style="color: antiquewhite; font-size: 12px;">United States of America</p>
        <p style="color: antiquewhite; font-size: 12px;"><a href="https://www.google.com/maps/place/216+W+52nd+St,+New+York,+NY+10019/@40.7627246,-73.9854276,685m/data=!3m2!1e3!4b1!4m5!3m4!1s0x89c25857ce8cfed5:0x682040e55f9746fc!8m2!3d40.7627246!4d-73.9832546">40.762940, -73.983213</a></p>
        </address>
            </div>
        </footer>
    </div>
    <!-------------------------------------------------Footer-End----------------------------------------->
    <div class="template" style="float: left; color: #000000;">
        Copyrights &copy; 2021 Eco School -All Rights reserved.
    </div>
    <!-- ------------------------------TIME------------------ -->
    <div class="template" style="float:right">
        <div id="txt"></div>
        <script>
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                // add a zero in front of numbers<10
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
                t = setTimeout(function() {
                    startTime()
                }, 1000);
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
        </script>

        <!-- ----------Time-End------------------ -->


</body>

</html>