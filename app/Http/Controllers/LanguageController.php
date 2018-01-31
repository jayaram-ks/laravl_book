<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLang(Request $request)
    {
      $request->session()->put('language', $request->language);
      return redirect()->back();
    }
}
