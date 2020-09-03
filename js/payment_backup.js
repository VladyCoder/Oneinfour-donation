$(document).ready(function(){
    $('.donate-now_price').on('click', function(e){
        $('.donate-now_price.active').removeClass('active');
        $(this).addClass('active');
    });

    $('.donate-now_btn_1').on('click', function(e){
        let selected = $('.donate-now_price.active');
        if(selected) selected = selected.attr('price');
        $('.donate-now_price.active').removeClass('active');

        $('.donate-result-container').hide();
        $('#donate_box .amount-selection.selected').removeClass('selected');
        $('#donate_box .donate-amount_input').val('');
        $('.donate-continue_btn').addClass('disabled');

        $('.checkout-form .error').removeClass('error');
        $('.checkout-form #demail').val('');
        $('.checkout-form #fname').val('');
        $('.checkout-form #lname').val('');
        $('.checkout-form #dphone').val('');
        $('.donate-submit_btn').addClass('disabled');
        
        $('#paypal-button').hide();
        $('.disabled-paypal_btn').show();
        $('#amount').val('');

        if(selected){
            $('.donate-amount-container').hide();
            $('.donate-payment-container').show();
            
            $('.total-amount_label').text('$'+selected);
            renderPayment && renderPayment();
        }else{
            $('.donate-amount-container').show();
            $('.donate-payment-container').hide();
        }
    });

    $('.donate-now_btn').on('click', function(e){
        $('.donate-amount-container').show();
        $('.donate-payment-container').hide();
        $('.donate-result-container').hide();
        
        $('#donate_box .amount-selection.selected').removeClass('selected');
        $('#donate_box .donate-amount_input').val('');
        $('#amount').val('');
        $('.donate-continue_btn').addClass('disabled');
        
        $('.checkout-form .error').removeClass('error');
        $('.checkout-form #demail').val('');
        $('.checkout-form #fname').val('');
        $('.checkout-form #lname').val('');
        $('.checkout-form #dphone').val('');
        $('.donate-submit_btn').addClass('disabled');
        
        $('#paypal-button').hide();
        $('.disabled-paypal_btn').show();
    });
    
    $(".donate-result-container .goback").on("click", function(e){
        $('.donate-payment-container').show();
        $('.donate-result-container').hide();
    });
    
    $('#donate_box .amount-selection').on('click', function(){
        $('#donate_box .amount-selection.selected').removeClass('selected');
        $(this).addClass('selected');
        $('#donate_box .donate-amount_input').val('');
        $('#amount').val($(this).attr('amount'));
        $('.donate-continue_btn').removeClass('disabled');
    });
    
    $('#donate_box .donate-amount_input').on('input', function(){
        let amount = $(this).val();
        $('#donate_box .amount-selection.selected').removeClass('selected');
        if(Number(amount) > 0){
            $('#amount').val(amount);
            $('.donate-continue_btn').removeClass('disabled');
        }else{
            $('.donate-continue_btn').addClass('disabled');
        }
    });
    
    $('#donate_box .donate-continue_btn').on('click', function(e){
        var _amount = $('#amount').val();
        if(Number(_amount) > 0){
            $('.donate-amount-container').hide();
            $('.donate-payment-container').show();
            $('.total-amount_label').text('$'+_amount);
            renderPayment && renderPayment();
        }
    });
    
    $('.checkout-form #demail').on('input', function(){
    	var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    	var is_email=re.test($(this).val());
    	if(is_email){
    	    checkRenderablePayment();
    	    $(this).removeClass('error');
    	}else{
    	    $(this).addClass('error');
    	    $('.donate-submit_btn').addClass('disabled');
    	}
    });
    $('.checkout-form #fname').on('input', function(){
        if($(this).val){
            checkRenderablePayment();
            $(this).removeClass('error');
        }else{
            $(this).addClass('error');
            $('.donate-submit_btn').addClass('disabled');
        }
    });
    $('.checkout-form #lname').on('input', function(){
        if($(this).val){
            checkRenderablePayment();
            $(this).removeClass('error');
        }else{
            $(this).addClass('error');
            $('.donate-submit_btn').addClass('disabled');
        }
    });
    $('.checkout-form #dphone').on('input', function(){
        if($(this).val){
            checkRenderablePayment();
            $(this).removeClass('error');
        }else{
            $(this).addClass('error');
            $('.donate-submit_btn').addClass('disabled');
        }
    });
});

