<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>One In Four Children - Take Action</title>
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
                <img src="images/d1.jpg" alt="...">
                <div class="carousel-caption">
                    <h6 class="label label-default">Our Purpose</h6>
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
        <div class="container">
            <div class="row">
                <div class="col-sm-12 d-flex">
                    <div class="sideNav-wrapper">
                        <div class="row m0 sideNav">
                            <h4 class="select-all-tab">TAKE ACTION</h4>
                            <ul class="nav">
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 0 ? 'active' : ''; ?>" content-tag="action_million_books">Our 1 million Books Of Hope Campaign</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 1 ? 'active' : ''; ?>" content-tag="action_hope_library">Hope Library Project</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 2 ? 'active' : ''; ?>" content-tag="action_donate_fund">Donate Funds</a></li>
                                <li><a href="#page-content" class="sideNav-item <?php echo $curTab == 3 ? 'active' : ''; ?>" content-tag="action_become_volunteer">Become a Volunteer</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row m0 pt-5 shortcodeBlock w-full" id="accordions_toggles">
                        <div id="content_1" class="hhh_content toggle_sidenav_content action_million_books <?php echo $curTab == 0 ? 'active' : ''; ?>">
                            <div class="content-title">Our 1 million Books Of Hope Campaign</div>
                            <div class="content font-20">
                                <h4>Donate Books</h4>
                                <br>
                                <p>1 in 3 in South Sudan is Illiterate. Between 2011 and 2015 than 100 schools were completely ravaged
                                by targeted aerial bombardments and ground. Today, many classrooms are still conducted under
                                trees and in dilapidated classrooms, Schools and teachers have no access to books with which to teach. </p>
                                <p> In response this urgent need we want to Donate 1 million books to schools in the region in 5 years
                                By Donating books to us, you are supporting our work to eradicate illiteracy and poverty in the Nuba Mountains, surrounding Regions and
                                Africa as a whole. We are Setting up new up schools and libraries to bring education and knowledge to more people.
                                <br>
                                <br>
                                <h4>Why Donate Books</h4>
                                <ol>
                                <li>Books improve community literacy standards. We run volunteer led reading and writing programs to improve community literacy standards </li>
                                <li> Donating Books will mean a reduced student teacher ratio and promote equitable access to learning resources removing distance to education and other home constraints.</li>
                                <li>More books Promote equal and equitable access to learning resources ranging. knowledge gained from reading books will empower communities to self innovate and fight hunger and poverty </li>
                                <li> Donating used books to us, is not only environmentally friendly, it means freeing up more space for more important things </li>
                                <li> Books provide an opportunity to create an environment where students can read for pleasure, enrich their intellectual curiosity and enhance emotional growth </li>
                                </ol>
                                <br>
                                <div class="row m0 mb20">
                                    <a href="#donate_box" class="btn-primary donate-now_btn">donate now</a>
                                    <a href="contact.php?#contact-content-pointer" class="btn-primary donate-now_btn">donate books</a>
                                </div>
                            </div>
                        </div>

                        <div id="content_2" class="hhh_content toggle_sidenav_content action_hope_library <?php echo $curTab == 1 ? 'active' : ''; ?>">
                            <div class="content-title">Hope Library Project</div>
                            <div class="content font-20">
                                <h4> Why Hope Library</h4>
                                <p> We chose " Hope" Because Hope represents Optimism. We see the Optimism in the WILL AND DETERMINATION of the Nuba People to be free and prosperous.
                                    Prosperity is possible if the people have the knowledge to attain Economic Freedom. Hope Library represents that Possibility. </p>
                                    <p> We want to use the library as a conduit for building connected communities through face-to-face learning and interaction.
                                    By building the Hope Library we can run volunteer led reading and writing classes as well as inititives focused on girl education, and female empowerment because women
                                    are disseminators of knowledge. Where women succeed, everyone succeeds </p>
                                <br>
                                <h4>10 Reasons to Donate Funds to Hope Library </h4>
                                <ol>
                                <li> Hope Library will help us build and revitalize a community ravaged by 30 years of civil war </li>
                                <li> It will be an important partner in sustainabile development in the Nuba Mountains </li>
                                <li> Hope Library will allow the Nuba People come to create history, know themselves, their communities and cultural heritage </li>
                                <li> Hope Library will serve as a catalysts for addressing social problems rampant in the Nuba Mountains. </li>
                                <li> Hope library will serve as the People's University </li>
                                <li> Hope Library will offer opportunities for remote access, making it possible for those who can’t get to the library to still access the library’s cultural and educational offerings</li>
                                <li> Hope Library will allow us to teach youth, women and the community important life skills </li>
                                <li> Hope Library will allow us to provide Free tutoring, homework help programs, and summer reading programs for kids and teens help bridge the economic divide that impacts students’ academic performance </li>
                                <li> Hope Library will be an important partner in early childhood development </li>
                                <li> Hope Librarie will allows to provide opportunity for self advocacy, community advocacy and societal advocacy </li>
                                </ol>
                                <br>
                                <div class="row m0 mb20">
                                    <a href="#donate_box" class="btn-primary donate-now_btn">donate now</a>
                                </div>
                            </div>
                        </div>

                        <div id="content_3" class="hhh_content toggle_sidenav_content action_donate_fund <?php echo $curTab == 2 ? 'active' : ''; ?>">
                            <div class="content-title">Donate Funds</div>
                            <div class="content font-20">
                                <h4>Donate Funds to Us</h4>
                                <p> Funding is the backbone of any Not for profit organisation. Ours is no different. Shipping Books to Africa is immensley expensive.
                                    Funds are vital for creating a fully functional and thriving ecosystem.
                                    <br>
                                <br>
                                    <p><strong><h4>Primarily we use donated funds to</h4></strong></p>
                                <ol>
                                <li>Provide and facilitate youth programs and services in Australia that allow us to educate, empower and advocate for African migrants and refugees </li>
                                <li> Facilitate collection and storage of the books in Australia until they are ready for Shipping </li>
                                <li> Transport the books to the Nuba mountains </li>
                                <li> Pay for transportation costs to get the books to school libraries in the Nuba Mountains </li>
                                <li> Pay library staff and volunteers nominal wages to manage and maintain the library </li>
                                <li> Build libraries and fund programs that enhance the learning experience of the students </li>
                                <li> Build Capacity to enable us reach more people in need of education. </li>
                                </ol>
                                <br>
                                <div class="row m0 mb20">
                                    <a href="#donate_box" class="btn-primary donate-now_btn">donate now</a>
                                </div>
                            </div>
                        </div>

                        <div id="content_4" class="hhh_content toggle_sidenav_content action_become_volunteer <?php echo $curTab == 3 ? 'active' : ''; ?>">
                            <div class="content-title">Become a Volunteer</div>
                            <div class="content font-20">
                                <h4>Volunteer With Us</h4>
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
                                <li> Communicate effectively, up, down and out of the organisation.</p></ul>
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
                                <li> Mentoring / guideing team members who contribute to fundraising activities </li></ul>
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
                                <li> Meet revenue targets and grow the role to a full-time paid position </li></ul>
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
                                <li> Ensure donor database is up to date and current </li></ul>
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
                                <!--<div class="row m0 mb20">-->
                                <!--    <a href="#donate_box" class="btn-primary donate-now_btn">donate now</a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include "includes/donateForm.php";
        include "includes/newsletter.php";
        include "includes/footer.php";
    ?>
</body>
</html>
