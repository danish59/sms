'use strict';
$(document).ready(function() {
    $(window).on("load",function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
        new WOW().init();
        $('#login_validator').bootstrapValidator({
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        regexp: {
                            regexp: /^\S+@\S{1,}\.\S{1,}$/,
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'Please provide a password'
                        }
                    }
                }
            }
        });
    $('#register_valid').bootstrapValidator({
        fields: {
            reg_school_name:{
                validators: {
                    notEmpty: {
                        message: 'The school name is required and cannot be empty'
                    }
                }
            },
            owner_name:{
                validators: {
                    notEmpty: {
                        message: 'The owner name is required and cannot be empty'
                    }
                }
            },
            owner_cell:{
                validators: {
                    notEmpty: {
                        message: 'The owner cell is required and cannot be empty'
                    }
                }
            },
            gender:{
                validators: {
                    notEmpty: {
                        message: 'The gender is required and cannot be empty'
                    }
                }
            },
            office:{
                validators: {
                    notEmpty: {
                        message: 'Please enter street address'
                    }
                }
            },
            city:{
                validators: {
                    notEmpty: {
                        message: 'The city name is required and cannot be empty'
                    }
                }
            },
            country:{
                validators: {
                    notEmpty: {
                        message: 'The country name is required and cannot be empty'
                    }
                }
            },
            checkbox:{
                validators: {
                    notEmpty: {
                        message: 'Check agreement  and cannot be empty'
                    }
                }
            },

            name: {
                validators: {
                    notEmpty: {
                        message: 'The user name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide a password'
                    }
                }
            },
            password_confirmation: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'Please enter the same password as above'
                    }
                }
            }
        }
    });
        $('#login_validator1').bootstrapValidator({
            fields: {
                email_modal: {
                    validators: {
                        notEmpty: {
                            message: 'enter your valid email'
                        },
                        regexp: {
                            regexp: /^\S+@\S{1,}\.\S{1,}$/,
                            message: 'The input is not a valid email address'
                        }
                    }
                }
            }
        });
        validate();
        function validate() {
            if ($('.email_forgot').val() > 0) {
                $(".submit_email").prop("disabled", false);
            } else {
                $(".submit_email").prop("disabled", true);
            }
        }
});
