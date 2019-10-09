<?
use WebPConvert\WebPConvert;
class Webp
{
	private $dir_name           = "";
	private $folder_images      = "img_banner";
	private $folder_images_webp = "img_banner_webp";

	private $quality            = 90;
	private $stripMetadata      = true;

	function __construct()
	{	
		$this->dir_name = dirname(__FILE__);
		$this->folder_images = $this->dir_name."/".$this->folder_images;
		$this->folder_images_webp = $this->dir_name."/".$this->folder_images_webp;
	}

	function convertImagesFromToFolder($folder_from, $folder_to){
		
		$folder_images = $this->dir_name."/".$folder_from;
		$folder_images_webp = $this->dir_name."/".$folder_to;

		$images = glob($folder_from . "/*.jpg");
		foreach($images as $image)
		{	
			$basename = basename($image);
			$image_name = basename($image, ".jpg");
			$source = $folder_images."/".$basename;
			$destination = $folder_images_webp."/".$image_name.".webp";
			$this->convertImage($source, $destination);
		}

	}

	function convertOneImage($image_from, $image_destination){
		$this->convertImage($image_from, $image_destination);

		echo "<script>window.open('".$image_from."', '_blank');</script>";
		echo "<script>window.open('".$image_destination."', '_blank');</script>";
	}


	function convertImage($source, $destination, $options = []){

		$success = WebPConvert::convert($source, $destination, $options);

	}

	function webp_suport(){
		return ( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) ? true : false;
	}

}
?>