<?php

namespace App\Http\Controllers;

use App\Models\Attorneys;
use Illuminate\Http\Request;

class AttorneysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attorneys = attorneys::all();
        return view('admin.team.index', compact(['attorneys']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attorneys');
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
            $attorneys = new attorneys();

            $attorneys->name = $request->name;
            $attorneys->position = $request->position;
            $attorneys->bio = $request->bio;
            $attorneys->twitter = $request->twitter;
            $attorneys->facebook = $request->facebook;
            $attorneys->linkedin = $request->linkedin;
            $attorneys->instagram = $request->instagram;

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/attorneys/', $filename);
                $attorneys->file_path = $filename;
            } else {
                return $request;
                $attorneys->file_path = '';
            }


            $attorneys->save();
     
            return redirect('attorneys')->with('message', 'Director Added Succesfully!');
            

        } catch (\Throwable $th) {
    
            //throw $th;
            $response = [
              'ERROR' => false,
              'message' => "OOPS! Something wennt wrong"
            ];
            return response()->json($response, 422);
        }
 
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attorneys  $attorneys
     * @return \Illuminate\Http\Response
     */
    public function show(Attorneys $attorneys)
    {
        return view('admin.team.index', compact(['attorneys']));
    }

          /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData($id)
    {
        $attorneys = attorneys::find($id);
        return view('admin.team.edit', ['attorneys'=>$attorneys]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attorneys  $attorneys
     * @return \Illuminate\Http\Response
     */
    public function edit(Attorneys $attorneys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attorneys  $attorneys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        try {

            $attorneys = attorneys::find($request->id);

              $attorneys->update([
                'name' => $request['name'],
                'position' => $request['position'],
                'bio' => $request['bio'],
                'twitter' => $request['twitter'],
                'facebook' => $request['facebook'],
                'linkedin' => $request['linkedin'],
                'instagram' => $request['instagram'],
            ]);
            
            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $file_path = time() . '.' . $extension;
                $file->move('uploads/attorneys/', $file_path);
                $attorneys->file_path = $file_path;
            } else {
                $attorneys->save();
            }


            $attorneys->save();
    
            return redirect('attorneys')->with('message', 'Director  Updated  Succesfully!');
           

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
     * @param  \App\Models\Attorneys  $attorneys
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attorneys = attorneys::find($id);

        $attorneys->delete('delete from attorneys where id = ?',[$id]);
        
        return redirect('attorneys')->with('message','Director deleted successfully');
      
    }
}
