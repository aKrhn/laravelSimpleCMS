@extends('main')

@section('title', '| Edit Post')

@section('content')

<div class="row">
  {!! Form::model($post, ['route' => ['posts.update', $post->id ], 'method' => 'PATCH']) !!}
  <div class="col-md-8">
    {{ Form::text('title', null, ['class' => 'form-control']) }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
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
          {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
        </div>
        <div class="col-sm-6">
          {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
       </div>
      </div>
    </div>
  </div>
  {!! Form::close() !!}
</div>

@endsection
