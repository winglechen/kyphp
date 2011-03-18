<?php
/*
   1.增加对图片类型的识别，实现输入类型和输出类型一致
   2.修改png专程jpeg后，背景变成黑色的问题
 */
function getImageInfo($pic)
{
    list($width,$height,$type)=getimagesize($pic);
    $mime_type= image_type_to_mime_type($type);
    $info=array();
    switch($mime_type)
    {
        case 'image/jpeg':
            $info[0]="imagecreatefromjpeg";
            $info[1]="imagejpeg";
            break;
        case 'image/gif':
            $info[0]="imagecreatefromgif";
            $info[1]="imagegif";
            break;
            case "image/png":
                $info[0]="imagecreatefrompng";
            $info[1]="imagepng";
            break;
        default:
            $info[0]="invildreader";
    }
    $info[2]=$width;
    $info[3]=$height;
    return $info;
}

function  rewriteImage($source_pic, $destination_pic, $max_width, $max_height)
{
    list($imgcreater,$imgmime,$width,$height)=getImageInfo($source_pic);    
    if($imgcreater == "invildreader")
        return false;

    $src = $imgcreater($source_pic);
    $x_ratio = $max_width / $width;
    $y_ratio = $max_height / $height;

    if( ($width <= $max_width) && ($height <= $max_height) ){
        $tn_width = $width;
        $tn_height = $height;
    }elseif (($x_ratio * $height) < $max_height){
        $tn_height = ceil($x_ratio * $height);
        $tn_width = $max_width;
    }else{
        $tn_width = ceil($y_ratio * $width);
        $tn_height = $max_height;
    }

    if($imgmime=="imagepng"){
        $tmp=imagecreate($tn_width,$tn_height);
    }
    else{
        $tmp=imagecreatetruecolor($tn_width,$tn_height);
    }
    imagecopyresampled($tmp,$src,0,0,0,0,$tn_width, $tn_height,$width,$height);
    if($imgmime=="imagepng"){
        imagepng($tmp,$destination_pic,9);
    }
    else{
        $imgmime($tmp,$destination_pic,100);
    }
    imagedestroy($src);
    imagedestroy($tmp);
}

#demo sample

$src=$argv[1];
$dst=$argv[2];

rewriteImage($src,$dst,321,69);
echo "done";
