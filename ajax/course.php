<?php 
 require_once('../config/init.php');
 require_once('../config/db-config.php');
 $course_id = $_POST['course_id'];
 if($course_id)
 {
 $sql = "SELECT * FROM course where id=".$course_id;
 $query = $database->query($sql);
 $result_course = $database->fetchAll($query);


 $sql = 'SELECT * FROM chapters 
  where find_in_set('.$course_id.', course_id) ';
 $query = $database->query($sql);
 $result_data = $database->fetchAll($query);

 $data=(object) [
    'course'=> $result_course, 
    'topics'=>$result_data
 ];
 //$data = (object) $data;
 }
echo json_encode($data);


     ?>