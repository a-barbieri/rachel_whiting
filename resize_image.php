<?php

/*	IMAGE RESIZE SETTINGS
 *	--------------------------------------------------------
 *	http://net.tutsplus.com/tutorials/php/image-resizing-made-easy-with-php/
 */

Class resize
{
	// *** Class variables
	private $image;
    private $width;
    private $height;
	private $imageResized;

	function __construct($fileName)
	{
		// *** Open up the file
		$this->image = $this->openImage($fileName);

	    // *** Get width and height
	    $this->width  = imagesx($this->image);
	    $this->height = imagesy($this->image);
	}

	## --------------------------------------------------------

	private function openImage($file)
	{
		// *** Get extension
		$extension = strtolower(strrchr($file, '.'));

		switch($extension)
		{
			case '.jpg':
			case '.jpeg':
				$img = @imagecreatefromjpeg($file);
				break;
			case '.gif':
				$img = @imagecreatefromgif($file);
				break;
			case '.png':
				$img = @imagecreatefrompng($file);
				break;
			default:
				$img = false;
				break;
		}
		return $img;
	}

	## --------------------------------------------------------

	public function resizeImage($newWidth, $newHeight, $option="auto")
	{
		// *** Get optimal width and height - based on $option
		$optionArray = $this->getDimensions($newWidth, $newHeight, $option);

		$optimalWidth  = $optionArray['optimalWidth'];
		$optimalHeight = $optionArray['optimalHeight'];


		// *** Resample - create image canvas of x, y size
		$this->imageResized = imagecreatetruecolor($optimalWidth, $optimalHeight);
		imagecopyresampled($this->imageResized, $this->image, 0, 0, 0, 0, $optimalWidth, $optimalHeight, $this->width, $this->height);


		// *** if option is 'crop', then crop too
		if ($option == 'crop') {
			$this->crop($optimalWidth, $optimalHeight, $newWidth, $newHeight);
		}
	}

	## --------------------------------------------------------

	private function getDimensions($newWidth, $newHeight, $option)
	{

	   switch ($option)
		{
			case 'exact':
				$optimalWidth = $newWidth;
				$optimalHeight= $newHeight;
				break;
			case 'portrait':
				$optimalWidth = $this->getSizeByFixedHeight($newHeight);
				$optimalHeight= $newHeight;
				break;
			case 'landscape':
				$optimalWidth = $newWidth;
				$optimalHeight= $this->getSizeByFixedWidth($newWidth);
				break;
			case 'auto':
				$optionArray = $this->getSizeByAuto($newWidth, $newHeight);
				$optimalWidth = $optionArray['optimalWidth'];
				$optimalHeight = $optionArray['optimalHeight'];
				break;
			case 'crop':
				$optionArray = $this->getOptimalCrop($newWidth, $newHeight);
				$optimalWidth = $optionArray['optimalWidth'];
				$optimalHeight = $optionArray['optimalHeight'];
				break;
		}
		return array('optimalWidth' => $optimalWidth, 'optimalHeight' => $optimalHeight);
	}

	## --------------------------------------------------------

	private function getSizeByFixedHeight($newHeight)
	{
		$ratio = $this->width / $this->height;
		$newWidth = $newHeight * $ratio;
		return $newWidth;
	}

	private function getSizeByFixedWidth($newWidth)
	{
		$ratio = $this->height / $this->width;
		$newHeight = $newWidth * $ratio;
		return $newHeight;
	}

	private function getSizeByAuto($newWidth, $newHeight)
	{
		if ($this->height < $this->width)
		// *** Image to be resized is wider (landscape)
		{
			$optimalWidth = $newWidth;
			$optimalHeight= $this->getSizeByFixedWidth($newWidth);
		}
		elseif ($this->height > $this->width)
		// *** Image to be resized is taller (portrait)
		{
			$optimalWidth = $this->getSizeByFixedHeight($newHeight);
			$optimalHeight= $newHeight;
		}
		else
		// *** Image to be resizerd is a square
		{
			if ($newHeight < $newWidth) {
				$optimalWidth = $newWidth;
				$optimalHeight= $this->getSizeByFixedWidth($newWidth);
			} else if ($newHeight > $newWidth) {
				$optimalWidth = $this->getSizeByFixedHeight($newHeight);
				$optimalHeight= $newHeight;
			} else {
				// *** Sqaure being resized to a square
				$optimalWidth = $newWidth;
				$optimalHeight= $newHeight;
			}
		}

		return array('optimalWidth' => $optimalWidth, 'optimalHeight' => $optimalHeight);
	}

	## --------------------------------------------------------

	private function getOptimalCrop($newWidth, $newHeight)
	{

		$heightRatio = $this->height / $newHeight;
		$widthRatio  = $this->width /  $newWidth;

		if ($heightRatio < $widthRatio) {
			$optimalRatio = $heightRatio;
		} else {
			$optimalRatio = $widthRatio;
		}

		$optimalHeight = $this->height / $optimalRatio;
		$optimalWidth  = $this->width  / $optimalRatio;

		return array('optimalWidth' => $optimalWidth, 'optimalHeight' => $optimalHeight);
	}

	## --------------------------------------------------------

	private function crop($optimalWidth, $optimalHeight, $newWidth, $newHeight)
	{
		// *** Find center - this will be used for the crop
		$cropStartX = ( $optimalWidth / 2) - ( $newWidth /2 );
		$cropStartY = ( $optimalHeight/ 2) - ( $newHeight/2 );

		$crop = $this->imageResized;
		//imagedestroy($this->imageResized);

		// *** Now crop from center to exact requested size
		$this->imageResized = imagecreatetruecolor($newWidth , $newHeight);
		imagecopyresampled($this->imageResized, $crop , 0, 0, $cropStartX, $cropStartY, $newWidth, $newHeight , $newWidth, $newHeight);
	}

	## --------------------------------------------------------

	public function saveImage($savePath, $imageQuality="100")
	{
		// *** Get extension
		$extension = strrchr($savePath, '.');
			$extension = strtolower($extension);

		switch($extension)
		{
			case '.jpg':
			case '.jpeg':
				if (imagetypes() & IMG_JPG) {
					imagejpeg($this->imageResized, $savePath, $imageQuality);
				}
				break;

			case '.gif':
				if (imagetypes() & IMG_GIF) {
					imagegif($this->imageResized, $savePath);
				}
				break;

			case '.png':
				// *** Scale quality from 0-100 to 0-9
				$scaleQuality = round(($imageQuality/100) * 9);

				// *** Invert quality setting as 0 is best, not 9
				$invertScaleQuality = 9 - $scaleQuality;

				if (imagetypes() & IMG_PNG) {
					 imagepng($this->imageResized, $savePath, $invertScaleQuality);
				}
				break;

			// ... etc

			default:
				// *** No extension - No save.
				break;
		}

		imagedestroy($this->imageResized);
	}
}



