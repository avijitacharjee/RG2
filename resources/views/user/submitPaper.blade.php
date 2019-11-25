@extends('layouts.user')
@section('links')
    <link rel="stylesheet" href="{{ asset('../css/submitPaper.css')}}">
@endsection()

@section('content')
<div class="login">
	<div class="d-flex justify-content-center con h-80">
		<div class="card">
          
            <div class="header-container-wrapper">
  <div class="header-container">
    <div class="custom-header-bg">
     <div class='upload'>
        Research Paper Upload
     </div>
  </div>
</div>

<div class="body-container-wrapper">
  <div class="body-container">
    <div class="page-center">
      <i class="fa fa-cloud" aria-hidden="true"></i>

      <!--form -->
      <form class='form' method='POST' id='form' enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="upload">
                    <label for="researchPaper">Upload research paper</label>
                    <input type="file" class="form-control-file" id="researchPaper" name='researchPaper' >
                    @if($errors->has('researchPaper'))
                        <p style="color:red"> {{$errors->first('researchPaper') }}
                    @endif
                </div>
                <div class="upload">
                    <label for="name">Paper Name</label>
                    </br>
                    <input type="text" class="paper-name" name="name">
                    @if($errors->has('name'))
                        <p style="color:red"> {{$errors->first('name') }}
                    @endif
                </div>
                <div class="upload">
                    <label for="description">Add a description</label></br>
                    <input type="text" class="description" name='description'>
                    @if($errors->has('description'))
                        <p style="color:red"> {{$errors->first('description') }}
                    @endif
                </div>

                <div class="submit-group">
                    <input type="submit" class="submit-button">
                </div>
                
            </form>
     
          
        </div>
      </div>
      <div class="file-upload-bar-closed"></div>
    </div>
  </div>
</div>

        </div>
    </div>
</div>

@endsection()