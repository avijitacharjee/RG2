@extends('layouts.user')
@section('links')
    <link rel="stylesheet" href="{{ asset('../css/submitPaper.css')}}">
@endsection()

@section('content')
<div class="login">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
            <form class='form' method='POST' id='form'>
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="researchPaper">Upload research paper</label>
                    <input type="file" class="form-control-file" id="researchPaper" name='researchPaper'>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-text" name='description'>
                </div>

                <div class="form-group">
                    <input type="submit" class="submit">
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection()