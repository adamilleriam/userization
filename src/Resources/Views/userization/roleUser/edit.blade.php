@extends(config('userization.master_template'))
@section(config('userization.content_area'))

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="panel-heading">
            <h4>Edit user role</h4>
        </div>

        <!-- /.box-header -->

        {!! Form::model($role,['route'=>['roleUser',$role->id],'method'=>'put','files'=> true]) !!}
        <div class="box-body">
            <div class="row">
                @include('userization.role._form')
            </div>
            <div class="row">
                <div class="col-xs-6">
                    {!! Form::submit('Update',['class'=>'btn btn-success pull-right']) !!}

                </div>
                <div class="col-xs-6">
                    <a href="{!! route('role.index') !!}" class="btn btn-danger" onclick="return confirm('Are you confirm to cancel !')">Cancel</a>
                </div>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
    <!-- /.box -->
@endsection