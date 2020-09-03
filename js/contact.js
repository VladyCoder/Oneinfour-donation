$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    // jQuery.validator.addMethod('answercheck', function (value, element) {
    //     return this.optional(element) || /^\bcat\b$/.test(value);
    // }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                subject: {
                    required: true,
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: "please enter your name.",
                    minlength: "your name must consist of at least 2 characters"
                },
                email: {
                    required: "please enter you email",
                },
                subject: {
                    required: "please enter a subject"
                },
                message: {
                    required: "please enter a message",
                    minlength: "message must consist of at least 10 characters"
                }
            },
            submitHandler: function(form) {
                var formData = $(form).serialize();
                $('#contactForm :input').attr('disabled', 'disabled');
                $.ajax({
                    type:"POST",
                    data: formData + '&type=message',
                    url:"functions/contact_process.php",
                    success: function(res) {
                        res = JSON.parse(res);
                        $('#contactForm :input').attr('disabled', false);
                        if(res.status == 'error'){
                            $('#contactForm .success').hide();
                            $('#contactForm .fail').show();
                        }else{
                            $('#contactForm .success').show();
                            $('#contactForm .fail').hide();    
                        }
                    },
                    error: function() {
                        $('#contactForm :input').attr('disabled', false);
                        $('#contactForm .success').hide();
                        $('#contactForm .fail').show();
                    }
                })
            }
        });
        
        $('#be-volunteer-form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                tel: {
                    required: true,
                    digits: true
                },
                address: {
                    required: true,
                }
            },
            messages: {
                name: {
                    required: "please enter your name.",
                    minlength: "your name must consist of at least 2 characters"
                },
                email: {
                    required: "please enter you email",
                },
                tel: {
                    required: "please enter a subject"
                },
                address: {
                    required: "please enter a message",
                }
            },
            submitHandler: function(form) {
                var formData = $(form).serialize();
                $('#be-volunteer-form :input').attr('disabled', 'disabled');
                $.ajax({
                    type:"POST",
                    data: formData + '&type=volunteer',
                    url:"functions/contact_process.php",
                    success: function(res) {
                        res = JSON.parse(res);
                        console.log(res);
                        $('#be-volunteer-form :input').attr('disabled', false);
                        if(res.status == 'error'){
                            $('#be-volunteer-form .success').hide();
                            $('#be-volunteer-form .fail').show();
                        }else{
                            $('#be-volunteer-form .success').show();
                            $('#be-volunteer-form .fail').hide();    
                        }
                    },
                    error: function() {
                        $('#be-volunteer-form :input').attr('disabled', false);
                        $('#be-volunteer-form .success').hide();
                        $('#be-volunteer-form .fail').show();
                    }
                });
            }
        });
    });
        
 })(jQuery)
});