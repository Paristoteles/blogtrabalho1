@extends('templates.base')
@section('title', 'Blog')
@section('h1', 'Esse é o blog')

@section('content')
<div class="row">
    <div class="col">
        <p>Blog Viagens Incríveis</p>

        <a class="btn btn-primary" href="{{route('blog.inserir')}}" role="button">Cadastrar post</a>
    </div>
</div>

<div class="col">

</div>
@endsection
