@extends('admin/template')

@section('content')


    <div  class="box box-primary" class="box-header with-border">

        <h1 class="box-title"><strong>Creating a New Post Here</strong></h1>
        <hr>

    </div>

    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="/pages">
    {{ csrf_field() }}  <!-- this function has hidden body make by laravel
                                                            to  make token that has compressed value
                                                             that compare with the session
                                                              for each authorized user to identify on him
                                                             and protect him form unauthorized requests -->
        <div class="box-body">

            <div class="form-group">
                <label for="name">Title:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name"  >
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Body:</label>
                <textarea id="content" name="content" class="form-control"  ></textarea>
            </div>
        </div>
        <!-- /.box-body -->

        <div class="content">

            <button type="submit" class="btn btn-primary">publish</button><hr>


            @include('admin.errors')

        </div>
    </form>

@endsection

