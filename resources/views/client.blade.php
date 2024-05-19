@extends('layout.layout')

@section('page_title', 'Client')

@section('content')
<div class="flex flex-col items-center justify-center">
    <table class="border border-collapse">
        <tr>
            <th class="border text-black">ClientID</th>
            <th class="border text-black">Fname</th>
            <th class="border text-black">Lname</th>
            <th class="border text-black">ContactNo</th>
            <th class="border text-black">EmailAddress</th>
        </tr>
        @isset($client)
            @foreach ($client as $singleClient)
                <tr>
                    <td class="border text-black">{{ $singleClient["ClientID"] }}</td>
                    <td class="border text-black">{{ $singleClient["Fname"] }}</td>
                    <td class="border text-black">{{ $singleClient["Lname"] }}</td>
                    <td class="border text-black">{{ $singleClient["ContactNo"] }}</td>
                    <td class="border text-black">{{ $singleClient["EmailAddress"] }}</td>
                </tr>
            @endforeach
        @else
            @foreach ($clientJPS as $singleClient)
                <tr>
                    <td class="border text-black">{{ $singleClient["ClientID"] }}</td>
                    <td class="border text-black">{{ $singleClient["Fname"] }}</td>
                    <td class="border text-black">{{ $singleClient["Lname"] }}</td>
                    <td class="border text-black">{{ $singleClient["ContactNo"] }}</td>
                    <td class="border text-black">{{ $singleClient["EmailAddress"] }}</td>
                </tr>
            @endforeach
        @endisset
    </table>
    
    @isset($message)
        <p class="text-black">{!! $message !!}</p>
    @endisset
</div>   
@endsection
