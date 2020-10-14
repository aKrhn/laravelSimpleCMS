<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
  public function getIndex()
  {
    return view('pages.welcome');
  }

  public function getContact()
  {
    return view('pages.contact');
  }

  public function getAbout()
  {
    $firstName = "Muhammed Abdullah";
    $lastName = "Karahan";

    $fullName = $firstName . " " . $lastName;
    $email = "abdllhkarahan@gmail.com";
    $data = [];
    $data['fullName'] = $fullName;
    $data['email'] = $email;

    return view('pages.about')->withData($data);
  }
}

?>
