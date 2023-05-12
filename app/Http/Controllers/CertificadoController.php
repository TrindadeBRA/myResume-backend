<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $certificados = Certificado::where('user_id', $user_id)->get();
        return view('certificado.index', ['certificados' => $certificados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('certificado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $dados["user_id"] = auth()->user()->id;
        $certificado = Certificado::create($dados);
        return redirect()->route('certificado.show', [$certificado->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificado $certificado)
    {
        return view('certificado.show', ["certificado" => $certificado]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificado $certificado)
    {
        $user_id = auth()->user()->id;
        if($certificado->user_id == $user_id){
            return view('certificado.edit', ["certificado" => $certificado]);
        } else {
            return view('certificado.acesso-negado');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificado $certificado)
    {
        $user_id = auth()->user()->id;
        if($certificado->user_id == $user_id){
            $certificado->update($request->all());
            return redirect()->route('certificado.show', ['certificado' => $certificado->id]);
        } else {
            return view('certificado.acesso-negado');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificado $certificado)
    {
        $user_id = auth()->user()->id;
        if($certificado->user_id == $user_id){
            $certificado->delete();
            $certificados = Certificado::where('user_id', $user_id)->get();
            return view('certificado.index', ['certificados' => $certificados]);
        } else {
            return view('certificado.acesso-negado');
        }
    }
}
