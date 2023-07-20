<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MobilService;

class MobilController extends Controller
{
    protected $mobilService;

    public function __construct(MobilService $mobilService) {
        $this->mobilService = $mobilService;
    }

    public function index()
    {
        $mobils = $this->mobilService->findAll();
        return response()->json($mobils);
    }

    public function show($id)
    {
        $stock = $this->mobilService->findAllStock($id);
        return response()->json($stock);
    }

}
