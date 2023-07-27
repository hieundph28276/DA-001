<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $rules = [];
        //lấy ra các phương thức  hoạt động 
        $currenAction = $this->route()->getActionMethod();
        switch ($this->method()):
            case 'POST':
                switch ($currenAction):
                    case 'add':
                        $rules = [
                            // dd(1212),
                            "name" => "required|unique:category"
                        ];
                        break;
                endswitch;
        endswitch;
        return  $rules;
    }
}