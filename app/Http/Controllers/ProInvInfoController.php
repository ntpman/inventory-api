<?php

namespace App\Http\Controllers;

use App\Models\ProInvInfo;
use App\Http\Requests\StoreProInvInfoRequest;
use App\Http\Requests\UpdateProInvInfoRequest;
use App\Http\Resources\ProInvInfoCollection;
use App\Http\Resources\ProInvInfoResource;

class ProInvInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProInvInfoCollection(ProInvInfo::paginate(2));
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
        return new ProInvInfoResource($proInvInfo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProInvInfoRequest $request, ProInvInfo $proInvInfo)
    {
        //
    }
}
