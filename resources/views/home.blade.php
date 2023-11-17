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
                    <a class="link-details" href="{{ route('productDetail') }}">
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
                            <span class="product-old-price">{{ $item['fullPrice'] }}</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
