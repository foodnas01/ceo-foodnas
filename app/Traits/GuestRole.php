<?php

namespace App\Traits;
use DB;
trait GuestRole
{
    
    public function getPermissions()
    {

    	$permissionArray = ['role-list','product-list'];
        $query = DB::table('permissions')->whereIn('name', $permissionArray)->pluck('id')->toArray();
        return $query;
		//dd($query->toSql(), $query->getBindings());

    }

    public function getRole($roleName='Guest'){
    	$query = DB::table('roles')->where('name',$roleName)->first();
    	return $query;
    }
}
