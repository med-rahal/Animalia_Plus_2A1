<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "animalia");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM alimentation";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th>id</th>
                    <th>Nom</th>
                    <th>Reference</th>
                    <th>Categorie</th>
                    <th>Type</th>
                    <th>Prix</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["nom_alimentation"].'</td>  
                         <td>'.$row["ref_alimentation"].'</td>  
                         <td>'.$row["categorie_alimentation"].'</td>  
       <td>'.$row["type"].'</td>  
       <td>'.$row["prix"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>