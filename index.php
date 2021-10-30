<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image resizing</title>
    <link rel="stylesheet" href="./assets/style.css">
    </head>

<body>


    <div class="container">
        <H1>Projeler</H1>
        <div class="projects">
            <?php
      for($i =1;$i<=5;$i++){
        if(file_exists("assets/"))
        $file=file_get_contents("assets/images/$i.jpg");
        $origPic=imagecreatefromstring($file);
        $width=imagesx($origPic);
        $height=imagesy($origPic);
        $thumbnailwidth=$width/10;
        $thumbnailheight=$height/10;
        $thumbnail=imagecreatetruecolor($thumbnailwidth,$thumbnailheight);
        imagecopyresampled($thumbnail,$origPic,0,0,0,0,$thumbnailwidth,$thumbnailheight,$width,$height);
        imagejpeg($thumbnail,"yeni$i.jpg");
        echo '<div class="project">
        <img src="yeni'.$i.'.jpg" alt="">
        </div>
        ';
        imagedestroy($origPic);
        imagedestroy($thumbnail);
      }
        ?>
        </div>
    </div>
</body>

</html>