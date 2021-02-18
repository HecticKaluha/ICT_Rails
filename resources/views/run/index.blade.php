@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($runs as $run)
        <p>{{$run}}</p>
    @endforeach
@endsection
