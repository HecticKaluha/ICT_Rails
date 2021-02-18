@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    @foreach($roles as $role)
        <p>{{$role}}</p>
    @endforeach
@endsection
