@extends('layouts.teacher')
@section('links')

@endsection

@section('content')
    <table class='table table-responsive table-bordered table-colored'>
        <tbody>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    {{ $user->name }}
                </td>
            </tr>
            <tr>
                <td> Email </td>
                <td>
                    {{ $user->email  }}
                </td>
            </tr>

        </tbody>
    </table>
@endsection()
