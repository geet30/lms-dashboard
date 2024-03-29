<?php

namespace App\Http\Requests\Account;

use App\Rules\{MatchOldPassword,CheckUniqueEmail};
use Illuminate\Foundation\Http\FormRequest;

class SettingsEmailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'            => ['required','string','email','max:255',new CheckUniqueEmail],
            'current_password' => ['required', new MatchOldPassword],
        ];
    }
}
