<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $appointment = Appointment::orderBy('id', 'desc')->get();
        return view('admin.bookings.index', compact(['appointment']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $appointment = Appointment::find($id);
        return view('admin.bookings.edit', ['appointment'=>$appointment]); 
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

            $appointment = Appointment::find($request->id);

              $appointment->update([
                'name' => $request['name'],
                'date' => $request['date'],
                'time' => $request['time'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'location' => $request['location'],
                'eventTxt' => $request['eventTxt'],
                'status' => $request['status'],
            ]);
            


            $appointment->save();
    
            return redirect('bookingspage')->with('message', 'Appointment Updated  Succesfully!');
           

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
        $appointment = Appointment::find($id);

        $appointment->delete('delete from appointments where id = ?',[$id]);
        
        return redirect('bookingspage')->with('message','Appointments deleted successfully');
      
    }
}
