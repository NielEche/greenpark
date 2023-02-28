<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contacts::all();
        return view('admin.bookings.index', compact(['contact']));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //code...
            $contacts = new Contacts();

            $contacts->name = $request->name;
            $contacts->email = $request->email;
            $contacts->about = $request->about;

            $contacts->save();
     
            return redirect('contact')->with('message', 'Submitted  Succesfully!');
            

        } catch (\Throwable $th) {
    
            //throw $th;
            $response = [
              'ERROR' => false,
              'message' => "OOPS! Something fucking wennt wrong"
            ];
            return response()->json($response, 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function showData($id)
    {
        $contact = Contacts::find($id);
        return view('admin.bookings.edit', ['contact'=>$contact]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        try {

            $contact = Contacts::find($request->id);

              $contact->update([
                'name' => $request['name'],
                'email' => $request['email'],
                'about' => $request['about'],
            ]);
            


            $contact->save();
    
            return redirect('appointment')->with('message', 'Contact Updated  Succesfully!');
           

        } catch (\Throwable $th) {
   
            throw $th;
            $response = [
              'success' => false,
              'message' => "OOPS! Something fucking wennt wrong"
            ];
            return response()->json($response, 422);
        }

   
   }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contacts::find($id);

        $contact->delete('delete from contacts  where id = ?',[$id]);
        
        return redirect('appointment')->with('message','Contact deleted successfully');
      
    }
}
