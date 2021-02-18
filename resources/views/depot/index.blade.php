@extends('layouts.master')
@push('styles')
    <style type="text/css">p {color: red;}</style>
@endpush
@section('content')
@foreach($depots as $depot)
    <p>{{$depot->name}}</p>
    <ul>
        @foreach($depot->depotLines as $depotLine)
            <li>{{$depotLine->lineNr}} : {{$depotLine->depotLineCategories->name}}</li>
        @endforeach
    </ul>

@endforeach
@endsection
