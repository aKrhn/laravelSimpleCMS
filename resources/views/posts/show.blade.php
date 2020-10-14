@extends('main')

@section('title', '| Show Post')

@section('content')
<div class="row">
  <div class="col-md-8">
    <h1>{{ $post -> title }}</h1>
    <p class="lead">{{ $post -> body }}</p>
  </div>

  <div class="col-md-4">
    <div class="well">
      <dl class="dl-horizantal">
        <dt>Created:</dt>
        <dd>{{ $post -> created_at }}</dd>
      </dl>
      <dl class="dl-horizantal">
        <dt>Last Updated:</dt>
        <dd>{{ $post -> updated_at }}</dd>
      </dl>
      <hr>
      <div class="row">
        <div class="col-sm-6">
          {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
        </div>
        <div class="col-sm-6">
          {!! Form::open(['route' => ['posts.destroy', $post -> id], 'method' => 'DELETE']) !!}
          {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
