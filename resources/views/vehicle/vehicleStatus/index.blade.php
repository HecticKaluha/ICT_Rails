@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($vehicleStatuses as $vehicleStatus)
        <p>{{$vehicleStatus}}</p>
    @endforeach
@endsection
