@twillBlockTitle('Text')
@twillBlockIcon('text')
@twillBlockGroup('app')

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
        'image',
        'clean'
    ],
    'translated' => true
])

@formField('input', [
    'name' => 'background_color',
    'label' => 'Background color',
])
