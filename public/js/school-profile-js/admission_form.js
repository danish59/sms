/**
 * Created by Danish Ch on 9/9/2017.
 */
'use strict';
$(document).ready(function() {
    $('#clear').on('click', function() {
        $('#admission_form').bootstrapValidator("resetForm");
    });

    $('#admission_form').bootstrapValidator({
        fields: {
            std_f_name: {
                validators: {
                    notEmpty: {
                        message: 'Enter the first name'
                    }
                }
            },
            std_l_name: {
                validators: {
                    notEmpty: {
                        message: 'Enter last name'
                    }
                }
            },
            std_cnic: {
                validators: {
                    notEmpty: {
                        message: 'Enter student cnic'
                    }
                }
            },
            father_name: {
                validators: {
                    notEmpty: {
                        message: 'Enter father name'
                    }
                }
            },
            father_cnic: {
                validators: {
                    notEmpty: {
                        message: 'Enter father cnic'
                    }
                }
            },
            date_birth: {
                validators: {
                    notEmpty: {
                        message: 'select the date of birth'
                    }
                }
            },
            // confirmpassword: {
            //     validators: {
            //         notEmpty: {
            //             message: 'Confirm the password'
            //         },
            //         identical: {
            //             field: 'password',
            //             message: 'Please enter the same password as above'
            //         }
            //     }
            // },

            gender: {
                validators: {
                    notEmpty: {
                        message: 'Gender is required'
                    }
                }
            },
            religion: {
                validators: {
                    notEmpty: {
                        message: 'Religion is required'
                    }
                }
            },
            cast: {
                validators: {
                    notEmpty: {
                        message: 'Cast is required'
                    }
                }
            },
            std_image: {
                validators: {
                    notEmpty: {
                        message: 'student image is required'
                    }
                }
            },
            std_email: {
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
            std_phone: {
                validators: {
                    notEmpty: {
                        message: 'Enter the phone number'
                    },
                    regexp: {
                        regexp: /^[0-9]{10,15}$/,
                        message: 'The phone number can only consist of numbers with min 10 digits'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'address is required'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'City is required'
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'country is required'
                    }
                }
            },
            profession: {
                validators: {
                    notEmpty: {
                        message: 'select profession'
                    }
                }
            },
            class: {
                validators: {
                    notEmpty: {
                        message: 'select class'
                    }
                }
            },
            group: {
                validators: {
                    notEmpty: {
                        message: 'select group'
                    }
                }
            },
            hobbies: {
                validators: {
                    notEmpty: {
                        message: 'enter hobbies'
                    }
                }
            },
            // previous_school: {
            //     validators: {
            //         notEmpty: {
            //             message: 'enter previous school'
            //         }
            //     }
            // },
            // brother_sister1: {
            //     validators: {
            //         notEmpty: {
            //             message: 'enter brother/sister 1'
            //         }
            //     }
            // },
            // brother_sister2: {
            //     validators: {
            //         notEmpty: {
            //             message: 'enter brother/sister 2'
            //         }
            //     }
            // },
            // brother_sister3: {
            //     validators: {
            //         notEmpty: {
            //             message: 'enter brother/sister 3'
            //         }
            //     }
            // }

        }

    });
    //     .on('success.form.bv', function(e) {
    //     e.preventDefault();
    //     swal({
    //         title: "Success.",
    //         text: "Successfully Added",
    //         type: "success",
    //         allowOutsideClick: false
    //     }).then(function() {
    //         location.reload();
    //     });
    // });

    $('#edit_clear').on('click', function() {
        $('#update_employee').bootstrapValidator("resetForm");
    });
    $('#update_employee').bootstrapValidator({
        fields: {
            emp_f_name: {
                validators: {
                    notEmpty: {
                        message: 'Enter the first name'
                    }
                }
            },
            emp_l_name: {
                validators: {
                    notEmpty: {
                        message: 'Enter last name'
                    }
                }
            },
            emp_cnic: {
                validators: {
                    notEmpty: {
                        message: 'Enter employee cnic'
                    }
                }
            },
            father_name: {
                validators: {
                    notEmpty: {
                        message: 'Enter father name'
                    }
                }
            },
            father_cnic: {
                validators: {
                    notEmpty: {
                        message: 'Enter father cnic'
                    }
                }
            },
            date_birth: {
                validators: {

                    notEmpty: {
                        message: 'select the date of birth'
                    }
                }
            },
            // confirmpassword: {
            //     validators: {
            //         notEmpty: {
            //             message: 'Confirm the password'
            //         },
            //         identical: {
            //             field: 'password',
            //             message: 'Please enter the same password as above'
            //         }
            //     }
            // },

            gender: {
                validators: {
                    notEmpty: {
                        message: 'Gender is required'
                    }
                }
            },
            religion: {
                validators: {
                    notEmpty: {
                        message: 'Religion is required'
                    }
                }
            },
            cast: {
                validators: {
                    notEmpty: {
                        message: 'Cast is required'
                    }
                }
            },
            emp_email: {
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
            emp_phone: {
                validators: {
                    notEmpty: {
                        message: 'Enter the phone number'
                    },
                    regexp: {
                        regexp: /^[0-9]{10,15}$/,
                        message: 'The phone number can only consist of numbers with min 10 digits'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'address is required'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'City is required'
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'country is required'
                    }
                }
            },
            position: {
                validators: {
                    notEmpty: {
                        message: 'select position'
                    }
                }
            },
            degree_certificate: {
                validators: {
                    notEmpty: {
                        message: 'Degree/certificate is required'
                    }
                }
            },

            cgpa_percentage: {
                validators: {
                    notEmpty: {
                        message: 'Cgpa/percentage is required'
                    }
                }
            },

            university_college: {
                validators: {
                    notEmpty: {
                        message: 'University College is required'
                    }
                }
            },

            passing_year: {
                validators: {
                    notEmpty: {
                        message: 'Please selectPassing year'
                    }
                }
            }

            // pincode: {
            //     validators: {
            //         notEmpty: {
            //             message: 'Pincode number is required'
            //         },
            //         regexp: {
            //             regexp: /^(\+?1-?)?(\([0-9]\d{2}\)|[0-9]\d{2})-?[0-9]\d{2}$/,
            //             message: 'Enter valid Pincode number'
            //         }
            //     }
            // },
            // terms: {
            //     validators: {
            //         notEmpty: {
            //             message: 'You have to accept the terms and policies'
            //         }
            //     }
            // }
        }
        // submitHandler: function(form) {
        //     if ($('#tryitForm1').valid()) {
        //         console.log("now we enable the submit button!");
        //     }
        // }
    });


    $('#tryitForm').bootstrapValidator({
        fields: {
            firstName: {
                validators: {
                    notEmpty: {
                        message: 'Enter the user name'
                    }
                }
            },
            address1: {
                validators: {
                    notEmpty: {
                        message: 'Enter your address'
                    }
                }
            },
            password: {
                validators: {

                    notEmpty: {
                        message: 'Enter the password'
                    }
                }
            },
            confirmpassword: {
                validators: {
                    notEmpty: {
                        message: 'Confirm the password'
                    },
                    identical: {
                        field: 'password',
                        message: 'Please enter the same password as above'
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
            cell: {
                validators: {
                    notEmpty: {
                        message: 'Enter the phone number'
                    },
                    regexp: {
                        regexp: /^[0-9]{10}$/,
                        message: 'The phone number can only consist of numbers with 10 digits'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'City is required'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'Gender is required'
                    }
                }
            },
            pincode: {
                validators: {
                    notEmpty: {
                        message: 'Pincode number is required'
                    },
                    regexp: {
                        regexp: /^(\+?1-?)?(\([0-9]\d{2}\)|[0-9]\d{2})-?[0-9]\d{2}$/,
                        message: 'Enter valid Pincode number'
                    }
                }
            },
            activate: {
                validators: {
                    notEmpty: {
                        message: 'You have to activate your account'
                    }
                }
            },
            check_active: {
                validators: {
                    notEmpty: {
                        message: 'You have to active your account'
                    }
                }
            }
            // terms: {
            //     validators: {
            //         notEmpty: {
            //             message: 'You have to accept the terms and policies'
            //         }
            //     }
            // }
        }
        // submitHandler: function(form) {
        //     if ($('#tryitForm').valid()) {
        //         console.log("now we enable the submit button!");
        //     }
        // }
    });

    // $("#emp_phone").intlTelInput({
    //     utilsScript: "/admin-vendor/intl-tel-input/js/utils.js"
    // });
});
