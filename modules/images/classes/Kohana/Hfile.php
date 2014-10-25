<?

	abstract class Kohana_Hfile
	{
		public static function GenFileName($A = 10, $B = 1)
		{
			return substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', $B)), 0, $A);
		}

		public static function GetFileNameByID($file)
		{
			$file = self::GetImageByID($file);
			return preg_replace("|.*\/([a-zA-Z_0-9]+)(\..*)|s", "$1", $file);
		}

		public static function Upload($file_array, $create_preview = true)
		{

			if ($file_array['tmp_name']) {
				$new_filename = self::GenFileName();
				$dir          = "/uploads/images/";
				$image        = Image::factory($file_array['tmp_name']);
				$image->save(DOCROOT . $dir . $new_filename . '.jpg');
				$image = Image::factory($file_array['tmp_name']);
				if ($create_preview) {
					$image->resize(150, 150)
							->save(DOCROOT . $dir . $new_filename . '150_150.jpg');
				}


				$file = ORM::factory('File');
				$file->set('file_name', $new_filename . ".jpg");
				$file->set('path', $dir);
				$file->set('type', $file_array['type']);
				$file->set('size', $file_array['size']);
				return $file->save();
			}
			else {
				return false;
			}
		}

		public static function GetImageByID($id, $size = null)
		{
			$img       = ORM::factory('File', $id);
			$file_name = preg_replace("|([a-zA-Z_0-9]+)(\..*)|s", "$1", $img->file_name);
			$file_end  = preg_replace("|([a-zA-Z_0-9]+)(\..*)|s", "$2", $img->file_name);

			$dir  = $img->path;
			$file = $img->file_name;
			return $size ? $dir . $file_name . $size . $file_end : $dir . $file;

		}

		public static function DelImg($id)
		{
			$image     = ORM::factory('File', $id);
			$file_name = preg_replace("|([a-zA-Z_0-9]+)(\..*)|s", "$1", $image);
			$file_end  = preg_replace("|([a-zA-Z_0-9]+)(\..*)|s", "$2", $image);
			if (file_exists(DOCROOT . $file_name . "150_150" . $file_end)) {
				unlink(DOCROOT . $file_name . "150_150" . $file_end);
			}
			$file = $image->path . $image->file_name;
			unlink(DOCROOT . $file);
			$image->delete();
		}

		public static function Crop($width, $height, $file)
		{
			$img_name = preg_replace("|.*\/(.*)\.[a-z]{3}|", "$1", $file);
			if (!file_exists(DOCROOT . "/uploads/images/" . $img_name . "{$width}_{$height}.jpg")) {
				Image::factory(DOCROOT . $file)
						->resize($width + ($width * 0.4), $height + ($height * 0.4))
						->crop($width, $height)
						->save(DOCROOT . "/uploads/images/" . $img_name . "{$width}_{$height}.jpg");
			}
			return "/uploads/images/{$img_name}{$width}_{$height}.jpg";
		}

		public static function Resize($img_id, $width, $height)
		{
			$file_name     = self::GetFileNameByID($img_id);
			$path          = ORM::factory('File', $img_id)->path;
			$file          = ORM::factory('File', $img_id)->file_name;
			$new_file_name = $path . $file_name . "{$width}_{$height}" . ".jpg";
			if (!file_exists(DOCROOT . $new_file_name)) {
				if ($file && file_exists(DOCROOT . $path . $file)) {
					$img = Image::factory(DOCROOT . $path . $file)
							->resize($width, $height)
							->save(DOCROOT . $new_file_name);
					return $new_file_name;
				}
				else {
					$img = Image::factory(DOCROOT . "/include/image/pic1.jpg")
							->resize($width, $height)
							->save(DOCROOT . "/uploads/images/pic1{$width}_{$height}.jpg");
					return "/uploads/images/pic1{$width}_{$height}.jpg";
				}
			}else{
				return $new_file_name;
			}

		}
	}
 