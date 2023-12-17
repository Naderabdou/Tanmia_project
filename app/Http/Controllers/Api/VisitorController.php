<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function store(Request $request)
    {

        if (Visitor::whereCreatedAt(date('Y-m-d'))->exists()) {
            $visitor = Visitor::whereCreatedAt(date('Y-m-d'))->first();
          $visitor->increment('count');
        } else {
            Visitor::create([
                'count' => 1,
                'created_at' => date('Y-m-d')
            ]);

        }



        return response()->json(['status' => true, 'message' => 'visitor added successfully']);
    }
}
