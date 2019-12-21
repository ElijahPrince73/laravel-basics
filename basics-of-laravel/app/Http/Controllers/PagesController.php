<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function home()
  {
    $task = [
        'Go to the store',
        'Go to the market',
        'Go to the work',
    ];

    return view('welcome', [ 'tasks' => $task]);
  }

  public function about()
  {
    return view('about');
  }

  public function contact()
  {
    return view('contact');
  }
}
