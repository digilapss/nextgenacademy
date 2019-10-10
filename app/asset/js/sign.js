$(document).ready(function(){
    
    (function($) {
        "use strict";

    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate signin_form form
    $(function() {
        $('#signin_form').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                email: {
                    required: "Email harus diisi",
                    email: "Email yang anda masukkan salah. Mohon di cek kembali."
                },
                password: {
                    required: "Password harus diisi"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"signin",
                    success: function(res) {
                        $('#signin_form :input').attr('disabled', 'disabled');
                        // $('#signin_form').fadeTo( "slow", 1, function() {
                        //     $(this).find(':input').attr('disabled', 'disabled');
                        //     $(this).find('label').css('cursor','default');
                        //     $('#success').fadeIn();
                        //     $('.modal').modal('hide');
                        //     $('#success').modal('show');
                            
                        // })   
                        console.log(res);
                        // window.location.href = window.location.protocol;
                    },
                    error: function() {
                        // $('#signin_form').fadeTo( "slow", 1, function() {
                        //     $('#error').fadeIn()
                        //     $('.modal').modal('hide');
		                // 	$('#error').modal('show');
                        // })
                    }
                })
            }
        })
    });

    // validate signup_form form
    $(function() {
        $('#signup_form').validate({
            rules: {
                full_name: {
                    required: true,
                    minlength: 3
                },
                phone_number: {
                    required: true,
                    minlength: 9,
                    number: true,
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                },
                repeat_password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                full_name: {
                    required: "Nama lengkap harus diisi",
                    minlength: "Nama lengkap yang diisi minimal 3 karakter",
                },
                phone_number: {
                    required: "Nomor telepon harus diisi",
                    number: "Nomor telepon harus diisi dengan angka 0-9",
                    minlength: "Nomor telepon yang diisi minimal 9 nomor"
                },
                email: {
                    required: "Email harus diisi",
                    email: "Email yang anda masukkan salah. Mohon di cek kembali."
                },
                password: {
                    required: "Password harus diisi",
                },
                repeat_password: {
                    required: "Ulangi password",
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"register.php",
                    success: function() {
                        $('#signup_form :input').attr('disabled', 'disabled');
                        $('#signup_form').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
                            $('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#signup_form').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
                            $('#error').modal('show');
                        })
                    }
                })
            }
        })
    });
        
 })(jQuery)
})