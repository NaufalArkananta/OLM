<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PropertiController extends Controller
{
    public function index()
    {
        $data_property = Property::all();
        return view('properti', compact('data_property'));
    }

    public function create()
    {
        return view('create-properti');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'property_owner_name' => 'required|max:100',
            'property_owner_number_phone' => 'required|max:15',
            'title' => 'required|max:100',
            'category_id' => 'required|exists:property_categories,id',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'location' => 'required|max:255',
            'status' => 'required|in:not verified,verified,sold',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Property::create($request->all());

        return redirect()->route('properti.index')->with('success', 'Property added successfully!');
    }

    public function show($id)
    {
        $property = Property::findOrFail($id);
        return view('detail-properti', compact('property'));
    }

    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('edit-properti', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'property_owner_name' => 'required|max:100',
            'property_owner_number_phone' => 'required|max:15',
            'title' => 'required|max:100',
            'category_id' => 'required|exists:property_categories,id',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'location' => 'required|max:255',
            'status' => 'required|in:not verified,verified,sold',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $property = Property::findOrFail($id);
        $property->update($request->all());

        return redirect()->route('properti.index')->with('success', 'Property updated successfully!');
    }

    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect()->route('properti.index')->with('success', 'Property deleted successfully!');
    }
}