@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($vehicleTypes as $vehicleType)
        <p>{{$vehicleType}}</p>
    @endforeach
@endsection
