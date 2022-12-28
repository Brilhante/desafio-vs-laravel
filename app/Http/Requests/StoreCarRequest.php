<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class StoreCarRequest extends FormRequest
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
            'nome' => ['required','min:2','max:20'],
            // 'slug' => ['required', 'unique:cars,slug,' . $this->car->id],
            'slug' => ['required', ValidationRule::unique('cars')->ignore($this->car)],
            'marca' => ['required','min:2','max:20'],
            'modelo' => ['required','min:2','max:20'],
            'foto' => ['']
        ];
    }
}
