<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
      return view('showprofile');
    }
  public function update()
  {
    return 'Profile updated';
  }
}
