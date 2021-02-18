@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($depotLines as $depotLine)
        <p>{{$depotLine->lineNr}} : {{$depotLine->depotLineCategories->name}}</p>
    @endforeach
@endsection
