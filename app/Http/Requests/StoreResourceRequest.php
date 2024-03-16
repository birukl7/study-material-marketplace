<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResourceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return true;
    // }

    // /**
    

    public function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
            'resource_file' => 'required|file',
            'category' => $this->customCategoryRules(),
            'course' => 'required|string',
            'departments' => 'required|array|min:1',
            'departments.*' => 'string', // Each element inside "departments" should be a string
        ];
    }

    protected function customCategoryRules() 
    {
        return ['required', 'string', 'in:engineering,science,software'];
    }
}
