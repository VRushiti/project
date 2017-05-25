@extends('layouts.admin')




@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <div class="container col-md-12">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Users:</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" name="search"> </input>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Role_Id</th>
                            {{--<th>Is_Active</th>--}}
                            <th>Name</th>
                            <th>Email</th>

                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#search').on('keyup', function(){
            $value=$(this).val();
            $.ajax({
                type : 'get',
                url  : '{{URL::to('admin/search/search')}}',
                data : {'search':$value},
                success:function (data) {
                    $('tbody').html(data);
                }
            })
        })
    </script>

    @endsection

