@extends('layouts.app')

@section('content')

<div class="container">
<div>
    <span class="fw-bold">title:</span>
    {{$post->title}}
</div>
<div>
    <span class="fw-bold">content:</span>
    {{$post->content}}
</div>
<div>
    <span class="fw-bold">slug:</span>
    {{$post->slug}}
</div>

<a href="{{route('admin.posts.index')}}" class="btn btn-prymary">back</a>

</div>


@endsection