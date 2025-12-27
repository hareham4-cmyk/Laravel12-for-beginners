<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    protected function prepareForValidation()
    {
        $this->merge([
            'parent_id' => $this->parentId,
            'worktime_id' => $this->workTimeId,
        ]);
    }
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|unique:stations,name,' . $this->route('station')->id ,
            'parent_id' => 'sometimes|exists:stations,id',
            'longitude' => 'required',
            'latitude' => 'required',
            'worktime_id' => 'required|exists:work_times,id'
        ];
    }

}
