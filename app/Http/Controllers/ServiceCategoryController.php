<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $scategories = ServiceCategory::all();
        return view('servicecategories.index', compact('scategories'));
    }
    public function serviceByCategory(ServiceCategory $serviceCategory)
    {
        return view('servicecategories.services_by_category', compact('serviceCategory'));
    }
    public function servicedetail(Service $service)
    {
        $relatedService = Service::where('service_category_id', $service->service_category_id)->where('id', '!=', $service->id)->inRandomOrder()->first();
        if ($relatedService !== null) {
            return view('servicecategories.servicedetail', compact(['service', 'relatedService']));
        } else {
            return view('servicecategories.servicedetail', compact('service'));
        }
    }
}
