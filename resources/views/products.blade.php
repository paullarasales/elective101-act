<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @foreach ($products as $product)
        {{ $product['product_name'] }} 
        {{ $product['price'] }}
    @endforeach --}}

    {{-- @forelse ($products as $product )
        <p>{{ $product["product_name" ]}}</p>
    @empty
        <p>No Items to display</p>
    @endforelse --}}

    {{-- @while ($grade < 80)

        @php
            $grade++;
        @endphp
        
        {{ $grade }}
    @endwhile --}}

    {{-- @unless ($age >= 18)
        <p>Opps</p>
    @endunless --}}

    @foreach ($clientJPS as $client )
    <p>{{ $client["ClientID" ]}}</p>
    @endforeach
</body>
</html>