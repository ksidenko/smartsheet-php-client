<?php return [
    'baseUrl' => 'https://api.smartsheet.com',
    'apiVersion' => '2.0',
    'operations' => [
        'ListSheetColumns' => [
            'httpMethod' => 'GET',
            'uri' => '/{ApiVersion}/sheets/{id}/columns',
            'responseModel' => 'Column',
            'parameters' => [
                'ApiVersion' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'uri',
                ],
                'id' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'uri',
                ],
            ],
        ],
        'ListSheets' => [
            'httpMethod' => 'GET',
            'uri' => '/{ApiVersion}/sheets',
            'responseModel' => 'Sheet',
            'parameters' => [
                'ApiVersion' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'uri',
                ],
            ],
        ],
        'ListUsers' => [
            'httpMethod' => 'GET',
            'uri' => '/{ApiVersion}/users',
            'responseModel' => 'User',
            'parameters' => [
                'ApiVersion' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'uri',
                ],
                'email' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'query',
                ],
            ]
        ],
        'GetUser' => [
            'httpMethod' => 'GET',
            'uri' => '/{ApiVersion}/user/{id}',
            'responseModel' => 'User',
            'parameters' => [
                'ApiVersion' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'uri',
                ],
                'id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
            ]
        ],
        'GetCurrentUser' => [
            'httpMethod' => 'GET',
            'uri' => '/{ApiVersion}/users/me',
            'responseModel' => 'User',
            'parameters' => [
                'ApiVersion' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'uri',
                ],
            ]
        ],
        'AddUser' => [
            'httpMethod' => 'POST',
            'uri' => '/{ApiVersion}/users',
            'responseModel' => 'Result',
            'parameters' => [
                'ApiVersion' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'uri',
                ],
                'email' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json'
                ],
                'admin' => [
                    'required' => true,
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'licensedSheetCreator' => [
                    'required' => true,
                    'type' => 'boolean',
                    'location' => 'json'
                ],
                'firstName' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json'
                ],
                'lastName' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json'
                ],
                'resourceManager' => [
                    'required' => false,
                    'type' => 'boolean',
                    'location' => 'json'
                ],
                'sendEmail' => [
                    'required' => false,
                    'type' => 'boolean',
                    'location' => 'query'
                ],
            ]
        ],
        'UpdateUser' => [
            'httpMethod' => 'PUT',
            'uri' => '/{ApiVersion}/user/{id}',
            'responseModel' => 'Result',
            'parameters' => [
                'ApiVersion' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'uri',
                ],
                'id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'admin' => [
                    'required' => true,
                    'type' => 'boolean',
                    'location' => 'json',
                ],
                'licensedSheetCreator' => [
                    'required' => true,
                    'type' => 'boolean',
                    'location' => 'json'
                ],
                'firstName' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json'
                ],
                'lastName' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'json'
                ],
                'resourceManager' => [
                    'required' => false,
                    'type' => 'boolean',
                    'location' => 'json'
                ],
            ]
        ],
        'DeleteUser' => [
            'httpMethod' => 'DELETE',
            'uri' => '/{ApiVersion}/user/{id}',
            'responseModel' => 'User',
            'parameters' => [
                'ApiVersion' => [
                    'required' => true,
                    'type'     => 'string',
                    'location' => 'uri',
                ],
                'id' => [
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ],
                'transferTo' => [
                    'required' => false,
                    'type' => 'string',
                    'location' => 'query',
                ],
                'removeFromSharing' => [
                    'required' => false,
                    'type' => 'boolean',
                    'location' => 'query',
                ],
            ]
        ]
    ],
    'models' => [
        'User' => [
            'type' => 'object',
            'properties' => [
                'statusCode' => ['location' => 'statusCode']
            ],
            'additionalProperties' => [
                'location' => 'json'
            ]
        ],
        'Sheet' => [
            'type' => 'object',
            'properties' => [
                'statusCode' => ['location' => 'statusCode']
            ],
            'additionalProperties' => [
                'location' => 'json'
            ]
        ],
        'Column' => [
            'type' => 'object',
            'properties' => [
                'statusCode' => ['location' => 'statusCode']
            ],
            'additionalProperties' => [
                'location' => 'json'
            ]
        ],
        'Result' => [
            'type' => 'object',
            'properties' => [
                'statusCode' => ['location' => 'statusCode']
            ],
            'additionalProperties' => [
                'location' => 'json'
            ]
        ]
    ]

];
