<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$usuarios = Usuario::all();
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
        /*$usuario = new Usuario;
        $usuario->nombre = $request->input('nombre');
        $usuario->save();*/

        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('POST', 'http://localhost/claseModelos/public/usuariosApi/store', [
            'form_params' => [
                'nombre' => $request->input('nombre'),
            ]
        ]);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        $message = $json->message;
        return redirect('usuarios/index')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$usuarios = Usuario::findOrFail($id);
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://localhost/claseModelos/public/usuariosApi/show/'.$id);
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
        //$usuario = Usuario::find($id);
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://localhost/claseModelos/public/usuariosApi/show/'.$id);
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
        $response = $client->request('PUT', 'http://localhost/claseModelos/public/usuariosApi/update/'.$id, [
            'form_params' => [
                'nombre' => $request->input('nombre'),
            ]
        ]);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        $message = $json->message;
        return redirect('usuarios/index')->with('message',$message);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$usuario = Usuario::find($id);
        $usuario->delete();*/
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('DELETE', 'http://localhost/claseModelos/public/usuariosApi/destroy/'.$id);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        $message = $json->message;
        return redirect('usuarios/index')->with('message',$message);
    }
}
