<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $serviceCategories = ServiceCategory::inRandomOrder()->take(16)->get();
        $services = Service::inRandomOrder()->get();
        return view('home', compact(['serviceCategories', 'services']));
    }
    public function search_service(Request $request)
    {
        if ($request->search) {
            $searchServices=Service::where('name','LIKE','%'.$request->search.'%')->latest()->paginate(10);
            return view('search_service', compact('searchServices'));
        } else {
            return redirect()->back()->with('message','Empty Search');
        }
    }
}
