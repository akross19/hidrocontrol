<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://hidrocontrol-api.atwebpages.com/usuario/');
        $response = $request->getBody()->getContents();        
        $usuarios = json_decode($response);
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('POST', 'http://hidrocontrol-api.atwebpages.com/usuario/', [
            'json' => [
                'tipoUsuario' => $request->input('tipoUsuario'),
                'usuario' => $request->input('usuario'),
                'contrasena' => $request->input('contrasena'),
            ]
        ]);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        $message = $json->message;
        return redirect('usuarios/index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://hidrocontrol-api.atwebpages.com/usuario/'.$id);
        $response = $request->getBody()->getContents();
        $usuario = json_decode($response);
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://hidrocontrol-api.atwebpages.com/usuario/'.$id);
        $response = $request->getBody()->getContents();
        $usuario = json_decode($response);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('PUT', 'http://hidrocontrol-api.atwebpages.com/usuario/'.$id, [
            'json' => [
                'tipoUsuario' => $request->input('tipoUsuario'),
                'usuario' => $request->input('usuario'),
                'contrasena' => $request->input('contrasena'),
                'estado' => $request->input('estado'),
            ]
        ]);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        $message = $json->message;
        return redirect('usuarios/index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('DELETE', 'http://hidrocontrol-api.atwebpages.com/usuario/'.$id);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        $message = $json->message;
        return redirect('usuarios/index')->with('message', $message);
    }
}