/*	IMAGE LOADER
/*	---------------------------------------------------------------------- */

	// Create an array with all files in this directory
	$directories = array(
		'./content/1.commissioned-photography',
		'./content/2.tear-sheets',
		'./content/3.personal-photography',
		'./content/index'
		);

	// For each directory check if small/medium size exists and, if not, create it
	foreach ($directories as $dir) {

		$scandir = scandir($dir);

		/*	check whats in directories
		/*	---------------------------------------------------------------------- */

		foreach ($scandir as $file) {

			// $file_name = stristr($file, '.', true); // works only with PHP 5.3
			$file_explode = explode('.', $file, 2); // works with any PHP
			$file_name = $file_explode[0];
			$extension = stristr($file, '.');

			// if it's an image
			if ( $extension == '.jpg' || $extension == '.jpeg' || $extension == '.png' ) {

				// if this file is small
				// if (stristr($file_name, 'sml')){
				if ( preg_match( '/_sml/', $file_name) ) {

					// store sml $file_name in a $sml array
					$sml_file_name = explode('_', $file_name, 2); // works with any PHP
					$smlsize[] = $sml_file_name[0];


				// if this file is medium
				} elseif ( preg_match( '/_med/', $file_name ) ){

					// store med file_name in a $med array
					$med_file_name = explode('_', $file_name, 2); // works with any PHP
					$medsize[] = $med_file_name[0];

				// if it's a normal file
				} else {

					// store full file_name in a $fullsize array
					$fullsize[] = $file_name;
				}


			}

		}

		/*	create a list of files that need a small or medium version
		/*	---------------------------------------------------------------------- */

		/*** SMALL FILE to-do list ***/
		$todo_sml = array_diff( $fullsize, $smlsize);
		/*** MEDIUM FILE to-do list ***/
		$todo_med = array_diff( $fullsize, $medsize);

		/*
		// just for developer: var_dump() $todo_sml and $todo_med to check them
		echo '<br /><br />' . $dir . '<br /><br />$todo_med <br />';
		echo '<pre>';
		var_dump($todo_med);
		echo '</pre>';
		echo '<br />$medsize<br />';
		echo '<pre>';
		var_dump($medsize);
		echo '</pre>';
		echo '<br /><br />$fullsize<br />';
		echo '<pre>';
		var_dump($fullsize);
		echo '</pre>';
		*/


		/*	if there is anything into the to-do lists do the to-do!
		/*	---------------------------------------------------------------------- */

		// if small size doesn't exist create it
		foreach ( $scandir as $file ) {

			$file_explode = explode('.', $file, 2);
			$file_name = $file_explode[0];
			$extension = stristr($file, '.');

			// consider just full size
			if ( !preg_match( '/_sml|_med/', $file_name) ) {

				// if full size is into $todo_sml do a small version
				if ( in_array( $file_name, $todo_sml ) ) {

					// *** 1) Initialize / load image
					$resizeObj = new resize($dir . '/' . $file);

					// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
					$resizeObj -> resizeImage( 155, '', 'landscape');

					// *** 3) Save image
					$resizeObj -> saveImage($dir . '/' . $file_name . '_sml' . $extension, 90);
				}

				// if full size is into $todo_med do a medium version
				elseif ( in_array( $file_name, $todo_med ) ) {

					// *** 1) Initialize / load image
					$resizeObj = new resize($dir . '/' . $file);

					// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
					$resizeObj -> resizeImage( 700, 700, 'auto');

					// *** 3) Save image
					$resizeObj -> saveImage($dir . '/' . $file_name . '_med' . $extension, 90);
				}
			}
		}
	}

	/*
	Store directories without scanning it multiple times
	http://uk3.php.net/manual/en/function.scandir.php

		function sdir( $path='.', $mask='*', $nocache=0 ){
		    static $dir = array(); // cache result in memory
		    if ( !isset($dir[$path]) || $nocache) {
		        $dir[$path] = scandir($path);
		    }
		    foreach ($dir[$path] as $i=>$entry) {
		        if ($entry!='.' && $entry!='..' && fnmatch($mask, $entry) ) {
		            $sdir[] = $entry;
		        }
		    }
		    return ($sdir);
		}
	*/

	$resize_image_result = 'Done! All images have been processed.';

	return $resize_image_result;

?>