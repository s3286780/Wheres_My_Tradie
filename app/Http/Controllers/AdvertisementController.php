<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;
use DB;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$ads =  Advertisement::all();
        $ads = Advertisement::orderBy('created_at', 'desc')->paginate(1);
        return view('advertisements.index')->with('ads', $ads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advertisements.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'service' => 'required',
            'body' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'max_dist' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        //Handle file upload
        if($request->hasFile('image'))
        {
            //Get filename with the extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get jsut filename
            $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // FilenameToStore
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }

        //Create advertisement
        $ad = new Advertisement;
        $ad->name = $request->input('name');
        $ad->service = $request->input('service');
        $ad->body = $request->input('body');
        $ad->user = auth()->user()->id;
        $ad->location = $request->input('location');
        $ad->phone = $request->input('phone');
        $ad->email = auth()->user()->email;
        $ad->max_dist = $request->input('max_dist');
        $ad->image = $fileNameToStore;
        $ad->save();

        return redirect('/home')->with('success', 'Ad Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad =  Advertisement::find($id);
        return view('advertisements.show')->with('ad', $ad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
