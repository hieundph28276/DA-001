<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
                            'name' => 'required',
                            'email' => 'required|email|unique:users',
                            'password' => 'required|min:6',
                            // 'role' => 'required|in:0,1', 
                        ];
                        break;
                endswitch;
        endswitch;
        return  $rules;
    }
    public function messages()
    {
        return [
            'name.required'=>'Bắt buộc phải nhập tên',
            'email.required'=>'Bắt buộc phải nhập email',
            'email.unique'=>'emai đã tồn tại',
            'password.required'=>'Bắt buộc mật khẩu'
        ];
    }
}
