<?php 

return [
    'email' => [
            'is_unique' => 'Ese correo electrónico ya está registrado'
        ],
        'password_confirmation' => [
            'required' => 'Porfavor, repita la contraseña',
            'matches' => 'Porfavor, meta la misma contraseña de nuevo'
        ]

];