<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'category_id' => 'required_without:id|exists:categories,id',
            'images' => 'required_without:id|array',
            'images.*' => 'image|max:900',

        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string', Rule::unique('business_translations', 'title')->ignore($this->id, 'business_id')]];
            $rules += [$locale . '.short_description' => ['required', 'string']];
            $rules += [$locale . '.description' => ['required', 'string']];
        }

        return $rules;
    }
}
