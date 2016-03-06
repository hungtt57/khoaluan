<?php 
use App\Category;
use App\Product;

  function cate_parent($data,$parent= 0,$str='--', $select=0,$category_id=-1){
        foreach ($data as $key => $val) {
           $id=$val['id'];
           $name=$val['ten'];
           if($val["parent_id"]== $parent){ 
                if($select!=0 && $id==$select){
                     echo "<option value='$id' selected='selected'>$str $name</option>";
                 }else{
                    if($val["parent_id"]==$category_id || $id==$category_id){
                        echo "<option value='$id' style='color:red' disabled>$str $name</option>";
                       $category_id=$id;
                    }else{
                        echo "<option value='$id'>$str $name</option>";
                    }
                    


                 }
                 cate_parent($data,$id,$str."--",$select,$category_id);
            }
        }


    }

    function get_category_name($category_id){

      $category= Category::find($category_id);
      if(!isset($category)){
        return 'Chưa có danh mục hoặc danh mục bị xóa';
      }
      return $category->ten;
    }
 ?>