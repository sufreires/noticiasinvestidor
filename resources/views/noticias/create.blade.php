@extends('layouts.main')

@section('title','Cadastrar Notícia')

@section('content')

<div class="flex-center position-ref">        
        <div class="content">

            <h3>Nova Notícia</h3>
            
            <form action='{{ url("/noticias/salvar") }}' method="post" id="cadastros">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @csrf
                <div class="row">
                    <label class="form-label">Título</label>
                    <input type="text" name="titulo" id="titulo" placeholder="Título" maxlength="100">
                </div>

                <div class="row">
                    <label class="form-label">Descrição</label>
                    <textarea name="descricao" id="descricao" cols="30" rows="5" placeholder="Descrição" maxlength="255"></textarea>
                </div>

                <div class="row">
                    <label class="form-label">Conteúdo</label>
                    <textarea name="conteudo" id="conteudo" cols="30" rows="10" placeholder="Conteúdo"></textarea>
                </div>

                <div class="row">
                    <label class="form-label">Categoria</label>
                    <select name="id_categoria" id="id_categoria">
                    @foreach($categorias as $categoria)                    
                        <option value='{{$categoria->id}}'>{{$categoria->nome}}</option>                    
                    @endforeach
                    </select>
                </div>


                <div class="row">
                    <label class="form-label">Publicado</label>
                    <select name="publicado" id="publicado">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>

                <button type="submit" class="btn-salvar">Salvar</button>

            </form>

        </div>
</div>

@endsection