@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($vehicleClasses as $vehicleClass)
        <p>{{$vehicleClass}}</p>
    @endforeach
@endsection
