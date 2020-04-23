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

    
}
