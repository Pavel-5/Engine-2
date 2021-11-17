<?php

class Autoload
{
	public function loadClass($className)
	{
		$path = preg_replace(['/^(app\\\)/', '/(\\\)/'], [ROOT . "/", "/"], $className);
		$fileName = "{$path}.php";

		if (file_exists($fileName)) {
			include  $fileName;
		}
	}
}
