<?php
declare(strict_types=1);
namespace App\Http\Controllers\API\Auth;
use Illuminate\Contracts\Auth\Factory;
use App\Http\Requests\API\Auth\LoginRequest;
use App\Exceptions\Api\AuthenticationException;

final class LoginController{
    public function __construct(private readonly Factory $auth) {
        //
    }

    public function __invoke(LoginRequest $request) {
        if(! $this->auth->guard()->attempt($request->only('email', 'password'))) {
            throw new AuthenticationException(message: 'Invalid credentials.');
        }
    }
}
