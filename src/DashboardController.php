<?php
namespace Itanea\Typhoon;

use App\Http\Controllers\Controller;
use Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('itanea.typhoon.app');
    }
}
