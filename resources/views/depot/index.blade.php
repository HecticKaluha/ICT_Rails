@extends('layouts.master')
@push('styles')
    <style type="text/css">p {color: red;}</style>
@endpush
@section('content')
@foreach($depots as $depot)
    <p>{{$depot->city}}</p>
@endforeach
@endsection
