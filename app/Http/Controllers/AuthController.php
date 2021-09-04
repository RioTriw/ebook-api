<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119164,
        'name' => 'Rio Triwibowo',
        'phone' => '081390486023',
        'class' => 'XII RPL 5'];
  }
}