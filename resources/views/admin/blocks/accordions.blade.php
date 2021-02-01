@twillBlockTitle('Accordions')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'translated' => true
])

@formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Description',
    'placeholder' => 'Description',
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

@formField('repeater', ['type' => 'accordion'])
