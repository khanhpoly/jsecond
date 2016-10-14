<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Carbon\Carbon;
use \File;
use \Cache;
class Post extends Model
{
    protected $table='posts';
    protected $fillable=[
    'title',
    'description',
    'body',
    'images',
    'slug',
    'idcate',
    'created_at',
    ];
    public function imageLink(){
        return \URL::to($this->images);
    }

 public function link(){
        return \URL::to('posts/'.$this->slug);
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
