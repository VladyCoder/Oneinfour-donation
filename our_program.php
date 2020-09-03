<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>One In Four Children - Our Programs</title>
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
                <img src="images/slident1.png" alt="...">
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
                            <h4 class="select-all-tab">OUR PROGRAMS</h4>
                            <ul class="nav">
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 0 ? 'active' : ''; ?>" content-tag="cause_illiteracy">EDUCATION</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 1 ? 'active' : ''; ?>" content-tag="cause_empowerment">ECONOMIC EMPOWERMENT</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 2 ? 'active' : ''; ?>" content-tag="cause_employment">EMPLOYMENT</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 3 ? 'active' : ''; ?>" content-tag="cause_advocacy">GLOBAL ADVOCACY</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row m0 pt-5 shortcodeBlock w-full" id="accordions_toggles">
                        <div id="content_1" class="hhh_content toggle_sidenav_content cause_illiteracy <?php echo $curTab == 0 ? 'active' : ''; ?>">
                            <div class="content-title">EDUCATION</div>
                            <div class="content">
                                <div class="responsive-img" style="background-image: url(images/assets_program_1.jpg); height: 500px"></div>
                                <div class="embed-text style-2">
                                    <h2>OUR PROGRAMS TRANSFORM HOPELESSNESS</h2>
                                    <h3>Lack of School esources is  major pain point for many schools children and schools in the Nuba Mountains.</h3>
                                    <h3>Our Donation means that we can bridge education to more people</h3>
                                    <h3>Imagine a school with 17,000 students and 15 teachers without any school books to support learning outcomes.</h3>
                                </div>
                            </div>
                        </div>

                        <div id="content_2" class="hhh_content toggle_sidenav_content cause_empowerment <?php echo $curTab == 1 ? 'active' : ''; ?>">
                            <div class="content-title">ECONOMIC EMPOWERMENT</div>
                            <div class="content">
                                <div class="responsive-img" style="background-image: url(images/assets_program_4.jpg); height: 500px"></div>
                            </div>
                        </div>

                        <div id="content_3" class="hhh_content toggle_sidenav_content cause_employment <?php echo $curTab == 2 ? 'active' : ''; ?>">
                            <div class="content-title">EMPLOYMENT</div>
                            <div class="content">
                                <div class="responsive-img" style="background-image: url(images/assets_program_4.jpg); height: 500px"></div>
                            </div>
                        </div>
                        
                        <div id="content_3" class="hhh_content toggle_sidenav_content cause_advocacy <?php echo $curTab == 3 ? 'active' : ''; ?>">
                            <div class="content-title">GLOBAL ADVOCACY</div>
                            <div class="content">
                                <div class="responsive-img" style="background-image: url(images/assets_program_9.jpg); height: 500px"></div>
                                <div class="embed-text style-2" style="background-color: #d8d8d8ba;">
                                    <h3 class="text-black">WE PROVIDE A PLATFORM FOR</h3>
                                    <h1 class="text-plum">Self,</h1>
                                    <h1 class="text-plum">Community</h1>
                                    <h1 class="text-plum">&</h1>
                                    <h1 class="text-plum">Global Advocacy</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="toggle_sidenav_content cause_illiteracy <?php echo $curTab == 0 ? 'active' : ''; ?>">
        <div class="row m-0">
            <div class="col-sm-5 p0">
                <div class="responsive-img" style="background-image: url(images/assets_cause_2.jpg); height: 640px"></div>
            </div>
            <div class="col-sm-7 p0 text-center text-white back-blue-1" style="min-height: 640px">
                <div class="back-blue d-grid text-container pt-12 pb-12">
                    <h3>DELIVERING BOOKS AND COMMUNITY SUPPORT SERVICES THAT CHANGE THE LIVES OF PEOPLE LIVING IN THE NUBA MOUNTAINS</h3>
                </div>
                <div class="back-blue-1 text-white d-grid pt-50 pb-25">
                    <div class="text-container text-left font-20">
                        <p class="text-white">Our goal is to get more students from migrant backgrounds completing high school and into higher education in Australia.</p>
                        <p class="text-white">In the Nuba Mountains our programs are designed to ensure more children have access to early education; to increase reading and writing skills in the broader community, develop and increase digital literacy skills for school children and adults and finally to, increase the number of students attending and completing secondary education </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-0 mt-50">
            <div class="col-sm-6 p0 text-center text-white back-purple-1" style="min-height: 720px">
                <div class="back-purple d-grid text-container pt-12 pb-12">
                    <h3>BUILDING A NEW FOUNDATION OF THOUGHTFUL LEADERSHIP</h3>
                </div>
                <div class="back-purple-1 text-white d-grid pt-25 pb-25">
                    <div class="text-container text-left">
                        <h4 class="mb-32">We work with children in conflict zones in South Sudan and East Africa and in the Diaspora to;</h4>
                        <ol class="font-20 list-left-space">
                            <li>Assist them understand the Australian education system and to ensure their kids understand the benefits of attending school.</li>
                            <li>Provide tutoring in groups with objectives that are aligned to the student’s individual need.</li>
                            <li>Partner with existing educational facilities in the community, we assist youth to create higher education pathways and to work towards completing university.</li>
                            <li>Educate parents on how to improve interactions with their kids at home.</li>
                            <li>Create resources in our community centers like computer labs and libraries, available to local students.</li>
                            <li>Work with schools and other community groups to provide value added training such as computer literacy, arts and higher education pathways planning</li>
                        </ol>    
                    </div>
                </div>
            </div>
            <div class="col-sm-6 p0">
                <div class="responsive-img" style="background-image: url(images/assets_program_2.jpg); height: 360px"></div>
                <div class="responsive-img" style="background-image: url(images/assets_program_3.jpg); height: 360px"></div>
            </div>
        </div>
    </section>

    <section class="toggle_sidenav_content cause_empowerment <?php echo $curTab == 1 ? 'active' : ''; ?>">
        <div class="row m-0">
            <div class="col-sm-6 p0">
                <div class="responsive-img" style="background-image: url(images/assets_program_13.jpg); height: 640px"></div>
            </div>
            <div class="col-sm-6 p0 text-center text-white back-gray-white" style="min-height: 640px">
                <div class="back-gray d-grid text-container p-12">
                    <h3>TEAM BUILDING THROUGH GAMES AND SPORT</h3>
                </div>
                <div class="back-gray-white text-white d-grid pt-50 pb-25">
                    <div class="text-container text-left font-20">
                        <p>This program is designed to teach the value of teamwork and empathy. They build cohesion, life skills like self-awareness, problem solving. It also creates a fun environment to connect with peers and share anecdotal experiences, stories and ideas. This is an important aspect of the healing process for migrants</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-0 mt-70">
            <div class="col-sm-6 p0 text-center text-white back-gray-white" style="min-height: 640px">
                <div class="back-gray d-grid text-container p-12">
                    <h3>PROMOTING CULTURE AND IDENTITY</h3>
                </div>
                <div class="back-gray-white text-white d-grid pt-50 pb-25">
                    <div class="text-container text-left font-20">
                        <p>Culture is an important aspect of individual and collective identity. Our program offers safe spaces for refugees and migrants to participate in various art forms like poetry and storytelling, dance, singing, music, drawing, painting and theater. We teach the youth to learn how to express their emotions in new and creative ways. </p>
                        <p>Skills learned such as decision-making, communication, self-awareness and problem solving empower the youth and enable them to have a voice.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 p0">
                <div class="responsive-img" style="background-image: url(images/assets_program_5.jpg); height: 640px"></div>
            </div>
        </div>
    </section>

    <section class="toggle_sidenav_content cause_employment <?php echo $curTab == 2 ? 'active' : ''; ?>">
        <div class="row m-0">
            <div class="col-sm-5 p0">
                <div class="responsive-img" style="background-image: url(images/assets_program_6.jpg); height: 360px"></div>
                <div class="responsive-img" style="background-image: url(images/assets_program_7.jpg); height: 360px"></div>
            </div>
            <div class="col-sm-7 p0 text-center text-white back-blue-1" style="min-height: 720px">
                <div class="back-blue d-grid text-container p-12">
                    <h3>ADVOCATING FOR MEANINGFUL EMPLOYMENT</h3>
                </div>
                <div class="back-blue-1 text-white d-grid pt-25 pb-25">
                    <div class="text-container">
                        <h4 class="text-left">HOW WE DO IT</h4>
                        <ol class="text-left font-20 list-left-space">
                            <li>Work to Link youth to vocational training and university programs to increase the likelihood of gaining meaningful employment</li>
                            <li>Design capacity building programs in beneficiary communities such as skills training, and entrepreneurship</li>
                            <li>Tailor work-readiness activities such as soft-skills development and job placement to boost employability</li>
                            <li>Through our corporate partnerships program, provide mentorship and essential job skills such as teaching interview techniques and conducting mock job interviews</li>
                            <li>Provide job counseling on résumé creation, lining up letters of recommendation</li>
                        </ol>    
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-0 d-flex flex-wrap mt-70">
            <div class="col-sm-7 p0">
                <img src="images/assets_program_14.jpg" alt="" class="w-full">
            </div>
            <div class="col-sm-5 p0 d-flex text-center back-green-1">
                <div class="m-auto">
                    <div class="text-container">
                        <h2 class="text-black">STRONGER TOGETHER</h2>
                        <h2 class="text-plum">Build relationships with local employers and business organizations to to assist them build an inclusive and diverse workforce.</h2>

                        <div class="text-right m-lr-15 mt-50">
                            <a href="#" class="btn-primary btn-outline white text-purple">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive-img" style="background-image: url(images/assets_program_8.jpg); height: 360px"></div>
    </section>

    <section class="toggle_sidenav_content cause_advocacy <?php echo $curTab == 3 ? 'active' : ''; ?>">
        <div class="row m-0">
            <div class="col-sm-6 p0 text-center text-white back-purple-1" style="min-height: 720px">
                <div class="back-purple d-grid text-container p-12">
                    <h3>ADVOCACY</h3>
                </div>
                <div class="back-purple-1 text-white d-grid pt-50 pb-25">
                    <div class="text-container text-left font-20">
                        <p class="text-white">We assist the youth to develop critical thinking through self advocacy, community advocacy and societal advocacy training. They gain leadership skills, interpersonal and digital skills to tackle some of the biggest issues affecting them. We bring together policy advocates, thought leaders, change makers, and some of the sharpest minds in today's world to tackle some of the most pressing issues affecting refugees and migrants. By sharing their experiences young people are able to bring to bear issues that matter to them.</p>
                        <p class="text-white">One in four children Inc. has a vision to make knowledge accessible to all who seek, this is supported by our mission to eradicate poverty by building a future where all children can read and write through education and knowledge sharing. We work with government and private organisations to focus efforts on.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 p0">
                <div class="responsive-img" style="background-image: url(images/assets_program_11.jpg); height: 360px"></div>
                <div class="responsive-img" style="background-image: url(images/assets_program_12.jpg); height: 360px"></div>
            </div>
        </div>

        <div class="row m-0 back-gray-white d-flex">
            <div class="text-container font-20 m-auto pt-50 pb-50" style="max-width: 900px">
                <br><br>
                <p class="font-bold text-black">Restoring the dignity of children by providing access to sustainable education and access to quality schooling for all children, as per article 26 of the human rights declaration;</p>
                <ol>
                    <li>We do this by collecting and donating recycled books, school materials and technology to support learning.</li>
                    <li>Creating centres of excellence for modern education through personalised partnership with mission schools and organisations.</li>
                </ol><br>
                <p class="font-bold text-black">Maintaining a commitment to championing and addressing inequality and inequity in African schools by;</p>
                <ol>
                    <li>By addressing unequal and inequitable student needs and backgrounds.</li>
                    <li>Working with government to fund programs aimed at early childhood education and reducing distance to education centres, building physical and digital learning spaces.</li>
                    <li>Participating in policy formulation and decision making with government bodies.</li>
                    <li>Providing guidance on modern curriculum development in collaboration with Academia, the private sector and other partner organisations in the regions we work.</li>
                </ol><br>
                <p class="font-bold text-black">Supporting sustainable capacity building in Africa through;</p>
                <ol>
                    <li>investment in quality teacher education, and community employment schemes.</li>
                    <li>Supporting community led infrastructure development and entrepreneurship programs aimed at creating safe spaces, restoring peace, promoting health and wellbeing, and nutrition for school children and their families.</li>
                    <li>supporting peer to peer learning programs within schools in the Nuba Mountains, Sudan and Africa.</li>
                </ol><br>
                <p class="font-bold text-black">Tenaciously and rigorously speaking up for refugees and migrant rights, as well as defending instances of child abuse wherever they occur within the African continent, and globally;</p>
                <p class="font-bold text-black">Promoting and celebrating heritage, identity and African culture with the wider international community through Art, storytelling and performance arts.</p>
                <br><br>
            </div>
        </div>
    </section>


    <!-- Common parts -->
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
