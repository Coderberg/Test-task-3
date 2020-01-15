<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('message.index', [
            'message' => [],
            'messages' => Message::orderBy('created_at', 'desc')->paginate(5),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required',
        ]);
        $message = Message::create($request->all());

        return redirect()->route('index')->with('success','Item created successfully!');
    }

}
