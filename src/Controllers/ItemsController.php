<?php

namespace olee\inventory\controllers;
use olee\inventory\models\Items;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        return view('inventory::items.index');

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


           $validatedData =  $request->validate([
            'ItemCode' => 'required',
            'ItemName' => 'required'
           ],
           [ 'ItemCode.required' => 'Item Code Is Required', 'ItemName.required' => 'Item Name Is Required']
        );

       
       
  

     try {

        $data =  Items::create( $request->all() );
        
       

     } catch (\Throwable $th) {
        return redirect()->route('items.index')->with('error', 'Problem With Connection ');
     }
      
    

         
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        echo "jghj";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Items $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Items $items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Items $items)
    {
        //
    }
}
