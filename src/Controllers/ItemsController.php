<?php

namespace Olee\Inventory\Controllers;
use Olee\Inventory\Models\Items;
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
        $output = array();
        $route= 'store';
        
        return view('inventory::items.index',['output' => $output,'route'=> $route,'find'=> 'OK']);

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
        return redirect()->route('items.index')->with('success', 'Opreation SuccessFull ');
       

     } catch (\Throwable $th) {
        return redirect()->route('items.index')->with('error', 'Problem With Connection ');
     }
      
    

         
        
    }


    public function find(Request $request)
    {

        try {

                 

        $output = array();
        $data = $request->except(['_token']);

        foreach( $data  as $key => $value){
            if (is_array($value)) {
                for ($i=0; $i <count($value); $i++) { 
                    
            
                }
                }
        
            else{

                if(!empty($value)) {

                    $output= Items::where($key, 'like', '%'.$value.'%')->get() ;
            
                }

            
               
            }
        
        }


        
       
if (count($output) == 1) {
    return view('inventory::items.index',['output' => $output,'find'=> 'edit']);
} elseif(count($output) == 0) {
    return view('inventory::items.index',['output' => $output]);
}
elseif(count($output)>1) {
    return view('inventory::items.index',['moreoutput' => $output]);
}

         
         } catch (\Exception $e) {
         
           return redirect()->route('items.index')->with('error', 'ISome Error Have ');
        
         }
 

   

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        if ($id == 'edit') {
            $output = array();
            $where = array('DocEntry' => $id);
            $output[0] = Items::where($where)->first();
    return $output[0];
            // if (count($output) == 1) {
            //     return view('inventory::items.index',['output' => $output,'find'=> 'edit']);
            // } elseif(count($output) == 0) {
            //     return view('inventory::items.index',['output' => $output]);
            // }
            // elseif(count($output)>1) {
            //     return view('inventory::items.index',['moreoutput' => $output,'find'=> 'edit']);
            // }
    
        }
        return view('inventory::items.index',['find'=> $id]);
        
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $output = array();
        $where = array('DocEntry' => $id);
        $output[0] = Items::where($where)->first();

        if (count($output) == 1) {
            return view('inventory::items.index',['output' => $output,'find'=> 'edit']);
        } elseif(count($output) == 0) {
            return view('inventory::items.index',['output' => $output]);
        }
        elseif(count($output)>1) {
            return view('inventory::items.index',['moreoutput' => $output,'find'=> 'edit']);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data = $request->except(['_token','_method']);
        Items::where('DocEntry', '=', $id)->update($data);

        // $where = array('DocEntry' => $id);
        // $items  = Items::where($where)->first();
        // $items->update($request->all());
        return redirect()->route('items.index')->with('success', 'Opreation SuccessFull ');

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
