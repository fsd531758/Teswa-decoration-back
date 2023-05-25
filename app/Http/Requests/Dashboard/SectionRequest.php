<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class SectionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            // 'image' => 'required_without:id|max:900|image',
            // 'icon' => 'nullable|string',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string', Rule::unique('section_translations', 'title')->ignore($this->id, 'section_id')]];
        }

        return $rules;
    }
}
