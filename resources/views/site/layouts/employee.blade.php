@extends('site.app')

@section('navigation')
    @include('site.partials.navigation')
@endsection

@section('contents')
    @include('site.modules.employee')
@endsection

@section('footer')
    @include('site.partials.footer')
@endsection
