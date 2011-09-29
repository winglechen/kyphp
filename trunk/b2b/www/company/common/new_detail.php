<?php
use Ky\Model\Mnew;

$data = Mnew::detail($_GET['id']);

echo htmlspecialchars_decode($data['detail']);
