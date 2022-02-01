<!DOCTYPE html>
<html lang="en" manifest="cache.appcache">

<style>
    /* --------------Navigation Bar style--------------*/
    
    nav ul {
        list-style-type: none;
        padding-left: 17px;
        margin: 0;
        background-color: #c6ecc6;
        overflow: hidden;
    }
    /*--------------fixed on scroll--------------*/
    
    .fix {
        position: fixed;
        top: 0px;
        width: 1024px;
        z-index: 2;
    }
    /*--------------list elements--------------*/
    
    nav li {
        float: left;
        height: 40px;
    }
    /*--------------list anchor elements on the left--------------*/
    
    nav li a {
        padding: 13px 20px;
        text-decoration: none;
        color: #f35300;
        display: block;
        font-family: sans-serif;
        font-size: 13px;
        font-weight: 200;
    }
    /*--------------change background color on hover--------------*/
    
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
        var text = "Eco-Schools is a growing phenomenon, which encourages young people to engage in their environment by allowing them the opportunity to actively protect it. It starts in the classroom, it expands to the school and eventually fosters change in the community at large. Through this programme, young people experience a sense of achievement at being able to have a say in the environmental management policies of their schools, ultimately steering them towards certification and the prestige which comes with being awarded a GF. The Eco-Schools programme is an ideal way for schools to embark on a meaningful path towards improving the environment in both the school and the local community while at the same time having a life-long positive impact on the lives of young people, their families, school staff and local authorities. We have found that working with Themes can also be a great help in giving the programme even more structure. ";
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

    // Replace function
    function replace() {
        var string123 = "ES";
        var rep = string123.replace("ES", "Eco-Schools");
        document.getElementById('repl').innerHTML = rep;
    }
    // Search the string for match
    function match() {
        var string321 = "evergreen palegreen darkgreen";
        var ma = string321.match(/green/g);
        document.getElementById('m').innerHTML = ma;
    }
</script>


<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="About.css">
    <title>About-Echo School</title>
</head>


