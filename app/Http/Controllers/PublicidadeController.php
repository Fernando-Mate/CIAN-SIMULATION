<?php

namespace App\Http\Controllers;

use App\Models\Publicidade;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PublicidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Publicidade = new Publicidade();
        $Publicidade->pub_location = $request->input('location');
        $Publicidade->pub_img = $request->file('img')->store('images\\');
        $Publicidade->pub_contact = $request->input('contact');
        $Publicidade->pub_title = $request->input('title');
        $Publicidade->pub_nivel = $request->input('desc');
        if (!$Publicidade->save()) {
            $addPublicidade['success'] = false;
            $addPublicidade['mensagem'] = 'Erro na submissão de publicidade.';
            return response()->json($addPublicidade, Response::HTTP_ACCEPTED);
        }
        $addPublicidade['success'] = true;
        $addPublicidade['mensagem'] = 'Pedido feito com sucesso.';
        return response()->json($addPublicidade, Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicidade  $publicidade
     * @return \Illuminate\Http\Response
     */
    public function show(Publicidade $publicidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicidade  $publicidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicidade $publicidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicidade  $publicidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicidade $publicidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicidade  $publicidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicidade $publicidade)
    {
        //
    }
}
