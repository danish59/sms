'use strict';

$(document).ready(function() {
    $('#popup-validation').validationEngine();
    Admire.formValidation();
    $(".error_color").append('<br/>');
    $(".form_val_popup_dp1").datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true
    });
    $(".form_val_popup_dp2").datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true
    });
    $('.form_val_popup_dp3').datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true
    }).on("changeDate", function() {
        $('#form_block_validator').bootstrapValidator('revalidateField', 'date_inline');
    });
    $('.form_val_popup_dp4').datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        autoclose: true
    }).on("changeDate", function() {
        $('#form_inline_validator').bootstrapValidator('revalidateField', 'birthday');
    });
    $(':contains(* Invalid email address)').remove('.formErrorContent');
    // $('#form_block_validator').bootstrapValidator({
    //     fields: {
    //         Name2: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Enter your name'
    //                 }
    //             }
    //         },
    //         Email2: {
    //             validators: {
    //                 regexp: {
    //                     regexp: /^\S+@\S{1,}\.\S{1,}$/,
    //                     message: 'The input is not a valid email address.'
    //                 },
    //                 notEmpty: {
    //                     message: 'The email address is required'
    //                 }
    //             }
    //         },
    //         Password2: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Please provide a password'
    //                 }
    //             }
    //         },
    //         Confirmpassword2: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Confirm the password.'
    //                 },
    //                 identical: {
    //                     field: 'Password2',
    //                     message: 'Please enter the same password as above'
    //                 }
    //             }
    //         },
    //         date_inline: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Date is required and can not be empty'
    //                 }
    //             }
    //         },
    //         Url2: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Enter valid url.'
    //                 }
    //             }
    //         },
    //         digits_only: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'This field is required.'
    //                 },
    //                 regexp: {
    //                     regexp: /^\d+$/,
    //                     message: 'Contains digits only.'
    //                 }
    //             }
    //         },
    //         Range: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Enter digits between 5 to 16.'
    //                 },
    //                 between: {
    //                     min: 5,
    //                     max: 16,
    //                     message: 'Please enter a value between 5 and 16.'
    //                 },
    //                 regexp: {
    //                     regexp: /^\d+$/,
    //                     message: 'The value is not an integer'
    //                 }
    //             }
    //         },
    //         activate: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'You have to accept the terms and conditions'
    //                 }
    //             }
    //         }
    //     }
    // });
    // $('#form_inline_validator').bootstrapValidator({
    //     framework: 'bootstrap',
    //     fields: {
    //         Name3: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Enter your name'
    //                 }
    //             }
    //         },
    //         Email3: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The email address is required'
    //                 },
    //                 regexp: {
    //                     regexp: /^\S+@\S{1,}\.\S{1,}$/,
    //                     message: 'The input is not a valid email address.'
    //                 }
    //             }
    //         },
    //         country: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'please select country'
    //                 }
    //             }
    //         },
    //         Password3: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Please provide a password'
    //                 }
    //             }
    //         },
    //         Confirmpassword3: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The confirm password is required and can\'t be empty.'
    //                 },
    //                 identical: {
    //                     field: 'Password3',
    //                     message: 'Please enter the same password as above'
    //                 }
    //             }
    //         },
    //
    //         Url3: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Enter valid url.'
    //                 }
    //             }
    //         },
    //         Minsize3: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Enter min 3 characters.'
    //                 },
    //                 regexp: {
    //                     regexp: /^\S.{2,}$/,
    //                     message: 'Please enter at least 3 characters and should not start with space.'
    //                 }
    //             }
    //         },
    //         Maxsize3: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Enter max 6 characters'
    //                 },
    //                 regexp: {
    //                     regexp: /^\S.{0,5}$/,
    //                     message: 'Should not be more than 6 characters and should not start with space.'
    //                 }
    //             }
    //         },
    //
    //         MinNum: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Enter the minimum number 3.'
    //                 },
    //                 greaterThan: {
    //                     value: 3,
    //                     message: 'Please enter a value greater than or equal to 3.'
    //                 },
    //                 regexp: {
    //                     regexp: /^\d+$/,
    //                     message: 'The value is not an integer'
    //                 }
    //             }
    //         },
    //         maxNum: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Enter maximum number 16.'
    //                 },
    //                 lessThan: {
    //                     value: 16,
    //                     message: 'Please enter a value less than or equal to 16.'
    //                 },
    //                 regexp: {
    //                     regexp: /^\d+$/,
    //                     message: 'The value is not an integer'
    //                 }
    //
    //             }
    //         },
    //         birthday: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Date is required and can not be empty'
    //                 }
    //             }
    //         }
    //     }
    // });

    $('#add_campus').bootstrapValidator({
        framework: 'bootstrap',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            campus_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter campus name'
                    }
                }
            },
            street: {
                validators: {
                    notEmpty: {
                        message: 'Please enter street address '
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'Please enter city'
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'Please select country'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Enter the email address'
                    },
                    regexp: {
                        regexp: /^\S+@\S{1,}\.\S{1,}$/,
                        message: 'The input is not a valid email address'
                    }
                }
            },
            phone_office: {
                validators: {
                    notEmpty: {
                        message: 'Enter the office phone number'
                    },
                    regexp: {
                        regexp: /^[0-9]{10,15}$/,
                        message: 'The phone number can only consist of numbers with min 10 digits'
                    }
                }
            },
            principle: {
                validators: {
                    notEmpty: {
                        message: 'Please appoint principle'
                    }
                }
            }


        }

    })

    $('#add_class').bootstrapValidator({
        framework: 'bootstrap',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            class_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter class name'
                    },
                    // lessThan: {
                    //       value: 16,
                    //      message: 'Please enter a value less than or equal to 16.'
                    // },
                    regexp: {
                        regexp: /^[A-Z]{1,12}$/,
                        message: 'Please enter maximum 12 characters in capital letters.'
                    }
                }
            }


        }

    });
    $('#add_section').bootstrapValidator({
        framework: 'bootstrap',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            class_name: {
                validators: {
                    notEmpty: {
                        message: 'Please select class name'
                    },
                    // lessThan: {
                    //       value: 16,
                    //      message: 'Please enter a value less than or equal to 16.'
                    // },
                    regexp: {
                        regexp: /^[A-Z]{1,12}$/,
                        message: 'Please enter maximum 12 characters in capital letters.'
                    }
                }
            },
            section_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter section name'
                    },
                    // lessThan: {
                    //       value: 16,
                    //      message: 'Please enter a value less than or equal to 16.'
                    // },
                    regexp: {
                        regexp: /^[A-Z]{1,12}$/,
                        message: 'Please enter maximum 12 characters in capital letters.'
                    }
                }
            }


        }

    });

    $('#add_subject').bootstrapValidator({
        framework: 'bootstrap',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            class_name: {
                validators: {
                    notEmpty: {
                        message: 'Please select class name'
                    },
                    // lessThan: {
                    //       value: 16,
                    //      message: 'Please enter a value less than or equal to 16.'
                    // },
                    regexp: {
                        regexp: /^[A-Z]{1,12}$/,
                        message: 'Please enter maximum 12 characters in capital letters.'
                    }
                }
            },
            subject_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter subject name'
                    },
                    // lessThan: {
                    //       value: 16,
                    //      message: 'Please enter a value less than or equal to 16.'
                    // },
                    regexp: {
                        regexp: /^[A-Z]{1,20}$/,
                        message: 'Please enter maximum 20 characters in capital letters.'
                    }
                }
            }


        }

    });

    $('#add_fee_structure').bootstrapValidator({
        framework: 'bootstrap',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            class_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter class name'
                    },
                    // lessThan: {
                    //       value: 16,
                    //      message: 'Please enter a value less than or equal to 16.'
                    // },
                    regexp: {
                        regexp: /^[A-Z]{1,12}$/,
                        message: 'Please enter maximum 12 characters in capital letters.'
                    }
                }
            },
            admission_fee: {
                validators: {
                    notEmpty: {
                        message: 'Please enter admission fee'
                    },
                    // lessThan: {
                    //       value: 16,
                    //      message: 'Please enter a value less than or equal to 16.'
                    // },
                    regexp: {
                        regexp: /^[0-9]{1,12}$/,
                        message: 'Please enter maximum 12 characters.'
                    }
                }
            },
            monthly_fee: {
                validators: {
                    notEmpty: {
                        message: 'Please enter monthly fee'
                    },
                    // lessThan: {
                    //       value: 16,
                    //      message: 'Please enter a value less than or equal to 16.'
                    // },
                    regexp: {
                        regexp: /^[0-9]{1,12}$/,
                        message: 'Please enter maximum 12 characters.'
                    }
                }
            },
            annual_funds_others: {
                validators: {
                    notEmpty: {
                        message: 'Please enter annual funds & others'
                    },
                    // lessThan: {
                    //       value: 16,
                    //      message: 'Please enter a value less than or equal to 16.'
                    // },
                    regexp: {
                        regexp: /^[0-9]{1,12}$/,
                        message: 'Please enter maximum 12 characters.'
                    }
                }
            }


        }

    });

    $('#val_manage_student').bootstrapValidator({

        class_name: {
            validators: {

                notEmpty: {
                    message: 'select class'
                }
            }
        }

    });

    $('#add_class_routine').bootstrapValidator({

        select_teacher: {
            validators: {
                notEmpty: {
                    message: 'select teacher name'
                }
            }
        },
        select_subject: {
            validators: {
                notEmpty: {
                    message: 'select select subject'
                }
            }
        },
        from_time_period: {
            validators: {
                notEmpty: {
                    message: 'select period start time'
                }
            }
        },
        to_time_period: {
            validators: {
                notEmpty: {
                    message: 'select period end time'
                }
            }
        }

    });




    //     .on('success.form.bv', function(e) {
    //     $.ajaxSetup({
    //         header:$('meta[name="csrf-token"]').attr('content')
    //     });
    //          // Prevent form submission
    //     e.preventDefault();
    //     var addCampusData = $('#add_campus').serialize();
    //     //console.log(formdata);
    //     jQuery.ajax({
    //         url: '/add_campus',
    //         type: 'POST',
    //         datatype:'json',
    //         data: addCampusData,
    //         success: function (response) {
    //             if($.isEmptyObject(response.responseJSON.error)){
    //                 swal({
    //                     title: "Success.",
    //                     text: "Campus Successfully Added",
    //                     type: "success",
    //                     allowOutsideClick: false
    //                 }).then(function() {
    //                     location.reload('url()');
    //                 });
    //             }else{
    //                 printErrorMsg(response.responseJSON.error);
    //             }
    //
    //             //  jQuery("#responsing").show();
    //             //  jQuery("#request").hide();
    //
    //         }
    //     });
    //     function printErrorMsg (msg) {
    //         $(".print-error-msg").find("ul").html('');
    //         $(".print-error-msg").css('display','block');
    //         $.each( msg, function( key, value ) {
    //             $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    //         });
    //     }
    //
    // });



    // validate();
    // function validate() {
    //     if ($("#campus_name").val() > 0 && $("#street").val() > 0 ) {
    //         $("#validating").prop("disabled", false);
    //     } else {
    //         $("#validating").prop("disabled", true);
    //     }
    // }

});

