@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($services as $service)
        <p>{{$service}}</p>
    @endforeach
@endsection
