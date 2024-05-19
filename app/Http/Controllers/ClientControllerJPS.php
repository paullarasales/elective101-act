<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\UserAccount;

class ClientControllerJPS extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Client::create($request->all());

        return redirect()->route('clients.data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);

        return view('show-info', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $client = Client::findOrFail($id);

        return view('edit-form', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
         $client = Client::findOrFail($id);

  
         $client->update($request->all());
 
  
         return redirect()->route('clients.data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);

        $client->delete();

        return redirect()->route('clients.data')->with('success', 'Deleted Successfully');
    }

    

    
}
