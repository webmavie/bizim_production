<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoUpdateRequest extends FormRequest
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
            'title' => 'nullable|string|max:255',
            'about' => 'required|string',
            'phone' => 'required',
            'whatsapp' => 'nullable',
            'email' => 'required|email',
            'address' => 'nullable|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'about_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'mobile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'partners' => 'nullable',
            'our_team' => 'nullable',
        ];
    }
}
