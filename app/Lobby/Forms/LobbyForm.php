<?php
/**
 * Created by PhpStorm.
 * User: Maquina Sentadillas
 * Date: 9/16/14
 * Time: 9:48 PM
 */

namespace Lobby\Forms;

use Laracasts\Validation\FormValidator;

class LobbyForm extends FormValidator{
    protected $rules = [
        'nombre' => 'required',
        'email' => 'required|email',
        'asunto' => 'required',
        'mensaje' => 'required',
    ];
} 