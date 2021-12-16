<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Http\Requests\StoreResponseRequest;
use App\Http\Requests\UpdateResponseRequest;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responses = Response::all();
        return response($responses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreResponseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $response = Response::create([
            'email' => $request->email,
            'age' => $request->age,
            'gender' => $request->gender,
            'class' => $request->class,
            'location' => $request->location,
            'question1' => $request->question1,
            'question2'  => $request->question2,
            'question3'  => $request->question3,
            'question4'  => $request->question4,
            'question5'  => $request->question5,
            'question6'  => $request->question6,
            'question7'  => $request->question7,
            'question8'  => $request->question8,
            'question9'  => $request->question9,
            'question10' => $request->question10,
            'question11' => $request->question11,
            'question12' => $request->question12,
            'question13' => $request->question13,
            'question14' => $request->question14,
            'question15' => $request->question15,
            'question16' => $request->question16,
            'question17' => $request->question17,
            'question18' => $request->question18,
            'question19' => $request->question19,
            'question20' => $request->question20,
            'question21' => $request->question21,
            'question22' => $request->question22,
        ]);

        return response("Response recorded! Thanks, $response");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function show(Response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function edit(Response $response)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResponseRequest  $request
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResponseRequest $request, Response $response)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function destroy(Response $response)
    {
        //
    }
}
