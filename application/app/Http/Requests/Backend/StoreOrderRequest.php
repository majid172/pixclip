<?php
namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'                 => 'required|string|max:255',
            'image_quantity'        => 'required|integer|min:1',
            'service_id'            => 'required|array',
            'instruction'           => 'nullable|string',
            'complexity'            => 'required|string',
            'return_file_extension' => 'required|array',
            'turnaround'            => 'required',

            // at least one required
            'upload_files'          => 'required_without:image_links|array',
            'upload_files.*'        => 'file|max:10240',

            'image_links'           => 'required_without:upload_files|array',
            'image_links.*'         => 'nullable|url',
        ];
    }

    public function messages()
    {
        return [
            'title.required'                 => 'The job title is required.',
            'image_quantity.required'        => 'Please specify the quantity of images.',
            'service_id.required'            => 'Please select at least one service.',
            'complexity.required'            => 'Please select the image complexity.',
            'return_file_extension.required' => 'Please select at least one return file extension.',

            // important 👇
            'upload_files.required_without'  => 'Please upload at least one image or provide an image link.',
            'image_links.required_without'   => 'Please upload at least one image or provide an image link.',
        ];
    }

}
