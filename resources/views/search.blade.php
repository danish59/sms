<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Search School : Home</title>
    {{--<!-- jQuery library -->--}}
    <script src="{{asset('/js/myhome-js/plugins/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <link href="{{asset('/css/myhome-css/bootstrap.css')}} " rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{asset('/css/jquery-ui.css')}} " rel="stylesheet">
    {{--<script src="{{asset('/js/myhome-js/bootstrap.js')}}"></script>--}}
    {{--<script src="{{asset('//code.jquery.com/jquery-1.10.2.js')}}"></script>--}}
    <script src="{{asset('/js/jquery-ui.js')}}"></script>
</head>
<body>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <section class="panel panel-default">
            <header class="panel-heading">
                <input type="text" placeholder="Type your search keyword here and hit Enter..." class="form-control" name="search_school" id="search_school" style="display: inline-block;">
            </header>
        {!! Form::open(array('class'=>'ajax','url'=>'/school_profile')) !!}
        <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <input type="hidden" name="campus_id" id="campus_id" class="form-control" placeholder="ID">
            <input type="hidden" name="campus_name" id="campus_name" class="form-control" placeholder="campus name">
                <button type="submit">
                    <i class="fa fa-search">Search</i>
                </button>
        {!! form::close() !!}

            {{--<div class="panel panel-body">--}}
                {{--<table>--}}
                    {{--<tr>--}}
                        {{--<td>ID</td>--}}
                        {{--<td><input type="text" name="campus_id" id="campus_id" class="form-control" placeholder="ID"></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td></td>--}}
                        {{--<td><br></td>--}}
                    {{--</tr><tr>--}}
                        {{--<td>Name</td>--}}
                        {{--<td><input type="text" name="campus_name" id="campus_name" class="form-control" placeholder="campus name"></td>--}}
                    {{--</tr>--}}
                {{--</table>--}}
            {{--</div>--}}
        </section>
    </div>
</div>
</body>
<script type="text/javascript">
    $('#search_school').autocomplete({
        source: '{{URL::route('search_school')}}',
        minLength: 1,
        autoFocus:true,
        select:function (e,ui) {
            $('#campus_id').val(ui.item.id);
            $('#campus_name').val(ui.item.value);
        }
    })
</script>
</html>
