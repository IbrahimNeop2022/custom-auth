<?php

namespace Ibrahim\CustomAuth\Http\Controllers;

use Ibrahim\CustomAuth\Classes\CustomRegister;
use Ibrahim\CustomAuth\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    protected $customRegister;

    public function __construct(CustomRegister $customRegister)
    {
        $this->customRegister = $customRegister;
    }

    public function create()
    {
        return $this->customRegister->showRegisterView();
    }

    public function store(RegisterRequest $request)
    {
        return $this->customRegister->createNewUser($request);
    }
}