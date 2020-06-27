<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index() {
    $title = 'Welcome to my blog';
    return view('pages.index')->with('title', $title);
  }

  public function about() {
    $title = 'Hello my name is Mark';
    return view('pages.about')->with('title', $title);
  }

  public function services() {
    $data = array(
      'title' => 'I can do this...',
      'services' => ['HTML', 'CSS', 'JavaScript', 'Ruby on Rails', 'Laravel']
    );
    return view('pages.services')->with($data);
  }
}
