@extends('site.app')

@section('navigation')
    @include('site.partials.navigation')
@endsection

@section('contents')
    @include("site.modules.page.{$item->template}")
@endsection

@section('footer')
    @include('site.partials.footer')
@endsection
