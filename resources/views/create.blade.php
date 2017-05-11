@extends('layouts.app')


@section('content')
	<div class="container">
		@if (Auth::guest())

					<div class="row">
							<div class="col-md-8 col-md-offset-2">


											<div class="panel-body">
													<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
															{{ csrf_field() }}

																<h3>Log in first</h3>
																<hr>
															<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
																	<label for="email" class="col-md-4 control-label">E-Mail Address</label>

																	<div class="col-md-6">
																			<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

																			@if ($errors->has('email'))
																					<span class="help-block">
																							<strong>{{ $errors->first('email') }}</strong>
																					</span>
																			@endif
																	</div>
															</div>

															<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
																	<label for="password" class="col-md-4 control-label">Password</label>

																	<div class="col-md-6">
																			<input id="password" type="password" class="form-control" name="password" required>

																			@if ($errors->has('password'))
																					<span class="help-block">
																							<strong>{{ $errors->first('password') }}</strong>
																					</span>
																			@endif
																	</div>
															</div>

															<div class="form-group">
																	<div class="col-md-6 col-md-offset-4">
																			<div class="checkbox">
																					<label>
																							<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
																					</label>
																			</div>
																	</div>
															</div>

															<div class="form-group">
																	<div class="col-md-8 col-md-offset-4">
																			<button type="submit" class="btn btn-primary">
																					Login
																			</button>

																			<a class="btn btn-link" href="{{ route('password.request') }}">
																					Forgot Your Password?
																			</a>
																	</div>
															</div>
													</form>
											</div>
							</div>
					</div>
	    @else
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1">

	            <!-- Display Validation Errors -->
	            @if ($errors->any())
	            <div class="alert alert-danger">
	                <strong>Whoops! Something went wrong!</strong>
	                <br><br>
	                <ul>

	                        @foreach($errors->all() as $error)
	                            <li>{{$error}}</li>
	                        @endforeach

	                </ul>
	            </div>
	           @endif



	             <div class="breadcrumb">
	                <a href="../home">← Terug naar overzicht</a>
	            </div>
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#one">Artikel toeveoegen</a></li>
								<li><a data-toggle="tab" href="#two">Testimonial toevoegen</a></li>
								<li><a data-toggle="tab" href="#three">Video toevoegen</a></li>
							</ul>

							<div class="tab-content">
								<div id="one" class="tab-pane fade in active">
									<br>
	                <div class="panel-content">
	                        {!! Form::open(array('files'=> true)) !!}

	                            <div class="form-group">
	                                {!! Form::label('title', 'Titel (max. 255 characters')  !!}
	                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('excerpt', 'Samenvatting') !!}
	                                {!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('body', 'Inhoud') !!}
	                                {!! Form::textArea('body', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('type', 'Type (to become obsolete)') !!}
	                                {!! Form::text('type', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('link1', 'Afbeelding 1') !!}
	                                {!! Form::file('link1', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('link2', 'Afbeelding 2') !!}
	                                {!! Form::file('link2', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">

	                                <button type="submit" class="btn btn-default">
	                                    <i class="fa fa-plus"></i> Toeveoegen
	                                </button>

	                            </div>
	                            {!! Form::close() !!}
	                </div>
								</div>
								<div id="two" class="tab-pane fade">
									<br>
	                <div class="panel-content">
	                        {!! Form::open(array('files'=> true)) !!}

	                            <div class="form-group">
	                                {!! Form::label('title', 'Titel (max. 255 characters')  !!}
	                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('excerpt', 'Samenvatting') !!}
	                                {!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('body', 'Inhoud') !!}
	                                {!! Form::textArea('body', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('type', 'Type (to become obsolote)') !!}
	                                {!! Form::text('type', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('link1', 'Video 1') !!}
	                                {!! Form::file('link1', null, ['class' => 'form-control']) !!}
	                            </div>
	                            
	                            <div class="form-group">

	                                <button type="submit" class="btn btn-default">
	                                    <i class="fa fa-plus"></i> Toeveoegen
	                                </button>
	                            </div>
	                            {!! Form::close() !!}
	                </div>

								</div>
								<div id="three" class="tab-pane fade">
									<br>
					<div class="panel-content">
									{!! Form::open(array('files'=> true)) !!}

											<div class="form-group">
													{!! Form::label('title', 'Titel (max. 255 characters')  !!}
													{!! Form::text('title', null, ['class' => 'form-control']) !!}
											</div>
											<div class="form-group">
													{!! Form::label('excerpt', 'Samenvatting') !!}
													{!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
											</div>
											<div class="form-group">
													{!! Form::label('body', 'Inhoud') !!}
													{!! Form::textArea('body', null, ['class' => 'form-control']) !!}
											</div>
											<div class="form-group">
													{!! Form::label('type', 'Type') !!}
													{!! Form::text('type', null, ['class' => 'form-control']) !!}
											</div>
											<div class="form-group">
													{!! Form::label('link1', 'Video 1') !!}
													{!! Form::file('link1', null, ['class' => 'form-control']) !!}
											</div>
											
											<div class="form-group">

													<button type="submit" class="btn btn-default">
															<i class="fa fa-plus"></i> Toeveoegen
													</button>
											</div>
											{!! Form::close() !!}
					</div>
				</div>
			</div>



	    </div>
	    @endif

	</div>

@stop
