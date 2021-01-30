<?php

namespace olee\inventory\controllers;
use olee\inventory\models\SalesOrder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class SalesOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        return view('inventory::SalesOrder.index');

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
$sales = new SalesOrder;
           // Form validation
        //    $validatedData = $request->validate([
        //     "ItemCode.*"  => "required|string|min:1",
        // ]);
          
            


        $data = $request->except(['_token']);
$a  = count($data['ItemCode']);

    if(is_array($data))  {
for ($i=0; $i < count($data) ; $i++) { 
   foreach($data as $key => $value){
        echo $key;
   }
}
    }

           }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesOrder  $SalesOrder
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        echo "jghj";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesOrder  $SalesOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesOrder $SalesOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalesOrder  $SalesOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesOrder $SalesOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesOrder  $SalesOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesOrder $SalesOrder)
    {
        //
    }
}
