<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return Auth::check();
        return Auth::user()->roles == 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //https://laravel.com/docs/11.x/validation#available-validation-rules
        return [
            // 'name' => 'required',
            // 'price' => 'required',
            // 'stock' => 'required',
            // 'image' => 'required|image',
            // 'category_id' => 'required',
            // 'description' => 'required',
            // 'weight' => 'required',
            // 'weight_unit' => 'required',

        ];
    }
}
