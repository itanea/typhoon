<?php
namespace Itanea\Typhoondashboard;

use App\Http\Controllers\Controller;
use Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('itanea.typhoondashboard.app');
    }
}
