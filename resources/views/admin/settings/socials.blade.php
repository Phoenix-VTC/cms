@extends('twill::layouts.settings')

@section('contentFields')
    @formField('input', [
        'label' => 'Support email',
        'name' => 'support_email',
    ])

    @formField('input', [
        'label' => 'Management email',
        'name' => 'management_email',
    ])

    @formField('input', [
        'label' => 'Twitter URL',
        'name' => 'twitter_url',
    ])

    @formField('input', [
        'label' => 'Facebook URL',
        'name' => 'facebook_url',
    ])

    @formField('input', [
        'label' => 'YouTube URL',
        'name' => 'youtube_url',
    ])

    @formField('input', [
        'label' => 'Instagram URL',
        'name' => 'instagram_url',
    ])

    @formField('input', [
        'label' => 'TruckersMP URL',
        'name' => 'truckersmp_url',
    ])
@stop
