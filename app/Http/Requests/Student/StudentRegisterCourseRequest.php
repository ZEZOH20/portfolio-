<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StudentRegisterCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return (Auth::check())? true: false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
           'course_code'=>['required','digits:7','integer'],
           'term'=>['required','integer','in:1,2,3,4,5,6,7,8'],
           'status'=>['in:finished,failed'],
           'score'=>[$this->has('status') ? 'required' : '' ,'string','in:A+,A,A-,B+,B,B-,C+,C,C-,D+,D,D-,F'] ,
        ];
    }
}
