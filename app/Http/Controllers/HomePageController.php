<?php
/**
 * Created by PhpStorm.
 * User: Adeniji
 * Date: 06/07/2015
 * Time: 10:59
 */

namespace App\Http\Controllers;


class HomePageController extends Controller{

    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('homepage');
    }
}