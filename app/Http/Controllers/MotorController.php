<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MotorService;

class MotorController extends Controller
{
    protected $motorService;

    public function __construct(MotorService $motorService) {
        $this->motorService = $motorService;
    }

    public function index()
    {
        $motors = $this->motorService->findAll();
        return response()->json($motors);
    }

    public function show($id)
    {
        $stock = $this->motorService->findAllStock($id);
        return response()->json($stock);
    }
}
