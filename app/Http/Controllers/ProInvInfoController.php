<?php

namespace App\Http\Controllers;

use App\Models\ProInvInfo;
use Illuminate\Http\Request;
use App\Http\Resources\ProInvInfoResource;
use App\Http\Resources\ProInvInfoCollection;
use App\Http\Requests\StoreProInvInfoRequest;
use App\Http\Requests\UpdateProInvInfoRequest;

class ProInvInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->t) {
            $t = $request->t;
        } else {
            $t = 10;
        }
        return new ProInvInfoCollection(ProInvInfo::paginate($t));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProInvInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProInvInfo $proInvInfo)
    {
        return new ProInvInfoResource($proInvInfo);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProInvInfoRequest $request, ProInvInfo $proInvInfo)
    {
        //
    }
}
