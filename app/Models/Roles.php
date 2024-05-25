<?php

namespace App\Models;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Roles extends Model
{
    use HasFactory;
    function getRolePermissions($roleId){
   
    $role = Role::findOrFail($roleId);
   
    $rolePermissionsList = DB::table('role_has_permissions')
    ->where('role_has_permissions.permission_id', $role->id)
    ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
    ->all();
    return $rolePermissionsList;
    }
    
}
