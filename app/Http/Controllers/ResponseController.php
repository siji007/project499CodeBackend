<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Http\Requests\StoreResponseRequest;
use App\Http\Requests\UpdateResponseRequest;

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
    public function store(StoreResponseRequest $request)
    {
        // $Response = Response::class;
        $questionAnswer = [
            Response::$question1 => $request->question1,
            Response::$question2 => $request->question2,
            Response::$question3 => $request->question3,
            Response::$question4 => $request->question4,
            Response::$question5 => $request->question5,
            Response::$question6 => $request->question6,
            Response::$question7 => $request->question7,
            Response::$question8 => $request->question8,
            Response::$question9 => $request->question9,
            Response::$question10 => $request->question10,
            Response::$question11 => $request->question11,
            Response::$question12 => $request->question12,
            Response::$question13 => $request->question13,
            Response::$question15 => $request->question15,
            Response::$question16 => $request->question16,
            Response::$question17 => $request->question17,
            Response::$question18 => $request->question18,
            Response::$question19 => $request->question19,
            Response::$question20 => $request->question20,
            Response::$question21 => $request->question21,
            Response::$question22 => $request->question22,
            Response::$question23 => $request->question23,
            Response::$question24 => $request->question24,
            Response::$question25 => $request->question25,
        ];

        // dd(json_encode($questionAnswer));

        Response::create([
            'email' => $request->email,
            'question_answer' => json_encode($questionAnswer)
        ]);

        return response('Response recorded! Thanks');
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
