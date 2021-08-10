<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SquareRootController extends Controller
{
    private $payload;
    Private $answer;

    /**
     * Construct Method Fetches payload.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->payload = json_decode($request->getContent());
        $this->squareRoot(); // Call to perform squareRoot oprations
    }

    /**
     * Add Method
     *
     * @return void
     */
    private function squareRoot()
    {
        $this->answer = sqrt($this->payload->num1);
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
