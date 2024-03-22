<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'resource_id' => 'required|integer',
            'purchase_date' => 'required|date', 
            'buyer_id' => 'required',
        ]);
        
        $data['resource_id'] = $request->input('resource_id');
        $data['buyer_id'] = Auth::user()->id ;
        $data['purchase_date'] = Carbon::now()->format('Y-m-d');

        $purchase = Purchase::create($data);

        if ($purchase) {
            $purchase->buyer()->save(Auth::user());
            $purchase->resource()->save($data['resource_id']);
            return redirect('back')->with('success', 'purchase performed successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
