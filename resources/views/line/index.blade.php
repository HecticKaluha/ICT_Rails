@extends('layouts.master')
@push('styles')
@endpush
@section('content')
    <!--Table Card-->
    <div class="bg-gray-900 border border-gray-800 rounded shadow">
        <div class="border-b border-gray-800 p-3">
            <h5 class="font-bold uppercase text-gray-600">Table</h5>
        </div>
        <div class="p-5">
            @foreach($lines as $line)
                <p>{{$line}}</p>
            @endforeach
            <p class="py-2"><a href="#" class="text-white">See More issues...</a></p>
        </div>
    </div>
    <!--/table Card-->
@endsection
