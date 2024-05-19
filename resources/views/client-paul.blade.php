@extends('layout.layout')

@section('page_title', 'ClientInfo')

@section('content')
<div class="flex flex-col items-center justify-center gap-5 w-full h-full">
    <div class="flex flex-col items-start justify-center"> <!-- Changed justify-center to justify-start -->
        <h1 class="text-2xl font-bold mb-3">Client Information</h1> <!-- Added some margin bottom -->
        <table class="border-collapse border border-slate-500 border-2">
            <tr>
                <th class="border border-slate-700 text-black w-64 h-12 text-start">ClientID</th>
                <th class="border border-slate-700 text-black w-64 h-12 text-start">FirstName</th>
                <th class="border border-slate-700 text-black w-64 h-12 text-start">MiddleName</th>
                <th class="border border-slate-700 text-black w-64 h-12 text-start">LastName</th>
                <th class="border border-slate-700 text-black w-64 h-12 text-start">Email</th>
                <th class="border border-slate-700 text-black w-64 h-12 text-start">Address</th>
                <th class="border border-slate-700 text-black w-64 h-12 text-start">Contact Number</th>
                <th class="border border-slate-700 text-black w-64 h-12 text-start">Operations</th>
            </tr>
            @foreach ($clientData as $index => $data)
                <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }}"> 
                    <td class="border border-slate-700 text-black font-md h-9 text-start">{{ $data["ClientID"] }}</td>
                    <td class="border border-slate-700 text-black font-md text-start">{{ $data["Fname"] }}</td>
                    <td class="border border-slate-700 text-black font-md text-start">{{ $data["Mname"] }}</td>
                    <td class="border border-slate-700 text-black font-md text-start">{{ $data["Lname"] }}</td>
                    <td class="border border-slate-700 text-black font-md text-start">{{ $data["Email"] }}</td>
                    <td class="border border-slate-700 text-black font-md text-start">{{ $data["Address"] }}</td>
                    <td class="border border-slate-700 text-black font-md text-start">{{ $data["ContactNo"] }}</td>
                    <td class="border border-slate-700 text-black font-md text-start flex items-center"> <!-- Added flex items-center -->
                        <form action="{{ route('ClientManagement.destroy', $data->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-normal py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                Delete
                            </button>
                        </form>
                        <a href="{{ route('ClientManagement.edit', $data->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-normal py-1 px-2 rounded ml-2 focus:outline-none focus:shadow-outline">
                            Update
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div> 
    <div class="flex items-center justify-center mt-4">
        {{ $clientData->links() }} 
    </div>
</div>
@endsection
