<?php
declare(strict_types=1);
namespace App\Services\Api;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

final class AccessTokenService {
    public function create(Model|User $user): string {
        $token = Str::random(64);
        return $token;
    }
}