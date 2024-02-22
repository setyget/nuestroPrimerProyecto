<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function formulario()
    {
        return view('formulario');
    }

    public function envioFormulario( Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required'
        ]);

        // $correo = new ContactMailable($request->all());
        // Mail::to('holamundo@setyget.com')->send($correo);
        // Mail::to('holamundo@setyget.com')->send(new ContactMailable($request->all()));
        Mail::to('holamundo@setyget.com')->send(new ContactMailable($request->nombre, $request->email, $request->asunto, $request->mensaje));

        // return redirect()->route('formulario')->with('info', 'Mensaje enviado');
        return view('welcome');

    }

}
