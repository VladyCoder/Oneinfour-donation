$(document).ready(function(){
    // donate section function
    $('.donate-now_price').on('click', function(e){
        $('.donate-now_price.active').removeClass('active');
        $(this).addClass('active');
    });

    $('.donate-now_btn_1').on('click', function(e){
        let selected = $('.donate-now_price.active');
        if(selected) selected = selected.attr('price');
        $('.donate-now_price.active').removeClass('active');

        initPaymentForm();

        if(selected){
            $('#amount').val(selected);
            $('.total-amount_label').text('$'+selected);
            renderPayment();
        }
    });

    // donate form function
    $('.donate-now_btn').on('click', function(e){
        initPaymentForm()
    });

    $('.donate-personal_btn').on('click', function(e){
        e.preventDefault();
        if(checkPersonalInfo()){
            $('.donate-personal-container').hide();
            if(parseInt($('#amount').val()) > 0 ){
                $('.donate-stripe-container').show();
            }else{
                $('.donate-method-container').show();
            }
        }
    });

    $('.stripe-method_btn').on('click', function(e){
        $('.donate-method-container').hide();
        $('.donate-amount-container').show();
        renderPayment();
    });


    $('#donate_box .amount-selection').on('click', function(){
        $('#donate_box .amount-selection.selected').removeClass('selected');
        $(this).addClass('selected');
        let amount = $(this).attr('amount')
        $('#donate_box .donate-amount_input').val(amount);
        $('#amount').val(amount);
        $('.donate-continue_btn').removeClass('disabled');
    });
    
    $('#donate_box .donate-amount_input').on('input', function(){
        let amount = $(this).val();
        $('#donate_box .amount-selection.selected').removeClass('selected');
        if(parseInt(amount) > 0){
            $('#amount').val(amount);
            $('.donate-continue_btn').removeClass('disabled');
        }else{
            $('.donate-continue_btn').addClass('disabled');
        }
    });
    
    $('#donate_box .donate-continue_btn').on('click', function(e){
        var _amount = $('#amount').val();
        if(parseInt(_amount) > 0){
            $('.donate-amount-container').hide();
            $('.donate-stripe-container').show();
            $('.total-amount_label').text('$'+_amount);
        }
    });

    $(".donate-result-container .goback").on("click", function(e){
        $('.donate-payment-container').show();
        $('.donate-result-container').hide();
    });

    $('.donate-back_btn').on('click', function(e){
      e.preventDefault();
      let targetForm = $(this).attr('target');
      let originForm = $(this).attr('origin');
      $('.' + originForm).hide();
      $('.' + targetForm).show();
    })
});

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
    
    // if($('.donate-submit_btn').hasClass('disabled')) return;
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
}

function initPaymentForm(){
    $('.donate-personal-container').show();
    $('.donate-method-container').hide();
    $('.donate-amount-container').hide();
    $('.donate-stripe-container').hide();
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
    // $('.donate-submit_btn').addClass('disabled');
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

function checkPersonalInfo(){
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  	let is_email=re.test($('.checkout-form #demail').val());
    if(is_email) $('.checkout-form #demail').removeClass('error');
    else $('.checkout-form #demail').addClass('error');

    let is_fname = $('.checkout-form #fname').val();
    if(is_fname) $('.checkout-form #fname').removeClass('error');
    else $('.checkout-form #fname').addClass('error');

    let is_lname = $('.checkout-form #lname').val();
    if(is_lname) $('.checkout-form #lname').removeClass('error');
    else $('.checkout-form #lname').addClass('error');

    let is_dphone = $('.checkout-form #dphone').val();
    if(is_dphone) $('.checkout-form #dphone').removeClass('error');
    else $('.checkout-form #dphone').addClass('error');

    if(is_email && is_fname && is_lname && is_dphone) return true;
    return false;
}
