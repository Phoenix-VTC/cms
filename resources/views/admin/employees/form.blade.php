@extends('twill::layouts.form')

@section('contentFields')
    @formField('medias', [
        'name' => 'header_image',
        'label' => 'Header Image'
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
        'name' => 'header_title_size',
        'label' => 'Header size',
        'default' => '4xl'
    ])

    @formField('medias', [
        'name' => 'image',
        'label' => 'Image'
    ])

    @formField('input', [
        'name' => 'name',
        'label' => 'Name'
    ])

    @formField('input', [
        'name' => 'email',
        'label' => 'Email'
    ])

    @formField('input', [
        'name' => 'branch',
        'label' => 'Branch',
        'translated' => true
    ])

    @formField('input', [
        'name' => 'job_title',
        'label' => 'Job Title',
        'translated' => true
    ])

    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'toolbarOptions' => [
            'bold',
            'italic',
            ['list' => 'bullet'],
            ['list' => 'ordered'],
            [ 'script' => 'super' ],
            [ 'script' => 'sub' ],
            'link',
            'clean'
        ],
        'translated' => true
    ])

    @formField('input', [
        'name' => 'position',
        'label' => 'Position',
        'type' => 'number'
    ])
@stop
