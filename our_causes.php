<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>One In Four Children - Our Causes</title>
    <link rel="icon" href="favicon.ico?v2">

    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!--Bootstrap Select-->
    <link rel="stylesheet" href="vendors/bootstrap-select/css/bootstrap-select.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="vendors/owl.carousel/owl.carousel.css">
    <!--Magnific Popup-->
    <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">

    <!--Theme Styles-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme.css">
    <!--<script src="https://js.stripe.com/v3/"></script>-->
    <!--<script src="https://www.paypalobjects.com/api/checkout.js"></script>-->

    <!--[if lt IE 9]>

        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php include 'includes/header.php' ?>

    <!--Good Causes-->
    <section id="good_cause" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#good_cause" data-slide-to="0" class="active"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/pic1.jpg" alt="...">
                <div class="carousel-caption">
                    <!-- <h6 class="label label-default">Our Purpose</h6> -->
                    <h3 class="cause-title"><a href="#">WE HELP THOUSANDS OF CHILDs TO GET THEIR EDUCATION, NOW WE NEED YOUR HELP.</a></h3>
                    <a href="our_action.php" class="btn-primary btn-outline white">learn more</a>
                </div>
            </div>
        </div>
    </section>

    <?php
        if(isset($_GET["tab"]) && intval($_GET["tab"]) > 0){
            $curTab = intval($_GET["tab"]);
        }else{
            $curTab = 0;
        }
    ?>

    <section id="page-content" class="row page-content">
        <div class="m-lr-15">
            <div class="row">
                <div class="col-sm-12 d-flex">
                    <div class="sideNav-wrapper">
                        <div class="row m0 sideNav">
                            <h4 class="select-all-tab">OUR CAUSES</h4>
                            <ul class="nav">
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 0 ? 'active' : ''; ?>" content-tag="cause_education">ENDING ILLITERACY IN AFRICA</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 1 ? 'active' : ''; ?>" content-tag="cause_capacity">CAPACITY BUILDING IN AFRICA</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 2 ? 'active' : ''; ?>" content-tag="cause_poverty">ENDING POVERTY IN AFRICA</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row m0 pt-5 shortcodeBlock w-full" id="accordions_toggles">
                        <div id="content_1" class="hhh_content toggle_sidenav_content cause_education <?php echo $curTab == 0 ? 'active' : ''; ?>">
                            <div class="content-title">ENDING ILLITERACY IN AFRICA</div>
                            <div class="content">
                                <div class="responsive-img" style="background-image: url(images/assets_cause_1.jpg); height: 500px"></div>
                            </div>
                        </div>

                        <div id="content_2" class="hhh_content toggle_sidenav_content cause_capacity <?php echo $curTab == 1 ? 'active' : ''; ?>">
                            <div class="content-title">CAPACITY BUILDING IN AFRICA</div>
                            <div class="content">
                                <div class="responsive-img" style="background-image: url(images/assets_about_12.jpg); height: 500px"></div>
                            </div>
                        </div>

                        <div id="content_3" class="hhh_content toggle_sidenav_content cause_poverty <?php echo $curTab == 2 ? 'active' : ''; ?>">
                            <div class="content-title">ENDING POVERTY IN AFRICA</div>
                            <div class="content">
                                <div class="responsive-img" style="background-image: url(images/assets_cause_1.jpg); height: 500px"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="toggle_sidenav_content cause_education <?php echo $curTab == 0 ? 'active' : ''; ?>">
        <div class="text-container text-center back-gray-white text-purple">
            <div class="max-width-840 m-auto pt-150 pb-150">
                <h3>The global literacy levels are at an all time low. According to UNESCO in excess of 280 million Youth worldwide are illiterate, meaning they can’t read and write.</h3>
                <h3>We believe that level of illiteracy is unacceptable. The right to quality education is a right enshrined in the Human rights charter.</h3>
            </div>
        </div>

        <div class="common-space back-ghost-white">
            <div class="container">
                <div class="row sectionTitle">
                    <h2 class="text-black" style="margin-bottom: 5px">Global Literacy is a massive problem</h2>
                    <p class="font-20 max-width-840 mb-50">800 MILLION people in the world still can't read or write. Here's why</p>
                </div>
                
                <?php include "includes/globalCards.php" ?>
            </div>
        </div>

        <div class="text-container back-gray-white font-20">
            <div class="max-width-840 m-auto pt-150 pb-150">
                <h2>OUR WORK CREATES SAFER, THRIVING COMMUNITIES</h2>
                <br>
                <br>
                <p>One in Four believes that when communities build communities, we create stronger bonds, provide a sense of belonging and create safer and thriving communities the world over</p>
                <p>Our Approach to Solving illiteracy in the Nuba Mountains is by; Working with Both Private and public schools to convert school libraries into community libraries for the benefit of all members of the community during prescribed hours.</p>
                <p>How we will use your donation to eradicate illiteracy and poverty in the Nuba Mountains and surrounding Regions and Africa as a whole. One in Four will use donated books to Set up new or stock existing libraries in all counties in the Nuba mountains.</p>
            </div>
        </div>

        <div class="row m-0">
            <div class="col-sm-5 p0">
                <div class="responsive-img" style="background-image: url(images/assets_cause_2.jpg); height: 720px"></div>
            </div>
            <div class="col-sm-7 p0 text-center text-white back-blue-1" style="min-height: 720px">
                <div class="back-blue d-grid text-container p-12">
                    <h3>EDUCATION IS A HUMAN RIGHT, WE COMMIT TO;</h3>
                </div>
                <div class="back-blue-1 text-white d-grid pt-25 pb-25">
                    <div class="text-container">
                        <ol class="text-left font-20 list-left-space">
                            <li>Improve community literacy standards through volunteer led reading and writing classes and workshops</li>
                            <li>Reduce student teacher ratio and promote equitable access to learning resources removing distance to education and other home constraints.</li>
                            <li>Provide tailored learning programs to students and combine information resources and technologies</li>
                            <li>Equip students with the literacy and computer skills necessary to succeed in a dynamic technological, social and economic environment.</li>
                            <li>Enable students to acquire skills to collect, critically analyse and organize information, problem-solve and communicate their research</li>
                            <li>Provide an environment where students can read for pleasure, enrich their intellectual curiosity and enhance emotional growth.</li>
                            <li>Promote equal access to learning resources ranging from fiction and non-fiction, digital content, printed books, audio and video.</li>
                            <li>Promote collaboration with industry both within and outside the school inorder to develop tailored curriculums and provide professional development for teachers</li>
                        </ol>    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="toggle_sidenav_content cause_capacity <?php echo $curTab == 1 ? 'active' : ''; ?>">
        <div class="row m-0">
            <div class="col-sm-6 p0 text-center text-white back-purple-1" style="min-height: 640px">
                <div class="back-purple d-grid text-container p-12">
                    <h3>CAPACITY BUILDING IN THE NUBA MOUNTAINS</h3>
                </div>
                <div class="back-purple-1 text-white d-grid pt-25 pb-25">
                    <div class="text-container text-left">
                        <h4 class="mb-32">We work with children in conflict zones in South Sudan and East Africa and in the Diaspora to;</h4>
                        <ol class="font-20 list-left-space">
                            <li>Investment in quality teacher education, and community employment schemes.</li>
                            <li>Supporting community led infrastructure development and entrepreneurship programs aimed at creating safe spaces, restoring peace, promoting health and wellbeing, and nutrition for school children and their families.</li>
                            <li>Supporting peer to peer learning programs within schools in the Nuba Mountains, Sudan and Africa</li>
                        </ol>    
                    </div>
                </div>
            </div>
            <div class="col-sm-6 p0">
                <div class="responsive-img" style="background-image: url(images/assets_cause_3.jpg); height: 640px"></div>
            </div>
        </div>
    </section>

    <section class="toggle_sidenav_content cause_poverty <?php echo $curTab == 2 ? 'active' : ''; ?>">
        <div class="text-container text-center back-gray-white text-purple">
            <div class="max-width-840 m-auto pt-150 pb-150">
                <h3>Education is the backbone of the economy, it is the single best guarantor of a better standard of living and eradicating poverty. The People of the Nuba Mountains experience pervasive poverty, War trauma, lack basic health care services and poor nutrition. Education is the only way out.</h3>
                <h3>We will use your donation to eradicate illiteracy and poverty in the Nuba Mountains and surrounding Regions and Africa as a whole. One in Four will use donated books to Set up new or stock existing libraries in all counties in the Nuba mountains.</h3>
            </div>
        </div>

        <div class="row m-0">
            <div class="col-sm-6 p0 text-center text-white back-green-1" style="min-height: 800px">
                <div class="back-green d-grid text-container p-12">
                    <h3>COMMITMENT TO ENDING POVERTY</h3>
                </div>
                <div class="back-green-1 text-white d-grid pt-25 pb-25">
                    <div class="text-container text-left">
                        <ol class="font-20 list-left-space">
                            <li>Improve community literacy standards through volunteer led reading and writing classes and workshops</li>
                            <li>Reduce student teacher ratio and promote equitable access to learning resources removing distance to education and other home constraints.</li>
                            <li>Provide tailored learning programs to students and combine information resources and technologies</li>
                            <li>Equip students with the literacy and computer skills necessary to succeed in a dynamic technological, social and economic environment.</li>
                            <li>Enable students to acquire skills to collect, critically analyse and organize information, problem-solve and communicate their research</li>
                            <li>Provide an environment where students can read for pleasure, enrich their intellectual curiosity and enhance emotional growth.</li>
                            <li>Promote equal access to learning resources ranging from fiction and non-fiction, digital content, printed books, audio and video.</li>
                            <li>Promote collaboration with industry both within and outside the school in order to develop tailored curriculums and provide professional development for teachers</li>
                        </ol>    
                    </div>
                </div>
            </div>
            <div class="col-sm-6 p0">
                <div class="responsive-img" style="background-image: url(images/assets_cause_4.jpg); height: 400px"></div>
                <div class="responsive-img" style="background-image: url(images/assets_cause_5.jpg); height: 400px"></div>
            </div>
        </div>
    </section>

    <!-- common parts -->
    <section class="common-space">
        <div class="container">
            <div class="row sectionTitle text-center">
                <h2 class="text-plum">THE CHILDREN OF THE NUBA MOUNTAINS URGENTLY NEED YOUR SUPPORT</h2>
            </div>
        </div>
        
        <?php include "includes/donateCards.php" ?>
    </section>

    <section>
        <?php include "includes/achieved.php"; ?>    
    </section>

    <section class="mt-70">
        <?php include "includes/joinus.php"; ?>
    </section>

    <?php
        include "includes/contactForm.php";
        include "includes/donateForm.php";
        include "includes/newsletter.php";
        include "includes/footer.php";
    ?>

</body>
</html>
