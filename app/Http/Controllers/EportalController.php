<?php
/**
 * Created by PhpStorm.
 * User: Adeniji
 * Date: 06/07/2015
 * Time: 23:36
 */
    namespace App\Http\Controllers;

    class EportalController extends Controller{

        public function index(){
            return view('eport');
        }

        public function manual(){
            return view('manual');
        }

    }

