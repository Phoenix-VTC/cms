@twillBlockTitle('Call To Action')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('input', [
    'name' => 'label',
    'label' => 'Label',
    'translated' => true,
])

@formField('input', [
    'name' => 'title',
    'label' => 'Title',
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


@formField('input', [
    'name' => 'background_color',
    'label' => 'Background color',
    'default' => 'primary',
])
