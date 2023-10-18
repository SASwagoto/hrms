<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
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
        $roles = Role::all();
        $users = User::all();
        return view('settings.role.role', compact('roles','users'));
    }

    public function add_role()
    {
        $roles = Role::all();
        return view('settings.role.add_role', compact('roles'));
    }

    public function create_role(Request $request){
        

        Role::create(['name' => $request->role_name]);

        return redirect()->route('roles.add');

    }

    public function add_permission()
    {
        $permissions = Permission::all();
        return view('settings.role.add_permission', compact('permissions'));
    }

    public function create_permission(Request $request){
        

        Permission::create(['name' => $request->permission_name]);

        return redirect()->route('permission.add');

    }

    public function assign_permission()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('settings.role.access', compact('roles', 'permissions'));
    }

    public function create_assign_permission(Request $request)
    {
        $role = Role::find($request->role_id);
        $permissions = $request->permission;
        foreach($permissions as $permission)
        {
            $role->givePermissionTo($permission);
        }
        return redirect()->route('permission.assign');
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}