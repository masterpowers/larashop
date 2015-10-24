<?php
/**
 * Created by PhpStorm.
 * User: nenpetko
 * Date: 24.10.2015.
 * Time: 14:23
 */

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return "I am backend Controller";
    }
}