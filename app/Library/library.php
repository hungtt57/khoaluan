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
function format_gia($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}
    function get_category_name($category_id){

      $category= Category::find($category_id);
      if(!isset($category)){
        return 'Chưa có danh mục hoặc danh mục bị xóa';
      }
      return $category->ten;
    }

     function category_menu()
    {
        $allCategories = Category::all();
        return $allCategories;
    }
 ?>