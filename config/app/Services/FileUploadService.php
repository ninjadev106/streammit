<?php

namespace App\Services;

use App\Traits\UploadFileTrait;

class FileUploadService extends BaseService
{
    use UploadFileTrait;

	public function __construct()
	{
	
	}

    public function uploadImage($image, $prefix = '')
    {
        $folder = '/uploads/images/';
        $name = $prefix.time();
        $filePath = $folder.$name.'.'.$image->getClientOriginalExtension();
        
        return $this->uploadOne($image, $folder, 'store', $name);
    }
    public function uploadVideo($video)
    {
        $folder = '/uploads/videos/';
        $name = time();
        $filePath = $folder.$name.'.'.$video->getClientOriginalExtension();
        
        return $this->uploadOne($video, $folder, 'store', $name);
    }
}
