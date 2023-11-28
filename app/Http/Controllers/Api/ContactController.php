<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    protected function validationErrorResponse($validator)
    {
        return response()->json(['status' => 422, 'errors' => $validator->messages()->all()], 422);
    }

    public function responseOnCreate()
    {
        return response()->json(['status' => 200, 'message' => 'Contact Created Successfully'], 200);
    }

    public function index()
    {
        $contacts = Contact::all();

        return $contacts->isEmpty()
            ? response(['status' => 404, 'message' => 'No Records Found'], 404)
            : response(['status' => 200, 'contacts' => $contacts], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'phone_number' => 'required|digits:10',
            'message' => 'required|string|max:191',
        ]);

        if ($validator->fails()) {
            return $this->validationErrorResponse($validator);
        }

        Contact::create($request->all());
        return $this->responseOnCreate();
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'phone_number' => 'required|digits:10',
            'message' => 'required|string|max:191',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()], 422);
        }
    
        $contact = Contact::find($id);
    
        if (!$contact) {
            return response()->json(['status' => 404, 'message' => 'No Data Found!'], 404);
        }
    
        $contact->fill($request->all());
        $contact->save();
    
        return response()->json(['status' => 200, 'message' => 'Contact updated successfully'], 200);
    }
    
    

    public function destroy($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json(['status' => 404, 'message' => 'No Data Found!'], 404);
        }
        $contact->delete();
        return $this->responseOnCreate();
    }
}


