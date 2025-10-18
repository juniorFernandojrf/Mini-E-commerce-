@extends('layouts.app')
@section('title', 'Detalhes do Produto')
@section('content')
    <div>
        @include('livewire..pages.site.details.navigation')
        @include('livewire..pages.site.details.product-filter')
    </div>
@endsection
