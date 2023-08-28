<?php
declare(strict_types=1);
namespace App\Http\Requests\API\Auth;
use Illuminate\Foundation\Http\FormRequest;
final class RegisterationRequest extends FormRequest {
    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            //
        ];
    }
}
