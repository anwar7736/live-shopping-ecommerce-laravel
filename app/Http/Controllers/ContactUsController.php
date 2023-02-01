<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $data = [];
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_phone'] = $request->customer_phone;
        $data['message_title'] = $request->message_title;
        $data['message_body'] = $request->message_body;
        $data['created_at'] = now();
        $data['updated_at'] = now();

        $response = Http::post('https://advertbangladesh.com/testpos/api/contact-us', [
            $data
        ]);
        $data = $response->json();
        if($data['success'])
        {
            return response()->json(['success'=>true, 'msg'=>$data['msg']]);
        }        
        else
        {
            return response()->json(['success'=>false, 'msg'=>$data['msg']]);
        }

    }
}
