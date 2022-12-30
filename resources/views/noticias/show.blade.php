@extends('layouts.main')

@section('title','Notícia')

@section('content')
    <div class="flex-center position-ref">        
        <div class="content">
            @if($noticia)
                <div class="noticia-show">
                    <h2>{{ $noticia->titulo }}</h2>
                    <h4><i>Categoria: {{ $noticia->nome }}<i></h4>
                    <h4><i>{{ $noticia->descricao }}<i></h4>

                    <p>{{ $noticia->conteudo }}</p>            
                </div>            
            @endif
        </div>
    </div>
@endsection