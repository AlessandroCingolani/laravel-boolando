@extends('layouts.main');
@section('content')
    <div class="container">

        <div class="product-card d-flex">
            @foreach ($product_bambino as $item)
                <div class="col-product">
                    <a class="link-details" href="{{ route('productDetail', ['slug' => $item['slug']]) }}">
                        <div class="box-img">
                            <img src="/img/{{ $item['primaryImage'] }}" alt="img1">
                            <img class="hidden" src="/img/{{ $item['secondaryImage'] }}" alt="">
                            <span class="heart">&hearts;</span>
                            <div class="labels">
                                @if ($item['discount'] != null)
                                    <span class="discount">{{ $item['discount'] }}</span>
                                @endif
                                @if ($item['sostenibilita'])
                                    <span class="green-piece">Sostenibilità</span>
                                @endif
                            </div>
                        </div>
                    </a>

                    <!-- name and price product -->
                    <div class="details-product">
                        <h6>{{ $item['marca'] }}</h6>
                        <h4>{{ $item['modello'] }}</h4>
                        <span class="product-actual-price">{{ $item['lastPrice'] }}&euro;</span>
                        @if ($item['fullPrice'] != null)
                            <span class="product-old-price">{{ $item['fullPrice'] }}&euro;</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
