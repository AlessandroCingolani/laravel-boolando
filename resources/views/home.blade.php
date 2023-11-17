@extends('layouts.main')

@php
    $product = config('products');
@endphp


@section('content')
    @include('partials.product_print')
@endsection
