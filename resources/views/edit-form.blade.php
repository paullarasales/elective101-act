@extends('layout.layout')

@section('page_title', 'Edit Client Information')

@section('content')
    <div class="flex justify-center items-center h-full">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-lg w-full">
            <form action="{{ route('ClientManagement.update', $client->id) }}" method="POST">
                @csrf
                @method('PUT') <!-- Use PUT method for updating -->

                <div class="mb-4 flex flex-wrap">
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:pr-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="ClientID">
                            Client ID
                        </label>
                        <input value="{{ $client->ClientID }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ClientID" type="text" name="ClientID" placeholder="Client ID">
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:px-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="Fname">
                            First Name
                        </label>
                        <input value="{{ $client->Fname }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Fname" type="text" name="Fname" placeholder="First Name">
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:px-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="Mname">
                            Middle Name
                        </label>
                        <input value="{{ $client->Mname }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Mname" type="text" name="Mname" placeholder="Middle Name">
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:pl-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="Lname">
                            Last Name
                        </label>
                        <input value="{{ $client->Lname }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Lname" type="text" name="Lname" placeholder="Last Name">
                    </div>
                </div>

                <hr class="mb-4">

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Email">
                        Email
                    </label>
                    <input value="{{ $client->Email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Email" type="email" name="Email" placeholder="Email">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Address">
                        Address
                    </label>
                    <input value="{{ $client->Address }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Address" type="text" name="Address" placeholder="Address">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="ContactNo">
                        Contact Number
                    </label>
                    <input value="{{ $client->ContactNo }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ContactNo" type="text" name="ContactNo" placeholder="Contact Number">
                </div>

                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
