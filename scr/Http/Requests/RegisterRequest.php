<?php 

namespace Ibrahim\CustomAuth\Requests;

use Ibrahim\CustomAuth\Classes\CustomRegister;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
   
    public function rules(): array
    {
        return CustomRegister::validationRules();
    }

}