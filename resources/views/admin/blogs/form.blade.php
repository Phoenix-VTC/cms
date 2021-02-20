@extends('twill::layouts.form')

@section('contentFields')
    @formField('medias', [
        'name' => 'image',
        'label' => 'Header image',
    ])

    @formField('medias', [
        'name' => 'author_image',
        'translated' => false,
        'label' => 'Author image',
    ])

    @formField('input', [
        'name' => 'author',
        'label' => 'Author',
        'translated' => false,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true
    ])

    @formField('block_editor')
@stop
