<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\db_category;
use Illuminate\Http\Request;
use App\Http\Resources\categoryResource as CatResource;
use GuzzleHttp\Exception\RequestException;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try{
            $list_cat=db_category::where('db_category.status','=',1)
            ->join('db_user','db_category.created_by','=','db_user.id')->select('db_category.*','db_user.fullname as ten_admin_create')
            ->get();
           
            return  CatResource::collection($list_cat);

        }catch(RequestException $ex)
        {
            abort(404,'Not Found');
        }
       
      
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $save_cate=new db_category;
        $save_cate->name=$request->input('name');
        $save_cate->metakey=$request->input('metakey');
        $save_cate->metadesc=$request->input('metadesc');
        $save_cate->parentid=0;
        $save_cate->orders=0;
        $save_cate->slug="";
        $save_cate->created_at=Carbon::now();
        $save_cate->updated_at=Carbon::now();
        $save_cate->created_by=1;
        $save_cate->updated_by=1;
        $save_cate->status=1;
        $save_cate->save();
        return $save_cate;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
       
        try {
            //code...
            $searchId=db_category::where('db_category.name','like','%'.$id.'%')
            ->join('db_user','db_category.created_by','=','db_user.id')->select('db_category.*','db_user.fullname as ten_admin_create')
            ->firstOrFail();
            return $searchId;
        
        } catch (Exception  $e) {
        
            //throw $th;
            $message = ['erro'=>'Không tìm Thấy'];
            return $message;
        }
        return $searchId;
      
    
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
        $update=db_category::find($id);
        $update->name=$request->input('name');
        $update->save();
        return $update;
        
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        
 

    }
    public function searchName($name)
    {
        try{
            $findProductsName=db_category::where('name','like','%'.$name.'%')->get();
            return $findProductsName;
           
        }catch(Exception $e){
                return "Lỗi";
        }
        return $findProductsName;
    }
}
