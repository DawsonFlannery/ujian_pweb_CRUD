<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Mahasiswas;

class StoreMahasiswasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //[NEW REQUEST]
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
        'npm'       => 'required|numeric|unique:mahasiswas,npm', 
        'nama'      => 'required|string|max:50', 
        'jk'        => 'required|in:Laki-Laki,Perempuan', 
        'kelas'     => 'required|string|max:10',
        'jurusan'   => 'required|string|max:30',
        'fakultas'  => 'required|string|max:30',
        'region'    => 'required|string|max:30',
        'no_telp'   => 'required|string'
        ];
    }
}
