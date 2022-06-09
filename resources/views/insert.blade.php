@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <h1 style='text-align: center; color:#BDB76B;'>Add New Data</h1>

                @if($errors->any())
                @foreach ($errors->all() as $err)
                <li>{{$err}}</li>
                @endforeach
                @endif
                
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail4">ID</label><br>
                        <input type="text" name="id" placeholder="Enter Id" class="form-control"  ><br>
                        
                    </div>

                    <div class="form-group">
                        <label for="inputEmail4">Name</label><br>
                        <input type="text" name="name" placeholder='Enter Name' class="form-control"><br>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail4">E-Mail</label><br>
                        <input type="email" name="email" placeholder="Enter E-mail" class="form-control"><br>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail4">Department</label><br>
                        <input type="text" name="department" placeholder='Enter Department' class="form-control"><br>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail4">Level</label><br>
                        <input type="text" name="level" placeholder="Enter Level" class="form-control"><br>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail4">Term</label><br>
                        <input type="text" name="term" placeholder='Enter Term' class="form-control"><br>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail4">Photo</label><br>
                        <input type ='file' name="file" placeholder="Select Photo" class="form-control"><br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>

            
        </div>
    </div>
</div>
@endsection

