<?php
	
	
	// Created By Giuseppe Morra
	// visit http://www.giuseppemorra.com
	// ImageComparison v0.2
	
	
	function imageComparison($firstImage,$secondImage){
		$firstImageInfo = pathinfo($firstImage);//first image info
		switch( $firstImageInfo['extension'] ){ //switch image extension
			case "jpg":
				$image = imagecreatefromjpeg($firstImage);
				break;
			case "jpeg":
				$image1 = imagecreatefromjpeg($secondImage);
				break;
			case "png":
				$image = imagecreatefrompng($firstImage);
				break;
			case "wbmp":
				$image = imagecreatefromwbmp($firstImage);
				break;
			case "webp":
				$image = imagecreatefromwebp($firstImage);
				break;
			case "xbm":
				$image = imagecreatefromxbm($firstImage);
				break;
			case "xpm":
				$image = imagecreatefromxpm($firstImage);
				break;
		}
		if( !isset($image) ){ //error: not find extension
			return false;
		}
		$width = imagesx($image); //image width
		$height = imagesy($image); //image height
		$color = array(); //array color pixel
		for( $a = 1; $a <= $width; $a++ ){
			for( $b = 1; $b <= $height; $b++ ){
				$color[] = imagecolorat($image, $a, $b);
			}
		}
		$firstComparison = $color;//first image
		$secondImageInfo = pathinfo($secondImage);
		switch( $secondImageInfo['extension'] ){
			case "jpg":
				$image1 = imagecreatefromjpeg($secondImage);
				break;
			case "jpeg":
				$image1 = imagecreatefromjpeg($secondImage);
				break;
			case "png":
				$image1 = imagecreatefrompng($secondImage);
				break;
			case "wbmp":
				$image1 = imagecreatefromwbmp($secondImage);
				break;
			case "webp":
				$image1 = imagecreatefromwebp($secondImage);
				break;
			case "xbm":
				$image1 = imagecreatefromxbm($secondImage);
				break;
			case "xpm":
				$image1 = imagecreatefromxpm($secondImage);
				break;
		}
		if( !isset($image1) ){
			return false;
		}
		$width = imagesx($image1);
		$height = imagesy($image1);
		$color1 = array();
		for( $a = 1; $a <= $width; $a++ ){
			for( $b = 1; $b <= $height; $b++ ){
				$color1[] = imagecolorat($image1, $a, $b);
			}
		}
		$secondComparison = $color1;//second image
		$comparison = count($firstComparison);
		for( $x = 0; $x <= $comparison; $x++ ){
			if( $firstComparison[$x] !== $secondComparison[$x] ){
				return false;
			}
		}
	}
	
	
?>