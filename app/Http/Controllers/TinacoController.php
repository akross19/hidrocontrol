<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tinaco;

class TinacoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://hidrocontrol-api.atwebpages.com/tinaco/');
        $response = $request->getBody()->getContents();        
        $tinacos = json_decode($response);
        return view('tinacos.index', compact('tinacos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tinacos.create');
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
        $response = $client->request('POST', 'http://hidrocontrol-api.atwebpages.com/tinaco/', [
            'json' => [
                'cantidadAgua' => $request->input('cantidadAgua'),
            ]
        ]);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        $message = $json->message;
        return redirect('tinacos/index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $request = $client->get('http://hidrocontrol-api.atwebpages.com/tinaco/'.$id);
        $response = $request->getBody()->getContents();
        $tinaco = json_decode($response);
        return view('tinacos.edit', compact('tinaco'));
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
        $response = $client->request('PUT', 'http://hidrocontrol-api.atwebpages.com/tinaco/'.$id, [
            'json' => [
                'cantidadAgua' => $request->input('cantidadAgua'),
            ]
        ]);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        $message = $json->message;
        return redirect('tinacos/index')->with('message', $message);
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
        $response = $client->request('DELETE', 'http://hidrocontrol-api.atwebpages.com/tinaco/'.$id);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        $message = $json->message;
        return redirect('tinacos/index')->with('message', $message);
    }
}
