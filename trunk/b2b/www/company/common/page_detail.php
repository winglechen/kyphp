<?php
use Ky\Model\Mpage;

$data = Mpage::detail($_GET['id']);

echo htmlspecialchars_decode($data['detail']);
