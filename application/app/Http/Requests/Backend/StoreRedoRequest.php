<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreRedoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'instruction'        => 'required|string',
            'upload_files.*'     => 'nullable|file|max:10240',
            'redo_image_links.*' => 'nullable|url',
        ];
    }

    public function messages()
    {
        return [
            'instruction.required'    => 'Please provide instructions for the redo.',
            'redo_image_links.*.url'  => 'One or more image links are invalid URLs.',
        ];
    }
}
