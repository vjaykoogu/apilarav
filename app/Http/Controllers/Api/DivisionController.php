<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DivisionController extends Controller
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
        $this->divide(); // Call to perform divide oprations
    }

    /**
     * multiply Method
     *
     * @return void
     */
    private function divide()
    {
        $this->answer = $this->payload->num1 / $this->payload->num2;
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
