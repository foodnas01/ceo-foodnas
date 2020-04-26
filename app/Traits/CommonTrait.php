<?php

namespace App\Traits;
use DB;
use File;

trait CommonTrait
{
    
    public function uploadImage($image,$imagePath,$oldImage)
    {
        if(!empty($oldImage)){
            $oldImage = public_path($imagePath.'/'.$oldImage);
            File::delete($oldImage);
        }
        $name = time().'.'.$image->getClientOriginalExtension();
        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0777, true);
        }
        $destinationPath = public_path($imagePath);
        $image->move($destinationPath, $name);
        return $name;


    }

    public function deleteImage($imagePath,$oldImage){
        if(!empty($oldImage)){
            $oldImage = public_path($imagePath.'/'.$oldImage);
            File::delete($oldImage);
        }
    }

    public function isAdmin($userid){
        $users = DB::table('model_has_roles')
            ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->select('model_has_roles.*')
            ->where('model_has_roles.model_id',$userid)
            ->first();

            if($users->role_id == 1){
                return true;
            }else{
                return false;
            }
    }   

    
}
