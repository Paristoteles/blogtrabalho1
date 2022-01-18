@extends('templates.base')
@section('title', 'Inserir Post')
@section('h1', 'Inserir Post no blog')

@section('content')
<div class="row">
    <div class="col-4">

        <!--envio de arquivos -->
        <form method="post" action="{{ route('blog.gravar') }}">
            @csrf
            <!--titulo -->
                <label for="nome" class="form-label">Título</label>
                <input type="text" class="form-control" id="nome" name="titulo">
            </div>

            <!--descricao-->
                <label for="comentario" class="form-label">Descricao</label>
                <textarea class="form-control" id="comentario" name="descricao" rows="3"></textarea>
            </div>

           <!--imagem-->
            <div class="mb-3">
                <p>Associar imagem: <input type="file" name="imagem"></p>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-outline-dark">Salvar</button>
            </div>
        </form>

    </div>
</div>
