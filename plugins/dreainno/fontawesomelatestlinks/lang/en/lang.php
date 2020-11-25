<?php return [
    'plugin' => [
        'name' => 'Font Awesome latest Links',
        'description' => 'It will add the latest font awesome links into your project'
    ],
    'components' => [
        'fontawesomelatestlinks' => [
            'name' => 'Font Awesome Latest CSS Link',
            'description' => 'The latest Font Awesome css link'
        ]
    ],
    'formwidgets' => [
        'fontawesomeiconslist' => [
            'empty_label' => 'Nothing Selected',
            'empty_option' => 'Select icon...'
        ]
    ],
    'settings' => [
        'name' => 'Font Awesome Latest Links',
        'description' => 'Set the latest Font Awesome 5 link information',
        'fontawesome_link' => 'Font Awesome Link',
        'fontawesome_link_placeholder' => 'Put the relevant Font Awesome link',
        'fontawesome_link_attributes' => 'Link Attributes',
        'fontawesome_link_attributes_prompt' => 'Add a new link attribute',
        'fontawesome_link_attributes_attribute' => 'Attribute',
        'fontawesome_link_attributes_attribute_placeholder' => 'Enter attribute name',
        'fontawesome_link_attributes_value' => 'Value',
        'fontawesome_link_attributes_value_placeholder' => 'Enter attribute value',
    ]
];