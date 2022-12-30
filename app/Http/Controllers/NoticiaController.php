<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Noticia;
Use App\Categoria;

class NoticiaController extends Controller
{

    //
    public function index(){

        $noticias = Noticia::orderByDesc('created_at')->get();

        return view('noticias.index',[
            'noticias' => $noticias]
        );

    }

    public function show($slug){
        
        $noticia = Noticia::leftJoin('categorias', 'noticias.id_categoria', '=', 'categorias.id')
        ->select('noticias.*', 'categorias.nome')
        ->where('slug',$slug)->first();

        return view('noticias.show',[
            'noticia' => $noticia]
        );

    }

    public function create(){
        
        $categorias = Categoria::all();

        return view('noticias.create',[
            'categorias' => $categorias
        ]);

    }

    public function store(Request $request){
        
        $validated = $request->validate([
            'titulo' => 'required|max:100',
            'descricao' => 'required|max:255',
            'conteudo' => 'required',
            'id_categoria' => 'required',
            'publicado' => 'required',
        ]);

        if($validated){
            $data = $request->all();
            $data['slug'] = $request->titulo.'-'.rand();
            Noticia::create($data);
        }

        return redirect()->route('noticias.index');
    }

    public function search(Request $request){
        
        if($request->search != ''){
            
            $noticias = Noticia::leftJoin('categorias', 'noticias.id_categoria', '=', 'categorias.id')
            ->select('noticias.*', 'categorias.nome')
            ->where('titulo', 'like', '%' . $request->search . '%')
            ->orWhere('nome', 'like', '%' . $request->search . '%')            
            ->get();

        }else{

            $noticias = Noticia::orderByDesc('created_at')->get();

        }
        
        return view('noticias.index',[
            'noticias' => $noticias]
        );
    }

}
