<?php

namespace App\Http\Controllers\Api;

use App\Data;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class SaveValueController extends Controller
{
    private $payload;
    Private $save;

    /**
     * Construct Method Fetches payload.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->payload = json_decode($request->getContent());
       
    }

    /**
     * store vaulues into DB 
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
    
        $this->answer = Data::create(['value' => $this->payload->value])->select('value')->get();
        
        return Response()->json(['save' => $this->answer], 200);
    }

}
