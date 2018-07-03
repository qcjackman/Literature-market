<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function setLocale($locale)
    {
        if (array_key_exists($locale, config('app.locales'))) {
            session(['current_language' => $locale]);
        }
        return back()->withInput();
    }
}
