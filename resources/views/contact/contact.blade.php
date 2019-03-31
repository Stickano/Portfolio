@section('title', 'Contact me!')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/contact.css') }}">
@endsection

@extends('layouts.app')

@section('content')

<div class="row" style="padding:0;">
    <div class="col-12 contact-container">
        
            <div class="wrap-contact100">
                <form method="post" class="contact100-form validate-form">
                    @csrf
                    <span class="contact100-form-title">
                        Throw me a message!
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <input class="input100" type="text" name="name" placeholder="Name">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <textarea class="input100" name="message" placeholder="Your Message"></textarea>
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="copy-mail">
                        <label class="label-checkbox100" for="ckb1">
                            Receive a copy of this message
                        </label>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
                            Send Email
                        </button>
                    </div>
                </form>
            </div>

            <div class="wrap-contact100" style="margin-top:5vh;">
                <ul>
                    <li>
                        <b>Jeppesen.dev</b>
                    </li>
                    <li>
                        <i class="far fa-user"></i> &nbsp; 
                        Henrik Jeppesen
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i> &nbsp; 
                        Denmark
                    </li>
                    <li style="margin-top:2.5vh;">
                        <i class="fas fa-phone"></i> &nbsp; 
                        (0045) 5033 1621
                    </li>
                    <li>
                        <i class="far fa-envelope"></i> &nbsp; 
                        Jeppesen@tutanota.com
                    </li>
                </ul>
            </div>

    </div>
</div>

@endsection

@section('script')
<script>
    (function ($) {
        "use strict";

        /*==================================================================
        [ Validate ]*/
        var input = $('.validate-input .input100');

        $('.validate-form').on('submit',function(){
            var check = true;

            for(var i=0; i<input.length; i++) {
                if(validate(input[i]) == false){
                    showValidate(input[i]);
                    check=false;
                }
            }

            return check;
        });


        $('.validate-form .input100').each(function(){
            $(this).focus(function(){
               hideValidate(this);
            });
        });

        function validate (input) {
            if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
                if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                    return false;
                }
            }
            else {
                if($(input).val().trim() == ''){
                    return false;
                }
            }
        }

        function showValidate(input) {
            var thisAlert = $(input).parent();

            $(thisAlert).addClass('alert-validate');
        }

        function hideValidate(input) {
            var thisAlert = $(input).parent();

            $(thisAlert).removeClass('alert-validate');
        }
        
        

    })(jQuery);
</script>
@endsection