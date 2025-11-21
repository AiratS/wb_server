<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\MeterReading;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CounterController extends Controller
{
    public function save(Request $request): Response
    {
        $data = $request->json()->all();

        MeterReading::create([
            'value' => $data['value'],
        ]);

        return new Response();
    }
}
