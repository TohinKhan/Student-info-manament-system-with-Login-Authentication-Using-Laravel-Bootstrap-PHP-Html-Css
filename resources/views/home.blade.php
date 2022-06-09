@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 style='text-align: center; color:#4B0082;'>Students List</h1>

                    <table border="2">
                        <tr style='text-align: center;'>
                            <th>ID</th>
                            <th>Nmae</th>
                            <th>E-Mail</th>
                            <th>Department</th>
                            <th>Level</th>
                            <th>Term</th>
                            <th>Image</th>
                            <th>Update Info</th>
                            <th>Delete Info</th>
                        </tr>
                        @foreach($students as $student)
                        <tr style='text-align: center;'>
                            <td>{{$student['id']}}</td>
                            <td>{{$student['name']}}</td>
                            <td>{{$student['email']}}</td>
                            <td>{{$student['department']}}</td>
                            <td>{{$student['level']}}</td>
                            <td>{{$student['term']}}</td>
                            <td><img src="uploads/{{$student['image']}}" width = '100px' height = '100px'></td>
                            <td><a href="update/{{$student['id']}}" class="btn btn-primary">Update</a></td>
                            <td><a href="delete/{{$student['id']}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
    
    
                    </table>

                    <form action="insert">
                        <div class="text-center ">
                            <button type ="submit" class="btn btn-success">+ Add Data </button>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
