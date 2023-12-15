<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
    public function rules(): array
    {
   $type = $this->request->get('type');

        if ($type == 'video') {
            $rules['video'] = 'required';
            $rules['video.*'] = 'required|mimes:mp4,mov,ogg,qt|max:20000';
            $rules['type'] = 'required|in:video,image';
        } else {
            $rules['image'] = 'required';
            $rules['image.*'] = 'required|mimes:jpeg,png,jpg,gif,svg|max:20000';
            $rules['type'] = 'required|in:video,image';
        }


        if (in_array($this->method(), ['PUT', 'PATCH'])) {

            $type = $this->request->get('type');


            if ($type == 'video') {
                $rules['video'] = 'nullable|mimes:mp4,mov,ogg,qt|max:20000';
            } else {
                $rules['image'] = 'nullable|mimes:jpeg,png,jpg,gif,svg|max:20000';
            }
        }
        return $rules;
    }
}
