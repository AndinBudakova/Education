<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="events.css">



    <title>Events-Echo School</title>

    <style>
        /**********************Navigation Bar style*********************/
        
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
            var text = "Eco-Schools is the world's leading environmental education programme. It is a pupil-led initiative with the aim to make environmental awareness and practical action an intrinsic part of school life.";
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


<body style="width:1024px; margin:auto; background-color: #c6ecc6;" onload="startTime()">


    <div style="background-color: white">


        <!--********************************************************************  HEADER  ***************************************************************-->
        <header>

            <div class="header">
                <ol style="float: left; font-weight: bold">
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
                            <input type="text" placeholder="Enter Email" name="uname" required autocomplete="on">

                            <label for="psw" style="font-family: 'Helvetica', sans-serif"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

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


            <!--**********************************************************  NAV_BAR  **************************************************************-->

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
                    <li><a href="About.php">About</a></li>

                    <li><a class="active" href="Events.php">Events</a></li>
                    <li><a href="Contacts.php">Contact</a></li>


                    <li style="float:right;"><button onclick="search()">Search</button></li>
                    <li style="float:right;"><input id="srch" type="text" placeholder="Search Term Here..."></li>
                </ul>
                <br><br>
            </nav>
            <!--******************************************NAV_BAR_END*************************************-->


        </header>
        <!--***********************************************HEADER_END****************************************************-->
        <!--****************************************************  EVENTS *************************************************************************-->





        <div id="permbajtja">
            <!-- -------------------------------------------------Green Flag-------------------------------------------------------------- -->


            <div id="about" class="permbajtja-section">

                <h5 id="greenflag" style="font-size: 22px; line-height: 26px; color: #666666; font-weight: normal; 
                margin: 25px 0px; margin-top: 0px; text-align: center;"><b>
                        The 1000th Green Flag</b></h5>



                <img id="myimage" style="float:left; cursor: pointer;" onclick="changeImage()" src="Images/tree.jpg" width="100" height="180">
                <figure>
                    <div id="about-image-permbajtja">


                        <a href="Images/ecogreen.png"><img src="Images/ecogreen.png" alt="EcoGreen" title="Eco Green" width="100%"></a>
                        <figcaption><em>Eco-kid with the 1000th Green Flag</em></figcaption>
                    </div>

                </figure>

                <section style="font-size: 15px; line-height: 19px; color: #999999; margin: 20px 0px; ">


                    <p>
                        <i>Eco-Schools</i> is the world's leading environmental education programme. It is a <u>pupil-led
                        </u> initiative with the aim to make environmental awareness and practical action an intrinsic part of school life. <br />

                        <br /> Diane Lo&#xE7;khart, Eco-Coordinator at <abbr title="Walker Memorial Primary School">WMPS</abbr> said: “The children were totally delighted that we got the<mark> 1000th Green Flag</mark>. All pupils are very involved with
                        the areas of the Eco-Committee’s action plan it has brought these areas of learning alive. Pupils are highly motivated, inspired and focused to partake in lessons related to Eco-Schools. The programme provides pupils with another
                        avenue of learning, those who are more p ractical and creative thrive on being involved in identifying the needs of the school and sharing their ideas for future action.” </p>

                    <!-- ---definition list--- -->

                    <dl>
                        <!-- definition list -->
                        <dt>FEE</dt>
                        <!--  definition term -->
                        <dd>Foundation for Environmental Education</dd>
                        <!-- definition list definition -->
                        <dt>GAP</dt>
                        <dd>The Global Action Programme</dd>
                        <dd>Education for Sustainable Development</dd>
                        <dt>UNEP</dt>
                        <dd>United Nations Environment Programme</dd>

                    </dl>
                    <!-- // -->

                </section>


            </div>

            <hr style="height: auto; border-style: solid; border-width: 0.5px; border-color: #e2e2e2; margin: 40px auto;" />
            <!-- ----------------------------------------------------- Eco Warriors ------------------------------------------------------------------ -->
            <div id="permbj" class="permbajtja-section">

                <h5 style="text-align: center; font-size: 22px; line-height: 26px; color: #666666; font-weight: normal; margin: 20px 0px; margin-top: 0px;" id="ecowarriors"><strong> Eco-Warriors clean up for the <br />Great Big School Clean</strong> </h5>

                <p style="font-size: 15px; line-height: 18px; color: #999999; margin: 20px 0px;">
                    On Friday 9 March, the Eco-Warriors of Wolsey House Primary School in Leicestershire, joined hundreds of other Eco-Schools who are getting involved in this month’s Great Big School Clean.<br />
                    <br /> Not content with simply litter-picking, these children are using their results to make positive changes for their school.</p>

                <div class="permbj-section">
                    <div class="permbj-section-header">


                        <figure class="thumbnail">
                            <img src="Images/studentsclean.jpg" alt="Eco warriors" style="float: left; width: 90px; height: 80px;">
                            <figcaption class="popup">
                                <img src="Images/studentsclean.jpg " alt="Eco warriors">
                                <p style="font-size: 30px; text-align:  center;">The Eco Warriors !</p>
                            </figcaption>
                        </figure>


                        <h6>Kids <span style="font-weight: normal;">- Pupils</span></h6>


                    </div>

                    <p>“In the large playground, most litter seemed to be felt pens, pencils and birthday sweet wrappers. When we went along the path to the field gate we found more sweet and crisp packets."</p>

                </div>

                <div class="permbj-section">

                    <div class="permbj-section-header">


                        <figure class="thumbnail2">
                            <img src=" Images/Ecowarriors.png " alt="Eco warroiors Logo" style="float: left; width: 90px; height: 80px;">
                            <figcaption class="popup">
                                <img src="Images/Ecowarriors.png  " alt="Eco warriors Logo" style="width:470px; height:350px;">
                                <p style="font-size: 30px; text-align: center;">The Eco Warriors LOGO!</p>
                            </figcaption>
                        </figure>


                        <h6 style="padding-left: 30px;"> Rubie (Y6) <span style="font-weight: normal;">- PUPIL</span></h6>

                    </div>

                    <p>“We think children are given snacks by their parents and they drop the wrappers when they’ve finished them. There’s also a lot of similar rubbish down the hill towards the main exit from school.</p>

                </div>

            </div>
        </div>

        <hr style="width: 920px; border-style: solid; border-width: 0.5px; border-color: #e2e2e2; margin: 40px auto;" />


        <!--  --------------------------------------------Clean Air-------------------------------------------------------- -->
        <article class="cleanair" id="cleanairp">


            <p style="font-size: 26px; color: #666666; font-weight:600; text-align: center;"> Our children deserve better than breathing dirty air</h1>


                <div class="fotocleanir">

                    <figure class="case2">
                        <img src="Images/ecookids.jpg" alt="Clean Air" class="image">
                        <div class="overlay2">Clean Air</div>
                    </figure>

                </div>


                <section class="teksticleanair"><span style="font-size: 20px; color: #ff8241; font-weight:600;">Health & Eco-Schools</span><br><br> With the health effects of air pollution often hitting children the hardest, we wanted to let all our Eco-Schools know about <a href="https://act.friendsoftheearth.uk/act/order-your-clean-air-schools-pack">a new, free schools resource pack,</a>                    from environmental charity Friends of the Earth, and endorsed by the NUT.<br /> The free pack contains three KS2 lesson plans, transforming pupils into budding scientists and campaigners, a fun active assembly plan, free resources
                    and a testing kit to measure your own air quality. Friends of the Earth want to educate the educate the next generation about air pollution. We wanted to show how it can help you along your Eco-Schools journey and towards your next
                    Green Flag.

                </section>

                <br />


                <!-- -->

                <div class="fotocleanir">

                    <div class="dropdown">

                        <div class="case">
                            <img src="Images/Theprocess.jpg " alt="Clean Air" class="image">
                            <div class="overlay">
                                <div class="text">7 steps to<br />eco school</div>
                            </div>
                        </div>

                        <div class="dropdown-content">

                            <img src="Images/Theprocess.jpg " alt="Clean Air" style="width:400px; height:400px">
                            <div class="desc">Eco-Project</div>
                        </div>
                    </div>
                </div>






                <section class="teksticleanair">
                    <ul style="list-style-type:square; font-family: Delicious">

                        <li>With air pollution being ‘out-of-sight-out-of-mind’ it may not be on your Step 3: Action Plan, but it still has important links to any Eco-School’s work.</li>

                        <li>The two free air monitoring tubes allow you to test for harmful nitrogen dioxide gas. Friends of the Earth will process your tubes and get the results back to you.</li>

                        <li> With the resources, pupils have the opportunity to make their voices heard on the issue by learning campaigning tips and tricks, from how to write a persuasive letter to local politicians, to holding a poster competition in the
                            school.
                        </li>

                        <li>The assembly plan is a fun, active way to involve your whole school in the campaign. Whilst the posters and stickers could be a great addition to your Eco-board. </li>

                        <li>The lesson plans have clear links to the KS&Ccedil;2 Curriculum (Step 6), but they can also be adapted for younger students, or used in out-of-school clubs.</li>

                    </ul>
                </section>


                <table id="sevensteps">
                    <tr>
                        <th>Steps</th>
                        <th>Title</th>
                        <th>Content</th>
                    </tr>
                    <tr>
                        <td>Step 1 </td>
                        <td>Eco-Committee </td>
                        <td>The heartbeat of an Eco-Schools action and learning.</td>
                    </tr>
                    <tr>
                        <td>Step 2</td>
                        <td> Environmental Review </td>
                        <td>Investigating the school’s environmental performance.</td>
                    </tr>
                    <tr>
                        <td>Step 3 </td>
                        <td>Action Plan</td>
                        <td>Decide on topic actions, based on the results of the Environmental Review.</td>
                    </tr>
                    <tr>
                        <td>Step 4 </td>
                        <td> Curriculum Links </td>
                        <td>Making the links between the school’s environmental activity and the curriculum.</td>
                    </tr>
                    <tr>
                        <td>Step 5 </td>
                        <td> Informing and Involving </td>
                        <td>Let the whole school and wider community know what the Eco-Committee is doing.</td>
                    </tr>
                    <tr>
                        <td>Step 6</td>
                        <td>Monitoring and Evaluation </td>
                        <td>Measuring change and finding out what works and what doesn’t.y</td>
                    </tr>
                    <tr>
                        <td>Step 7 </td>
                        <td> Eco-Code </td>
                        <td>Creating a call to action that the whole school can get behind.</td>
                    </tr>
                </table>



        </article>
        <!-- ****************************************************  Slideshow future schools  ************************************************* -->



        <!-- Slideshow container -->
        <div class="slideshow-permbajtja">

            <!-- Full-width images with number and caption text -->
            <div class="Sllajdet fade">
                <div class="numbertext">1 / 3</div>
                <img src="Images/ecoschool1.PNG" style="width:1000px; height:600px;">
                <div class="teksti">First Place</div>
            </div>

            <div class="Sllajdet fade">
                <div class="numbertext">2 / 3</div>
                <img src="Images/ecoschool3.PNG" style="width:1000px; height:600px;">
                <div class="teksti">Second Place</div>
            </div>

            <div class="Sllajdet fade">
                <div class="numbertext">3 / 3</div>
                <img src="Images/ecoschool2.PNG" style="width:1000px; height:600px;">
                <div class="teksti">Third Place</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center; padding-bottom: 20px;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("Sllajdet");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>

        <!-- ---------------------------------------------Continue reading/FutureSchools----------------------------------------------------------- -->


        <article style="margin: 30px;
                outline: 2px dashed  #5f5f5f;
                outline-offset:10px;">

            <h1 id="futureschools" style="text-align: center; font-size: 26px; color: #666666; font-weight:600; text-align: center;">
                Future Schools</h1>

            <button class="futuresch">"Future Proofing Schools"</button>
            <div class="futuresch-content">
                <p>
                    Eco-Schools always has been keeping an eye on innovative solutions for schooling and education. We've covered the solar powered mobile computer classroom project and the AIRchitecture flying classrooms of the future, but now we're excited about these
                    proposals from architects all over the world, who recently submitted their ideas for what schools of the future could look like.<br> The winners for the <abbr title="Future Proofing Schools">FPS</abbr> design competition
                    were recently announced, where designers where invited to submit their ideas for the next generation of relocatable classrooms. The competition, sponsored by the University of Melbourne, the <abbr title="Melbourne School of Design">MSD</abbr>                    and the Australian Institute of Architects, seeks to<strong> "elicit innovation, creativity and blue-sky thinking"</strong> and may just give us a peek into the future.
                    <br><br> The competition focuses on new ideas for relocatable classrooms, which in recent decades have commonly been used around the globe. These types of classroom facilities are generally a response to rapid growth in schools, remote
                    community needs or a quick solution to cope with natural disasters. Although the classrooms are often described as cheap and miserable, the winners for this year's competition are anything but drab and dreary.
                    <br><br>

                </p>
            </div>


            <button class="futuresch" id="winner">The Winner</button>
            <div class="futuresch-content">
                <p id="winner">
                    <strong>The winning </strong> design idea from architecture firm Architectus took home <b> AU$25,000 (US$26,831) </b> for its futuristic vision of the classroom.
                    <br><br><strong>Dubbed eMOD</strong> , the concept is a flexible modular design system that can be configured to create a building solution that adapts to specific requirements such as site, climate and learning outcomes. The winning
                    entry included a clever proposition of an app to formulate the modular design, which proved to be a hit amongst the judges.
                    <br><br> "The concept represents the essence of an idea about the link between 21st century learning and space" said the jury. "[It] is both sophisticated and simple ... and is suggestive of adaptable and transportable space."
                    <br><br> The eMOD design encompasses a learning space in all elements of the building that goes beyond the limitations of the walls. Learning areas include the internal/external environments around the building and the internal spaces
                    that also provide adaptability to accommodate group-based student work or individual time.

                </p>
            </div>

            <button class="futuresch" id="second">Second Place</button>
            <div class="futuresch-content">
                <p> In <strong>second place</strong>, architecture firm NBRS+PARTNERS impressed the judges with its futuristic MODUPOD concept.
                    <br> "It was the suggestive flexibility of the organic core to the building and its capacity to indicate closed, open, unwrapped or linear active space that proposed an aspiration for a learning community over and above a rational,
                    workable arrangement of classrooms," said the jury.
                    <br><br> MODUPOD is a vision for 2025 and represents a dynamic 21st century learning environment with 3D text books promoting interaction and critical thinking for students. The concept features fast assembly, smart interiors and flexible
                    PODS that place students and teachers at the heart of the learning experience. Dynamic multi-modal clusters are built around the central permeable student resource center.
                    <br><br> The active core can also function as a media platform featuring multimedia screens that encourage the presentation of school news, energy consumption, environment facts, technological innovation and student work. </p>
            </div>

            <button class="futuresch" id="third">Third Place</button>
            <div class="futuresch-content">
                <p>
                    <strong>The third place</strong> entry by <i>Oliver Ebben</i> from Studioquint in Amsterdam was praised for its architectural deliberation.
                    <br>"The rational classroom form is made both spatial and place specific by three dimensional origami-like scales that articulate the form both internally and externally," said the jury. "Externally, the scales respond to orientation,
                    outlook, and context, while internally they become three dimensional, occupiable space. The rooftop contains a locally contextual landscape, as a part of the transportable form."
                    <br><br> This entry also included some great sustainability functions such as using components that are fabricated from recycled polystyrene. To avoid dissipation of energy during the transportation phase, the thermal building mass
                    is added on site by making use of local soil and plants.
                    <br>In addition, the building components can function as <strong> reservoirs for rainwater</strong>, and the three-dimensional design of all building components at an angle of 20 degrees enables efficient use of photovoltaic panels
                    and a high rate of sun shielding.

                </p>
            </div>

        </article>
        <script>
            var coll = document.getElementsByClassName("futuresch");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }
        </script>

        <!-- ********************************************************** FOOTER ****************************************************************** -->

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

                <h3 style="float: center"><a href="#">Services</a></h3>
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

                <h3 style="float: center"><a target="_blank" href="Contacts.php">Contacts</a></h3>
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

        <!-- -------------------------------FOOTER-END ---------------------------------------------------- -->

        <div class="template" style="float:left; color: #000000;">

            Copyrights &copy; 2021 Eco School -All rights reserved.
        </div>



        <!-- ------------------------------ TIME ------------------ -->

        <div class="template" style="float:right">
            <div id="txt"></div>
        </div>
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

</body>

</html>