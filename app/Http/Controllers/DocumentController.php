<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DocumentController extends Controller
{
    public function line(Request $request)
    {
        return view('documents.line');
    }
    public function bar(Request $request)
    {
        return view('documents.bar');
    }
    public function radar(Request $request)
    {
        return view('documents.radar');
    }
    public function polarArea(Request $request)
    {
        return view('documents.polar-area');
    }
    public function pie(Request $request)
    {
        return view('documents.pie');
    }
    public function doughnut(Request $request)
    {
        return view('documents.doughnut');
    }
    public function trace(Request $request)
    {
        return view('documents.trace');
    }
    public function databinding(Request $request)
    {
        return view('documents.databinding');
    }
    public function mixcharts(Request $request)
    {
        return view('documents.mixcharts');
    }
    public function passjson(Request $request)
    {
        $json_data = json_encode([30, 40, 50, 60]);
        $json_labels = json_encode(['first', 'second', 'third', 'fourth']);

        return view('documents.passjson', compact('json_data', 'json_labels'));
    }
}
