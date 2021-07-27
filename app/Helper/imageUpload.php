<?php
namespace App\Helper;
use File;
use Image;
class imageUpload
{
 static function singleUpload($name,$directory,$file)
 {
     $rand = $name;
     $dir = 'images/'.$directory.'/'.$rand;
     $dirlarge = $dir.'/large';
     if (!empty($file))
     {
         if (!File::exists($dir))
         {
             File::makeDirectory($dir,0755,true);
         }
         if (!File::exists($dirlarge))
         {
             File::makeDirectory($dirlarge,0755,true);
         }

         $filename = rand(1,90000).'.'.$file->getClientOriginalExtension();
         $path = public_path($dir.'/'.$filename);
         $path2 = public_path($dirlarge.'/'.$filename);

         Image::make($file->getRealPath())->save($path2);
         Image::make($file->getRealPath())->resize(250,250)->save($path);

         return $dir."/".$filename;


     }
     else
     {
      return "";
     }
 }

    static function singleUploadUpdate($name,$directory,$file,$data,$field)
    {
        $rand = $name;
        $dir = 'images/'.$directory.'/'.$rand;
        $dirlarge = $dir.'/large';
        if (!empty($file))
        {
            if (!File::exists($dir))
            {
                File::makeDirectory($dir,0755,true);
            }
            if (!File::exists($dirlarge))
            {
                File::makeDirectory($dirlarge,0755,true);
            }

            File::delete('public/'.$data[0]['field']);
            $filename = rand(1,90000).'.'.$file->getClientOriginalExtension();
            $path = public_path($dir.'/'.$filename);
            $path2 = public_path($dirlarge.'/'.$filename);

            Image::make($file->getRealPath())->save($path2);
            Image::make($file->getRealPath())->resize(250,250)->save($path);

            return $dir."/".$filename;


        }
        else
        {
            return $data[0][$field];
        }
    }
}
