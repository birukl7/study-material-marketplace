<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResourceRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Resource;
use Carbon\Carbon;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //return view('resource.create');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('resource.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResourceRequest $request)
    {

        $validatedData = $request->validated();

        if (!Storage::exists('public/file_store/images')) {
            Storage::makeDirectory('public/file_store/images');
        }
        if (!Storage::exists('public/file_store/resources')) {
            Storage::makeDirectory('public/file_store/resources');
        }

        if (!Storage::exists('public/file_store/previews')) {
            Storage::makeDirectory('public/file_store/previews');
        }

        $imagePath = $request->file('image')->store('public/file_store/images');
        $validatedData['image'] = $imagePath;

        $resourceFilePath = $request->file('resource_file')->store('public/file_store/resources');
        $validatedData['resource_file'] = $resourceFilePath;

        $previewFilePath = $request->file('preview_file')->store('public/file_store/previews');
        $validatedData['preview_file'] = $resourceFilePath;

        $category = $validatedData['category'];
        $category_id = Category::where('name', $category)->first()->id;

        $resource = Resource::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'image' => $imagePath,
            'resource_file' => $resourceFilePath,
            'preview_file' => $previewFilePath,
            'category_id' => $category_id,
            'seller_id' => Auth::user()->id,
            'upload_date' => Carbon::now()->format('Y-m-d'),
        ]);

        $cat = Category::find($category_id);
        $resource->category()->save($cat);
        Auth::user()->resources()->save($resource);
        return redirect('dashboard')->with(['success' => 'resource created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $res = Resource::find($id);
        return view('resource.preview', ['resource' => Resource::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
