/*global $, document, window, setTimeout, navigator, console, location*/
$(document).ready(function () {

    'use strict';

    var emailError    = true,
        passwordError = true;
        

    // Detect browser for css purpose
    if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
        $('.form form label').addClass('fontSwitch');
    }

    // Label effect
    $('input').focus(function () {

        $(this).siblings('label').addClass('active');
    });

    // Form validation
    $('input').blur(function () {


        // Email
        if ($(this).hasClass('email')) {
            if ($(this).val().length == '') {
                $(this).siblings('span.error').text('Please type your email address').fadeIn().parent('.form-group').addClass('hasError');
                emailError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                emailError = false;
            }
        }

        // PassWord
        if ($(this).hasClass('pass')) {
            if ($(this).val().length < 8) {
                $(this).siblings('span.error').text('Please type at least 8 charcters').fadeIn().parent('.form-group').addClass('hasError');
                passwordError = true;
            } else {
                $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
                passwordError = false;
            }
        }

        
        // label effect
        if ($(this).val().length > 0) {
            $(this).siblings('label').addClass('active');
        } else {
            $(this).siblings('label').removeClass('active');
        }
    });


    // form switch
    $('a.switch').click(function (e) {
        $(this).toggleClass('active');
        e.preventDefault();

        if ($('a.switch').hasClass('active')) {
            $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass('switched');
        } else {
            $(this).parents('.form-peice').removeClass('switched').siblings('.form-peice').addClass('switched');
        }
    });


    // Form submit
    // $('form.signup-form').submit(function (event) {
    //     event.preventDefault();

    //     if ( emailError == true || passwordError == true ) {
    //         $('.email, .pass').blur();
    //     } else {
    //         $('.signup, .login').addClass('switched');

    //         setTimeout(function () { $('.signup, .login').hide(); }, 700);
    //         setTimeout(function () { $('.brand').addClass('active'); }, 300);
    //         setTimeout(function () { $('.heading').addClass('active'); }, 600);
    //         setTimeout(function () { $('.success-msg p').addClass('active'); }, 900);
    //         setTimeout(function () { $('.success-msg a').addClass('active'); }, 1050);
    //         setTimeout(function () { $('.form').hide(); }, 700);
    //     }
    // });

    // Reload page
    $('a.profile').on('click', function () {
        location.reload(true);
    });


});
