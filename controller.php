<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class siteController extends Controller
    {
        function Home(){
            return view('HomePage');
        }

        function About(){
            return view('AboutPage');
            
        }

        function Contact(){
            return view('ContactPage');
            
        }


    }
