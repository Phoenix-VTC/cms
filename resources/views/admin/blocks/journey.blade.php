@twillBlockTitle('Journey')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('input', [
    'name' => 'label',
    'label' => 'Label',
    'translated' => true
])

@formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'translated' => true
])

@formField('input', [
    'name' => 'description',
    'label' => 'Description',
    'translated' => true
])

@formField('input', [
    'name' => 'background_color',
    'label' => 'Background color',
])

@formField('repeater', ['type' => 'journey-step'])
