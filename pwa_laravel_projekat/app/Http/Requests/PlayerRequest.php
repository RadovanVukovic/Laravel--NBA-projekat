<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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
            'years'=>'required|gte:15|lte:50',
            'height'=>'required|gte:1.6|lte:2.5',
            'weight'=>'required|gte:60|lte:200',
        ];
    }

    public function messages()
    {
        return [
            'years.required' => 'Polje za broj godina ne sme biti prazno!',
            'years.gte' => 'Broj godina igraca ne sme biti manji od 15!',
            'years.lte' => 'Broj godina igraca ne sme biti veci od 50!',

            'height.required' => 'Polje za visinu ne sme biti prazno!',
            'height.gte' => 'Visina igraca ne sme biti manja od 1.60cm!',
            'height.lte' => 'Visina igraca ne sme biti veca od 2.50cm!',

            'weight.required' => 'Polje za tezinu ne sme biti prazno!',
            'weight.gte' => 'Tezina igraca ne sme biti manja od 60kg!',
            'weight.lte' => 'Tezina igraca ne sme biti veca od 200kg!',
        ];
    }
}
