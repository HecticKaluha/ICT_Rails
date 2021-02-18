@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($depotLines as $depotLine)
        <p>{{$depotLine}}</p>
        <p>{{$depotLine->depotLineCategory}}</p>
    @endforeach
@endsection
