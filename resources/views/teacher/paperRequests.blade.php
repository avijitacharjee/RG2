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
        @foreach($papers as $paper)
            <tr>
                <td>{{$i++}}</td>
                <td> {{ $paper->pdf_name }}</td>
                <td> <a href="{{ url('/viewPaper',['id'=>$paper->id])}}"> View Paper </a> </td>
                <td> <a href="/paperApprove/{{$paper->id}}"> Approve  </a> </td>
                <td> <a href="/paperDelete/{{$paper->id}}"> Delete </a></td>
            </tr>
        @endforeach
@endsection()