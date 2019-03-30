@extends('layouts.master')

@section('content')
<div class="post">
    <h1>{{ $post->title }}</h1>

   <div class="col-12">
        {!! $post->body !!}
    </div>
</div>
@endsection
