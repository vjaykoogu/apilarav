<?php

namespace App\Http\Controllers\Api;

use App\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RetrieveValueController extends Controller
{
    private $answer;

    /**
     * __invoke Method
     * 
     * @Return JSON
     */
    public function show()
    {
        $this->answer = Data::orderBy('id')->select('value')->first();
        
        return Response()->json(['value' => $this->answer], 200);
    }
}
