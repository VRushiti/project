@extends('layouts.admin')


@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <div class="container col-md-12">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Search Posts:</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" name="search"> </input>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Post Link</th>
                            <th>To Edit</th>
                            <th>To Delete</th>

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
                url  : '{{URL::to('admin/search_posts/search_posts')}}',
                data : {'search':$value},
                success:function (data) {
                    $('tbody').html(data);
                }
            })
        })
    </script>

    @stop