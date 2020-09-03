<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>One In Four Children - Who we are</title>
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
                <img src="images/slides/aboutus_1.jpg" alt="...">
                <div class="carousel-caption">
                    <!-- <h6 class="label label-default">Our Purpose</h6> -->
                    <h3 class="cause-title"><a href="#">WE HELP THOUSANDS OF CHILDREN TO GET THEIR EDUCATION, NOW WE NEED YOUR HELP.</a></h3>
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
                            <h4 class="select-all-tab">ABOUT US</h4>
                            <ul class="nav">
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 0 ? 'active' : ''; ?>" content-tag="about_who_we">Who We Are</a></li>
                                <li><a href="about.php" class="sideNav-item">Our Team</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 2 ? 'active' : ''; ?>" content-tag="about_our_story">Our Story</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 3 ? 'active' : ''; ?>" content-tag="about_what_do">What We Do</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 4 ? 'active' : ''; ?>" content-tag="about_we_serve">The People We Serve</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 5 ? 'active' : ''; ?>" content-tag="about_supporter">Our Supporters</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 6 ? 'active' : ''; ?>" content-tag="about_work_with">Work With Us</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 7 ? 'active' : ''; ?>" content-tag="about_corporate_partner">Corporate Partnerships</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row m0 pt-5 shortcodeBlock w-full" id="accordions_toggles">
                        <div id="content_1" class="hhh_content toggle_sidenav_content about_who_we <?php echo $curTab == 0 ? 'active' : ''; ?>">
                            <div class="content-title">Who We Are</div>
                            <div class="content">
                                <div class="responsive-img" style="background-image: url(images/assets_about_4.jpg); height: 500px"></div>
                                <div class="embed-text style-1" style="color: #e5aef3; top: 160px; font-size: 3.5rem;">
                                    <span>FOR MANY IN THE NUBA</span></br>
                                    <span>MOUNTAINS, WE ARE THE</span></br>
                                    <span>LAST HOPE</span>
                                </div>
                            </div>
                        </div>

                        <div id="content_2" class="hhh_content toggle_sidenav_content about_our_story <?php echo $curTab == 2 ? 'active' : ''; ?>">
                            <div class="content-title">Our Story</div>
                            <div class="content">
                                <div class="responsive-img" style="background-image: url(images/assets_about_1.jpg); height: 500px"></div>
                                <div class="embed-text">
                                    <span>FOR MANY IN THE NUBA</span></br>
                                    <span>MOUNTAINS, WE ARE THE</span></br>
                                    <span>LAST HOPE</span>
                                </div>
                            </div>
                        </div>

                        <div id="content_3" class="hhh_content toggle_sidenav_content about_what_do <?php echo $curTab == 3 ? 'active' : ''; ?>">
                            <div class="content-title">WHAT WE DO</div>
                            <div class="content">
                                <div class="responsive-img" style="background-image: url(images/assets_about_1.jpg); height: 500px"></div>
                                <div class="embed-text">
                                    <span>FOR MANY IN THE NUBA</span></br>
                                    <span>MOUNTAINS, WE ARE THE</span></br>
                                    <span>LAST HOPE</span>
                                </div>
                            </div>
                        </div>

                        <div id="content_4" class="hhh_content toggle_sidenav_content about_we_serve <?php echo $curTab == 4 ? 'active' : ''; ?>">
                            <div class="content-title">The People We Serve</div>
                            <div class="content">
                                <div class="responsive-img" style="background-image: url(images/assets_about_3.jpg); height: 500px"></div>
                                <div class="embed-text style-1">
                                    <span>1 physician services 500</span></br>
                                    <span>people Dr Tom Catana</span>
                                </div>
                            </div>
                        </div>

                        <div id="content_5" class="hhh_content toggle_sidenav_content about_supporter <?php echo $curTab == 5 ? 'active' : ''; ?>">
                            <div class="content-title">Our Supporters</div>
                            <div class="content text-center text-container">
                                <br>
                                <h3 class="font-bold">PARTNERSHIP BASED ON TRUST, INTEGRITY, ACCOUNTABILITY</h3>
                                <br>
                                <p class="font-20">
                                    We value your support and we are committed to Integrity, Transparency and Accountability in everything we do. 
                                    We treat your contribution with 
                                    <strong class="text-plum">CARE</strong> and respect and maintain a commitment to keeping you up-to-date about how we are using your contribution uplift communities in the Nuba Mountains from destitution, poverty and Illiteracy. 
                                </p>
                                <p class="font-20">
                                    When you support us through in Kind Donation of 
                                    <strong class="text-plum">BOOKS, FUNDS, TIME</strong> and <strong class="text-plum">EXPERTISE</strong>, you join our global network of partners who help us generate a deeper impact 
                                    <strong class="text-plum">where we work</strong> by enabling us build sustainable, economically empowered and thriving communities through education and knowledge sharing. 
                                </p>
                                <P class="font-20">
                                    We want to work with you to change the world, email us at <strong class="text-purple">enquiries@oneinfourchildren.org</strong>
                                </P>
                            </div>
                        </div>

                        <div id="content_6" class="hhh_content toggle_sidenav_content about_work_with <?php echo $curTab == 6 ? 'active' : ''; ?>">
                            <div class="content-title">Work With Us</div>
                            <div class="content text-container font-20">
                                <br>
                                <p>One in four children Inc. has a vision to make knowledge accessible to all who seek, this is supported by our mission to eradicate poverty by building
                                a future where all children can read and write through education and knowledge sharing. We work with government
                                and private organisations to build resilient, self reliant and sustainable communities in South Sudan and East Africa.</p>
                                <p> We believe that it takes a community to build a community. We need you. By Volunteering with us everyone Wins.</p>

                                <h3>One In Four Board members X3</h3>
                                <p> We are looking for Board members who embody our values of Commitment, Accountability, Respect and Excellence to build and strengthen the governance of One In Four Children Inc inline with its legal obligations </p>
                                <br>
                                <p><strong><h4>As a board member your responsibilities will include;</h4></strong></p>

                                <ul>
                                    <li> Providing Leadership and professional experience in Governance of a Not-For- Profit organisation </li>
                                    <li> Chair and actively drive performance of the Fundraising, Marketing and Communications sub-committee, in line with that committee’s Terms of Reference </li>
                                    <li> Formulate and provide oversight of policies and procedures </li>
                                    <li> Financial management, including development and oversight of the annual budget and revenue raising strategies </li>
                                    <li> Workforce planning, development and evaluation </li>
                                    <li> Monitoring and review of organisational and program performance </li>
                                    <li> Lead and identify opportunity for fundraising and advocacy opportunities for ongoing and recurrent funding opportunities </li>
                                    <li> Build commitment to common goals and help create an environment of collaboration and achievement </li>
                                    <li> Embraces change to stay ahead of problems but tackles them head-on when they arise </li>
                                    <li> Establish clear objectives and plans to achieve them, adjusting plans to integrate new information </li>
                                    <li> Set high standards of achievement for self and others and maintains positive outlook despite obstacles </li>
                                    <li> Display flexibility in complex or ambiguous situations. Resourceful and versatile in responding to changing demands and opportunities </li>
                                    <li> Communicate effectively, up, down and out of the organisation.</li>
                                </ul>
                                <br>
                                <p><h4> To apply for this position, please send your application to <a href="mailto:applications@oneinfourchildren.org">applications@oneinfourchildren.org</a><h4></p>
                                <br>
                                <h3>Fundraising Coordinator </h3>
                                <p> The Fundraising Coordinator will be charged with leading on the Research, planning and implementation of fundraising activities, such as crowd funding, Fundraising Events and other funding sources.</p>
                                <br>
                                <p><strong><h4>Your responsibilities will include;</h4></strong></p>
                                <ul>
                                    <li> Contributing expertise to organisational fundraising, marketing, branding and communication plans and initiatives </li>
                                    <li> Building on current brand and develop programs that will develop new fundraising opportunities </li>
                                    <li> Developing and managing communications channels and web presences including, electronic/social media, newsletter, public relations, website and printed collateral </li>
                                    <li> Maintaining and building relationships with corporate partners and ambassadors </li>
                                    <li> Overseeing a consistent and active communication strategy to all stakeholders for the purposes of recruitment, program messaging, fundraising, awareness and branding </li>
                                    <li> Identifying new funding and grant opportunities updated information available from trusts, foundations, corporations and government organisations </li>
                                    <li> Mentoring / guideing team members who contribute to fundraising activities </li>
                                </ul>
                                <br>
                                <p><h4> To apply for this position, please send your application to <a href="mailto:applications@oneinfourchildren.org">applications@oneinfourchildren.org</a><h4></p>
                                <br>
                                <h3>Community Outreach Advocate </h3>
                                <p> The Community Outreach Advocate will be primarily focused on sourcing new opportunities and revenue from sponsorships,
                                    donations, media and PR for One in Four through engagement with community organisations and corporate businesses.</p>
                                <p> Part of this role will also see you working in a setting that develops and empowers young African youth in high a
                                    impact campaigning, public engagement and leadership development initiatives, as well as maintaining strong
                                    relationships with local Communities, schools,
                                    universities, churches and corporate businesses to help run our campaigns. </p>
                                <br>
                                <p><strong><h4>Additional Responsibilities will include;</h4></strong></p>
                                <ul>
                                    <li> Source new revenue opportunities from Sponsorships, donations. </li>
                                    <li> Source media opportunities to increase visibility for One In Four </li>
                                    <li> Source Corporate opportunities to pitch sponsorship packages </li>
                                    <li> Create marketing collateral </li>
                                    <li> Overseeing a consistent and active communication strategy to all stakeholders for the purposes of recruitment, program messaging, fundraising, awareness and branding </li>
                                    <li> Identifying new funding and grant opportunities updated information available from trusts, foundations, corporations and government organisations </li>
                                    <li> Work with the volunteer manager to build and lead a team of volunteers to support the objectives of the role </li>
                                    <li> Meet revenue targets and grow the role to a full-time paid position </li>
                                </ul>
                                <br>
                                <p><h4> To apply for this position, please send your application to <a href="mailto:applications@oneinfourchildren.org">applications@oneinfourchildren.org</a><h4></p>
                                <br>
                                <h3>National digital Communication & Marketing Executive </h3>
                                <p> The National Digital communications and Marketing extraordinary will be a person with creative flair, who is passionate about building sustainable brands. This is an extremely central position within our 3 year strategic vision.
                                If you are passionate about creating impactful brands, this might just be your calling</p>
                                <br>
                                <p><strong><h4>Your responsibilities will include;</h4></strong></p>
                                <ul>
                                    <li> Manage the One In Four social media accounts </li>
                                    <li> Increase One In Four digital footprint through SEO and digital content </li>
                                    <li> Developing and managing communications channels and web presences including, electronic/social media, newsletter, public relations, website and printed collateral </li>
                                    <li> Maintain a strong passion and commitment for the work One In Four does across the regions we work </li>
                                    <li> Work with our fundraising team to solicit major gifts </li>
                                    <li> Developing multi-channel fundraiser communication campaigns </li>
                                    <li> Handle all digital correspondence for individual, workplace, community fundraisers and supporters </li>
                                    <li> Build and nurture strong relationships with supporters </li>
                                    <li> Create and run fundraising campaigns on various channels </li>
                                    <li> Build and maintain strong donor relationships </li>
                                    <li> Handle all digital correspondence for individual, workplace, community fundraisers and supporters </li>
                                    <li> Solicit major gifts from businesses and high-wealth individuals.
                                    <li> Ensure donor database is up to date and current </li>
                                </ul>
                                <br>
                                <p><h4> To apply for this position, please send your application to <a href="mailto:applications@oneinfourchildren.org">applications@oneinfourchildren.org</a><h4></p>
                                <br>
                                <h3>Grass Roots Organiser </h3>
                                <p> The Grassroots organiser works with the advocacy director, program director, fundraising coordinator, community outreach advocate and volunteer manager to provide support for campaigns and programs.</p>
                                <p> Collaborates in developing organizing campaigns or program strategies that are centred on racial justice and just transition for African refugees and migrants Coordinates the identification, recruitment,
                                    and organizing of One In Four volunteers around priority campaign(s)</p>
                                <p> S/he will Seek opportunities to advance One In Four’s diversity, equity, and inclusion initiatives through new partnerships and engagement
                                    strategies where appropriate. S/heEngages people and develops volunteer leadership in both social and humanitarian advocacy activities
                                    that will create strong environmental communities and build power at the community, state, and national levels. While doing so entering and exiting communities with
                                    intention and   integrity consistent with One In Four vision, mission and objectives </p>
                                <p><strong><h4>Your responsibilities will include to;</h4></strong></p>
                                    <ul>
                                    <li> Develop and implement a variety of engagement strategies including on-line and face-to-face social networks to support One in Four programs </li>
                                    <li> Bring racial justice, humanitarian, economic justice and social justice stakeholders together and connects them to the broader campaigns and program work </li>
                                    <li> Represent One In Four to the public and in the media, including developing public education and media strategy </li>
                                    <li> Maintaining and building relationships with corporate partners and ambassadors </li>
                                    <li> Develops positive working relationships with existing community-based organisations, international human rights organisations, businesses on campaign issues </li>
                                    <li> Develop working relationships with relevant corporate leaders, state government and public figures </li>
                                    <li> Provides information, research, and other assistance to One In Four leaders, the public and others about the campaigns and priority issues. Provides support to other internal departments for campaign synergy </li>
                                    <li> Works with One In Four communications and Digital Departments in the implementation of media and public outreach communications </li>
                                    <li> Coordinates and measures the success of activities with manager and campaign or program leads to ensure progress towards the campaign or program's mission and goals </li></ul>
                                <br>
                                <p><h4> To apply for this position, please send your application to <a href="mailto:applications@oneinfourchildren.org">applications@oneinfourchildren.org</a><h4></p>
                            </div>
                        </div>

                        <div id="content_7" class="hhh_content toggle_sidenav_content about_corporate_partner <?php echo $curTab == 7 ? 'active' : ''; ?>">
                            <div class="content-title">Corporate Partnerships</div>
                            <div class="content text-center text-container">
                                <br>
                                <h3 class="font-bold">PARTNERSHIP BASED ON TRUST, INTEGRITY, ACCOUNTABILITY</h3>
                                <br>
                                <p class="font-20">
                                    We value your support and we are committed to Integrity, Transparency and Accountability in everything we do. 
                                    We treat your contribution with 
                                    <strong class="text-plum">CARE</strong> and respect and maintain a commitment to keeping you up-to-date about how we are using your contribution uplift communities in the Nuba Mountains from destitution, poverty and Illiteracy. 
                                </p>
                                <p class="font-20">
                                    When you support us through in Kind Donation of 
                                    <strong class="text-plum">BOOKS, FUNDS, TIME</strong> and <strong class="text-plum">EXPERTISE</strong>, you join our global network of partners who help us generate a deeper impact 
                                    <strong class="text-plum">where we work</strong> by enabling us build sustainable, economically empowered and thriving communities through education and knowledge sharing. 
                                </p>
                                <P class="font-20">
                                    We want to work with you to change the world, email us at <strong class="text-purple">enquiries@oneinfourchildren.org</strong>
                                </P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="toggle_sidenav_content about_who_we <?php echo $curTab == 0 ? 'active' : ''; ?>">
        <div class="text-center" style="margin: 0 15px;">
            <div class="row">
                <div class="col-sm-6 tile back-gray-white">
                    <div class="tile-content">
                        <h1 class="text-plum-1">OUR VISION</h1>
                        <P class="text-black">To make accessible knowledge to all who seek</P>
                    </div>
                </div>
                <div class="col-sm-6 tile back-purple">
                    <div class="tile-content">
                        <h1>OUR MISSION</h1>
                        <P class="text-plum-2">To eradicate proverty by building a future where all children can read and write through education and knowledge sharing</P>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 tile back-plum-1">
                    <div class="tile-content">
                        <h1>OUR CORE VALUES</h1>
                        <P class="text-orange">We have an unwavering passion for what we do, we speak up on matters of principle. We serve with conviction.</P>
                    </div>
                </div>
                <div class="col-sm-6 p0">
                    <div class="responsive-img" style="background-image: url(images/assets_about_6.jpg); height: 400px"></div>
                </div>
                <div class="col-sm-12 back-gray-white">
                    <div class="tile-content" style="margin: 50px 40px 70px;">
                        <h1 class="text-purple">CARE is who we are</h1>
                        <p class="text-gray-1">For more than 30 years, the Nuba Mountains has been living in the shadows of civil war, poverty and illiteracy. Our people feel neglected and their cry for help goes an answered. International human rights organisations, charity organisations, public, private, and other civil organisations have considered the Nuba Mountains too difficult to reach and too expensive to serve. We see it differently. We believe everyone deserves to live a life of Freedom, dignity and opportunity. Those are the values we espouse to and they drive our Principles of CARE.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row mt-70">
                <div class="col-sm-6 p0">
                    <div class="responsive-img" style="background-image: url(images/assets_about_7.jpg); height: 400px"></div>
                </div>
                <div class="col-sm-6 tile back-purple-1">
                    <div class="tile-content">
                        <h1>COMMITMENT</h1>
                        <p>We love what we do, we embrace challenges, we see things through. We are cognizant of the risks and personal sacrifice our work requires. We still do what we do for the greater good of our community</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 tile back-blue">
                    <div class="tile-content">
                        <h1>ACCOUNTABILITY</h1>
                        <p>Without the support of our donors, partners and supporters our work of rebuilding communities in need would be Impossible. We will honour your contribution in Trustworthy and Transparent and manner.</p>
                    </div>
                </div>
                <div class="col-sm-6 p0">
                    <div class="responsive-img" style="background-image: url(images/assets_about_8.jpg); height: 400px"></div>
                </div>
            </div>

            <div class="row mt-70">
                <div class="col-sm-6 p0">
                    <div class="responsive-img" style="background-image: url(images/assets_about_9.jpg); height: 400px"></div>
                </div>
                <div class="col-sm-6 tile back-plum-1">
                    <div class="tile-content">
                        <h1>RESPECT</h1>
                        <p>We listen, speak with courtesy and celebrate all inherent differences.</p>
                        <p>We are joined together by a guided mission to eradicate poverty and illiteracy by ensuring every child can read and write. We embrace Teamwork, collaboration, creativity and authentic self.</p>
                    </div>
                </div>
            </div>
            <div class="row  mb-70">
                <div class="col-sm-6 tile back-purple-1">
                    <div class="tile-content">
                        <h1>EXCELLENCE</h1>
                        <p>We invest in our people, everything we do we it exceptionally. We embrace and learn from our unique and diverse experiences, we let the communities we lead be our teachers.</p>
                    </div>
                </div>
                <div class="col-sm-6 p0">
                    <div class="responsive-img" style="background-image: url(images/assets_about_10.jpg); height: 400px"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="toggle_sidenav_content about_our_story <?php echo $curTab == 2 ? 'active' : ''; ?>">
        <div class="container">
            <div class="row back-gray-white">
                <div class="col-sm-6 p0">
                    <div class="responsive-img" style="background-image: url(images/assets_about_2.jpg); height: 560px"></div>
                </div>
                <div class="col-sm-6 font-20 text-container">
                    <br>
                    <h2 class="text-center">REFUGEES ARE PEOPLE FULL OF HOPE AND OPTIMISM</h2>
                    <br>
                    <p>One in Four Children is Founded by Stephen Kamal, a child of war and former refugee.</p>
                    <p>Stephen left the Nuba Mountains in 1996 after an intensely horrific genocidal war, drought and engineered famine that resulted in an estimated 100,000 to 200,000 deaths of the Nuba People. The war brought destruction and immense suffering on our people, it wiped out whole families, flattened down townships and ripped out and continues to rip apart an entire country thirty years and counting.</p>
                    <p>I lost my entire childhood to the Sudanese Civil war. Twenty Four years and counting I separated with my parents and have yet to experience a continuous fatherly or motherly love and affection.</p>
                    <p>Despite my experiences as a child of war, former refugee and survivor,  my life is 99.9% better than that of my country men right now in the Nuba Mountains.</p>
                    <br>
                </div>
            </div>
        </div>

        <div style="margin: 40px 15px">
            <div class="row">
                <div class="col-sm-6 p0">
                    <div class=" font-20 text-container y-auto"  style="height: 440px; background-color: rgb(111, 168, 220)">
                        <br>
                        <p class="text-white">Education is the pillar of society. You give a man a fish, you feed him for a day, you teach teach him to fish and you feed him for a lifetime.</p>
                        <p class="text-white">The Catalyst for One in Four Children were a many conversations with Nuba children in Refugee camps living in Uganda, Sudan, Egypt and Kenya, in which many students said lack of quality books was a major pain point for them.</p>
                        <p class="text-white">Along with Peter Sambia and Kagi Kowa, Stephen set out to change the narrative for so many of the children stuck in a complete cycle of poverty.</p>
                        <p class="text-white">We believe books change lives. We know because we’ve lived on both sides of the fence and the difference some literacy in the way of being able to read and write can make is immeasurable.</p>
                        <p class="text-white">By providing books, we give knowledge to children and families to uplift themselves from a life of absolute poverty and indignity.</p>
                    </div>
                    
                    <div class="learn-more__btn">
                        <a href="#">Learn more about our programs</a>
                    </div>
                </div>
                <div class="col-sm-6 p0">
                    <div class="responsive-img" style="background-image: url(images/assets_about_5.jpg); height: 500px"></div>
                </div>

                <?php include "includes/donateSection.php" ?>
            </div>
        </div>

        <div class="container">
            <div class="sectionTitle mb-50">
                <h2 class="text-blue">NEWS AND MEDIA</h2>
            </div>
            <div class="row">
                <div class="row blog-group active">
                <?php
                    include "config/blogs.php";

                    $_bCount = count($blogs);
                    if($_bCount > 2) $_bCount = 2;
                    for($i = 0; $i < $_bCount; ++$i){
                        $blog = $blogs[$i];
                        if(!empty($blog) && $blog['type'] == 'video'){
                ?>
                        <div class="col-md-6 col-sm-12">
                            <article class="post post-type-video row">
                                <div class="row featured-contents">
                                    <video style="width: 100%; height: auto" controls poster="<?php echo $blog['thumb'] ?>">
                                        <source src="<?php echo $blog['url'] ?>" >
                                    </video>
                                </div>
                                <div class="row article-body toggle-content">
                                    <h3 class="post-title"><a href="<?php echo 'single_blog.php?id='.$i.'&title='.$blog['title']; ?>" style="color:rgb(0, 151, 167)"><?php echo $blog['title'] ?></a></h3>
                                    <ul class="post-meta nav">
                                        <li class="post-date"><a href="#" style="color:rgb(0, 151, 167)"><?php echo $blog['date'] ?></a></li>       
                                    </ul>
                                    <div class="post-content row">
                                        <?php 
                                            $contents = explode("\n", $blog['content'] );
                                            if(count($contents) > 0){
                                        ?>
                                                <p><?php echo $contents[1] ?></p>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                                <a href="<?php echo 'single_blog.php?id='.$i.'&title='.$blog['title']; ?>" class="btn-primary btn-outline dark more__btn" style="margin-top: 10px" >read more</a>
                            </article>
                        </div>
                <?php
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </section>

    <section class="toggle_sidenav_content about_what_do <?php echo $curTab == 3 ? 'active' : ''; ?>">
        <div class="m-lr-15 text-center">
            <div class="row">
                <div class="col-sm-6 p0">
                    <div class="responsive-img" style="background-image: url(images/assets_about_11.jpg); height: 400px"></div>
                </div>
                <div class="col-sm-6 text-container">
                    <h1 class="text-black">Our Work In Australia</h1>
                    <p class="text-gray">The In Australia component of work involves advocating for integration, and promoting diversity and inclusion programs for African youths aimed at removing barriers to entry into institutions of higher learning.</p>
                    <p class="text-gray">We do this through collaboration with industry, African youths and community groups through participation in and facilitation of culturally sensitive training, employment initiatives, and education-based workshops, events and discourse.</p>
                    <p class="text-gray">We seek to inspire African Youth to pursue higher education because education opens doors to meaningful employment</p>
                </div>
            </div>
        
            <div class="row">
                <?php include "includes/donateSection.php" ?>
            </div>
        
            <div class="row mt-50">
                <div class="col-sm-7 p0">
                    <div class="back-plum d-grid">
                        <h1>Australia</h1>
                    </div>
                    <div class="back-plum-1 text-white d-grid" style="min-height: 577px">
                        <div class="text-container">
                            <h3>Our In Australia Work Supporting Overseas Operations</h3>
                            <br>
                            <ul class="text-left font-20">
                                <li>Fundraising to cover shipping of books to Africa</li>
                                <li>Liaising with community members and organisations to source books and other school materials</li>
                                <li>Organising collection, sorting and Storage of books and school materials</li>
                                <li>Coordinating logistics efforts to send the books to Sudan</li>
                                <li>Working with Local Authorities to get customs clearance for the books as they arrive at port</li>
                                <li>Coordinating volunteer team members across Kenya, Uganda and Sudan to ensure books arrive as intended</li>
                                <li>Sharing our learning through publications, workshops, events to raise awareness of literacy levels in the Nuba mountains and across Africa</li>
                                <li>Sharing and strengthening Nuba culture, identity and history with the Australian community</li>
                                <li>Advocating for stronger mental health awareness and support for Sudanese youth to promote entry to higher education</li>
                            </ul>    
                        </div>
                    </div>
                    <div class="learn-more__btn back-plum">
                        <a href="/our_program.php">Learn more about our programs</a>
                    </div>
                </div>
                <div class="col-sm-5 p0">
                    <div class="responsive-img" style="background-image: url(images/assets_about_13.jpg); height: 360px"></div>
                    <div class="responsive-img" style="background-image: url(images/assets_about_14.jpg); height: 360px"></div>
                </div>
            </div>
        
            <div class="mt-50">
                <div style="position: relative; margin: 0 -15px">
                    <div class="responsive-img back-gray-white d-flex align-center justify-center" style="height: 500px">
                        <div class="embed-text" style="position: unset">
                            <span>Without Education, there can be no female Empowerment.</span></br>
                            <span>When Women Win, Everyone Wins. Thats why we want to</span></br>
                            <span>get more girls into reading</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-50">
                <div class="col-sm-5 p0">
                    <div class="responsive-img" style="background-image: url(images/assets_about_15.jpg); height: 360px"></div>
                    <div class="responsive-img" style="background-image: url(images/assets_about_16.jpg); height: 360px"></div>
                </div>
                <div class="col-sm-7 p0">
                    <div class="back-purple d-grid">
                        <h1>The Nuba Mountains</h1>
                    </div>
                    <div class="back-purple-1 d-grid p-12" style="min-height: 576px">
                        <div class="text-container">
                            <br>
                            <h3>In South Sudan and in the Nuba Mountains we dedicate a lot of our time and efforts building relationships, community engagement and liaison, and capacity building in addition to;</h3>
                            <ul class="text-left font-20">
                                <li>Securing safe passage for team members transporting books</li>
                                <li>Organising storage for books and school materials</li>
                                <li>Prioritizing distribution of books and materials</li>
                                <li>Collaborating with school communities to set-up school libraries</li>
                                <li>Organising transportation of books to schools in a rotational loan scheme</li>
                                <li>Facilitating Capacity building programs and literacy training and workshops for adults in the community</li>
                                <li>Promoting peer led reading programs in schools</li>
                                <li>Working in collaboration with government to promote Female Empowerment Programs</li>
                            </ul>
                            <br>
                        </div>
                    </div>
                    <div class="learn-more__btn back-purple">
                        <a href="/our_program.php">Learn more about our programs</a>
                    </div>
                </div>
            </div>

            <div class="row text-container common-space">
                <h3 class="text-black pb-25">TRANSFORMING LIVES ONE BOOK AT A TIME</h3>
                <h4 class="pb-25">We build sustainable, self reliant and thriving communities through books.</h4>
                <div class="container">
                    <div class="d-flex justify-between flex-wrap">
                        <a href="#"><h4>EDUCATION</h4></a>
                        <a href="#"><h4>EMPLOYMENT</h4></a>
                        <a href="#"><h4>ECONOMIC EMPOWERMENT</h4></a>
                        <a href="#"><h4>GLOBAL ADVOCACY</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="toggle_sidenav_content about_we_serve <?php echo $curTab == 4 ? 'active' : ''; ?>">
        <div class="container tile-document">
            <div class="row">
                <div class="col-sm-4 back-blue-1 tile">
                    <p>1. February 1993: More than 75,000 Nuba women and children are enslaved, children raped and massacred, civilians executed</p>
                </div>
                <div class="col-sm-4 back-blue-1 tile">
                    <p>2. March 1993: Number of Nuba people facing ethnic cleaning approaches 1000,000 people</p>
                </div>
                <div class="col-sm-4 back-blue-1 tile">
                    <p>3. July 1995: The African Rights Group (ARG)reports massive human rights violations, including murder, rape, and the destruction of churches and mosques.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 tile">
                    <p>4. February 1996: U.N. Rapporteur on Human Rights Gaspar Biro asserts that “in the Nuba Mountains, a large number of civilians, including women and children, Muslims and Christians alike, have been killed in [aerial] attacks or summarily executed.”</p>
                    <p>It is estimated that there are only 250–300 thousand Nuba left in SPLA-administered regions while at least 500 thousand have been forcibly resettled by the GoS in so-called “peace camps.” It is also estimated that, at a minimum, one hundred thousand, and possibly as many as two hundred thousand, Nuba have been forced from their villages and farms since 1983.</p>
                </div>
                <div class="col-sm-6 back-blue-1 tile">
                    <p>5. October 26, 1997: GOS sponsored militias commit murder, rape, forced displacement, incarceration in so-called “peace camps,” slavery, sexual slavery, planned famines, the purposeful destruction of food, overt blocking of humanitarian aid, and forced conversions to Islam.</p>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-sm-4 tile">
                    <p>6. December 1998: More than hundred thousand Nuba people are said to have been killed in the war</p>
                </div>
                <div class="col-sm-4 back-purple-2 tile">
                    <p>7. June 7, 2011: Another 60000, civilians are displaced by intense fighting between SPLM/N and GOS</p>
                </div>
                <div class="col-sm-4 tile">
                    <p>8. June 8, 2011: SAF reports it wants to “clear the state of the remaining rebels, Nuba people.”</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 tile">
                    <p>9. June 30, 2011: Ten Nuba towns and villages in South Kordofan are bombed and wiped out.</p>
                </div>
                <div class="col-sm-4 back-purple-2 tile">
                    <p>10. July 5, 2011: Of 141 schools 100 schools close, 20,000 students without school</p>
                </div>
                <div class="col-sm-4 tile">
                    <p>11. September 27, 2011: More than 25,000 refugees flee to Ethiopia for refuge</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 tile">
                    <p>12. October 5, 2011: Food crisis strikes, Hundreds of thousands are without food</p>
                </div>
                <div class="col-sm-4  back-purple-2 tile"></div>
                <div class="col-sm-4 tile">
                    <p>13. December 2014: More than 450 bombs, rockets, and artillery are dropped on the Nuba Mountains</p>
                </div>
            </div>
        </div>

        <div class="common-space">
            <?php include "includes/achieved.php"; ?>
        </div>

        <div class="container">
            <div class="row">
                <h2 class="text-center mb-32">OUR SUPPORTERS</h2>
                <div class="col-sm-6">
                    <div class="responsive-img" style="background-image: url(images/assets_about_17.jpg); height: 400px"></div>
                    <div class="embed-text back-none font-25" style="left: 50px; right: auto; top: 100px">
                        <span>YOUR SUPPORT MEANS NO</span></br>
                        <span>CHILD IN THE NUBA</span></br>
                        <span>MOUNTAINS CAN GET AN</span><br>
                        <span>EDUCATION</span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="responsive-img" style="background-image: url(images/assets_about_18.jpg); height: 400px"></div>
                </div>
            </div>
        </div>            
        <div class="m-lr-15">
            <div class="row mt-70">
                <div class="col-sm-12">
                    <div class="sectionTitle text-purple mb-32">
                        <h2>LIFE OF FREEDOM, DIGNITY AND OPPORTUNITY</h2>
                    </div>
                    <div class="font-20 container">
                        <p>
                            We value your support and we are committed to Integrity, Transparency and Accountability in everything we do. 
                            We treat your contribution with <strong class="text-plum">CARE</strong> and respect and maintain a commitment to keeping you up-to-date about how we are using your contribution uplift communities in the Nuba Mountains from destitution, poverty and Illiteracy. 
                        </p>
                        <p>
                            When you support us through in Kind Donation of <strong class="text-plum">BOOKS, FUNDS, TIME</strong> and <strong class="text-plum">EXPERTISE</strong>, you join our global network of partners who help us generate a deeper impact <strong class="text-plum">where we work</strong> by enabling us build sustainable, economically empowered and thriving communities through education and knowledge sharing.
                        </p>

                        <p><strong class="text-black">A Global Movement</strong></p>
                        <p>Volunteer network and lead local outreach, fundraising and activism on behalf of the communities we lead. As a chapter volunteer you have the opportunity to:</p>
                        <ul>
                            <li><strong class="text-black">Connect.</strong> Join forces with globally-oriented citizens in your community.</li>
                            <li><strong class="text-black">Build skills.</strong> Flex new and old skills in leadership, management, public speaking, and events.</li>
                            <li><strong class="text-black">Inspire.</strong> Channel your passion and inspire your community with a cause you love.</li>
                        </ul>
                        <p>We want to work with you to change the world, please email us at <strong class="text-purple">enquiries@oneinfourchildren.org</strong></p>
                        <br>
                        <br>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php include "includes/donateSection.php" ?>
            </div>
        </div>
    </section>

    <section class="toggle_sidenav_content about_supporter <?php echo $curTab == 5 ? 'active' : ''; ?>">
        <!--Good Causes-->
        <div id="good_cause" class="carousel slide supporters-viewer" data-ride="carousel" style="display: <?php echo $curTab == 5 ? 'block' : 'none'; ?>">
            <div class="row sectionTitle text-center">
                <h3 style="margin-top: 32px">Our Supporters & Partners</h3>
                <p class="font-bold font-20" style="margin-top: 32px; text-transform: none;">It takes community to build a community. we are passionate about building long lasting mutually beneficial relationship based on a collaborative spirit, Trust and Integrity. 
                    Our Partners support our mission through Donations in kind, funding and expertise, thus allowing us to bring education to more people.
                </p>
            </div>

            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#good_cause" data-slide-to="0"></li>
                    <li data-target="#good_cause" data-slide-to="1" class="active"></li>
                    <li data-target="#good_cause" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item">
                        <a href="our_story.php?tab=5&#page-content"><img src="images/supporter3.png" alt="..."></a>
                        <div class="carousel-caption">
                            <h6 class="label label-default"></h6>
                        
                            <a href="javascript:void(0)" class="btn-primary btn-outline white"></a>
                        </div>
                    </div>
                    <div class="item active">
                        <a href="our_story.php?tab=5&#page-content"><img src="images/supporter3.png" alt="..."></a>
                        <div class="carousel-caption">
                            <h6 class="label label-default"></h6>
                            
                            <a href="javascript:void(0)" class="btn-primary btn-outline white"></a>
                        </div>
                    </div>
                    <div class="item">
                        <a href="our_story.php?tab=5&#page-content"><img src="images/supporter3.png" alt="..."></a>
                        <div class="carousel-caption">
                            <h6 class="label label-default">OUR SUPPORTERS</h6>
                            
                            <a href="javascript:void(0)" class="btn-primary btn-outline white"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "includes/donateSection.php" ?>
    </section>

    <section class="toggle_sidenav_content about_corporate_partner <?php echo $curTab == 7 ? 'active' : ''; ?>">
        <div class="container">
            <div class="row">
            <p class="sectionTitle text-center font-bold mb-50">We are intertwined with our desire to make a positive difference in the lives of others. It’s not good Corporate citizenship, its humanity. We can only achieve so much working alone. Let’s together can go further.</p>
                <div class="col-sm-6">
                    <div class="responsive-img" style="background-image: url(images/assets_about_19.jpg); height: 400px"></div>
                </div>
                <div class="col-sm-6">
                    <div class="responsive-img" style="background-image: url(images/assets_about_20.jpg); height: 400px"></div>
                </div>
            </div>
        </div>

        <div class="mt-70">
            <?php include "includes/achieved.php"; ?>
        </div>
        
        <div class="contianer">
            <?php include "includes/contactForm.php" ?>
        </div>
    </section>

    <section>
        <?php include "includes/joinus.php"; ?>
    </section>

   <?php
        include "includes/donateForm.php";
        include "includes/newsletter.php";
        include "includes/footer.php";
    ?>
</body>
</html>
