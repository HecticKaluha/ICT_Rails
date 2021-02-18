@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($serviceTypes as $serviceType)
        <p>{{$serviceType}}</p>
    @endforeach
@endsection
