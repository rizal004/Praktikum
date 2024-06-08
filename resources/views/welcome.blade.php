@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-6 mx-auto">
                <div class="card mt-4 mb-4">
                <div class="card-header text-center">
                    Halaman Login
                </div>
                <div class="card-body">
                    <div class="text-center">
                        
                    </div>
                <form action="{{Route('login')}}" method="post">
                    @csrf
                    <!--username-->
                    <div class="form-group mt-2">
                        <label for="">Username</label>
                        <input type="text" class="form-control" placeholder="enter username" name="username" value="{{old('password')}}">
                    </div>
                    <!--username-->
                    <!--password-->
                    <div class="form-group mt-2">
                        <label for="">Password</label>
                        <input type="text" class="form-control" placeholder="enter your username" name="password" value="{{old('password')}}">
                    </div>
                    <div class="form-group mt-2">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>   
                    </div>
                </form>
            </div>
            </div>
            </div>    
        </div>
    </div>
@endsection    