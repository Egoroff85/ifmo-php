<?php
namespace Best\Shop\Models;

use Web\Engine\DB;

class UploadModel {

    const ERR = 'error';
    const TOO_BIG = 'Filesize is too big';    
    const UPLOAD_COMPLETE = 'Upload complete';
    const WRONG_FORMAT = 'File format is not allowed';

    function uploadAvatar($file)
    {
        return $this->imageUpload($file, "../public/static/upload/");
    }

    function uploadGoodsImage($file)
    {
        return $this->imageUpload($file, "../public/static/images/");
    }  
    
    function imageUpload($path, $upload_path){
        $name= $path["file"]["name"];
        $type= $path["file"]["type"];
        $size= $path["file"]["size"];
        $temp= $path["file"]["tmp_name"];
        $error= $path["file"]["error"];

        if ($error > 0){
            return self::ERR;
        } else {
            if($type === "image/jpeg" || $type === "image/png"){
                if($size > 2097152){
                    return self::TOO_BIG;
                } else {
                    move_uploaded_file($temp, $upload_path.$name);
                    return self::UPLOAD_COMPLETE;
                }
            } else {
                return self::WRONG_FORMAT;
            }
        }
    }
}
?>