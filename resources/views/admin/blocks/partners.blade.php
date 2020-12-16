@twillBlockTitle('Partners')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'translated' => true
])

@formField('repeater', ['type' => 'partner'])

@formField('input', [
    'name' => 'background_color',
    'label' => 'Background color'
])
