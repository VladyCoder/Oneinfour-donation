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
    
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    
    <!--[if lt IE 9]>
        
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php include 'includes/header.php' ?>

    <!-- <section class="row page-header">
        <div class="container">
            <h4>cause details</h4>
        </div>
    </section> -->
    
    <section class="row gallery-content" style="padding-top: 155px">
        <div class="container">           
            <div class="row">
                <div class="col-md-8">
                    <form class="checkout-form" style="margin-bottom: 40px">
                        <div class="table-responsive checkout-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="description">donation cause</th>
                                        <th class="amount">amount</th>
                                        <th class="amount">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="alert" role="alert">
                                        <td>
                                            <div class="media">
                                                <div class="media-left"><a href="single-cause.html"><img src="images/checkout-img.png" alt=""></a></div>
                                                <div class="media-body media-middle">GIVE EDUCATION TO CHILDRENS</div>
                                            </div>
                                        </td>
                                        <td>$50</td>
                                        <td>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="fa fa-times-circle"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="text-right">
                                            total <span>- $50</span> <button type="button" class="btn-primary">save cart</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                        
                            
                        <h4 class="pi">personal information</h4>
                        
                        <label for="email">Email Address<span>*</span></label>
                        <h6 class="sub-label">We will send the purchase receipt to this address.</h6>
                        <input type="email" id="email" class="form-control" placeholder="YOUR EMAIL ADDRESS">
                        
                        <label for="fname">First Name<span>*</span></label>
                        <h6 class="sub-label">We will use this to personalize your account experience.</h6>
                        <input type="email" id="fname" class="form-control" placeholder="YOUR first name">
                        
                        <label for="lname">last Name</label>
                        <h6 class="sub-label">We will use this as well to personalize your account experience.</h6>
                        <input type="email" id="lname" class="form-control" placeholder="YOUR first name">
                        
                        <input type="checkbox" id="hide-name">
                        <label for="hide-name">Hide name on backers list?</label>
                        
                        <input type="text" id="hide-name" hidden value="50">
                        <h4 class="total-pay-amount">TOTAL <span>- $50</span></h4>
                    </form>
                    
                    <form id="paypal-form" action="functions/paypal_charge.php" method="post">
                        <input type="hidden" name="amount" value="<?php echo $total?>">
                        <input type="hidden" name="type" value="paypal">

                        <div class="row paypal-wrapper">
                            <div class="col-xs-6">
                                <img src="images/cards/paypal_label.png" height="48px"/>
                            </div>
                            <div class="col-xs-6">
                                <div id="paypal-button"></div>
                                <!--<input type="image" name="submit" border="0" src="images/cards/pay-btn.png" alt="Pay Now" height="42px">-->
                            </div>
                        </div>
                        
                    </form>
                    
                    <from id="stripe-form" class="checkout-form">
                        <ul class="gateways nav">
                            <li><img src="images/cards/mastercard.png" alt=""></li>
                            <li><img src="images/cards/visa.png" alt=""></li>
                            <li><img src="images/cards/amex.png" alt=""></li>
                            <li><img src="images/cards/discover.png" alt=""></li>
                            <!--<li><a href="#"><img src="images/cards/paypal.png" alt=""></a></li>-->
                        </ul>
                        <div id="card-errors" role="alert" style="color: #ff9090;font-size: 12px;"></div>
                        <div id="card-element" class="form-control" style="padding:12px"></div>
                        <input type="submit" value="donate now" class="btn-primary">
                    </form>
                </div>
                
                <div class="col-md-4 sidebar checkout-sidebar">
                    <div class="row m0 widget widget-similar-project widget-similar">
                        <h4 class="hhh h2">SIMILAR causes</h4>
                        <div class="similar-project">                            
                            <div class="row cause-item education">
                                <div class="images_row row m0">
                                    <div id="causes_carousel_inner" class="carousel slide" data-ride="carousel" data-interval="3000">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active"><img src="images/cause01.jpg" alt=""></div>
                                            <div class="item"><img src="images/cause02.jpg" alt=""></div>
                                        </div>

                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#causes_carousel_inner" data-slide-to="0" class="active"></li>
                                            <li data-target="#causes_carousel_inner" data-slide-to="1"></li>
                                        </ol>
                                    </div>
                                    <a href="#donate_box" class="btn-primary donate-now_btn">donate now</a>
                                </div>
                                <div class="cause_excepts row m0">
                                    <h4 class="cuase_title"><a href="single-cause.html">GIVE EDUCATION TO CHILDRENS</a></h4>
                                    <p>Phasellus in egestas libero, et congue lacus. Cras vel lacus nisi. Duis nulla metus, tincidunt at tortor.</p>
                                    <div class="row fund_progress m0">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                                                <div class="percentage"><span class="counter">68</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fund_raises m0">                                
                                        <div class="pull-left raised amount_box">
                                            <h6>raised</h6>
                                            <h3>$65,360</h3>
                                        </div>
                                        <div class="pull-left goal amount_box">
                                            <h6>goal</h6>
                                            <h3>$124,500</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row cause-item environment">
                                <div class="images_row row m0">
                                    <img src="images/cause02.jpg" alt="">
                                    <a href="#donate_box" class="btn-primary donate-now_btn">donate now</a>
                                </div>
                                <div class="cause_excepts row m0">
                                    <h4 class="cuase_title"><a href="single-cause.html">HELP SENIOR CITIZENS</a></h4>
                                    <p>Phasellus in egestas libero, et congue lacus. Cras vel lacus nisi. Duis nulla metus, tincidunt at tortor.</p>
                                    <div class="row fund_progress m0">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                                                <div class="percentage"><span class="counter">68</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fund_raises m0">                                
                                        <div class="pull-left raised amount_box">
                                            <h6>raised</h6>
                                            <h3>$65,360</h3>
                                        </div>
                                        <div class="pull-left goal amount_box">
                                            <h6>goal</h6>
                                            <h3>$124,500</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row cause-item buiding-homes">
                                <div class="images_row row m0">
                                    <img src="images/cause03.jpg" alt="">
                                    <a href="#donate_box" class="btn-primary donate-now_btn">donate now</a>
                                </div>
                                <div class="cause_excepts row m0">
                                    <h4 class="cuase_title"><a href="single-cause.html">HELP US PRINTING 100 T-SHIRTS</a></h4>
                                    <p>Phasellus in egestas libero, et congue lacus. Cras vel lacus nisi. Duis nulla metus, tincidunt at tortor.</p>
                                    <div class="row fund_progress m0">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                                                <div class="percentage"><span class="counter">68</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row fund_raises m0">                                
                                        <div class="pull-left raised amount_box">
                                            <h6>raised</h6>
                                            <h3>$65,360</h3>
                                        </div>
                                        <div class="pull-left goal amount_box">
                                            <h6>goal</h6>
                                            <h3>$124,500</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
        // include "includes/donateForm.php";
        include "includes/newsletter.php";
        include "includes/footer.php";
    ?>
    
    <script src="js/payment.js" data-rel-js></script>
</body>
</html>