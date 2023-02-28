<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointment = auth()->user()->appointments;
        return view('dashboard.index', compact(['appointment']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // $validator = Validator::make($request, [
        //     'phone' => ['required'],
        //     'eventTxt' => ['required', 'string', 'max:255']
        // ]);

        // if($validator->fails()){
        //     $response = [
        //         'success' => false,
        //         'message' => "OOPS! Validation Error"
        //       ];
        //       return response()->json($response, 422);
        // }
        
        try {
            
            $user = Auth::user();

            $appointment = new Appointment();

            $appointment->name = $user->name;
            $appointment->email = $user->email;
            $appointment->phone = $request->phone;
            $appointment->location = $request->location;
            $appointment->user_id = $user->id;

            $appointment->date = $request->date;
            $appointment->time = $request->time;
            $appointment->eventTxt = $request->eventTxt;
            $appointment->save();
         

            if($appointment){
                $response = [
                    'success' => true,
                    'message' => "You booked an appointment successfully!"
                  ];
                $status_code = 201;

            } else {
                $response = [
                'success' => false,
                'message' => "OOPS! Something went wrong",
                ];
                $status_code = 401;
            }
            
            return response()->json($response, $status_code);


        } catch (\Throwable $th) {
            throw $th;
            $response = [
              'success' => false,
              'message' => "OOPS! Something wennt wrong"
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
