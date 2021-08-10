<?php

namespace App\Http\Controllers\Api;

use App\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClearValueController extends Controller
{
    /**
     * truncate Method
     *
     * @return Json Response
     */
    public function delete()
    {
        Data::truncate();
        return Response()->json(['value' => null], 200);
    }
}
