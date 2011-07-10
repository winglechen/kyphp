<?php
use Ky\Model\Mnew;

$data = Mnew::detail($_GET['id']);

echo $data['detail'];
