@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($vehicles as $vehicle)
        <p>{{$vehicle->vehicleType}}</p>
    @endforeach
@endsection
