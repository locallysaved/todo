<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all();
        return view("diaries.index", compact("diaries"));
    }

    public function show($diaries_id) {
        $diary = Diary::findOrFail($diaries_id);
    }
} 
