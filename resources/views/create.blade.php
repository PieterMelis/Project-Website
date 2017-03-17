@extends('layouts.app')


@section('content')
	@if (Auth::guest())
        <h2><a href="/Project-Web-Git/public/home">Log in first!</h2>
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
                
                <a href="/project-web-git/public">← back to overview</a>

            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading">Add article</div>

                <div class="panel-content">               
                        {!! Form::open() !!}

                            <div class="form-group">
                                {!! Form::label('title', 'Title (max. 255 characters')  !!}
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('excerpt', 'Excerpt') !!}
                                {!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('body', 'Body') !!}
                                {!! Form::textArea('body', null, ['class' => 'form-control']) !!}
                            </div>  
                            <div class="form-group">
                                {!! Form::label('type', 'Type') !!}
                                {!! Form::text('type', null, ['class' => 'form-control']) !!}
                            </div>     
                            <div class="form-group">
                                {!! Form::label('link1', 'upload 1') !!}
                                {!! Form::text('link1', null, ['class' => 'form-control']) !!}
                            </div>  
                            <div class="form-group">
                                {!! Form::label('link2', 'upload 2') !!}
                                {!! Form::text('link2', null, ['class' => 'form-control']) !!}
                            </div>  
                            <div class="form-group"> 
                                                                                        
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> Add Article
                                </button>

                            </div>
                            
                            {!! Form::close() !!}            
                </div>
            </div>

        </div>
    </div>
    @endif

@stop