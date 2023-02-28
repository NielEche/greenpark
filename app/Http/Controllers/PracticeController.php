<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $practice = Practice::all();
        return view('admin.practiceareas.index', compact(['practice']));
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
        try {
            //code...
            $practice = new Practice();

            $practice->title = $request->title;
            $practice->about = $request->about;

            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/practiceAreas/', $filename);
                $practice->file_path = $filename;
            } else {
                return $request;
                $practice->file_path = '';
            }


            $practice->save();
     
            return redirect('practiceareas')->with('message', 'Practice Area Added Succesfully!');
            

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
     * @param  \App\Models\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function show(Practice $practice)
    {
        return view('admin.practiceareas.index', compact(['practice']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function showData($id)
    {
        $practice = Practice::find($id);
        return view('admin.practiceareas.edit', ['practice'=>$practice]); 
    }


    public function showPrac($id)
    {
        $practice = Practice::find($id);
        return view('pages.pracA', ['practice'=>$practice]); 
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        try {

            $practice = Practice::find($request->id);

              $practice->update([
                'title' => $request['title'],
                'about' => $request['about'],
            ]);
            
            if ($request->hasfile('file_path')) {
                $file = $request->file('file_path');
                $extension = $file->getClientOriginalExtension();
                $file_path = time() . '.' . $extension;
                $file->move('uploads/practiceAreas/', $file_path);
                $practice->file_path = $file_path;
            } else {
                $practice->save();
            }


            $practice->save();
    
            return redirect('practiceareas')->with('message', 'Practice Area Updated  Succesfully!');
           

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
     * @param  \App\Models\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $practice = Practice::find($id);

        $practice->delete('delete from practices where id = ?',[$id]);
        
        return redirect('practiceareas')->with('message','Practice area deleted successfully');
      
    }
}
