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
       <td> '. $row['Name']   .'  </td>
       <td> '. $row['Mg']   .'  </td>
       <td>   '. $row['Retail_Price']   .'  </td>
       <td>   '. $row['Used_for']   .'  </td> 
       <td>   '. $row['Side_Effects']   .'  </td>
       <td>  <a href="javascript:increment()">
          <span class="glyphicon glyphicon-plus"></span></a>
       </td>
    
    
    </tr>';
  }
  
  $output.= '</tbody>
  </table>';
  echo $output;
} 
else{
  echo '<h4 class="text-center text-danger">No result found!</h4>';
}