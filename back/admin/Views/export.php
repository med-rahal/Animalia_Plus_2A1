<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "test123");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM accessoire";
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
                         <td>'.$row["nom_accessoire"].'</td>  
                         <td>'.$row["ref_accessoire"].'</td>  
                         <td>'.$row["categorie_accessoire"].'</td>  
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