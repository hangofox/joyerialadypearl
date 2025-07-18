<?php
/**
 * @package Helix_Ultimate_Framework
 * @author JoomShaper <support@joomshaper.com>
 * @copyright Copyright (c) 2010 - 2025 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

namespace HelixUltimate\Framework\Platform\Classes;

defined('_JEXEC') or die();

/**
 * Image manipulation class.
 *
 * @since	1.0.0
 */
class Image
{
	public static function createThumbs($src, $sizes, $folder, $base_name, $ext, $quality = 100)
	{

		list($originalWidth, $originalHeight) = getimagesize($src);
		$ext = strtolower($ext);

		switch ($ext)
		{
			case 'bmp':
				$img = imagecreatefromwbmp($src);
				break;
			case 'gif':
				$img = imagecreatefromgif($src);
				break;
			case 'jpg':
				$img = imagecreatefromjpeg($src);
				break;
			case 'jpeg':
				$img = imagecreatefromjpeg($src);
				break;
			case 'png':
				$img = imagecreatefrompng($src);
				break;
			case 'webp':
				$img = imagecreatefromwebp($src);
				break;
		}

		if (!empty($sizes))
		{
			$output = array();

			if ($base_name)
			{
				$output['original'] = $folder . '/' . $base_name . '.' . $ext;
			}

			foreach ($sizes as $key => $size)
			{
				$targetWidth	= $size[0];
				$targetHeight 	= $size[1];
				$ratio_thumb 	= $targetWidth / $targetHeight;
				$ratio_original = $originalWidth / $originalHeight;

				if ($ratio_original >= $ratio_thumb)
				{
					$height = $originalHeight;
					$width = ceil(($height * $targetWidth) / $targetHeight);
					$x = ceil(($originalWidth - $width) / 2);
					$y = 0;
				}
				else
				{
					$width = $originalWidth;
					$height = ceil(($width * $targetHeight) / $targetWidth);
					$y = ceil(($originalHeight - $height) / 2);
					$x = 0;
				}

				$new = imagecreatetruecolor($targetWidth, $targetHeight);

				if ($ext === 'gif' || $ext === 'png')
				{
					imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 100));
					imagealphablending($new, false);
					imagesavealpha($new, true);
				}

				imagecopyresampled($new, $img, 0, 0, $x, $y, $targetWidth, $targetHeight, $width, $height);

				if ($base_name)
				{
					$dest = dirname($src) . '/' . $base_name . '_' . $key . '.' . $ext;
					$output[$key] = $folder . '/' . $base_name . '_' . $key . '.' . $ext;
				}
				else
				{
					$dest = $folder . '/' . $key . '.' . $ext;
				}

				switch ($ext)
				{
					case 'bmp':
						imagewbmp($new, $dest);
						break;
					case 'gif':
						imagegif($new, $dest);
						break;
					case 'jpg':
						imagejpeg($new, $dest, $quality);
						break;
					case 'jpeg':
						imagejpeg($new, $dest, $quality);
						break;
					case 'png':
						imagepng($new, $dest);
						break;
					case 'webp':
						imagewebp($new, $dest, $quality);
						break;
				}
			}

			return $output;
		}

		return false;
	}
}
