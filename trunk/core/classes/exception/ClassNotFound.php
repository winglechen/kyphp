<?php
namespace Ky\Core\Exception;

class ClassNotFound extends \Exception
{
        public function __construct($className)
        {
                parent::__construct("Class '{$className}' not found.");
        }
}