<body style="width:1024px; margin:auto; background-color: #c6ecc6;" onload="startTime()">

    <div style="background-color: white">
        <!--**************************************************HEADER****************************************************-->
        <header>

            <div class="header">
                <ol style="float: left;font-weight: bold">
                    <li><button onclick="document.getElementById('id01').style.display='block'" class="btn "> Login</button> | </li>
                    <li><button onclick="document.getElementById('id02').style.display='block'" class="btn "> Sign up</button> </li>

                </ol>
                <ol style="float: right;font-weight: bold">
                    <li><button onclick="document.getElementById('id01').style.display='block'" class="btn"> Login</button> | </li>
                    <li><button onclick="document.getElementById('id02').style.display='block'" class="btn signUp"> Sign up</button> | </li>
                    <li><a class="a" href="#bottom"> Bottom</a> | </li>
                    <li><a class="a" href="Contacts.php#team "> Team </a></li>
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
                        <div class="" style="clear: both;margin-right: 5%">
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

            <!-- ********************** SIGNUP MODAL ********************** -->
            <div id="id02" class="modal">
                <!-- ********************* MODAL CONTENT ******************** -->

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
                            <input style="margin-left: 20px" type="date" name="bday" required>
                        </div>

                        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                        <p>Already have an account?<a onclick="document.getElementById('id02').style.display='none';document.getElementById('id01').style.display='block'" href="#" style="color:dodgerblue">Sign In</a> </p>

                        <div style="height: 55px">
                            <button onclick="document.getElementById('id02').style.display='none'" id="signUpCancel" type="button">Cancel</button>
                            <button id="signUpButton" type="submit">Sign Up</button>
                        </div>
                    </div>
                </form>

                <!-- ********************* MODAL CONTENT END *********************** -->
            </div>
            <!-- ********************** SIGNUP MODAL END ************************ -->

            <div id="container">
                <div class="box1">
                    <span style="font-size: 32px;margin: 0px;padding: 0px">
                        Education
                    </span>
                    <br>
                    <span style="font-size: 12px;margin: 0px;padding: 0px">
                        Nurture, Inspire, Flourish
                    </span>
                </div>
                <div class="box2">
                    <img src="Images/eco_schools_logo.jpg" width="468px" height="60px" alt="Llogo" style="float: right;overflow: auto">
                </div>
            </div>

            <!--******************************************NAV_BAR*************************************-->

            <div id="Modal2" class="modal2">

                <!-- Modal content -->
                <div class="modal2-content">
                    <p id="demo"></p>
                </div>

            </div>

            <nav>
                <br>
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>

                    <li><a class="active" href="About.php">About</a></li>

                    <li><a href="Events.php">Events</a></li>
                    <li><a href="Contacts.php">Contact</a></li>



                    <li style="float:right;"><button onclick="search()">Search</button></li>
                    <li style="float:right;"><input type="text" id="srch" placeholder="Search Term Here..."></li>
                </ul>
                <br><br>
            </nav>
            <!--******************************************NAV_BAR_END*************************************-->
            <!-- *****************************BODY************************* -->

            <img src="Images/2193.jpg" alt="Eco Image" width="1024">

            <!-- *****************************First text part************************* -->
            <div class="about1">
                <h1 style="color: #f35300; font-weight:600;">It all starts in the classroom</h1>
                <blockquote style="font-size: 14px; "><i>-In 25 years, Eco-Schools has developed from a European educational programme to a global model for environmental education and sustainability at the international level.</i></blockquote><button style="margin: 10px 0; font-size: 13px"
                    onclick="replace()">Show the meaning of the highlighted word</button><br> Eco-Schools is a growing phenomenon, which encourages young people to engage in their environment by allowing them the opportunity to actively protect it. It starts
                in the classroom, it expands to the school and eventually fosters change in the community at large. Through this programme, young people experience a sense of achievement at being able to have a say in the environmental management policies
                of their schools, ultimately steering them towards certification and the prestige which comes with being awarded a <abbr title="Green Flag">GF</abbr>. The <strong><mark id="repl">ES</mark></strong> programme is an ideal way for schools
                to embark on a meaningful path towards improving the environment in both the school and the local community while at the same time having a life-long positive impact on the lives of young people, their families, school staff and local
                authorities. We have found that working with Themes can also be a great help in giving the programme even more structure.
                <br><br>For the purpose of the Environmental Review there are <u>4 main Themes.</u> These are: <br><br>
                <hr>
            </div>


            <!-- *****************************4 themes part************************* -->

            <div class="about2"><img src="Images/health.png" alt="Health logo"></div>
            <div class="about3">
                <h2 style="color: #f35300; font-weight:600;">Health & Wellbeing</h2><br> Encourages schools to promote the health and wellbeing of young people and the wider community and to make environmental connections to health and safety. For all students, and particularly vulnerable ones,
                school-based health centers and school partners should consider social factors: did the students eat last night, do they have electricity at home to do their homework, do they even have a home? School-based health centers and school partners
                are in the best position to see the social factors and stressors that affect students, and to work with community partners to remove those barriers so students can learn and graduate. Also it is important to provide easy access to healthier
                food and drink options in schools and early childhood services. School canteens and food services play an important role in communicating healthy eating messages. Foods eaten during a child’s early years and at school contribute significantly
                to a child’s daily nutrient intake and also have a considerable influence on the development of their lifelong eating habits, growth patterns and energy levels.
            </div>
            <br><br>
            <div class="about2"><img src="Images/bio.png" alt="Bio logo"></div>
            <div class="about3">
                <h2 style="color: #f35300; font-weight:600;">Biodiversity & Nature</h2><br> Examines the flora and fauna present in the school environment and suggests ways to increase the levels of biodiversity around the school and raises the pupils’ awareness of biodiversity and nature. Biodiversity
                provides direct links to the curriculum, providing knowledge, skills and understanding across the key stages in the following areas:
                <ul style="list-style: circle">
                    <b><li>Life processes</b>
                    <ol>
                        <li>Humans and other animals</li>
                        <li>Green plants</li>
                    </ol>
                    </li>
                    <b> <li>Variation and classification</li></b>
                    <b> <li>inheritance and evolution</li></b>
                    <b><li>Living things in their environment</li></b>
                </ul>
                Pupils learn that the variety of plants and animals that exist makes it important to identify them and assign them to groups; that different plants and animals are found in different habitats; that habitats support a diversity of plants and animals that
                are all interdependent; that the distribution and relative abundance of organisms in habitats can be explained using ideas of interdependence, adaptation, competition and predation. Biodiversity has connections with all the different environmental
                strands that, drawn together, characterise a healthy and caring <b>Eco School</b>. An Eco-School can care for biodiversity in several ways: By showing positive attitudes and values for the health and well-being of local
                habitats, plants and animals, as well as humans, by encouraging the use of the outdoors to teach and learn about biodiversity, by making choices that affect the use of natural resources, by aiming to reduce its global footprint on habitats
                and species, both locally and globally, by contacting one of our delivery partners.<br>

            </div><br>
            <div class="about2"><img src="Images/climate.png" alt="Climate logo"></div>
            <div class="about3">
                <h2 style="color: #f35300; font-weight:600;">Climate Change</h2><br> Examines the impacts we have on the Climate through our lifestyles and how our actions can influence the situation in a positive way. Investments in education serve as an important pathway out of poverty, yet reduced
                agricultural productivity due to droughts or temperature shocks may affect educational attainment if children receive poorer nutrition during early childhood, are required to participate in household income generation during schooling
                ages, or if households can no longer pay for school-related expenses. Latest research looks to understand the relationship between climate variability and educational outcomes by linking longitudinal socioeconomic, demographic, and schooling
                data from schools around the world to climate data to measure exposure to temperature and precipitation relative to historical norms. Results indicate that more favorable early life climatic conditions, namely milder temperatures during
                all seasons and greater rainfall during the summer agricultural season,are associated with an increased likelihood of a child having completed any education.
            </div><br><br>

            <div class="about2"><img src="Images/waste.png" alt="Waste logo"></div>
            <div class="about3">
                <h2 style="color: #f35300; font-weight:600;">Waste Minimisation</h2><br> Examines the impact of waste on the environment and explores actions to minimise the amount of waste that we produce and dispose of on a daily basis. It is difficult and expensive to dispose of waste. In every
                country, waste is usually burnt in incinerators or buried under the ground at landfill sites. However, capacity is limited and there are concerns about the health and environmental impacts of both methods of disposal. Pupils were engaged
                in several projects to solve the waste issue. Through making these resources, the young people involved have developed key skills and knowledge that will help them in life and work, why it’s so important to know where products come from
                and why businesses are encouraged to operate more sustainably to lower their carbon footprint. These films will perhaps encourage your pupils to take action and make better consumer and life-style choices. The Climate Challenge Fund supports
                projects that reduce carbon emissions caused by waste of resources. Projects have worked to reduce over-consumption, encourage the reuse of items, extend the life of everyday items through repair and maintenance and promote recycling of
                materials.
            </div>
            <div class="about1">
                <hr>
            </div>
            <!-- *****************************Statictics - four icons************************* -->

            <div style="font-size: 30px; color: #f35300; font-weight:600; padding-left: 470px">Statistics</div>
            <p class="about4">Eco Schools across the world have been doing their bit for recycling process. We've grown to four schools and we think we should be doing more all year round to save the environment. From recycling plastic to thinking of ways to get more from
                the leftover food in their canteen. Our pupils are called the Eco worriers. Place your mouse to each of the four logos down below to see some statistics or results from our good team work.</p>
            <div style="display: flex; padding: 0 137px">
                <p class="two">
                    <img style="border: black" src="Images/ec.jpg" alt="Eco logo1" width="150" height="150">

                    <img class="img1" src="Images/s1.jpg" alt="Result Image1">
                </p>
                <p class="two">
                    <img style="margin-left: 50px " src="Images/ec.jpg" alt="Eco logo2" width="150" height="150">

                    <img class="img1" src="Images/s2.jpg" alt="Result Image2">
                </p>
                <p class="two">
                    <img style="margin-left: 50px" src="Images/ec.jpg" alt="Eco logo3" width="150" height="150">

                    <img class="img1" src="Images/s3.jpg" alt="Result Image3">
                </p>
                <p class="two">
                    <img style="margin-left: 50px" src="Images/ec.jpg" alt="Eco logo4" width="150" height="150">

                    <img class="img1" src="Images/s4.jpg" alt="Result Image4">
                </p>
            </div>
            <br>
            <!-- *****************************Table************************* -->

            <p class="about1">The following table shows the recycling rate and tree planting sites of our Eco Schools around the world.</p>
            <div style="display: flex;">
                <table cellspacing="5" cellpadding="15">
                    <tr>
                        <th>Eco School Name</th>
                        <th>Country</th>
                        <th>Recycling Rate(%)</th>
                    </tr>
                    <tr>
                        <td>Wilhelm Eco School</td>
                        <td>Germany</td>
                        <td>67.4%</td>
                    </tr>
                    <tr>
                        <td>Natureco School</td>
                        <td>Singapore</td>
                        <td>63.2%</td>
                    </tr>
                    <tr>
                        <td>Riverdale Middle School</td>
                        <td>Wales</td>
                        <td>61%</td>
                    </tr>
                    <tr>
                        <td>Frank Stewart School</td>
                        <td>Scotland</td>
                        <td>44.3%</td>
                    </tr>
                </table>

                <table style="margin-right: 25px;" cellspacing="5" cellpadding="15">
                    <tr>
                        <th>Location of Site</th>
                        <th>Tree Type</th>
                        <th>Size of Exclosure</th>
                    </tr>
                    <tr style="background-color: #FFE4B2">
                        <td>Coille Ruigh na Cuileige</td>
                        <td>Aspen</td>
                        <td>50 ha</td>
                    </tr>
                    <tr>
                        <td>Meallan</td>
                        <td>Willow</td>
                        <td>55 ha</td>
                    </tr>
                    <tr style="background-color: #FFE4B2">
                        <td>Athnamulloch One</td>
                        <td>Aspen</td>
                        <td>55 ha</td>
                    </tr>
                    <tr>
                        <td>Glac Daraich</td>
                        <td>Hazel</td>
                        <td>35 ha</td>
                    </tr>
                </table>

            </div>
            <br>
            <br>
            <!-- *****************************Video************************* -->

            <div class="about1">
                <hr>
            </div>
            <br>
            <div style="font-size: 30px; color: #f35300; font-weight:600; padding-left: 270px">Take a look at our video to learn more about us</div>

            <video style="border: 2px solid lightgray; margin: 20px 0px" width="1020" height="600" controls>
    <source src="Images/Eco.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

            <!-- *****************************END OF BODY************************* -->


            <!-- *****************************FOOTER ***************************************** -->


            <footer class="footer">



                <div class="details" id="bottom">

                    <h3><a href="#">Stay In The Know!</a></h3>
                    <hr />
                    <p style="color: antiquewhite">Please enter your E-Mail to join our mailing list</p>
                    <input type="email" placeholder="e-mail..." multiple><input type="submit" value="Enter">
                    <p style="color: antiquewhite">To unsubscribe please click<a href="#"><b>here</b></a></p>
                    <br>
                    <p><small><a href="#top">Go to the Top</a></small></p>
                </div>



                <div class="details">

                    <h3><a href="#">Services</a></h3>
                    <hr>
                    <p style="color: antiquewhite"><a href="#"><b>Apply</b></a> at our schools</p>
                    <p style="color: antiquewhite">Take Scholarship <a href="#"><b>Exam</b></a></p>

                    <br>

                    <p style="color: antiquewhite"><i><small>Follow us on social networks:</small></i></p>


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

                    <h3><a target="_blank" href="Contacts.php">Contacts</a></h3>
                    <hr>
                    <p style="color: lightskyblue; font-size: 14px"><b>E-Mail:</b></p>
                    <p style="color: antiquewhite; font-size: 14px">
                        <i>ab.bd@ecoschools.com</i></p>
                    <p style="color: lightskyblue; font-size: 14px;"><b>Tel:</b></p>
                    <p style="color: antiquewhite; font-size: 14px"><i>+383-666-999</i></p>
                    <p style="color: lightskyblue; font-size: 14px;"><b>Website:</b></p>
                    <p style="color: antiquewhite; font-size: 14px"><u><i><a href="#">www.ecoschools.com</a></i></u></p>

                </div>



                <div class="details">

                    <h3 style="float: center"><a href="#">About</a></h3>
                    <hr>
                    <p style="color: antiquewhite">Our <a href="Index.php#mission"><b>Mission</b></a></p>
                    <p style="color: antiquewhite">Address:</p>

                    <address style="display: block; font-style: italic; text-align: center;">
                    <p style="color: antiquewhite; font-size: 12px">216 West 52nd Street</p>
                    <p style="color: antiquewhite; font-size: 12px">New York, 10019</p>
                    <p style="color: antiquewhite; font-size: 12px">United States of America</p>
                    <p style="color: antiquewhite; font-size: 12px"><a href="https://www.google.com/maps/place/216+W+52nd+St,+New+York,+NY+10019/@40.7627246,-73.9854276,685m/data=!3m2!1e3!4b1!4m5!3m4!1s0x89c25857ce8cfed5:0x682040e55f9746fc!8m2!3d40.7627246!4d-73.9832546">40.762940, -73.983213</a></p>
                </address>

                </div>



            </footer>



            <div class="template" style="float:left; color: #000000;">

                Copyrights &copy; 2021 Eco School -All rights reserved.
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

                <!-- ///// -->

                <!-- ********************Fixed position of navigation bar on scroll****************** -->
                <script>
                    window.onscroll = function() {
                        myFunction()
                    };

                    var nav = document.getElementById("nav");
                    var sticky = nav.offsetTop;

                    function myFunction() {
                        if (window.pageYOffset >= sticky) {
                            nav.classList.add("fix")
                        } else {
                            nav.classList.remove("fix");
                        }
                    }
                </script>
                <script>
                    // test for errors and displays it
                    try {
                        alertt("Learn more about us!");
                    } catch (err) {
                        function showErr() {
                            document.getElementById("error").innerHTML = "There is a " +
                                err.name + ": " + err.message;
                        }
                    }
                </script>
            </div>
    </div>

    </header>
</body>

</html>