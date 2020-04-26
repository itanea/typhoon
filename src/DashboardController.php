<?php
namespace Itanea\Typhoon;

use App\Http\Controllers\Controller;
use Request;

class DashboardController extends Controller
{
    public function index()
    {
        $name = "John Doe";
        return view('typhoon::app', compact('name'));
    }
}
