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
            ],
            [
                'value' => 'opening_countdown',
                'label' => 'Opening Countdown',
            ]
        ]
    ])

    @formField('medias', [
        'name' => 'header_image',
        'label' => 'Header image'
    ])

    @formField('checkbox', [
        'name' => 'show_logos',
        'label' => 'Show logos',
        'default' => false
    ])

    @formField('input', [
        'name' => 'header_title_size',
        'label' => 'Header size'
    ])

    @formField('input', [
        'name' => 'button_1_label',
        'label' => 'Button one label',
        'translated' => true
    ])

    @formField('input', [
        'name' => 'button_1_url',
        'label' => 'Button one URL'
    ])

    @formField('input', [
        'name' => 'button_2_label',
        'label' => 'Button two label',
        'translated' => true
    ])

    @formField('input', [
        'name' => 'button_2_url',
        'label' => 'Button two URL'
    ])

    @formField('block_editor')
@stop
