<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
   protected $table='pages';
   protected $fillable=[
    'title',
    'descrition',
    'body',
    'images',
    'slug',
    
   ];
   public function link(){
   	return \URL::to('pages/'.$this->slug);
   }
   public function imagelink(){
   	   return \URL::to($this->images);
   }
   /**
     * Upload ảnh và set cho Bài viết
     * @param UploadedFile $uploadedFile
     *
     * @return bool
     */
    public function setImage(UploadedFile $uploadedFile){


        $currenImage = public_path($this->images);

        $timeNow = Carbon::now();

        $fileExt = $uploadedFile->getClientOriginalExtension();
        $fileName = $timeNow->timestamp."-".str_slug($this->title).".".$fileExt;


        if(!File::isDirectory(public_path('uploads'))){
            File::makeDirectory(public_path('uploads'));
        }

        if(!File::isDirectory(public_path('uploads'))){
            File::makeDirectory(public_path('uploads'));
        }

        $uploadedFile->move(public_path('uploads'),$fileName);

        if(File::isFile($currenImage)){
            File::delete($currenImage);
        }

        $this->images = 'uploads/'.$fileName;
        $this->save();
        return true;
    }
}
