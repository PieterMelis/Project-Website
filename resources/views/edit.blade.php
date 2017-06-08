@extends('layouts.app')


@section('content')
	<div class="container">
		@if (Auth::guest())

			<div class="row">
					<div class="col-md-8 col-md-offset-2">

									<div class="panel-body">
											<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
													{{ csrf_field() }}

														<h3>Login</h3>
														<hr>
													<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
															<label for="email" class="col-md-4 control-label">E-Mail Addres</label>

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
															<label for="password" class="col-md-4 control-label">Wachtwoord</label>

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
																					<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Login onthouden
																			</label>
																	</div>
															</div>
													</div>


													<div class="form-group">
															<div class="col-md-8 col-md-offset-4">
																	<button type="submit" class="btn btn-primary">
																			Login
																	</button>

																	<button class="btn btn-secondary regi">
																			<a  href="{{ route('register') }}">Nog geen account? Registreer hier</a>
																	</button>
																	<br><br>
																	<a class="" href="{{ route('password.request') }}">Wachtwoord vergeten?
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
	                <a href="../../yourarticles">← Terug naar overzicht</a>
	            </div>
							<ul class="nav nav-tabs">
								@if(strtoupper($article->type) == 'TEXT')
								<li class="active">Artikel wijzigen</li>
								@endif
								@if(strtoupper($article->type) == 'TESTIMONIAL')
								<li class="active">Testimonial wijzigen</a></li>
								@endif
								@if(strtoupper($article->type) == 'VIDEO')
								<li class="active">Video wijzigen</li>
								@endif
							</ul>

							<div class="tab-content">
								@if(strtoupper($article->type) == 'TEXT')
								<div id="one" class="tab-pane fade in active">
									<br>
	                <div class="panel-content">
	                        {!! Form::open(array('files'=> true)) !!}

	                            <div class="form-group">
	                                {!! Form::label('title', 'Titel (max. 255 characters')  !!}
	                                {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('excerpt', 'Samenvatting') !!}
	                                {!! Form::text('excerpt', $article->excerpt, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('body', 'Inhoud') !!}
	                                {!! Form::textArea('body', $article->body, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::hidden('type', 'text') !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('link1', 'Hoofd afbeelding') !!}
	                                {!! Form::file('link1', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('link2', 'Sub-afbeelding') !!}
	                                {!! Form::file('link2', null, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">

	                                <button type="submit" class="btn btn-primary">
	                                    <i class="fa fa-plus"></i> Aanpassen
	                                </button>
	                                <a href="{{ url('/article/delete/' . $article->id) }}" >
												<div class="btn btn-default"><i class="fa fa-minus"></i> Verwijderen</button></a>
											</div>

	                            </div>
	                            {!! Form::close() !!}
	                </div>
								</div>
								@endif
								@if(strtoupper($article->type) == 'TESTIMONIAL')
								<div id="one" class="tab-pane fade in active">

									<br>
	                <div class="panel-content">
	                        {!! Form::open(array('files'=> true)) !!}

	                            <div class="form-group">
	                                {!! Form::label('title', 'Titel (max. 255 characters')  !!}
	                                {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('excerpt', 'Samenvatting') !!}
	                                {!! Form::text('excerpt', $article->excerpt, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::label('body', 'Inhoud') !!}
	                                {!! Form::textArea('body', $article->body, ['class' => 'form-control']) !!}
	                            </div>
	                            <div class="form-group">
	                                {!! Form::hidden('type', 'testimonial') !!}
	                            </div>

	                            <div class="form-group">
	                                {!! Form::label('link1', 'Video') !!}
	                                {!! Form::file('link1', null, ['class' => 'form-control']) !!}
	                            </div>

	                            <div class="form-group">

	                                <button type="submit" class="btn btn-primary">
	                                    <i class="fa fa-plus"></i> Aanpassen
	                                </button>
	                                <a href="{{ url('/article/delete/' . $article->id) }}" >
												<div class="btn btn-default"><i class="fa fa-minus"></i> Verwijderen</button></a>
											</div>
	                            </div>
	                            {!! Form::close() !!}
	                </div>

								</div>
								@endif
								@if(strtoupper($article->type) == 'VIDEO')
								<div id="one" class="tab-pane fade in active">

									<br>
					<div class="panel-content">
									{!! Form::open(array('files'=> true)) !!}

											<div class="form-group">
													{!! Form::label('title', 'Titel (max. 255 characters')  !!}
													{!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
											</div>
											<div class="form-group">
													{!! Form::label('excerpt', 'Samenvatting') !!}
													{!! Form::text('excerpt', $article->excerpt, ['class' => 'form-control']) !!}
											</div>
											<div class="form-group">
													{!! Form::label('body', 'Inhoud') !!}
													{!! Form::textArea('body', $article->body, ['class' => 'form-control']) !!}
											</div>
											<div class="form-group">
	                                {!! Form::hidden('type', 'video') !!}
	                            </div>

											<div class="form-group">
													{!! Form::label('link1', 'Video') !!}
													{!! Form::file('link1', null, ['class' => 'form-control']) !!}
											</div>

											<div class="form-group">

													<button type="submit" class="btn btn-primary">
															<i class="fa fa-plus"></i> Aanpassen
													</button>
											<a href="{{ url('/article/delete/' . $article->id) }}" >
												<div class="btn btn-default"><i class="fa fa-minus"></i> Verwijderen</button></a>
											</div>
											{!! Form::close() !!}
					</div>
				</div>
				@endif
			</div>



	    </div>
	    @endif

	</div>

@stop
