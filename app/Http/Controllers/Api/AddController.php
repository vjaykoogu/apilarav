<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class AddController extends Controller
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
        $this->add(); // Call to perform add oprations
    }

    /**
     * Add Method
     *
     * @return void
     */
    private function add()
    {
        $this->answer = $this->payload->num1 + $this->payload->num2;
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
