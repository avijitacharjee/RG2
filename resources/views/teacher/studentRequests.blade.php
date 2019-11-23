@extends('layouts.teacher')
@section('links')

@endsection()

@section('content')
    
    <table class='table table-responsive table-bordered'>
        <thead>
            <td>
                SL
            </td>
            <td>
                Name
            </td>
            <td>
                
            </td>
            <td></td>
            <td></td>
        </thead>
        <tbody>
        @php 
         $i=1;
        @endphp
        @foreach($users as $user)
            <tr>
                <td>{{$i++}}</td>
                <td> {{ $user->name }}</td>
                <td> <a href="{{ route('studentProfile',['id'=>$user->id])}}"> View Profile </a> </td>
                <td> <a href="/studentApprove/{{$user->id}}"> Approve  </a> </td>
                <td> <a href="/studentDelete/{{$user->id}}"> Delete </a></td>
            </tr>
        @endforeach
@endsection()