// $(function () {
//
//     $('#add_campus').on('submit', function(e) {
//
//         $.ajaxSetup({
//             header:$('meta[name="csrf-token"]').attr('content')
//         });
//         var isvalid = $('#add_campus').valid();
//
//         if(isvalid){
//             e.preventDefault();
//             alert('you are valid');
//             // var formdata = $('#school_reg_form').serialize();
//             // // var host = "{{URL::to('/')}}";
//             jQuery.ajax({
//                 url: '/schoolRegistration',
//                 type: 'POST',
//                 datatype:'json',
//                 data: formdata,
//                 success: function () {
//                     // if(data)
//                     // window.location.href = "/admin_login";
//                     // $.ajax ({
//                     //     type: "get",
//                     //     url: "/admin_login",
//                     //     data: {  },
//                     // });
//                     //  url: '/schoolRegistration',
//                     // // console.log('wwwwwwwwwwwww');
//                     //  jQuery("#responsing").show();
//                     //  jQuery("#request").hide();
//
//                 }
//             });
//         }else{
//           //  e.isDefaultPrevented();
//             alert('somthing went wrong!')
//         }
//     });//submit handler() closed
//
// });

// $('#add_campus').submit(    function(e){
//
//     e.preventDefault();
//     var $form = $(this);
//
//     // check if the input is valid
//     if(! $form.valid())
//         alert("form invalid");
//         //return false;
//     else
//             alert("form submitting");
    // $.ajax({
    //     type: 'POST',
    //     url: 'add.php',
    //     data: $('#form').serialize(),
    //     success: function(response) {
    //         $("#answers").html(response);
    //     }
    //
    // });
// });




// .on('success.form.bv', function(e) {
//     // Prevent form submission
//     e.preventDefault();
//     var $form = $(this);
//
//     // Get the form instance
//     var $form = $(e.target);
//
//     // // Get the BootstrapValidator instance
//     var bv = $form.data('bootstrapValidator');
//     console.log(bv);
// Use Ajax to submit form data
// $.post($form.attr('action'), $form.serialize(), function(result) {
//     console.log(result);
// }, 'json');