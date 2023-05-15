<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Certificado;
use App\Models\User;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function index(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email', $email)->first();
        
        if ($user) {
            $user_id = $user->id;
            $certificados = Certificado::where('user_id', $user_id)->get();
            return $certificados;
        } else {
            return response('Usuário não encontrado', 404);
        }
    }

}
