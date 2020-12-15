@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'header_one',
        'label' => 'Header one',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'header_two',
        'label' => 'Header two',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'header_three',
        'label' => 'Header three',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'header_subtext',
        'label' => 'Header subtext',
        'translated' => true,
        'maxlength' => 255
    ])


    @formField('select', [
        'name' => 'template',
        'label' => 'Template',
        'unpack' => true,
        'options' => [
            [
                'value' => 'default',
                'label' => 'Default'
            ],
            [
                'value' => 'contact',
                'label' => 'Contact'
            ]
    ]
    ])

    @formField('medias', [
        'name' => 'header_image',
        'label' => 'Cover image',
        'note' => 'Also used in listings',
        'fieldNote' => 'Minimum image width: 1500px'
    ])

    @formField('block_editor')
@stop
