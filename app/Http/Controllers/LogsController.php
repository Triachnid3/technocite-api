<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Return last 100 logs
        return Logs::orderBy('LogTime', 'desc')->take(100)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $log = new Logs();
        $log->DeviceID = $request->device_id ?? 1;
        $log->Temperature = $request->temperature;
        $log->Humidity = $request->humidity;
        // $log->LogTime = now();
        $log->save();
        return $log;
    }

    /**
     * Display the specified resource.
     */
    public function show(Logs $logs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logs $logs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logs $logs)
    {
        //
    }
}
