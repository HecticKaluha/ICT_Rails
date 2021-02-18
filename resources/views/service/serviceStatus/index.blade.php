@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($serviceStatuses as $serviceStatus)
        <p>{{$serviceStatus}}</p>
    @endforeach
@endsection
