<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $set_nav_color = Cookie::get('warna_navbar') ?? '#3563E9';   
        $showroom = Showroom::where('user_id', auth()->user()->id)->get();
        $jml = Showroom::where('user_id', auth()->user()->id)->count();
        if($jml === 0) {
            return redirect('/showrooms/create');
        }
        return view('showroom.index', compact('jml', 'showroom', 'set_nav_color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $set_nav_color = Cookie::get('warna_navbar') ?? '#3563E9';   
        return view('showroom.add', compact('set_nav_color'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('image')->getClientOriginalName() . '-' . time(). '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('image/', $img);
        Showroom::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'owner' => $request->owner, 
            'brand' => $request->brand,
            'purchase_date' => $request->purchase_date,
            'description' => $request->description,
            'image' => $img,
            'status' => $request->status
        ]);
        return redirect('/showrooms')->with('blue-toast', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function show(Showroom $showroom)
    {
        $set_nav_color = Cookie::get('warna_navbar') ?? '#3563E9';   
        $showroom->purchase_date = date('Y-m-d');
        return view('showroom.detail', compact('set_nav_color', 'showroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Showroom $showroom)
    {
        $showroom->purchase_date = date('Y-m-d');
        $set_nav_color = Cookie::get('warna_navbar') ?? '#3563E9'; 
        return view('showroom.edit', compact('showroom', 'set_nav_color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Showroom $showroom)
    {
        if(!$request->file('image')) {
            Showroom::where('id', $showroom->id)->update([
                'name' => $request->name,
                'owner' => $request->owner,
                'brand' => $request->brand,
                'purchase_date' => $request->purchase_date,
                'description' => $request->description,
            ]);
        } else {
            Storage::delete('image/' . $showroom->image);
            $img = $request->file('image')->getClientOriginalName() . '-' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('image/', $img);
            Showroom::where('id', $showroom->id)->update([
                'name' => $request->name,
                'owner' => $request->owner,
                'brand' => $request->brand,
                'purchase_date' => $request->purchase_date,
                'description' => $request->description,
                'image' => $img
            ]);
        }
        return redirect('/showrooms')->with('yellow-toast', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Showroom $showroom)
    {
        Showroom::destroy($showroom->id);
        Storage::delete('image/' . $showroom->image);
        return redirect('/showrooms')->with('red-toast', 'Data berhasil dihapus');
    }
}
