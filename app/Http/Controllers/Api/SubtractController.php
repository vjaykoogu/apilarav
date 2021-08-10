<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubtractController extends Controller
{
    private $payload;
    private $answer;

    /**
     * Construct Method Fetches payload.
     *
     * @param Request $request
     * 
     */
    public function __construct(Request $request)
    {
        $this->payload = json_decode($request->getContent());
        $this->subtract(); // Call to perform subtract oprations
    }

    /**
     * Subtract Method
     *
     * @return void
     */
    private function subtract()
    {
        $this->answer = $this->payload->num1 - $this->payload->num2;
    }

    /**
     * Show Method
     *
     * @param --
     * @return Response json
     */
    public function show()
    {
        return Response()->json(['answer' => $this->answer], 200);
    }
}
