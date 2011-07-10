<?php
use Ky\Model\Mpage;

$data = Mpage::detail($_GET['id']);

echo $data['detail'];
