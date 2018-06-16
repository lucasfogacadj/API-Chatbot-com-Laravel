<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabalho;

class TrabalhoController extends Controller
{
    public function __construct(){
        header('Access-Control-Allow-Origin: *');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabalho = Trabalho::all();
        return response()->json($trabalho);
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
        $dados=$request->all();
        $trabalho = Trabalho::create($dados);
        if($trabalho){
            return response()->json($trabalho);
        }else{
            return response()->json(['data'=>'erro ao criar o trabalho', 'status'=>false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trabalho = Trabalho::find($id);
        if($trabalho){
            return response()->json($trabalho);
        }else{
            return false;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $trabalho = Trabalho::find($id);
        $dados = $request->all();
        if($trabalho){
            $trabalho->update($dados);
            return response()->json($trabalho);
        }else{
            return false;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trabalho = Trabalho::find($id);
        if($trabalho){
            $trabalho->delete();
            return response()->json($trabalho);
        }else{
            return false;
        }
    }
}
