@extends('layouts.main')

@section('title','HOME')

@section('content')
    <div class="flex-center position-ref">        
        <div class="content">
            <!--<div class="title m-b-md">
                Laravel
            </div>-->

            @if($noticias)
                <div class="noticias">
                    @foreach($noticias as $noticia)
                        <div class="noticia-box">
                            <h4>{{ $noticia->titulo }}</h4>
                            <p>{{ $noticia->descricao }}</p>
                            <a class="btn-noticia" href='{{ url("/noticias/show") }}/{{ $noticia->slug }}' title='{{ $noticia->titulo }}'>Acessar</a>
                        </div>
                    @endforeach
                </div>            
            @endif
        </div>
    </div>
@endsection