function checkRenderablePayment(){
    let _email = $('.checkout-form #demail');
    if(!_email.val() || _email.hasClass('error')) return;
    
    let _fname = $('.checkout-form #fname');
    if(!_fname.val() || _fname.hasClass('error')) return;
    
    let _lname = $('.checkout-form #lname');
    if(!_lname.val() || _lname.hasClass('error')) return;
    
    let _phone = $('.checkout-form #dphone');
    if(!_phone.val() || _phone.hasClass('error')) return;
    
    
    $('.donate-submit_btn').removeClass('disabled');
    $('#paypal-button').show();
    $('.disabled-paypal_btn').hide();
}

function renderPayment(){
  var stripe = Stripe(stripe_publich_key);
  
  var total_amount =  Number($('#amount').val());
  
  var elements = stripe.elements();

  var style = {
    base: {
      color: '#32325d',
      fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
      fontSmoothing: 'antialiased',
      fontSize: '16px',
      '::placeholder': {
        color: '#aab7c4'
      }
    },
    invalid: {
      color: '#fa755a',
      iconColor: '#fa755a'
    }
  };

  var card = elements.create("card", {style: style});
  card.mount("#card-element");

  // Handle real-time validation errors from the card Element.
  card.on('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
      displayError.textContent = event.error.message;
    } else {
      displayError.textContent = '';
    }
  });

//   var form = document.getElementById('stripe-form');
//   form.addEventListener('submit', function(event) {
  $('.donate-submit_btn').on('click', function(event){
    console.log('submit', event);
    event.preventDefault();
    
    if($('.donate-submit_btn').hasClass('disabled')) return;
    console.log('start stripe payment');

    $.get('/functions/shared.php', {amount: total_amount})
        .done(function(res){
            console.log('stripe client key', res);
            stripeHandler(res);
        })
  });
  
  function stripeHandler(clientSecret){
    var email = $('.checkout-form #demail').val();
    var firstName = $('.checkout-form #fname').val();
    var lastName = $('.checkout-form #lname').val();
    
    stripe.confirmCardPayment(clientSecret, {
        payment_method: {
          card: card,
          billing_details: {
            name: firstName + ' ' + lastName,
            email: email
          }
        }
    }).then(function(result) {
        console.log(result);
        if (result.error) {
            console.log(result.error.message);
            showFailResult();
        } else {
          if (result.paymentIntent.status === 'succeeded') {
            showSuccessResult();
          }
        }
    });
  }


    paypal.Button.render({
    // Configure environment
        env: paypal_env,
        client: {
            sandbox: paypal_sandbox_id,
            production: paypal_production_id
        },
        // Customize button (optional)
        // locale: 'en_US',
        style: {
            // size: 'small',
            height: 42,
            color: 'gold',
            shape: 'pill',
            label: 'paypal',
            tagline: false
        },
        payment: function (data, actions) {
            return actions.payment.create({
                transactions: [{
                    amount: {
                        total: total_amount,
                        currency: 'USD'
                    }
                }]
          });
        },
        onAuthorize: function (data, actions) {
            return actions.payment.execute()
            .then(function () {
                // Show a confirmation message to the buyer
                //window.alert('Thank you for your purchase!');
                
                // Redirect to the payment process page
                // console.log(data, 'paypalAuthorize');
                showSuccessResult();
                // window.location = "process.php?paymentID="+data.paymentID+"&token="+data.paymentToken+"&payerID="+data.payerID;
            }).catch(err=>{
                showFailResult();
            });
        }
    }, '#paypal-button');
    
}

function showSuccessResult(){
    $('.donate-payment-container').hide();
    $(".donate-result-container").show();
    $(".donate-result-container .success").show();
    $(".donate-result-container .fail").hide();
};

function showFailResult(){
    $('.donate-payment-container').hide();
    $(".donate-result-container").show();
    $(".donate-result-container .success").hide();
    $(".donate-result-container .fail").show();
}
