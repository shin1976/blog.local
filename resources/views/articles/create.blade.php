@extends('layout')
@section('content')
  <h1>Write a New Article</h1>
  <hr />
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>
            {{ $error }}
          </li>
          @endforeach
      </ul>
    </div>
    @endif
  <!-- {!! Form::open(['url' => 'articles']) !!}
    <div class="form-group">
      {!! Form::label('title','Title:') !!}
      {!! Form::text('title',null,['class'=> 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('body','Body:') !!}
      {!! Form::textarea('body', null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
       {!! Form::label('published_at', 'Publish On:') !!}
       {!! Form::input('date', 'published_at',date('Y-m-d'),['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Add Article',['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!} -->

      <!-- {!! Form::open(['url' => 'articles']) !!} -->
      {!! Form::open(['route'=> 'articles.store']) !!}
      @include('articles.form', ['published_at' => date('Y-m-d'), 'submitButton' => 'add Article'])
    {!! Form::close() !!}

@endsection
