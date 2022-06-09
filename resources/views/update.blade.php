@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <h1 style='text-align: center; color:#BDB76B;'>Update Data</h1>


            <form action="{{url('update1/'.$student->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                
                <input type="hidden" value="{{$student['id']}}" ><br>
                <input type="hidden" name="old_image" value ="{{$student['image']}}">

                <div class="form-group">
                    <label for="inputEmail4">Name</label><br>
                    <input type="text" name="name" placeholder='Enter name' value="{{$student['name']}}" class="form-control"><br>
                </div>

                <div class="form-group">
                    <label for="inputEmail4">E-Mail</label><br>
                    <input type="email" name="email" placeholder="Enter E-mail" value="{{$student['email']}}" class="form-control"><br>
                </div>

                <div class="form-group">
                    <label for="inputEmail4">Department</label><br>
                    <input type="text" name="department" placeholder='Enter Department' value="{{$student['department']}}" class="form-control"><br>
                </div>

                <div class="form-group">
                    <label for="inputEmail4">Level</label><br>
                    <input type="text" name="level" placeholder="Enter Level" value="{{$student['level']}}" class="form-control"><br>
                </div>

                <div class="form-group">
                    <label for="inputEmail4">Term</label><br>
                    <input type="text" name="term" placeholder='Enter Term' value="{{$student['term']}}" class="form-control"><br>
                </div>

                <div class="form-group">
                    <label for="inputEmail4">Photo</label><br>
                    <input type ='file' name="file" placeholder="select photo" class="form-control"  ><br>
                </div>

                <img src="{{asset ('uploads/'.$student['image'])}}" width = '100px' height = '100px' >
                <button type="submit" class="btn btn-primary">Update</button>
            </form>



        </div>
    </div>
</div>
@endsection




