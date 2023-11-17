@extends('layouts.main')

@section('content')
    <div class="container">

        <div class="product-card d-flex">

            <!-- box-img product -->
            <div class="col-product">
                <div class="box-img">
                    <a href=""><img src="#" alt="img1"></a>
                    <a href="#"><img class="hidden" src="#" alt=""></a>
                    <span class="heart">&hearts;</span>
                    <div class="labels">
                        <span class="discount"></span>
                        <span class="green-piece">Sostenibilità</span>
                    </div>
                </div>

                <!-- name and price product -->
                <div class="details-product">
                    <h6></h6>
                    <h4></h4>
                    <span class="product-actual-price"></span>
                    <span class="product-old-price"></span></span>
                </div>
            </div>

        </div>

    </div>
    </main>
@endsection
