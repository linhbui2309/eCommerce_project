<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Roles;



class RoleController extends Controller
{
   public function index(){
    $roles = Role::all();
    return view('backend.role-permission.role.index',['roles' => $roles]);
   }
   public function create(){
    return view('backend.role-permission.role.create');

   }
   public function store(Request $request){
    
    $request->validate([
        'name'=> [
            'required',
            'string',
            'unique:roles,name'
        ]
        ]);
        Role::create(['name' => $request->name]);
        return redirect('roles')->with('status','Role created successfully');


   }
   public function edit(Role $role){
   

    return view('backend.role-permission.role.edit',['role'=>$role]);
   }
   public function update(Request $request, Role $role){
    $request->validate([
        'name'=> [
            'required',
            'string',
            'unique:roles,name,'.$role->id
        ]
        ]);
        $role->update(['name' => $request->name]);
        return redirect('roles')->with('status','Role updated successfully');


   }
   public function destroy($roleId){
   $role = Role::find($roleId);
    $role->delete();
    return redirect('roles')->with('status','Role deleted successfully');

   }
   public function addPermissionToRole($roleId){
    $permissions = Permission::all(); 
    $role = Role::findOrFail($roleId);
    $roles = new Roles();
    $rolePermissions = $roles->getRolePermissions($roleId);
    

    

    return view('backend.role-permission.role.add-permission', ['role' => $role, 'permissions' => $permissions, 'rolePermissions'=> $rolePermissions]);
   }

   public function givePermissionToRole(Request $request, $roleId){
    $request->validate([
        'permission' => 'required'
    ]);

    $role = Role::findOrFail($roleId);
    $role->syncPermissions($request->permission);

    return redirect()->back()->with('status','Permissions added to role');


   }
   
}
