<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function switchTheme(Request $request)
    {
        $user = $request->user();
        $user->theme = $request->input('theme') === 'dark' ? 'dark' : 'light';
        $user->save();

        return redirect()->back();
    }
}
