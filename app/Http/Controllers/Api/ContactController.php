<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $contact = contact::all();

        if($contact->count() > 0){
            
            $data = [
                'status' => 200,
                'contact' => $contact
            ];
    
            return response()->json($data, 200);
        }else{
            
            $data = [
                'status' => 404,
                'message' => 'No Records Found'
            ];
    
            return response()->json($data, 404);
        }
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'phone_number' => 'required|digits:10',
            'message' => 'required|string|max:191',
        ]);

        if($validate->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validate->messages()
            ],422);
        }else{
            $contact = Contact::create([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'message' => $request->message,
            ]);

            if($contact){
                
                return response()->json([
                    'status' => 200,
                    'message' => "Contact Created Successfully"
                ], 200);
            }else{

                return response()->json([
                    'status' => 500,
                    'message' => "Something went wrong!"
                ], 500);
            }
        }
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        if($contact){

            return response()->json([
                'status' => 200,
                'contact' => $contact
            ], 200);

        }else{
            return response()->json([
                'status' => 404,
                'message' => "No Contact Found!"
            ], 404);
        }
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        if($contact){

            return response()->json([
                'status' => 200,
                'contact' => $contact
            ], 200);

        }else{
            return response()->json([
                'status' => 404,
                'message' => "No Contact Found!"
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'phone_number' => 'required|digits:10',
            'message' => 'required|string|max:191',
        ]);

        if($validate->fails()){
            return response()->json([
                'status' => 422,
                'errors' => $validate->messages()
            ],422);
        }else{

            $contact = Contact::find($id);

            if($contact){
                
                $contact->update([
                    'name' => $request->name,
                    'phone_number' => $request->phone_number,
                    'message' => $request->message,
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => "Contact updated Successfully"
                ], 200);
            }else{

                return response()->json([
                    'status' => 404,
                    'message' => "No Data Found!"
                ], 404);
            }
        }
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        
        if($contact){

            $contact->delete();
            return response()->json([
                'status' => 200,
                'message' => "Contact Deleted Successfully!"
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "No Data Found!"
            ], 404);
        }
    }
}
