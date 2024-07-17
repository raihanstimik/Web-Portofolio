<?php

namespace App\Http\Controllers;

use App\Models\konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konten = Konten::all();
        return view('admin.konten.index', compact('konten'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin/konten/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' =>'required',
                'category_konten' =>'required',
                'description' =>'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]
        );

        // menyimpan data gambar ke foler public/image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('image'), $imageName);
            $imagePath = 'image/'.$imageName;
        }
            Konten::create([
                'name' => $request->name,
                'category_konten' => $request->category_konten,
                'description' => $request->description,
                'image_path' => $imagePath,
            ]);
            return redirect()->route('konten.index')->with('success', 'Konten berhasil diunggah.');
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
    public function edit(konten $konten)
    {
        return view ('admin.konten.edit',compact('konten'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, konten $konten)
    {
        $request->validate([
            'name' => 'required',
            'category_konten' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($konten->image_path && file_exists(public_path($konten->image_path))) {
                unlink(public_path($konten->image_path));
            }

            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('image'), $imageName);
            $konten->image_path = 'image/'.$imageName;
        }

        $konten->name = $request->name;
        $konten->category_konten = $request->category_konten;
        $konten->description = $request->description;
        $konten->save();

        return redirect()->route('konten.index')->with('success', 'Konten berhasil diperbarui.');

}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(konten $konten)
    {
        if ($konten->image_path && file_exists(public_path($konten->image_path))) {
            unlink(public_path($konten->image_path));
        }

        $konten->delete();

        return redirect()->route('konten.index')->with('success', 'Konten berhasil dihapus.');
    }
}
