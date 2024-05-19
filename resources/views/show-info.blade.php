@extends('layout.layout')

@section('page_title', 'Show Info')

@section('content')
    <div class="flex justify-center items-center h-full">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-lg w-full">
            <h1 class="text-2xl font-bold mb-4">Client Information</h1>

            <div class="mb-4">
                <p><strong>Client ID:</strong> {{ $client->ClientID }}</p>
            </div>
            <div class="mb-4">
                <p><strong>First Name:</strong> {{ $client->Fname }}</p>
            </div>
            <div class="mb-4">
                <p><strong>Middle Name:</strong> {{ $client->Mname }}</p>
            </div>
            <div class="mb-4">
                <p><strong>Last Name:</strong> {{ $client->Lname }}</p>
            </div>
            <div class="mb-4">
                <p><strong>Email:</strong> {{ $client->Email }}</p>
            </div>
            <div class="mb-4">
                <p><strong>Address:</strong> {{ $client->Address }}</p>
            </div>
            <div class="mb-4">
                <p><strong>Contact Number:</strong> {{ $client->ContactNo }}</p>
            </div>
        </div>
    </div>
@endsection
