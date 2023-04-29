<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RolapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return $roles; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Role::create($request->only('name'));
        $role->syncPermissions($request->input('permission',[]));
        return $role;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role=Role::find($id);
        return $role;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role=Role::find($id);
        $role->update($request->only('name'));
        $role->permissions()->sync($request->input('permission',[]));
        return $role; 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rol=Role::find($id);
        $rol->delete();
        return ['Rol Eliminado'];


    }
}
