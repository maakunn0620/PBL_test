<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KyujinValidate extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'job_no' => 'required',
            'company' => 'required|max:255',
            'jobs' => 'required|max:255',
            'prefecture' => 'required',
            'department' => 'required',
            'pdf' => 'required|max:255',
            'address' => 'required|max:255',
        ];
    }
}
