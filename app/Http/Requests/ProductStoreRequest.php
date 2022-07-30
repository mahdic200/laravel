<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $regex = '/ک+[ا-ی]*ک+[ا-ی]*ش+|ک+[سص]+|ک+ی+ر+ی*|گ+ا+ی+د+م*|ب+گ+ا+ی+|ک+و+ن+ی*|(م+ا+د+ر*)? *ج+ن+د+ه+|ب+ی+[ ن]*ا+م+و+س+|خ+ا+ی+ه+|خ+و*ا+ه*ر+ک+[سص]+د*ه+|ح+ر+[وا]+م+ +ز+ا+د+ه*/i'; 
        return [
            'title' => ['required', 'min:5','max:150','not_regex:' . $regex],
            'info' => ['required', 'min:10', 'max:255', 'not_regex:' . $regex],
            'termsofuse' => 'filled|accepted:true',
            'image' => 'required|mimetypes:image/jpg,image/jpeg,image/png|file|between:20,300',
        ];
    }
    public function messages()
    {
        return [
            'termsofuse.accepted' => 'لطفا گزینه قوانین و شرایط را انتخاب کنید.',
            'title.not_regex' => 'استفاده از الفاظ رکیک در عنوان ممنونع میباشد.',
            'info.not_regex' => 'استفاده از الفاظ رکیک در توضیحات ممنونع میباشد.',
        ];
    }
}
