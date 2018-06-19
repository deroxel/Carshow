<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        return view('pages.about');
    }
    public function faq() {
        return view('pages.faq');
    }
    public function index() {
        return view('pages.index');
    }
    public function login() {
        return view('pages.login');
    }
    public function register() {
        return view('pages.register');
    }
}