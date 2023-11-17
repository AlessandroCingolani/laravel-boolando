@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="page-detail-product ">
            <h2>Dettagli prodotto</h2>
            <h4>{{ $product['marca'] }}</h4>
            <h4>{{ $product['modello'] }}</h4>
            <img src="/img/{{ $product['primaryImage'] }}" alt="img1">
            @if ($product['discount'] != null)
                <p><strong>Discount:</strong>{{ $product['discount'] }}</p>
            @endif
            <p><strong>Prezzo:</strong>{{ $product['lastPrice'] }}&euro;</p>
            <p><strong>Valutazione:</strong>5/5</p>
            <p><strong>Dettagli:</strong></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ratione maiores expedita laboriosam,
                dolores, illo recusandae voluptate quae perspiciatis labore id repellat at quam numquam earum! Dolore
                excepturi voluptas facilis.</p>
            <button class="btn"><a href="{{ route('home') }}">Torna alla Home</a></button>
        </div>
    </div>
    </div>
@endsection
