/**
 * Created by Danish on 12/22/2016.
 */



<!-- java scrip to validate the form. -->

$(document).ready(function(){

    $.validator.setDefaults({
        highlight:function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight:function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorPlacement:function (error,element) {
            if(element.prop('type')=='checkbox' || element.prop('type')=='radio'){
                error.insertAfter(element.parent());
            }else {
                error.insertAfter(element);
            }
        }
    });

        $('#school_reg_form').validate({

        errorClass: "my-error-class",
        validClass: "my-valid-class",

              rules:{

                    school_name: {

                        required:true,
                         lettersonly:true,
                        // maxlength:100

                    },

                  reg_status:{
                      required:true,
                      // maxLength:100
                  },
                  reg_no:{
                      required:true,
                      //maxLength:50
                  },
                  abrevation:{
                      required:true,
                      //maxLenght:10
                  },
                  reg_school_name:{
                      required:true,
                      //maxLength:150
                  },
                  board_name:{
                      required:true,
                      //maxLength:150
                  },
                  no_students:{
                        required:true,
                      digits:true,
                      //maxLength:10
                  },
                  no_teachers:{
                      required:true,
                      digits:true,
                      //maxLength:10
                  },
                  office:{
                        required:true,
                      //maxLength:150
                  },
                  tehsil:{
                        required:true,
                      //maxLength:50
                  },
                  distric:{
                      required:true,
                      //maxLength:50
                  },
                  country:{
                      required:true,
                      //maxLength:50
                  },
                  phone_office:{
                      required:true,
                      digits:true,
                      //maxlength:15,
                      //minLength:8
                  },
                  phone_home:{
                      required:true,
                      digits:true,
                      //maxLength:15,
                      //minLength:8
                  },
                  email:{
                        required:true,
                      email:true
                  },
                  owner_name:{
                      required:true,
                      lettersonly:true,
                     // maxLength:60
                  },
                  owner_father:{
                      required:true,
                      lettersonly:true,
                     // maxLength:60
                  },
                  owner_gender:{
                    required:true
                  },
                  owner_cnic:{
                      required:true,
                      digits:true,
                      //maxLength:15
                  },
                  owner_cell:{
                      required:true,
                      digits:true,
                      //maxLength:15,
                      //minLength:8
                  },
                  principle_name:{
                      required:true,
                      lettersonly:true,
                      //maxLength:60
                  },
                  principle_father:{
                      required:true,
                      lettersonly:true,
                      //maxLength:60
                  },
                  principle_gender:{
                      required:true
                  },
                  principle_cnic:{
                      required:true,
                      digits:true,
                    //  maxLength:15
                  },
                  principle_cell:{
                      required:true,
                      digits:true,
                      //maxLength:15,
                      //minLength:8
                  },
                  school_level:{
                      required:true
                  },
                  'level_education[]':{
                      required:true
                  },
                  location:{
                      required:true
                  },
                  build_status:{
                      required:true
                  },
                  i_agree:{
                      required:true
                  }


              },

              messages:{
                   school_name: {
                       required:'The school name is required',
                       lettersonly:'only alphabets are allowed',
                       //maxLength:'The school name max 100 characters long'
                   },
                  reg_status:{
                       required:'enter school registration status ',
                     // maxLength:'The registration status name max 100 characters long'
                  },
                  reg_no:{
                       required:'Please enter school registration no.',
                      //maxLength:'The registration no max 50 characters long'
                  },
                  abrevation:{
                       required:'The abrevation is required',
                      //maxLength:'The registration no max 10 characters long'
                  },
                  reg_school_name:{
                       required:'The school registred name is required',
                      //maxLength:'school registered name max 150 characters long'
                  },
                  board_name:{
                      required:'The affiliation is required',
                      //maxLength:' affialition max 150 characters long'
                  },
                  no_students:{
                       required:'please enter total number of students.',
                      digits:'The number is not valid',
                      //maxLength:'maximum 10 digits long'
                  },
                  no_teachers:{
                      required:'please enter total number of teachers.',
                      digits:'The number is not valid',
                      //maxLength:'maximum 10 digits long'

                  },
                  office:{
                       required:'The office address is required',
                    //  maxLength:'maximum 150 characters long'
                  },
                  tehsil:{
                       required:'The tehsil city name is required',
                      //maxLength:'maximum 50 characters long'
                  },
                  distric:{
                      required:'The tehsil distric name is required',
                      //maxLength:'maximum 50 characters long'
                  },
                  country:{
                      required:'The tehsil distric name is required',
                      //maxLength:'maximum 50 characters long'
                  },
                  phone_office:{
                      required:'Please enter your office phone no.',
                      digits:'The phone number is not valid',
                      //maxLength:'The phone no. max 15 digits long',
                      //minLength:'The phone no. min 8 digits long'
                  },
                  phone_home:{
                      required:'Please enter your home phone no.',
                      digits:'The phone number is not valid',
                      //maxLength:'The phone no. max 15 digits long',
                      //minLength:'The phone no. min 8 digits long'
                  },
                  email:{
                       required:'Please enter your email',
                      email:'The value is not a valid email address'
                  },
                  owner_name:{
                      required:'The owner name is required',
                      lettersonly:'only alphabets are allowed',
                      //maxLength:'The school name max 60 characters long'
                  },
                  owner_father:{
                      required:'The owner father name is required',
                      lettersonly:'only alphabets are allowed',
                    //  maxLength:'The school name max 60 characters long'
                  },
                  owner_gender:{
                       required:'please select owner gender'
                  },
                  owner_cnic:{
                      required:'please enter owner CNIC.',
                      digits:'please enter without dashs this is not valid',
                      //maxLength:'maximum 15 digits long'
                  },
                  owner_cell:{
                      required:'Please enter your phone no.',
                      digits:'The phone number is not valid',
                      //maxLength:'The phone no. max 15 digits long',
                      //minLength:'The phone no. min 8 digits long'
                  },
                  principle_name:{
                      required:'The principle name is required',
                      lettersonly:'only alphabets are allowed',
                      //maxLength:'The school name max 60 characters long'
                  },
                  principle_father:{
                      required:'The principle father name is required',
                      lettersonly:'only alphabets are allowed',
                      //maxLength:'The school name max 60 characters long'
                  },
                  principle_gender:{
                      required:'please select principle gender'
                  },
                  principle_cnic:{
                      required:'please enter principle CNIC.',
                      digits:'please enter without dashs this is not valid',
                    //  maxLength:'maximum 15 digits long'
                  },
                  principle_cell:{
                      required:'Please enter your phone no.',
                      digits:'The phone number is not valid',
                      //maxLength:'The phone no. max 15 digits long',
                      //minLength:'The phone no. min 8 digits long'
                  },
                  school_level:{
                       required:'please select school level'
                  },
                  'level_education[]':{
                      required:'please check level of education'
                  },
                  location:{
                      required:'please check location'
                  },
                  build_status:{
                      required:'please check building satus'
                  },
                  i_agree:{
                      required:'please check terms and conditions of use'
                  }


              }

    });//validate() function closed


});//ready() function closed
//
//  $(function () {
//
//     $('#school_reg_form').on('submit', function(e) {
//
//         $.ajaxSetup({
//             header:$('meta[name="csrf-token"]').attr('content')
//         });
//         var isvalid = $('#school_reg_form').valid();
//
//         if(isvalid){
//             e.preventDefault();
//             //alert('you are valid');
//             var formdata = $('#school_reg_form').serialize();
//            // var host = "{{URL::to('/')}}";
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
//                    //  url: '/schoolRegistration',
//                    // // console.log('wwwwwwwwwwwww');
//                    //  jQuery("#responsing").show();
//                    //  jQuery("#request").hide();
//
//                 }
//             });
//         }else{
//             alert('somthing went wrong!')
//         }
//     });//submit handler() closed
//
// });


    //
    // $('#school_reg_form').bootstrapValidator({
    //
    //     message:'This value is not valid',
    //     feedbackIcons: {
    //         valid: 'glyphicon glyphicon-ok',
    //         invalid: 'glyphicon glyphicon-remove',
    //         validating: 'glyphicon glyphicon-refresh'
    //     },
    //     fields: {
    //         // username: {
    //         //     validators: {
    //         //         notEmpty: {
    //         //             message: 'The username is required'
    //         //         },
    //         //         stringLength: {
    //         //             min: 6,
    //         //             max: 20,
    //         //             message:'The username must be more than 6 and less than 30 characters long'
    //         //         },
    //         //         regexp: {
    //         //             regexp: /^[a-zA-Z0-9_\.]+$/,
    //         //             message: 'The username can only consist of alphabetical, number, dot and underscore'
    //         //         },
    //         //     }
    //         // },
    //         //
    //         // password: {
    //         //     validators: {
    //         //         notEmpty: {
    //         //             message: 'The password is required'
    //         //         },
    //         //         different: {
    //         //             field: 'username',
    //         //             message: 'The password cannot be the same as username'
    //         //         }
    //         //     }
    //         // },
    //
    //         school_name: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The school name is required'
    //                 },
    //                 stringLength: {
    //                     max: 100,
    //                     message:'The school name max 100 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z]+$/,
    //                     message: 'The school name can be only consist of alphabetical, number, dot and underscore'
    //                 },
    //             }
    //         },
    //
    //         reg_status: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The registration status is required'
    //                 },
    //                 stringLength: {
    //                     max: 100,
    //                     message:'The registration status name max 100 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z]+$/,
    //                     message: 'The school name can be only consist of alphabetical'
    //                 },
    //             }
    //         },
    //
    //         reg_no: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Please enter school registration no.'
    //                 },
    //             }
    //         },
    //
    //         abrevation: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The abrevation is required'
    //                 },
    //                 stringLength: {
    //                     min: 2,
    //                     message:'The abrevation min 2 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z_\.]+$/,
    //                     message: 'The abrevation can be only consist of alphabetical adn dot'
    //                 },
    //             }
    //         },
    //
    //
    //         reg_school_name: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The school registred name is required'
    //                 },
    //                 stringLength: {
    //                     max: 150,
    //                     message:'school registered name max 150 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z]+$/,
    //                     message: 'The school registred name can be only consist of alphabetical, number, dot and underscore'
    //                 },
    //             }
    //         },
    //
    //         board_name: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The affiliation is required'
    //                 },
    //                 stringLength: {
    //                     max: 150,
    //                     message:' affialition max 150 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z]+$/,
    //                     message: 'The affialition name can be only consist of alphabetical, number, dot and underscore'
    //                 },
    //             }
    //         },
    //
    //         no_students: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'please enter total number of students.'
    //                 },
    //                 digits: {
    //                     message: 'The number is not valid'
    //                 },
    //
    //             }
    //         },
    //
    //         no_teachers: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'please enter total number of teachers.'
    //                 },
    //                 digits: {
    //                     message: 'The number is not valid'
    //                 },
    //
    //             }
    //         },
    //
    //         office: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The office address is required'
    //                 },
    //                 stringLength: {
    //                     max: 150,
    //                     message:'The address max 100 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z0-9_\.]+$/,
    //                     message: 'The school name can be only consist of alphabetical, number, dot and underscore'
    //                 },
    //             }
    //         },
    //
    //
    //         tehsil: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The tehsil city name is required'
    //                 },
    //                 stringLength: {
    //                     max: 100,
    //                     message:'The max 100 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z]+$/,
    //                     message: 'The distric can be only consist of alphabetical'
    //                 },
    //             }
    //         },
    //
    //         distric: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The distric city name is required'
    //                 },
    //                 stringLength: {
    //                     max: 100,
    //                     message:'The max 100 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z]+$/,
    //                     message: 'The distric name can be only consist of alphabetical'
    //                 },
    //             }
    //         },
    //
    //         country: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The country name is required'
    //                 },
    //                 stringLength: {
    //                     max: 100,
    //                     message:'should be max 100 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z]+$/,
    //                     message: 'The country name can be only consist of alphabetical'
    //                 },
    //             }
    //         },
    //
    //         phone_office: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Please enter your office phone no.'
    //                 },
    //                 digits: {
    //                     message: 'The phone number is not valid'
    //                 },
    //                 stringLength: {
    //                     min: 10,
    //                     max: 15,
    //                     message: 'The phone no. max 15 digits long'
    //                 }
    //             }
    //         },
    //
    //         phone_home: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Please enter your home phone no.'
    //                 },
    //                 digits: {
    //                     message: 'The phone number is not valid'
    //                 },
    //                 stringLength: {
    //                     min: 10,
    //                     max: 15,
    //                     message: 'The phone no. max 15 digits long'
    //                 }
    //             }
    //         },
    //
    //         email: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Please enter your email'
    //                 },
    //                 emailAddress: {
    //                     message: 'The value is not a valid email address'
    //                 }
    //             }
    //         },
    //
    //
    //         owner_name: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The owner name is required'
    //                 },
    //                 stringLength: {
    //                     min:3,
    //                     max: 100,
    //                     message:'The owner name min 3 and max 100 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z]+$/,
    //                     message: 'The owner name can be only consist of alphabetical, number, dot and underscore'
    //                 },
    //             }
    //         },
    //
    //
    //         owner_father: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The owner father name is required'
    //                 },
    //                 stringLength: {
    //                     min:3,
    //                     max: 100,
    //                     message:'The owner father name min 3 and max 100 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z]+$/,
    //                     message: 'The owner father name can be only consist of alphabetical, number, dot and underscore'
    //                 },
    //             }
    //         },
    //
    //
    //        owner_gender: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The owner gender is required'
    //                 }
    //             }
    //        },
    //
    //         owner_cnic: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Please enter your owner CNIC.'
    //                 },
    //                 digits: {
    //                     message: 'The CNIC is not valid'
    //                 },
    //                 stringLength: {
    //                     max: 20,
    //                     message: 'proper digits without dashes required'
    //                 }
    //             }
    //         },
    //
    //         owner_cell: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Please enter your owner cell no.'
    //                 },
    //                 digits: {
    //                     message: 'The mobile phone number is not valid'
    //                 },
    //                 stringLength: {
    //                     min: 10,
    //                     max: 15,
    //                     message: 'The phone no. must be 10 digits'
    //                 }
    //             }
    //         },
    //
    //
    //
    //         principle_name: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The principle name is required'
    //                 },
    //                 stringLength: {
    //                     min:3,
    //                     max: 100,
    //                     message:'The principle name min 3 and max 100 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z]+$/,
    //                     message: 'The principle name can be only consist of alphabetical, number, dot and underscore'
    //                 },
    //             }
    //         },
    //
    //
    //         principle_father: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The principle father name is required'
    //                 },
    //                 stringLength: {
    //                     min:3,
    //                     max: 100,
    //                     message:'The principle father name min 3 and max 100 characters long'
    //                 },
    //                 regexp: {
    //                     regexp: /^[a-zA-Z]+$/,
    //                     message: 'The principle father name can be only consist of alphabetical, number, dot and underscore'
    //                 },
    //             }
    //         },
    //
    //
    //         principle_gender: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'The principle gender is required'
    //                 }
    //             }
    //         },
    //
    //         principle_cnic: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Please enter your principle CNIC.'
    //                 },
    //                 digits: {
    //                     message: 'The CNIC is not valid'
    //                 },
    //                 stringLength: {
    //                     max: 20,
    //                     message: 'proper digits without dashes required'
    //                 }
    //             }
    //         },
    //
    //          principle_cell: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'Please enter your principle cell no.'
    //                 },
    //                 digits: {
    //                     message: 'The mobile phone number is not valid'
    //                 },
    //                 stringLength: {
    //                     min: 10,
    //                     max: 15,
    //                     message: 'The phone no. must be 10 digits'
    //                 }
    //             }
    //         },
    //
    //
    //         school_level: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'please select school level'
    //                 }
    //             }
    //         },
    //
    //         'level_education[]': {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'please check level of education'
    //                 }
    //             }
    //         },
    //
    //         location: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'please check location of your school'
    //                 }
    //             }
    //         },
    //
    //         build_status: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'please check building status of your school'
    //                 }
    //             }
    //         },
    //
    //         i_agree: {
    //             validators: {
    //                 notEmpty: {
    //                     message: 'please check it '
    //                 }
    //             }
    //         },
    //
    //
    //
    //     }
    //  });


// jQuery(function () {
//
//     jQuery('#school_reg_form').unbind('submit').bind('submit', function (e) {
//
//         e.preventDefault();
//
//         jQuery.ajax({
//             type: 'post',
//             url: '/home',
//             data: jQuery('#school_reg_form').serialize(),
//             success: function () {
//                 jQuery("#uspesne-odoslane").show();
//                 jQuery(".formular-potvrdit").hide();
//                 jQuery(".formular-riadok").hide();
//                 jQuery(".formular-zavriet").hide();
//             }
//         });
//     });
//
// });





// // alert('welcom');
//  $.post('/home',
//      $('form#example4').serialize() ,
//      function(data){
//          alert(data.msg);
//      }, "json");