<?php






namespace Olee\Inventory\Controllers;

use Olee\Inventory\Models\MoneyReceipt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Mavinoo\LaravelBatch as Batch;

class MoneyReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['moneyreceipt'] = MoneyReceipt::all();
       
        return view('inventory::MoneyReceipt.index',$data);
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

    public function find(Request $request)
    {

        $data['moneyreceipt']   = MoneyReceipt::whereBetween('date',[$request->Date1,$request->Date2])

        ->get();

        return view('inventory::MoneyReceipt.index',$data);
    
    }



    public function updateall(Request $request){

           
        $moneyreceiptrow = new MoneyReceipt;

     $data = $request->except(['_token']);
     $row = array();
     $mydata = array();

       
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            for ($i=0; $i <count($value); $i++) { 
                $row[$key][] = $value[$i];
        
            }
            }
    
        else{
           
           
        }


    }
    for ($i=0; $i < count($row['id']) ; $i++) { 

        foreach($row as $key => $value){
           
            
            
                
          
            
                $mydata  [$i] [$key] = $row[$key ][$i];
           
           
        }
       
        
        
}
return $mydata;
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MoneyReceipt  $moneyReceipt
     * @return \Illuminate\Http\Response
     */
    public function show(MoneyReceipt $moneyReceipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MoneyReceipt  $moneyReceipt
     * @return \Illuminate\Http\Response
     */
    public function edit(MoneyReceipt $moneyReceipt)
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
        $moneyreceiptrow = new MoneyReceipt;

           
           $validatedData = $request->validate([
            "Quantity.*"  => "required|numeric|min:1",
            "Date.*"  => "required|min:1",
           ],

           [ 'Quantity.required' => '<i class="fa fa-exclamation-triangle"></i>',
            'Quantity.numeric' => '<i class="fa fa-exclamation-triangle"></i>',
            'Date.required' => '<i class="fa fa-exclamation-triangle"></i>'
            ]
        );

        $data = $request->except(['_token']);

        $a  = count($data['Quantity']);
$row = array();
foreach( $data  as $key => $value){
    if (is_array($value)) {
        for ($i=0; $i <count($value); $i++) { 
            $row[$key][] = $value[$i];
    
        }
        }

    else{
       
       
    }

}




for ($i=0; $i < count($row['Quantity']) ; $i++) { 
  foreach($row as $key => $value){
    $moneyreceiptrow->$key = $row[$key ][$i];
  }
  
}

try {

    $moneyreceiptrow->save();
 
    return redirect()->route('moneyreceipt.index')->with('success', 'Item Added Successfully');
 
 } catch (\Exception $e) {
 
   return redirect()->route('moneyreceipt.index')->with('error', 'ISome Error Have ');

 }


          
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MoneyReceipt  $moneyReceipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MoneyReceipt $moneyReceipt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MoneyReceipt  $moneyReceipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(MoneyReceipt $moneyReceipt)
    {
        //
    }
}
