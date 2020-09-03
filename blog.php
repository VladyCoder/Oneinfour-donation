<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Helping Hand - Fund rise for great events</title>
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
    <link rel="stylesheet" href="vendors/flip-clock/flipclock.css">

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
                <img src="images/d2.jpg" alt="...">
                <div class="carousel-caption">
                    <h6 class="label label-default">Our Purpose</h6>
                    <h3 class="cause-title"><a href="#">WE HELP THOUSANDS OF CHILDs TO GET THEIR EDUCATION, NOW WE NEED YOUR HELP.</a></h3>
                    <a href="our_action.php" class="btn-primary btn-outline white">learn more</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="row how_help3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 how_help_post">
                    <h6 class="label label-defatult">how you can help us</h6>
                    <h3 class="this_title"><a href="#">WE HELP THOUSANDS OF CHILDRENS TO GET THEIR EDUCATION.</a></h3>
                    <p>One in Four believes that when communities build communities, we create stronger bonds, provide a sense of belonging and create safer and thriving communities the world over.</p>
                    <a href="#" class="btn-primary white">learn more</a>
                </div>
                <div class="col-sm-6">
                    <div class="media help-process3">
                        <div class="media-left">
                            <span><img src="images/help03.png" alt=""></span>
                        </div>
                        <div class="media-body">
                            <h5>DONATE A BOOK</h5>
                            <p>Our Approach to Solving illiteracy in the Nuba Mountains is by; Working with Both Private and public schools to convert school libraries into community libraries for the benefit of all...</p>
                        </div>
                    </div>
                    <div class="media help-process3">
                        <div class="media-left">
                            <span><img src="images/help01.png" alt=""></span>
                        </div>
                        <div class="media-body">
                            <h5>DONATE FUNDS</h5>
                            <p>Funds are vital for creating a fully functional and thriving ecosystem. Primarily to fund transportation of books to the Nuba mountains, transportation costs to get the books to school libraries in the Nuba Mountains...</p>
                        </div>
                    </div>
                    <div class="media help-process3">
                        <div class="media-left">
                            <span><img src="images/help02.png" alt=""></span>
                        </div>
                        <div class="media-body">
                            <h5>DONATE SCHOOL HARDWARE</h5>
                            <p>Even having a basic level of computer literacy is vital to having access to information which drives up innovation. Donating school hardware resources will also allow One in Four to develop a...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "config/blogs.php"; ?>

    <section class="row blog-content page-content">
        <div class="container">
            <div class="row sectionTitle text-center" style="margin-bottom: 40px">
                <h6 class="label label-default">how you could help</h6>
                <h3>WE NEED YOUR HELP TO HELP OTHERS, SEE OUR CAUSES gallery</h3>
            </div>

            <?php
                $_bCount = count($blogs);
                $_bPages = ceil($_bCount/$blogsPerPage);
                for($i = 0; $i < $_bPages; ++$i){
            ?>
                    <div class="row blog-group <?php echo 'page_num__'.$i.' '.($i == 0 ? 'active' : ''); ?>">
                    
            <?php   
                    for($j = 0 ; $j < $blogsPerPage; ++$j){
                        $_n = $i*$blogsPerPage + $j;
                        $blog = $blogs[$_n];
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
                                    <h3 class="post-title"><a href="<?php echo 'single_blog.php?id='.$_n.'&title='.$blog['title']; ?>"><?php echo $blog['title'] ?></a></h3>
                                    <ul class="post-meta nav">
                                        <li class="post-date"><i class="fa fa-calendar-o"></i> <a href="#"><?php echo $blog['date'] ?></a></li>       
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
                                <a href="<?php echo 'single_blog.php?id='.$_n.'&title='.$blog['title']; ?>" class="btn-primary btn-outline dark more__btn" style="margin-top: 10px" >read more</a>
                            </article>
                        </div>
                    
            <?php
                        }
                    }
            ?>
            
                    </div>
            <?php
                }
            ?>
            
            <ul class="blog pagination">
                <?php
                    for($i = 0; $i < $_bPages; ++$i){
                ?>
                    <li class="page_item <?php echo $i == 0 ? 'active' : ''; ?>" target-content="<?php echo 'page_num__'.$i; ?>"><a href="javascript:void(0)"><?php echo ($i + 1); ?></a></li>
                <?php
                    }
                ?>
                <li class="next-page_item"><a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
        
    </section>
   

    <?php include "config/gallaries.php"; ?>

    <section class="row gallery-content">
        <div class="container">
            
            <div class="row sectionTitle" style="max-width: none">
                <h3>WE NEED YOUR HELP TO HELP OTHERS, SEE OUR CAUSES gallery</h3>
            </div>
            
            <div class="row">
                <?php
                    $_gCount = count($gallary);
                    $_gPages = ceil($_gCount/$gallaryPerPage);
                    for($i = 0; $i < $_gPages; ++$i){
                ?>
                <div class="gallery_container popup-gallery gallary-group <?php echo 'page_num__'.$i.' '.($i == 0 ? 'active' : ''); ?>">
                    <!--<div class="col-sm-4 col-md-3 grid-sizer"></div>-->
                    <!--Item-->
                    <?php 
                        for($j = 0; $j < $gallaryPerPage; ++$j){
                            $_n = $i*$gallaryPerPage + $j;
                            $gBlog = $gallary[$_n];
                            if(!empty($gBlog)){
                    ?>
                            <div class="col-sm-3 gallery-item education">
                                <div class="image_row row">
                                    <img src="<?php echo $gBlog['url'] ?>" alt="" class="img-responsive">
                                    <a href="<?php echo $gBlog['url'] ?>" data-source="single-project.html" class="popup" data-title="<?php echo $gBlog['title'] ?>">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                                <div class="inner row">
                                    <h5><?php echo $gBlog['title'] ?></h5>
                                </div>
                            </div>
                    <?php 
                            }
                        } 
                    ?>
                </div>
                <?php } ?>
                
                <ul class="gallery-pagination list-unstyled" style="clear:both">
                    <li class="prev prev-page_item"><a href="javascript:void(0)">prev</a></li>
                    
                    <?php
                        for($i = 0; $i < $_gPages; ++$i){
                    ?>
                        <li class="page-no page_item <?php echo $i == 0 ? 'active' : ''; ?>" target-content="<?php echo 'page_num__'.$i; ?>"><a href="javascript:void(0)"><?php echo ($i + 1); ?></a></li>
                    <?php
                        }
                    ?>
                
                    <li class="next next-page_item"><a href="javascript:void(0)">next</a></li>
                </ul>
            </div>
        </div>
    </section>
    
    <?php
        include "includes/donateForm.php";
        include "includes/newsletter.php";
        include "includes/footer.php";
    ?>
    <script src="js/blog.js"></script>
</body>
</html>