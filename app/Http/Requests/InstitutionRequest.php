<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionRequest extends FormRequest
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
        return [
            'upazila_id' => ['required', 'exists:upazilas,id'],
            'institution_type_id' => ['required', 'exists:institution_types,id'],
            'name' => ['required', 'string', 'max:100'],
            'bn_name' => ['required', 'string', 'max:100'],
            'eiin' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:255'],
            'lat' => ['nullable', 'numeric'],
            'lon' => ['nullable', 'numeric'],
            'established_year' => ['nullable', 'digits:4', 'integer', 'min:1800', 'max:' . date('Y')],
            'website' => ['nullable', 'url', 'max:100'],
        ];
    }


    /**
     * Optional: Custom messages
     */
    public function messages(): array
    {
        return [
            'upazila_id.required' => 'উপজেলা নির্বাচন করুন।',
            'upazila_id.exists' => 'উপজেলা বৈধ নয়।',
            'institution_type_id.required' => 'প্রতিষ্ঠানের ধরন নির্বাচন করুন।',
            'institution_type_id.exists' => 'প্রতিষ্ঠানের ধরন বৈধ নয়।',
            'name.required' => 'ইংরেজিতে নাম লিখুন।',
            'bn_name.required' => 'বাংলায় নাম লিখুন।',
            'established_year.digits' => 'সঠিক প্রতিষ্ঠার বছর লিখুন।',
            'website.url' => 'সঠিক URL লিখুন।',
        ];
    }
}
