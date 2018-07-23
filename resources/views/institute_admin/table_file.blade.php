
<?php
/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 7/13/2017
 * Time: 1:22 AM
 */
?>
<table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
    <thead>
    <tr role="row">
        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">No#</th>
        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Class Name</th>
        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;?>
    @foreach($classes as $class)
        <tr role="row" class="even">
            <td class="sorting_1">{{$i}}</td>
            <td>{{$class->class_name}}</td>
            <td>
                <a href="#{{"class".$i}}" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" title="View"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;
                <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="{{url('edit_class/'.$class->id)}}"><i class="fa fa-pencil text-warning"></i></a>&nbsp; &nbsp;
                <a class="delete" onclick="delete_class( {{$class->id}})" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash text-danger"></i></a>

                <div class="collapse" id="{{"class".$i}}">
                    <div class="well">
                        <table>
                            <tr>
                                <td><b>Campus Name</b></td><td>{{$class->class_name}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
        <?php $i++; ?>
    @endforeach
    </tbody>
</table>
