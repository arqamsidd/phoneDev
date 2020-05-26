<?php
require '../Mconfig.php';

$output='';

$name=$_POST['name'];
$sql="select * from medicine where Name='$name'";

$result = $mysqli -> query($sql);

$output .= '  <table class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>Mg</th>
                    <th>Price</th>
                    <th>Used_for</th>
                    <th>Side_Effects</th>
                    <th>Add</th>
                  </tr>
                </thead>
                <tbody>';

if ($result-> num_rows>0){
  while($row=$result->fetch_array()){
    $output.='<tr>
       <td>'. $row['id']   .' </td>
       <td> '. $row['id']   .'  </td>
       <td> '. $row['id']   .'  </td>
       <td>   '. $row['id']   .'  </td>
       <td>   '. $row['id']   .'  </td> 
       <td>   '. $row['id']   .'  </td>
       <td> </td>
    
    
    </tr>';
  }
  
  $output.= '</tbody>
  </table>';
}