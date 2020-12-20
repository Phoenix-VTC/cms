@extends('errors::illustrated-layout')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))

@section('image')
    <div style="background-image: url({{ asset('assets/svg/500.svg') }});"
         class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('head')
    <script
        src="https://browser.sentry-cdn.com/5.29.2/bundle.min.js"
        integrity="sha384-ir4+BihBClNpjZk3UKgHTr0cwRhujAjy/M5VEGvcOzjhM1Db79GAg9xLxYn4uVK4"
        crossorigin="anonymous">
    </script>
@endsection

@section('content')
    @if(app()->bound('sentry') && app('sentry')->getLastEventId())
        <div class="subtitle">Error ID: {{ app('sentry')->getLastEventId() }}</div>
        <script>
            Sentry.init({dsn: 'https://dc50d9a4831941e0811e66ef2780dd30@o105402.ingest.sentry.io/1548112'});
            Sentry.showReportDialog({eventId: '{{ app('sentry')->getLastEventId() }}'});
        </script>
    @endif
@endsection
