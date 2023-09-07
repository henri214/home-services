<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function service_categories()
    {
        $sCategories = ServiceCategory::paginate(10);
        return view('admin.service_categories', compact('sCategories'));
    }
    public function add_service_categories()
    {
        return view('admin.add-service-categories');
    }
    public function servicestore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'slug' => ['required', 'string'],
            'image' => ['required,mimes:jpeg,png,jpg'],
        ]);

        $scategory = new ServiceCategory();
        $scategory->name = $request['name'];
        $scategory->slug = $request['slug'];
        $fileName = time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('images/categories'), $fileName);
        $scategory->image = $fileName;
        $scategory->save();
        return redirect()->route('admin.service_categories')->with('success', 'Service Category created successfully.');
    }
    public function edit_service_categories(ServiceCategory $serviceCategory)
    {
        return view('admin.edit-service-categories', compact('serviceCategory'));
    }
    public function service_categories_update(Request $request, ServiceCategory $serviceCategory)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'slug' => ['required', 'string'],
            'image' => ['required'],
        ]);
        $fileName = time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('images/categories'), $fileName);
        $serviceCategory->update([
            'name' => $request['name'],
            'slug' => $request['slug'],
            'image' => $fileName,
        ]);
        return redirect()->route('admin.service_categories')->with('success', 'Service Category updated successfully.');
    }
    public function service_categories_delete(ServiceCategory $serviceCategory)
    {
        $serviceCategory->deleteOrFail();
        return redirect()->route('admin.service_categories')->with('success', 'Service Category deleted successfully.');
    }
    public function services()
    {
        $services = Service::paginate(10);
        return view('admin.services', compact('services'));
    }
    public function add_service()
    {
        $categories = ServiceCategory::all();
        return view('admin.add-service', compact('categories'));
    }
    public function addservice(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'tagline' => 'required',
            'service_category_id' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'discount_type' => 'required|in:fixed,percentage',
            'image' => 'required|mimes:jpeg,png,jpg',
            'thumbnail' => 'required|mimes:jpeg,png,jpg',
            'description' => 'required',
            'inclusion' => 'required',
            'exclusion' => 'required',
        ]);
        $service = new Service();
        $service->name = $request['name'];
        $service->slug = $request['slug'];
        $service->tagline = $request['tagline'];
        $service->service_category_id = $request['service_category_id'];
        $service->price = $request['price'];
        $service->discount = $request['discount'];
        $service->discount_type = $request['discount_type'];
        $service->description = $request['description'];
        $service->inclusion = str_replace("\n", '|', trim($request['inclusion']));
        $service->exclusion = str_replace("\n", '|', trim($request['exclusion']));
        $fileName = time() . '.' . $request->file('thumbnail')->extension();
        $request->file('thumbnail')->move(public_path('images/services/thumbnails'), $fileName);
        $service->thumbnail = $fileName;
        $fileNameImage = time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('images/services'), $fileNameImage);
        $service->image = $fileNameImage;
        $service->save();
        return redirect()->route('admin.services')->with('success', 'Service created successfully.');
    }
    public function edit_service(Service $service)
    {
        $categories = ServiceCategory::all();
        return view('admin.edit-service', compact(['service', 'categories']));
    }
    public function serviceupdate(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'tagline' => 'required',
            'service_category_id' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'discount_type' => 'required|in:fixed,percentage',
            'image' => 'required|mimes:jpeg,png,jpg',
            'thumbnail' => 'required|mimes:jpeg,png,jpg',
            'description' => 'required',
            'inclusion' => 'required',
            'exclusion' => 'required',
        ]);
        $fileName = time() . '.' . $request->file('thumbnail')->extension();
        $request->file('thumbnail')->move(public_path('images/services/thumbnails'), $fileName);
        $fileNameImage = time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('images/services'), $fileNameImage);
        $service->update([
            'name' => $request['name'],
            'slug' => $request['slug'],
            'tagline' => $request['tagline'],
            'service_category_id' => $request['service_category_id'],
            'price' => $request['price'],
            'discount' => $request['discount'],
            'discount_type' => $request['discount_type'],
            'thumbnail' => $fileName,
            'image' => $fileNameImage,
            'description' => $request['description'],
            'inclusion' => str_replace("\n", '|', trim($request['inclusion'])),
            'exclusion' => str_replace("\n", '|', trim($request['exclusion'])),
        ]);
        return redirect()->route('admin.services')->with('success', 'Service Category updated successfully.');
    }
    public function servicedelete(Service $service)
    {
        $service->deleteOrFail();
        return redirect()->route('admin.services')->with('success', 'Service Category deleted successfully.');
    }
}
