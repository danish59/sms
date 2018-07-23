/**
 * Created by Danish on 8/4/2017.
 */
var timer;
function up() {
    timer = setTimeout(function () {
        var keywords = $('#search_school').val();
        if (keywords.length>0){
            $.ajaxSetup({
                header: $('meta[name="csrf-token"]').attr('content')
            });

            // $.post('/search_school',{keywords:keywords},function (markup) {
            //     $("#search_result").find("ul").html('');
            //     $("#search_result").css('display','block');
            //     $.each( markup, function( key, value ) {
            //         $("#search_result").find("ul").append('<li>'+value+'</li>');
            //     });
            //
            //     // $('').html(markup)
            // })

            $.ajax({
                type: 'get',
                url: '/search_school',
                datatype:'json',
                success: function (response) {
                    $("#search_result").find("ul").html('');
                        $("#search_result").css('display','block');
                        $.each( response, function( key, value ) {
                            $("#search_result").find("ul").append('<li>'+value.campus_name+'</li>');
                        });
                }
            });
        }

    },500);

    function down() {
        clearTime(timer);
    }
}