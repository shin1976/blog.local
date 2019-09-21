@extends('layout')
@section('content')
  <h1>Articles</h1>
  <hr />
  <a href="{{ route('articles.create') }}" class="btn btn-primary float-right">新規作成</a>
  @foreach($articles as $article)
    <article>
      <h2>
        <a href="{{ url('articles', $article->id) }}">
          {{ $article->title }}
        </a>
      </h2>
    </article>
    @endforeach
    @if(Auth::check())
  <script>
    document.getElementById('logout').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
  </script>
@endif
@endsection
