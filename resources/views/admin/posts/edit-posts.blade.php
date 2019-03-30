@extends('layouts.master')

@section('title')
Edit '{{ $post->title }}' 
@endsection

@section('content')
<h1>{{ $post->title }}</h1>
<form method="POST" action="/posts/{{ $post->id }}" class="form">
    @csrf
    {{ method_field('PATCH') }}

    <div class="form-group">
    <label class="form-label" for="form__title">Edit Title</label>
    <input type="text" id="form__title" name="title" placeholder="{{ $post->title }}" value="{{ $post->title }}" />
    </div>

    <div class="form-group">
        <label class="form-label form-textarea" for="form__body">Blog Post</label>
        <textarea class="form-input editor" id="form__body" name="body" rows="8">
            {{ $post->body }}
        </textarea>
    </div>

    <button class="btn" type="submit">Save</button>
</form>
@endsection

@section('scripts')
    @parent
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
    <script>
        tinymce.init({ 
            selector: ".editor",
            plugins: [ 'quickbars' ],
            toolbar: true,
            menubar: false,
            inline: false
        });
    </script>
@endsection
