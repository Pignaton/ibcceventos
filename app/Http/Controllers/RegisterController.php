<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function register(Request $request)
    {

        $data = $request->only([
            'name',
            'email',
            'age',
            'birthdate',
            'phone',
            'sex',
            'cep',
            'road',
            'city',
            'state',
            'number',
            'complement'
        ]);

        $validator = $this->validator($data);
        if ($validator->fails()) {
            return redirect()->route('cadastro')
                ->withErrors($validator)
                ->withInput();
        }
        $register = $this->create($data);
        return redirect()->to('cadastro');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['string', 'email', 'max:100'],
            'age' => ['required', 'numeric', 'min:3'],
            //'phone' => ['required', 'regex:/(01)[0-9]{9}/'],
            'phone' => ['required'],
            'birthdate' => ['required', 'date_format:"d/m/Y"' ]
        ]);
    }

    protected function create(array $data)
    {
        return Register::create([
            'age' => $data['age'],
            'name' => $data['name'],
            'email' => $data['email'],
            'birthdate' => $data['birthdate'],
            'phone' => $data['phone'],
            'sex' => $data['sex']
        ]);
    }
}
