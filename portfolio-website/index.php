<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charity's_ portfolio_mainpage</title>

    <?php
    include_once("partials/head.php");
    ?>
</head>

<body id="allSection">
    <!-- navbar -->
    <?php
    include_once("partials/navbar.php");
    ?>
    <!-- /.navbar -->
    <!-- header part to welcome the viewer ------------------------------------------ -->
    <header id="header-style">
        <div class="container-fluid full-screen">
            <div class="row">
                <div class="headerscreen col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="title">I'm Charity and nice to meet you.</p>
                </div>
            </div>
        </div>
    </header>
    <!-- /.end of header part ------------------------------------------------------- -->

    <!-- section for about ---------------------------------------------------------- -->
    <section id="about">
        <div class="container-fluid aboutscreen full-screen">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="aboutbox">
                        <h1 class="abouttitle abouttitle1">&nbsp &nbsp &nbsp &nbsp Firmware engineer</h1>
                        <h1 class="abouttitle abouttitle2">& Full-stack developer</h1>
                    </div>
                    <div class="text1">
                        <div class="collapse navbar-collapse" id="myAboutNavBar">
                            <p class="about-text hideme">
                                A lincensed Electronics Engineer and having completed Graduate Diploma in Information Technology recently,
                                I have been passionate on learning new things as much as I can.
                                With this, I always make sure to make a progress in up-skilling myself and keeping me updated with the technology
                                by having personal projects and coding functional expressions.
                                You can have a look on some of my works here.
                            </p>
                        </div>
                        <br>
                        <p class="about-text hideme">I'm goal oriented, naturally curious and confidently working on improving my skills:</p>
                        <button type="button" id="readmore" class="navbar-toggle read-more-btn color" data-toggle="collapse" data-target="#myAboutNavBar">
                            <span id="readmoretext">READ MORE</span>
                        </button>
                    </div>

                    <!-- SKILLS -->
                    <div class="row">
                        <div class="buttons">
                            <div class="skillsBtn hideme col-12">
                                <button class="skilltextbtn ">C/C++ </button>
                                <button class="skilltextbtn ">C#</button>
                                <button class="skilltextbtn ">HTML5</button>
                                <button class="skilltextbtn ">CSS</button>
                                <button class="skilltextbtn ">PHP</button>
                                <button class="skilltextbtn ">Javascript</button>
                                <button class="skilltextbtn ">JQuery</button>
                                <button class="skilltextbtn ">Ajax</button>
                                <button class="skilltextbtn ">Java</button>
                                <button class="skilltextbtn ">React.js</button>
                                <button class="skilltextbtn ">Node.js</button>
                                <button class="skilltextbtn ">Express JS</button>
                                <button class="skilltextbtn ">MySQL</button>
                                <button class="skilltextbtn ">MongoDB</button>
                                <button class="skilltextbtn ">git</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------------------- -->

    <!-- section for interest and likes -->
    <section id="interests">
        <div class="container-fluid full-screen interestscreen">
            <div class="row col-xs-12 col-sm-12 col-md-12" id="child-interest">
                <div class="interesttitle">More about me</div>
                <div class="interesttext">I am interested in many things such as:</div>
                <div class="row img-row hideme">
                    <h5 class="section3-label">My hobbies</h5>
                    <div class="col-sm-4 col-lg-4">
                        <div class="square-wrap">
                            <div class="overlay"></div>
                            <img class="hop img-responsive" style="height:130px; margin-top:20px" src="images/yoga.jpg" alt="">
                            <div class="title-interest">Yoga</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <div class="square-wrap">
                            <div class="overlay"></div>
                            <img class="hop img-responsive" style="height:130px; margin-top:20px" src="images/ukulele.jpg" alt="">
                            <div class="title-interest">Playing the uke</div>
                        </div>
                    </div>
                </div>
                <div class="row img-row hideme interest">
                    <h5 class="section3-label">My interests</h5>
                    <div class="col-sm-4 col-lg-4">
                        <div class="square-wrap">
                            <div class="overlay"></div>
                            <img class="hop img-responsive" style="height:180px; margin-top:20px" src="images/react-logo.png" alt="">
                            <div class="title-interest">React</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <div class="square-wrap">
                            <div class="overlay"></div>
                            <img class="hop img-responsive" style="height:180px; margin-top:20px" src="images/node-logo.png" alt="">
                            <div class="title-interest">Node</div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <div class="square-wrap">
                            <div class="overlay"></div>
                            <img class="hop img-responsive" style="height:200px; margin-top:20px" src="images/arduino-logo.png" alt="">
                            <div class="title-interest">Arduino</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------------------- -->

    <!-- section for projects -->
    <section id="projects">
        <div class="container-fluid full-screen">
            <div class="row">
                <div class="work col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="projecttext">My Projects
                        <div class="iconbox hideme">
                            <a href="https://github.com/chai28?tab=repositories">
                                <span class="iconify" data-icon="jam:chevron-circle-right" data-inline="false"></span>
                                <!-- onclick="transitionToPage('projects.php')" -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------------------------------------------- -->

    <!-- section for contact form -->
    <section id="contact">
        <div class="container-fluid contact full-screen">
            <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="contacttext">Let's collaborate!</div>
                <form class="contactform" id="contactformname" method="POST" action="MAILTO:emma.hj.ham@gmail.com?subject=New request from your website" enctype="text/plain">
                    <div id="formbox" class="contactform col-sm-12 col-md-12 col-lg-12">
                        <div class="labelname"><label class="label">Name</label>*</div>
                        <div class="inputbox"><input name="From: " class="inputbox" type="text" required></div>
                        <br>
                        <div class="labelname"><label class="label">Email</label>*</div>
                        <div class="inputbox"><input name="Reply Email: " class="inputbox" type="email" required> </div>
                        <br>
                        <div class="labelname"><label class="label">Message</label>*</div>
                        <div class="inputbox"><textarea class="inputbox" name="Message: " cols="30" rows="10" placeholder="" required></textarea> </div>
                        <div class="inputbox"><button class="contactbutton" type="submit" id="formsubbtn">SUBMIT</button></div>
                    </div>
                    <div class="maildirection" id="secondbox" style="display:none">
                        <div class="mgs">
                            Thanks for your interest, I will get back to you as soon as possible:)
                        </div>
                        <button class="gobackbutton" type="button" id="backbtn">Go back</button>
                    </div>
                </form>
            </div>
    </section>

    <!-- footer -->
    <?php
    include_once("partials/footer.php");
    ?>
    <!-- /.footer ------------------------------------------------------------------- -->


    <!-- ---------------------------------------------------------------------------- -->
    <script>
        $('body').on('submit', 'form.contactfo', function() {
            var box = $('#formbox');
            var secondbox = $('#secondbox');

            setTimeout(function() {
                box.css('display', 'none');
            }, 500);
            setTimeout(function() {
                secondbox.css('display', 'block');
            }, 500);
            $("#backbtn").click(function() {
                setTimeout(function() {
                    secondbox.css('display', 'none');
                }, 500);
                setTimeout(function() {
                    box.css('display', 'block');
                }, 500);
            })
        })
    </script>
    <!-- ---------------------------------------------------------------------------- -->

</body>

</html>