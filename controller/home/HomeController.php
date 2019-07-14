<?php

namespace controller\home;
include '../model/User.php';

use model\User;

$user = new User('Thong', 'Raymond');
include '../view/accueil.php';
