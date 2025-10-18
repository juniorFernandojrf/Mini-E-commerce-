@extends('layouts.app')
@section('title', 'Página Inicial')
@section('content')
    <div>
        @include('livewire..pages.site.content.featured-collections')
        @include('livewire..pages.site.content.new-products')
        @include('livewire..pages.site.content.hot-deal')
        @include('livewire..pages.site.content.featured-collection')
    </div>
@endsection
