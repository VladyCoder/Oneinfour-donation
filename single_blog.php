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
                <img src="images/sponsors2.jpg" alt="...">
                <div class="carousel-caption">
                    <h6 class="label label-default">BLOG NEWS</h6>
                    <h3 class="cause-title"><a href="#">WE HELP THOUSANDS OF CHILDREN TO GET THEIR EDUCATION, NOW WE NEED YOUR HELP.</a></h3>
                </div>
            </div>
        </div>
    </section>

    <?php 
        include "config/blogs.php";
        $id =$_GET["id"];
        $blog = $blogs[$id];
        $prev = $blogs[$id -1];
        $next = $blogs[$id + 1];
    ?>

    <section class="row blog-content">
        <div class="container single-blog">
            <div class="row">
                <div class="col-sm-12">
                    
                    <article class="post post-type-image single-post row">
                        <div class="row">
                            <div class="post-header">
                                <h3 class="post-title" style="text-align: center"><a href="javascript:void(0)"><?php echo $blog['title'] ?></a></h3>
                                <ul class="post-meta nav">
                                    <li class="post-date"><i class="fa fa-calendar-o"></i> <a href="javascript:void(0)"><?php echo $blog['date'] ?></a></li>       
                                </ul>
                            </div>
                        </div>
                        <div class="row featured-contents" style="margin: 0">
                            <video style="width: 100%; height: auto; max-width: 760px" controls poster="<?php echo $blog['thumb'] ?>">
                                <source src="<?php echo $blog['url'] ?>" >
                            </video>
                            <p class="post-caption"><?php echo $blog['caption'] ?></p>
                        </div>
                        <div class="row article-body">
                            
                            <div class="post-content row">
                                <?php 
                                    $contents = explode("\n", $blog['content'] );
                                    if(count($contents) > 0){
                                        foreach($contents as $content){
                                ?>
                                        <p><?php echo $content ?></p>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </article>
                    
                    <div class="row related-posts">
                        <h4 class="this-title">Related post</h4>
                        <div class="row">
                            <div class="col-sm-4 related-post">
                                <h5 class="post-title"><a href="#">SEMINAR FOR Childrens to know about FUTURE</a></h5>
                                <h4 class="post-cat">in "<a href="#">Food</a>"</h4>
                            </div>
                            <div class="col-sm-4 related-post">
                                <h5 class="post-title"><a href="#">Lorem ipsum simple donate event for child</a></h5>
                                <h4 class="post-cat">in "<a href="#">educations</a>"</h4>
                            </div>
                            <div class="col-sm-4 related-post">
                                <h5 class="post-title"><a href="#">Buesiness evente for help children</a></h5>
                                <h4 class="post-cat">in "<a href="#">business</a>"</h4>
                            </div>
                        </div>
                    </div>
                    
                    <ul class="pager">
                        <?php
                            if(!empty($prev)){
                        ?>
                            <li class="prev">
                                <a href="<?php echo 'single_blog.php?id='.($id - 1).'&title='.$prev['title']; ?>">
                                    <span class="post-sequence"><i class="fa fa-arrow-left"></i>previous post</span>
                                    <h5 class="post-title"><?php echo $prev['title'] ?></h5>
                                </a>
                            </li>
                        <?php
                            }
                        ?>
                        
                        <?php
                            if(!empty($next)){
                        ?>
                            <li class="next">
                                <a href="<?php echo 'single_blog.php?id='.($id + 1).'&title='.$next['title']; ?>">
                                    <span class="post-sequence">next post<i class="fa fa-arrow-right"></i></span>
                                    <h5 class="post-title"><?php echo $next['title'] ?></h5>
                                </a>
                            </li>
                        <?php
                            }
                        ?>
                        
                    </ul>
                </div>

                <!-- <div class="col-md-4 sidebar  post-sidebar">
                    <div class="row m0 widget widget-search">
                        <h4 class="widget-title">search</h4>
                        <form action="#" class="row m0 search-form" method="get" role="search">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search here">
                                <span class="input-group-addon"><button type="submit"><i class="fa fa-search"></i></button></span>
                            </div>
                        </form>
                    </div>
                    
                    <div class="row m0 widget widget-category">
                        <h4 class="widget-title">categories</h4>
                        <ul class="nav">
                            <li><a href="#">education</a></li>
                            <li><a href="#">environment</a></li>
                            <li><a href="#">building homes</a></li>
                            <li><a href="#">donating clothes</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">OTHERS</a></li>
                        </ul>
                    </div>
                    
                    <div class="row m0 widget widget-recent-posts">
                        <h4 class="widget-title">recent post</h4>
                        <div class="media recent-post">
                            <div class="media-left"><a href="single.html"><img src="http://themedesigner.in.dimgx.net/demo/Helping-Hands/images/post2/recent1.jpg" alt=""></a></div>
                            <div class="media-body">
                                <h5 class="title"><a href="#">EVENT FOR PROVIDING PENS TO THE CHILDRENS monthly base</a></h5>
                                <h5 class="date"><i class="fa fa-calendar-o"></i><a href="#">June 29, 2015</a></h5>
                            </div>
                        </div>
                        <div class="media recent-post">
                            <div class="media-left"><a href="single.html"><img src="http://themedesigner.in.dimgx.net/demo/Helping-Hands/images/post2/recent2.jpg" alt=""></a></div>
                            <div class="media-body">
                                <h5 class="title"><a href="#">MEDICAL CHECKUP CAMP FOR CHILDRENS IN AFRICA</a></h5>
                                <h5 class="date"><i class="fa fa-calendar-o"></i><a href="#">June 28, 2015</a></h5>
                            </div>
                        </div>
                        <div class="media recent-post">
                            <div class="media-left"><a href="single.html"><img src="http://themedesigner.in.dimgx.net/demo/Helping-Hands/images/post2/recent3.jpg" alt=""></a></div>
                            <div class="media-body">
                                <h5 class="title"><a href="#">EVENT FOR GATHERING BOOKS FOR CHILDRENS</a></h5>
                                <h5 class="date"><i class="fa fa-calendar-o"></i><a href="#">June 27, 2015</a></h5>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row m0 widget widget-tags">
                        <h4 class="widget-title">Tags</h4>
                        <a href="#" class="tag">causes</a>
                        <a href="#" class="tag">donate</a>
                        <a href="#" class="tag">child</a>
                        <a href="#" class="tag">care</a>
                        <a href="#" class="tag">children help</a>
                        <a href="#" class="tag">donate</a>
                        <a href="#" class="tag">child</a>
                        <a href="#" class="tag">causes</a>
                        <a href="#" class="tag">donate</a>
                        <a href="#" class="tag">child</a>
                        <a href="#" class="tag">care</a>
                    </div>
                    
                </div> -->
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