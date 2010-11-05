<?php
namespace Ky\Core\Exception;

class FileNotFound extends \Exception
{
        public function __construct($file)
        {
                parent::__construct("File '{$file}' not found.");
        }
}
