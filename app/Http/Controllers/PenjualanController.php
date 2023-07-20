<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PenjualanService;

class PenjualanController extends Controller
{
    protected $penjualanService;

    public function __construct(PenjualanService $penjualanService) {
        $this->penjualanService = $penjualanService;
    }

    public function index()
    {
        $penjualan = $this->penjualanService->findAll();
        return response()->json($penjualan);
    }

    public function store(Request $request)
    {
        $penjualan = $this->penjualanService->storePenjualan($request);
        return response()->json($penjualan);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
