@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="product-card d-flex">
            <!-- box-img product -->
            <div class="col-product">
                <div class="box-img">
                    <a href="#"><img src="#" alt="img1"></a>
                    <a href="#"><img class="hidden" src="" alt=""></a>
                    <span class="heart">&hearts;</span>
                    <div class="labels">
                        <span class="discount">discount</span>
                        <span class="green-piece">Sostenibilità</span>
                    </div>
                </div>

                <!-- name and price product -->
                <div class="details-product">
                    <h6>nome</h6>
                    <h4>modello</h4>
                    <span class="product-actual-price">prezzo</span>
                    <span class="product-old-price">prezzo vecchio</span>
                </div>
            </div>
        </div>

    </div>
@endsection
