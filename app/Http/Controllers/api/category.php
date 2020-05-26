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
use App\Library\library;
use App\Models\db_product;
use Dotenv\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
            $list_cat=db_category::where('db_category.status','<>',2)
            ->join('db_user','db_category.created_by','=','db_user.id')->select('db_category.*','db_user.fullname as ten_admin_create')
            ->orderBy('db_category.created_at','desc')
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
        try{
         
  
            $nameCategory=$request->get('nameCategory');
            $inputMetaKey=$request->get('inputMetaKey');
            $inputMetaDesc=$request->get('inputMetaDesc');
            $inputStatus=$request->get('statusCat');
     
         
            $dbCategory=new db_category;
            $dbCategory->name=$nameCategory;
            $dbCategory->slug=Str::slug($nameCategory,'-');
            $dbCategory->parentid=0;
            $dbCategory->orders=0;
            $dbCategory->metakey=html_entity_decode($inputMetaKey);
            $dbCategory->metadesc=html_entity_decode($inputMetaDesc);
         
            $dbCategory->created_by=1;
            $dbCategory->updated_by=1;
            $dbCategory->status=$inputStatus;
            if($dbCategory->save())
            {
                $message = [ 
                        'succcess'=>'Thêm Thành Công',
               
                ];
                 return $message;
            }else
            {
                $message = ['error'=>'Thêm Thất Bại'];
                return $message;
            }
        }catch(Exception $e)
        {
            $message = ['error'=>$e->getMessage()];
            return $message;
        }
    
        
       

       
       
    
       
      
      
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
            $searchId=db_category::where('db_category.name','like','%'.$id.'%')->orWhere('db_category.id','=',$id)
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
      
            
        try{

     
        if($request->all()==[])
        {  
            $updateDbcategory=db_category::find($id);
                if($updateDbcategory->status ==0)
                {
                    $updateDbcategory->status=1;
                }else
                {
                    $updateDbcategory->status=0;
                }
            
                $updateDbcategory->save();
                return [
                    "message"=>"Success Update Status",
                    "dataCategory"=>$updateDbcategory,
                ];
        }else
        {  
            $updateDbcategory=db_category::find($id);
            $nameCategory=$request->get('nameCategoryUpdate');
            $inputMetaKey=$request->get('inputMetaKeyUpdate');
            $inputMetaDesc=$request->get('inputMetaDescUpdate');
            $inputStatus=$request->get('statusUpdate');
            if($inputStatus=='on'){
                $inputStatus='1';
            }else
            {
                $inputStatus='0';
            }
           
            $updateDbcategory->name=$nameCategory;
            $updateDbcategory->slug=Str::slug($nameCategory,'-');
            $updateDbcategory->parentid=0;
            $updateDbcategory->orders=0;
            $updateDbcategory->metakey=html_entity_decode($inputMetaKey);
            $updateDbcategory->metadesc=html_entity_decode($inputMetaDesc);
         
            $updateDbcategory->created_by=1;
            $updateDbcategory->updated_by=1;
            $updateDbcategory->status=$inputStatus;
            if($updateDbcategory->save())
            {
                $message = [ 
                        'succcess'=>'Update thành công',
               
                ];
                 return $message;
            }else
            {
                $message = ['error'=>'Update thành công'];
                return $message;
            }
            
        }
         }catch(Exception $e)
         {
             $message =['error'=>'Lỗi phát sinh '];
             return $message;
         }
        
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $findCategory= db_category::findOrFail($id);
            $idCategory=$findCategory->id;
            $checkProductsCategory=db_product::where('catid','=',$idCategory)->first();
            if(!$checkProductsCategory)
            {
                $findCategory->delete();
                return [
                        'succcess'=>'Xóa Thành Công',
    
                ];
            }else
            {
                return[
                    'error'=>'Không Thể Xóa Do Còn Sản Phẩm Liên Quan',
                ];
            }
            return $checkProductsCategory;
    
        }catch(Exception $e)
        {
            $message =['error'=>'Lỗi phát sinh '];
            return $message;
        }
      
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
