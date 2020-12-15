@twillBlockTitle('Feature Card')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('input', [
    'name' => 'title_first',
    'label' => 'Title first',
    'translated' => true,
])

@formField('input', [
    'name' => 'title_second',
    'label' => 'Title second',
    'translated' => true,
])

@formField('input', [
    'name' => 'title_third',
    'label' => 'Title third',
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

@formField('input', [
    'name' => 'button_label',
    'label' => 'Button label',
    'translated' => true,
])

@formField('input', [
    'name' => 'button_url',
    'label' => 'Button URL',
])

@formField('medias', [
    'name' => 'image',
    'label' => 'Image',
])

@formField('checkbox', [
    'name' => 'image_mockup',
    'label' => 'Enable image mockup',
    'default' => true,
])

@formField('radios', [
    'name' => 'image_position',
    'label' => 'Image position',
    'inline' => true,
    'default' => 'left',
    'options' => [
        [
            'value' => 'left',
            'label' => 'Left'
        ],
        [
            'value' => 'right',
            'label' => 'Right'
        ],
    ]
])

@formField('input', [
    'name' => 'background_color',
    'label' => 'Background color',
])
