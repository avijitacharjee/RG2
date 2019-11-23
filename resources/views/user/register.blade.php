@extends('layouts/app')
@section('links')
	<link rel='stylesheet' href='css/login.css'/>
@endsection()
@section('content')

<div class="login">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form method="POST" class="form">
                    {{ @csrf_field()}}
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text">name</span>
						</div>
						<input type="text" class="form-control" placeholder="name" name="name">
						
                    </div>
                    @if($errors->has('name'))
                        <p style="color:red"> {{$errors->first('name') }}
                    @endif
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Email</span>
						</div>
						<input type="text" class="form-control" placeholder="Email" name="email">
						
                    </div>
                    @if($errors->has('email'))
                        <p style="color:red"> {{$errors->first('email') }}
                    @endif
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Password</i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    @if($errors->has('password'))
                        <p style="color:red"> {{$errors->first('password') }} </p>
                    @endif
					@if($f ?? ''!=null)
						<p style="color:red"> {{$f ?? '' ?? ""}} </p>
					@endif
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
@endsection()