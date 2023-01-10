<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhoneRequest;
use Illuminate\Http\Request;

use App\Models\Phones;
use App\Models\Brands;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('phone.index', [
            "phones" => Phones::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phone.create ', [
            "brands" => Brands::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhoneRequest $request)
    {
        $s = $request->validated();
        Phones::create($s);
        return redirect()->action(
            [PhoneController::class, 'index'], ["phones" => Phones::all()]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('phone.show', [
            "phones" => Phones::findOrFail($id)
        ]);
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
        $phones = Phones::findOrFail($id);
        $phones->delete($id);
        return redirect()->action(
            [PhoneController::class, 'index'], ["phones" => Phones::all()]
        );
    }
}
