@twillBlockTitle('Testimonial')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('input', [
    'name' => 'name',
    'label' => 'Name',
])

@formField('input', [
    'name' => 'position',
    'label' => 'Position',
    'translated' => true,
])

@formField('wysiwyg', [
    'name' => 'text',
    'label' => 'Text',
    'placeholder' => 'Text',
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

@formField('medias', [
    'name' => 'image',
    'label' => 'Image',
])

@formField('input', [
    'name' => 'background_color',
    'label' => 'Background color',
])
