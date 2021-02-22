<?php 
class ad_class 	{

function getAllTopics()
{
	global $conn;
	$sql = "SELECT * FROM cms_pages";
	$result = mysqli_query($conn, $sql);
	$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $topics;
}	


function getGeneralSettings()
{
	global $conn;
	$sql = "SELECT * FROM general_settings where id='1'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($result,MYSQLI_ASSOC);
	return $data;
}	



function getPageInfo($slug)
{
	global $conn;
	$sql = "SELECT * FROM cms_pages where (slug='".$slug."' AND status='1')";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($result,MYSQLI_ASSOC);
	return $data;
}	


function getSliders()
{
	global $conn;
	$sql = "SELECT * FROM banner  where status='1' order by id desc";
	return $result = mysqli_query($conn, $sql); 
}	

function getPatners()
{
	global $conn;
	$sql = "SELECT * FROM patner  where status='1' order by id desc";
	return $result = mysqli_query($conn, $sql); 
}	


function getWidgetsData($id)
{
	global $conn;
	$sql = "SELECT * FROM widgets  where (status='1' and id='".$id."') order by id desc";
	 $result = mysqli_query($conn, $sql); 
	return $data = mysqli_fetch_array($result,MYSQLI_ASSOC);

}	

function gowithgetPatners()
{
	global $conn;
	$sql = "SELECT * FROM gowithpatner  where status='1' order by id desc";
	return $result = mysqli_query($conn, $sql); 
}	


function getTestimonials()
{
	global $conn;
	$sql = "SELECT * FROM testimonials  where status='1' order by id desc";
	return $result = mysqli_query($conn, $sql); 
}	


function getPostData($catid)
{
	global $conn;
	 $sql = "SELECT * FROM blogs  where (status='1' and  FIND_IN_SET('".$catid."',category))  order by id desc Limit 3";
	return  $result = mysqli_query($conn, $sql); 
	

}


function getPostDatafooter()
{
	global $conn;
	 $sql = "SELECT * FROM blogs  where status='1' order by id desc Limit 3";
	return  $result = mysqli_query($conn, $sql); 
	

}


function getCategorys()
{
	global $conn;
	$sql = "SELECT * FROM category  where status='1' order by id desc";
	 $result = mysqli_query($conn, $sql); 

$getcat=array();
	 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
$getcat[]=$row;
	 }

	 return $getcat;

}	


function getCategoryname($id)
{
	global $conn;
	$sql = "SELECT * FROM category  where status='1' and id='".$id."' order by id desc";
	 $result = mysqli_query($conn, $sql); 
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	 return $row['name'];

}


function getPostInfo($slug)
{
	global $conn;
   $sql = "SELECT * FROM blogs  where (status='1' and slug='".$slug."') order by id desc";
    $result = mysqli_query($conn, $sql); 

	 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	 return $row;
}


function getpostdatabycategory($catid)

{

	$catids=explode(',',$catid);

    // $where=array();
     $i=1;

     if(count($catids)>0) {
	foreach ($catids as $key => $value) {
		if($i==1) {
$where.= "  FIND_IN_SET ($value, `category`)";
		} else {
			$where.= " or FIND_IN_SET ($value, `category`)";
		}
		

		$i++;

	}
} else {
	$where="1=1";
}

	global $conn;
   $sql = "SELECT * FROM blogs  where (status='1' and ".'('.$where.')'.") order by id desc limit 10";
   return $result = mysqli_query($conn, $sql); 

	
}







} 







?>