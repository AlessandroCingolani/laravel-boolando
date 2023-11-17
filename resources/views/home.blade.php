@extends('layouts.main')

@php
    $products = config('products');
@endphp


@section('content')
    <div class="container">
        <!-- box-img product -->
        <div class="product-card d-flex">
            @foreach ($products as $item)
                <div class="col-product">
                    <div class="box-img">
                        <a href="#"><img src="/img/{{ $item['primaryImage'] }}" alt="img1"></a>
                        <a href="#"><img class="hidden" src="/img/{{ $item['secondaryImage'] }}" alt=""></a>
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
