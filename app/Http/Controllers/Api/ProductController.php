<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\db_product;
use Illuminate\Http\Response;
use App\Http\Resources\Product as Productres;
use Illuminate\Support\Str;
use Exception;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Carbon;
use App\Models\db_category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           $product= db_product::all();
        return Productres::collection($product);
          
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        try{
            db_product::created($request->all());
            return ("ok");
        // $product=new db_product;
        // $product->catid=$request->category;
        // $product->slug=Str::slug($request->name,'-');
        // if($request->hasFile('file'))
    	// {
    	// 		$file=$request->file('file');
    	// 		$name=$file->getClientOriginalName();
    	// 		$hinh=str::random(4)."_".$name;
    	// 		while ( file_exists("upload/tintuc/".$hinh)) {
    	// 			$hinh=str_random(4)."_".$name;
    	// 		}
    	// 		$file->move("upload/tintuc/",$hinh);
    	// 		$product->img=$hinh;    			
    	// }
    	// else
    	// {
    	// 	$product->img="";
    	// }
        // $product->number=0;
        // $product->metakey="abc";
        // $product->metadesc="abc";
        // $product->created_at=Carbon::now();
        // $product->updated_at=Carbon::now();
        // $product->save();
        // return $product;
    }catch(Exception $e){
        return ("not ok");
    }
       // $product->save();
        //return $product;
       //return redirect()->Route('getThem')->with("message",["type"=>"success","msg"=>"Thêm Thành Công!!"]);    
        
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(db_product $product)
    {
        //
        try{
             return $product;
        }catch(Exception $e)
        {
            return response()->json([
                "status"=>"404",
                "message"=>"Product Not Found",
            ]);
            abort(404,'Page Not Found');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, db_product $product)
    {
        //
        try{
             $product->update($request->all());
            return response()->json([
                "status"=>"200",
                "message"=>"Update Complete",
            ]);
        }catch(Exception $e){
            return response()->json([
                "status"=>"201",
                "message"=>"Update Fail"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        try{
            $delete=db_product::find($id);
            if (($delete->status) == 0)
            {
               $delete->delete();
               return response()->json([
                "status"=>"200",
                "message"=>"Deleted",
               ]);
            }
            else{
                
            }
            // if($delete){
            //     return true;
            // }
            // return redirect()->route('product');
        }catch(Exception $e)
        {
             return response()->json([
                "status"=>"201",
                "message"=>"Delete Fail!",
             ]);
        }
        
    }
}
