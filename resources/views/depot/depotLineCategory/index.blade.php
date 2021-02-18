@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($depotLineCategories as $depotLineCategory)
        <p>{{$depotLineCategory}}</p>
    @endforeach
@endsection
