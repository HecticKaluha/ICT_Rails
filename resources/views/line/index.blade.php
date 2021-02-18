@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($lines as $line)
        <p>{{$line}}</p>
    @endforeach
@endsection
