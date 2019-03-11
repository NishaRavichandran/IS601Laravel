<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//Route::get('/',  'Pagescontroller@home')->name('home');
//Route::get('/about',  'Pagescontroller@about')->name('about');
//Route::get('/contact',  'Pagescontroller@contact')->name('contact');
//Route::get('/contact',  'Pagescontroller@store')->name('contact.store');
//Route::get('/thanks/{name}/{last}',  'Pagescontroller@thanks')->name('thanks');

class PagesController extends Controller
{

    function home()
    {
        return view('pages.home');
    }

    function about()
    {
        return view('pages.about');
    }

    function contact()
    {
        return view('pages.contact');
    }

    function store(Request $request)
    {
        $name = $request->name;

      //  echo "Thank you " . $name;

        return redirect()->route('thanks',['name' => $name]);

    }

    function thanks($name)
    {
        return view('pages.thankyou')->with(compact('name'));
    }

}

