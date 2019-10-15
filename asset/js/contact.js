$(document).ready(function(){
    
    (function($) {
        "use strict";

    
        jQuery.validator.addMethod('answercheck', function (value, element) {
            return this.optional(element) || /^\bcat\b$/.test(value)
        }, "type the correct answer -_-");

        // validate contactForm form
        $(function() {
            $('#contactForm').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    subject: {
                        required: true,
                        minlength: 4
                    },
                    number: {
                        required: true,
                        minlength: 9
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 20
                    }
                },
                messages: {
                    name: {
                        required: "Nama harus diisi",
                        minlength: "Masukkan nama kamu minimal 5 karakter"
                    },
                    subject: {
                        required: "Subject pesan harus diisi",
                        minlength: "Masukkan subject pesan minimal 4 karakter"
                    },
                    number: {
                        required: "Nomor harus diisi",
                        minlength: "Masukkan nomor telepon minimal 9 karakter"
                    },
                    email: {
                        required: "Mohon teliti email anda dengan benar"
                    },
                    message: {
                        required: "Pesan harus diisi",
                        minlength: "Masukkan pesan anda secara lengkap dengan minimal 20 karakter"
                    }
                },
                submitHandler: function(form) {
                    $(form).ajaxSubmit({
                        type:"POST",
                        data: $(form).serialize(),
                        url:"contact_process.php",
                        success: function() {
                            $('#contactForm :input').attr('disabled', 'disabled');
                            $('#contactForm').fadeTo( "slow", 1, function() {
                                $(this).find(':input').attr('disabled', 'disabled');
                                $(this).find('label').css('cursor','default');
                                $('#success').fadeIn()
                                $('.modal').modal('hide');
                                $('#success').modal('show');
                            })
                        },
                        error: function() {
                            $('#contactForm').fadeTo( "slow", 1, function() {
                                $('#error').fadeIn()
                                $('.modal').modal('hide');
                                $('#error').modal('show');
                            })
                        }
                    })
                }
            })
        })
        
    })(jQuery)
})