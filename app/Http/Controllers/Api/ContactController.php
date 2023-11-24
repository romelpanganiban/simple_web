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
        $contacts = contact::all();

        return $contacts->count() > 0
        ? response(['status' => 200, 'contacts' => $contacts], 200)
        : response(['status' => 404, 'message' => 'No Records Found'], 404);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'phone_number' => 'required|digits:10',
            'message' => 'required|string|max:191',
        ]);
        
        if ($validate->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validate->messages()
            ], 422);
        }
        
        $contact = Contact::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ]);
        
        return response()->json([
            'status' => $contact ? 200 : 500,
            'message' => $contact ? 'Contact Created Successfully' : 'Something went wrong!'
        ], $contact ? 200 : 500);
    }


    public function show($id)
    {
        $contact = Contact::find($id);
        return $contact
        ? response()->json(['status' => 200, 'contact' => $contact], 200)
        : response()->json(['status' => 404, 'message' => 'No Contact Found!'], 404);
    }

    public function edit($id)
    {
        $contact = Contact::find($id);

        return $contact
        ? response()->json(['status' => 200, 'contact' => $contact], 200)
        : response()->json(['status' => 404, 'message' => 'No Contact Found!'], 404);
    }

    public function update(Request $request, int $id)
{
    $validate = Validator::make($request->all(), [
        'name' => 'required|string|max:191',
        'phone_number' => 'required|digits:10',
        'message' => 'required|string|max:191',
    ]);

    if ($validate->fails()) {
        return response()->json([
            'status' => 422,
            'errors' => $validate->messages()
        ], 422);
    }

    $contact = Contact::find($id);

    if (!$contact) {
        return response()->json([
            'status' => 404,
            'message' => 'No Data Found!'
        ], 404);
    }

        $contact->update($request->only(['name', 'phone_number', 'message']));

        return response()->json([
            'status' => 200,
            'message' => 'Contact updated Successfully'
        ], 200);
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
    
        if ($contact) {
            $contact->delete();
            return response()->json(['status' => 200, 'message' => 'Contact Deleted Successfully!'], 200);
        }
    
        return response()->json(['status' => 404, 'message' => 'No Data Found!'], 404);
    }
}
