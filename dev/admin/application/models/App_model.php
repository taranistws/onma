<?php
class App_model extends CI_Model
{
    
    
      public function insertproduct($table, $data){
       
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    
    
       public function productinsertImages($productid, $images) {
        $arr = [];
        foreach ($images as $key => $value) {
            $arr[] = array(
                'productId'=> $productid,
                'image'=> $value
            );
        }
        $this->db->insert_batch('product_images', $arr);
}


     public function insertvariant($data) {
     
        $this->db->insert('variant', $data);
         return $this->db->insert_id();
}



	public function get_special_details($table,$where){
       $this->db->select('*');
       $this->db->from($table);
       $this->db->where($where);
       $this->db->order_by('id','desc');
       $this->db->limit('1');
       $query = $this->db->get();
       return $query->row_array();
	}
	
	public function get_like_details($table,$where){
       $this->db->select('*');
       $this->db->from($table);
       $this->db->like($where);
       $this->db->order_by('id','desc');
       $this->db->limit('1');
       $query = $this->db->get();
       return $query->row_array();
	}
	
    public function insert($table,$data){
       return  $this->db->insert($table,$data);
    }

    public function insert_id($table,$data){
    	$this->db->insert($table,$data);
    	return $this->db->insert_id();
    }

    public function update($table,$data,$where){
    	return $this->db->where($where)->update($table,$data);
    }

    public function getRowById($table,$where){
       $this->db->select('*');
       $this->db->from($table);
       $this->db->where($where);
       $query = $this->db->get();
       return $query->row_array();
    }

    public function getResultById($table,$where){
      $this->db->select('*');
      $this->db->from($table);
      $this->db->where($where);
      $query = $this->db->get();
      return $query->result_array();
    }

    public function getAllList($table,$where,$orderBy,$ascOrDesc){
      $this->db->select('*');
      $this->db->from($table);
	  if($where!=null){
	   $this->db->where($where); 
	  }
      $this->db->order_by($orderBy,$ascOrDesc);
      $query = $this->db->get();
      return $query->result_array();

    }
    
    
       public function getDataAllList($table,$orderBy,$ascOrDesc){
      $this->db->select('*');
      $this->db->from($table);
	
      $this->db->order_by($orderBy,$ascOrDesc);
      $query = $this->db->get();
      return $query->result_array();

    }
    

    public function countByNumRow($table,$where){
       $this->db->select('*');
       $this->db->from($table);
       $this->db->where($where);
       $query = $this->db->get();
       return $query->num_rows();
    }

    public function delete($table,$where){
       return $this->db->where($where)-> delete($table);
       
    }

    public function getAllDataDesc($table,$colomn){
      return $this->db->select('*')->from($table)->order_by($colomn,'DESC')->get()->result_array();
    }

    public function getAllDataAsc($table,$colomn){
       return $this->db->select('*')->from($table)->order_by($colomn,'ASC')->get()->result_array();
    }

    public function crop_img($path){
        $upload_data = $path;
        $this->load->library('image_lib');
        $config["image_library"] = "gd2";
        $config["source_image"] = $upload_data["full_path"];
        $config['create_thumb'] = true;
        $config['maintain_ratio'] = TRUE;
        $config['new_image'] = $upload_data["file_path"] . 'product.png';
        $config['quality'] = "100%";
        $config['width'] = 231;
        $config['height'] = 154;
        $this->image_lib->clear();
        $this->image_lib->initialize($config); 
        $this->image_lib->crop();
        return true;
     }
	 
	 public function getLatLong($where,$brand){
		 $distance=15000;
		 if($brand!=''){
			 $arr="where brand =$brand";
		 }else{
			 $arr='where 1!=1';
		 }

	  //$sql = "SELECT id,service_center_name,first_contact_name,first_contact_email,first_contact_mobile,address,pick_drop, center_images,rating, current_latitude, current_longitude, CAST((6371 * acos( cos( radians('".$where['current_latitude']."') ) * cos( radians(current_latitude) ) * cos( radians(current_longitude) - radians('".$where['current_longitude']."')) + sin(radians('".$where['current_latitude']."')) *sin(radians(current_latitude)) )) as decimal(10,2) ) as distance FROM tbl_partner $arr HAVING distance <'".$distance."'";

  $sql = "SELECT id,service_center_name,first_contact_name,first_contact_email,first_contact_mobile,address,pick_drop, center_images,rating, current_latitude, current_longitude, CAST((6371 * acos( cos( radians('".$where['current_latitude']."') ) * cos( radians(current_latitude) ) * cos( radians(current_longitude) - radians('".$where['current_longitude']."')) + sin(radians('".$where['current_latitude']."')) *sin(radians(current_latitude)) )) as decimal(10,2) ) as distance FROM tbl_partner $arr order by distance asc ";
		 $query = $this->db->query($sql);
		 return $query->result_array();
	 }


   public function today_user(){
    
  $sql = 'select * from tbl_user where `add_on` >= DATE_SUB(CURDATE(), INTERVAL 1 DAY) ';
    $query = $this->db->query($sql);
   return $query->result_array();
    
  }



  
  
    public function get_review($id){
    $sql='select sr.*,u.name,u.email,u.profile_image from tbl_service_reviews sr left join tbl_user u on sr.user_id=u.id where sr.service_id='.$id.' and sr.status=1';
      $query = $this->db->query($sql);
   return $query->result_array();

  }
  
   public function get_faq_data($id){
    $sql='select sr.*,u.name,u.email,u.profile_image from tbl_service_faq sr left join tbl_user u on sr.user_id=u.id where sr.service_id='.$id.' and sr.status=1';
      $query = $this->db->query($sql);
   return $query->result_array();

  }
  
  
  
  public function getServicelists(){
          $sql='select ts.*,tm.model_name,tb.brand_name from tbl_services ts left join tbl_model tm on ts.model=tm.id 
          left join tbl_brand tb on ts.brand=tb.id order by ts.id desc';
      $query = $this->db->query($sql);
   return $query->result_array();
  }

public function getRreviews($id)
{
    $sql='select sr.*,tu.name from tbl_service_reviews sr left join tbl_user tu on sr.user_id=tu.id where sr.service_id='.$id.' order by sr.id desc';
      $query = $this->db->query($sql);
   return $query->result_array();
}


public function getAllServiceList($catid,$subcatid)
{

    $sql='select sr.*,suc.name as car_wash_type_category, su.sub_cat_name as car_wash_type_sub_category  from tbl_services sr   join 
 car_wash_category suc on 
    sr.car_wash_type_category=suc.id 
 join car_wash_sub_category su on sr.car_wash_type_sub_category=su.id 
      where sr.car_wash_type_category='.$catid.' and car_wash_type_sub_category='.$subcatid.' order by sr.id desc';

      $query = $this->db->query($sql);

   return $query->result_array();
}


public function getalltime_slots($day_id,$service_id) {

   $sql='select tm.*,ts.title,dn.names from time_slots tm left join days_names dn on tm.date_id=dn.id left join tbl_services ts on tm.service_id=ts.id where tm.date_id='.$day_id.' and tm.service_id='.$service_id.' order by tm.id asc';

      $query = $this->db->query($sql);

   return $query->result_array();

}



public function getAllservices(){


    $sql='select s.*,ca.name as cat_name,u.userName from services s left join categories ca on s.category=ca.id 
left join users u on s.ownerId=u.id order by s.id desc';

      $query = $this->db->query($sql);

   return $query->result_array();


}



public function getAllhalls(){

 $sql='select s.*,u.userName from halls s 
left join users u on s.ownerId=u.id order by s.id desc';
 $query = $this->db->query($sql);

   return $query->result_array();

}

public function getAllvendorhalls($id){

 $sql="select s.*,u.firstName ,u.userName from halls s left join vendors u on s.ownerId=u.id  where  s.ownerId=$id  order by s.id desc";
 //echo $this->db->last_query();
    $query = $this->db->query($sql);
   return $query->result_array();
}


public function getAllvendorproducts($id){

 $sql="select s.*,u.firstName ,u.userName from products s left join vendors u on s.ownerId=u.id  where  s.ownerId=$id  order by s.id desc";
 //echo $this->db->last_query();
    $query = $this->db->query($sql);
   return $query->result_array();
}



public function deleteHalldata($id){

 $sql="DELETE FROM `halls` WHERE id = $id";
 return $query = $this->db->query($sql);

}

public function deleteProductdata($id){

 $sql="DELETE FROM `products` WHERE id = $id";
 return $query = $this->db->query($sql);

}


      public function getAllListdata($table,$ascOrDesc){
      $this->db->select('*');
      $this->db->from($table);
      $this->db->order_by('id','desc');
      $query = $this->db->get();
      return $query->result_array();

    }



   function get_menu_items() {
    $this->db->select('*');
    $this->db->from('category');
    $this->db->where('delete_status=','0');
    $this->db->order_by('parent_id');
   $this->db->order_by('position');
    $query = $this->db->get();
    return $query->result_array();
  }

 function generateTree($items = array(), $parent_id = 0){
    $tree = '<ul>';
    for($i=0, $ni=count($items); $i < $ni; $i++){
      if($items[$i]['parent_id'] == $parent_id){
        $tree .= '<li>';
        $tree .= $items[$i]['name'].' <input type="checkbox" name="category[]" value="'.$items[$i]['id'].'">';
        $tree .= $this->generateTree($items, $items[$i]['id']);
        $tree .= '</li>';
      }
    }
    $tree .= '</ul>';
    return $tree;
  }



  function generateTreeedit($items = array(), $parent_id = 0,$categorys = array()){
     $tree = '<ul>';
    for($i=0, $ni=count($items); $i < $ni; $i++){
      if($items[$i]['parent_id'] == $parent_id){
        $tree .= '<li>';
        $tree .= $items[$i]['name'].' <input type="checkbox" id="check'.$items[$i]['id'].'" name="category[]" value="'.$items[$i]['id'].'">';
        $tree .= $this->generateTreeedit($items, $items[$i]['id']);
        $tree .= '</li>';
      }
    }
    $tree .= '</ul>';
    return $tree;
  }

  

	
}

?>