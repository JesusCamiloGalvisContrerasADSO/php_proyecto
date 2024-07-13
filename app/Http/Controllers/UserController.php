<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // db($request->all());


        // $usuario = User::create($request->all());


        $usuario = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);

        return redirect()->route('editar.usuario',["id" => $usuario->id] );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
        $user = User::where("id",$id) -> first();
        return view("editarUsuario", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where("id",$id) -> first();
        $user->name = $request->name;

        $user->save();
        return redirect()->route("editar.usuario", ['id' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
