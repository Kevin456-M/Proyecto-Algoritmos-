<?php 

return [
    'email' => [
            'is_unique' => 'That email adress is taken'
        ],
        'password_confirmation' => [
            'required' => 'Please confirm the password',
            'matches' => 'Please enter the same passwrd again'
        ]

];