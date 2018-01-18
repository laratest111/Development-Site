@extends('admin.template')

@section('content')

    <div class="col-md-8 col-md-offset-2">

        <div  class="box box-primary" class="box-header with-border">

            <h1 class="container">Register</h1><br>

        </div>

        <form method="post" action='/register'>
            {{ csrf_field() }}

            <div class="form-group">

                <label for="name">Name:</label>

                <input type="text" class="form-control" name="name" id="name" required>

            </div>


            <div class="form-group">

                <label for="email">Email:</label>

                <input type="email" class="form-control" name="email" id="email" required>

            </div>


            <div class="form-group">

                <label for="password">Password:</label>

                <input type="password" class="form-control" name="password" id="password" required>

            </div>

            <div class="form-group">

                <label for="password_conformation">Password Conformation:</label>

                <input type="password" class="form-control" name="password_conformation" id="password_conformation" required>

            </div>


            <div class="form-group">

                <button type="submit" class="btn btn-primary">Register</button><hr>

            </div>

            @include('admin.errors')

        </form>

    </div>

@endsection