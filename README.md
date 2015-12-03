# php-image-comparison
Compare two pictures and find out if they are equal.
Supported files: ".png",".jpg","wbmp","webp","xbm","xpm".
Usage:
$firstImage = "image1.png";
$secondImage = "image2.png";
$comparison = imageComparison($firstImage,$secondImage);
if( $comparison === false ){
    echo "The two images are different!";
}else{
    echo "The two images are the same!";
}

visit: http://www.giuseppemorra.com
