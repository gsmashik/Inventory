<?php

namespace Olee\Inventory\Controllers;
use Olee\Inventory\Models\SalesOrder;
use Olee\Inventory\Models\SalesOrderRow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
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
$salesrow = new SalesOrderRow;
           
           $validatedData = $request->validate([
            "ItemCode.*"  => "required|string|min:1",
        ]);
          
            


 $data = $request->except(['_token']);
$a  = count($data['ItemCode']);
$row = array();
foreach( $data  as $key => $value){
    if (is_array($value)) {
        for ($i=0; $i <count($value); $i++) { 
            $row[$key][] = $value[$i];
    
        }
        }

    else{
        $sales->$key =  $value;
       
    }

}




for ($i=0; $i < count($row['ItemCode']) ; $i++) { 
  foreach($row as $key => $value){
    $salesrow->$key = $row[$key ][$i];
  }
  
}



try {

    $salesrow->save();
    $sales->save();
    return redirect()->route('salesOreder.index')->with('success', 'Item Added Successfully');
 
 } catch (\Exception $e) {
 
   return redirect()->route('salesOreder.index')->with('error', 'ISome Error Have ');

 }



    // print_r($row);

           }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesOrder  $SalesOrder
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {

        $data = $request->except(['_token']);

        foreach( $data  as $key => $value){
            if (is_array($value)) {
             
                }
        
            else{
                if(!empty($value)) {

                    $sales = SalesOrder::where($key, '=', $value);
            
                } 

                
               
            }
        
        }

        return $sales->get();

     
    }

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
