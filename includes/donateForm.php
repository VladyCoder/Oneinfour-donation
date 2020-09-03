<!--start Donate Form-->
<?php include "config/secret.php" ?>
<script>
    var paypal_env = "<?php echo PAPAL_ENV; ?>";
    var paypal_sandbox_id = "<?php echo PAYPAL_SANDBOX_ID; ?>";
    var paypal_production_id = "<?php echo PAYPAL_CLIENT_ID; ?>";
    var stripe_publich_key = "<?php echo STRIPE_PUBLISH_KEY; ?>";
</script>
<div class="row m0 donate_form mfp-hide" id="donate_box">
    
    <div class="donate-personal-container">
        <h3 class="pi" style="margin-bottom: 20px">Your Personal Information</h3>

        <form class="checkout-form" style="margin-bottom: 40px" onsubmit="event.preventDefault();">
            <div class="row" style="margin-bottom: 40px">        
                <div class="col-sm-6">
                    <label for="fname">First Name<span>*</span></label>
                    <input type="text" id="fname" class="form-control" placeholder="YOUR first name" style="margin-bottom: 15px">    
                </div>
                <div class="col-sm-6">
                    <label for="lname">last Name<span>*</span></label>
                    <input type="text" id="lname" class="form-control" placeholder="YOUR first name" style="margin-bottom: 15px">    
                </div>
                <div class="col-sm-6">
                    <label for="demail">Email Address<span>*</span></label>
                    <input type="email" id="demail" class="form-control" placeholder="YOUR EMAIL ADDRESS" style="margin-bottom: 15px">    
                </div>
                <div class="col-sm-6">
                    <label for="dphone">Phone Number<span>*</span></label>
                    <input type="text" id="dphone" class="form-control" placeholder="YOUR Phone Number" style="margin-bottom: 15px">  
                </div>
            </div>    
            
            <h4 class="pi" style="margin-bottom: 20px; margin-top: ">Your Billing Address</h4>
            <div class="row">
                <div class="col-sm-6">
                    <label for="stName">street name</label>
                    <input type="text" id="stName" class="form-control" placeholder="Street Name" style="margin-bottom: 15px">    
                </div>
                <div class="col-sm-6">
                    <label for="stNum">street number</label>
                    <input type="text" id="stNum" class="form-control" placeholder="Street Number" style="margin-bottom: 15px">    
                </div>
                <div class="col-sm-6">
                    <label for="suburb">Suburb</label>
                    <input type="text" id="suburb" class="form-control" placeholder="Suburb" style="margin-bottom: 15px">    
                </div>
                <div class="col-sm-6">
                    <label for="province">State/Province</label>
                    <input type="text" id="province" class="form-control" placeholder="State/Province" style="margin-bottom: 15px">    
                </div>
            </div>
            <button class="btn-primary donate-personal_btn" style="margin-top: 32px; width: 100%">continue</button>
        </form>
    </div>

    <div class="donate-method-container" style="display: none">
        <a class="donate-back_btn" origin="donate-method-container" target="donate-personal-container">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            <span>Previous</span>
        </a>
        <br>
        <br>

        <h3 class="pi" style="margin-bottom: 50px">Select Payment Gateway</h3>

        <div class="row paypal-wrapper">
            <div class="col-xs-4 col-sm-6">
                <img src="images/cards/paypal_label.png" height="48px"/>
            </div>
            <div class="col-xs-8 col-sm-6">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="JL4NHC384YBTJ" />
                    <input type="image" src="images/cards/Paypal-donate-button.png" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                    <img alt="" border="0" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1" />
                </form>
            </div>
        </div>

        <div class="divider" style="border-bottom: 1px solid gray;margin: 40px 10px;"></div>
        <div style="text-align: center; font-size: 2rem">
            <button class="btn stripe-method_btn">Pay with Credit Card</button>
        </div>
    </div>
    
    <div class="donate-amount-container" style="display: none">
        <div class="donate-back_btn" origin="donate-amount-container" target="donate-method-container">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            <span>Previous</span>
        </div>
        <br>
        <br>

        <h3>SELECT YOUR DONATION AMOUNT</h3>
        <div class="row">
            <div class="col-md-4 col-sm-6"><div class="btn btn-primary amount-selection" amount="50">$50</div></div>
            <div class="col-md-4 col-sm-6"><div class="btn btn-primary amount-selection" amount="100">$100</div></div>
            <div class="col-md-4 col-sm-6"><div class="btn btn-primary amount-selection" amount="200">$200</div></div>
            <div class="col-md-4 col-sm-6"><div class="btn btn-primary amount-selection" amount="500">$500</div></div>
            <div class="col-md-4 col-sm-6"><div class="btn btn-primary amount-selection" amount="1000">$1000</div></div>
        </div>
    
        <h5 style="margin: 40px 0 20px ">ENTER CUSTOM AMOUNT</h5>
        
        <div class="input-group">
            <span class="input-group-addon left">$</span>
            <input type="number" class="form-control donate-amount_input" name="donate-amount">
            <span class="input-group-addon right">
                <button class="btn-primary donate-continue_btn disabled">continue</button>
            </span>
        </div>
        <input id="amount" type="text" hidden>
    </div>
    


    <div class="donate-stripe-container" style="display: none">
        <div class="donate-back_btn" origin="donate-stripe-container" target="donate-amount-container">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            <span>Previous</span>
        </div>
        <br>
        <br>

        <h4 class="total-pay-amount" style="margin-bottom: 40px">TOTAL - <span class="total-amount_label">$0</span></h4>
        <form id="stripe-form" class="checkout-form" action="functions/shared.php" method="post">
            <div style="display: flex; justify-content: flex-end;">
                <ul class="gateways nav">
                    <li><img src="images/cards/mastercard.png" alt=""></li>
                    <li><img src="images/cards/visa.png" alt=""></li>
                    <li><img src="images/cards/amex.png" alt=""></li>
                    <li><img src="images/cards/discover.png" alt=""></li>
                    <!--<li><a href="#"><img src="images/cards/paypal.png" alt=""></a></li>-->
                </ul>
            </div>
            <div id="card-errors" role="alert" style="color: #ff9090;font-size: 12px;"></div>
            <div id="card-element" class="form-control" style="padding:12px"></div>
            <input type="submit" value="donate now" class="btn-primary donate-submit_btn">
        </form>
    </div>
    
    <div class="donate-result-container" style="display: none">
        <div class="success">
            <img src="images/cards/success.png">
            <h4>Your donation was completed successfully</h4>
        </div>
        <div class="fail">
            <img src="images/cards/warning.png">
            <h4>Your donation was failed</h4>
            <a class="goback" href="javascript:void(0)"><i class="fa fa-arrow-left"></i> Go Back</a>
        </div>
    </div>
</div>
<!--end Donate Form-->
           