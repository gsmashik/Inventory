<?php






namespace Olee\Inventory\Controllers;

use Olee\Inventory\Models\MoneyReceipt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoneyReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventory::MoneyReceipt.index');
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
        $moneyreceiptrow = new MoneyReceipt;

           
           $validatedData = $request->validate([
            "Quantity.*"  => "required|numeric|min:1",
           ],

           [ 'Quantity.required' => '<i class="fas fa-exclamation-triangle"></i>', 'Quantity.numeric' => '<i class="fas fa-exclamation-triangle"></i>']
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
