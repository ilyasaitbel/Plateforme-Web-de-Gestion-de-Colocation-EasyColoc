<?php

namespace App\Http\Requests;

use App\Models\Colocation;
use Illuminate\Foundation\Http\FormRequest;

class UpdateColocationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user();
        $colocation = $this->route('colocation');
        if ($user->isAdmin()) {
            return true;
        }
        $membership = $user->memberships()->where('colocation_id')
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
