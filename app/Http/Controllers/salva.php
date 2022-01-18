<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // ordena os posts
        $posts = Blog::orderBy('created_at', 'desc')->get();

        return view('blog.index', ['posts' => $posts, 'pagina' => 'blog']);
    }

    public function criar()
    {
        // retorna view
        return view('blog.criar', ['pagina' => 'blog']);
    }

    public function loja(Request $form)
    {
    
        //salva imagem
        $imagemC = $form->file('imagem')->store('', 'imagens');
        $post = new Blog();
        $post->titulo = $form->titulo; 
        $post->descricao = $form->descricao;
        $post->imagem = $imagemCaminho;

        $post->save();

        return redirect()->route('blog');
    }

    public function mostrar(Blog $post)
    {
        //retorna a view com post
        return view('blog.mostrar', ['post' => $post, 'pagina' => 'blog']);
    }
