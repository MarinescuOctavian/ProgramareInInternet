<!DOCTYPE html>
<html>
    <body>

       

        <?php
        	$conn=mysqli_connect("localhost", "root", "") or die(mysqli_error());
            mysqli_select_db($conn, "pai1"); 
            $sql_read = "SELECT * FROM locatii2";
            $result = mysqli_query($conn, $sql_read);
            if(! $result )
            {
            die('Could not read data: ' . mysqli_error());
            }
            $arr=array();
            $arr2=array();

             
            for ($i=0; $i <10 ; $i++) { 
                   
            $row = mysqli_fetch_array($result); 
            $lat = $row['Latitudine'];
            $long = $row['Longitudine'];
            $rez=$lat . ',' . $long;
            $name = $row['Nume'];
            array_push($arr, $rez);
            array_push($arr2, $name);
             }
           echo "<table border='1'>";
                        for ($i=0; $i <= 10; $i++) { 
                echo "<tr>";
                for ($j=0; $j <= 10; $j++) { 
                    if($i==0 && $j==0){
                         echo "<td>";
                        echo 'Nume oras';
                        echo "</td>";
                    }
                    else if($i==0){
                        echo "<td>";
                        echo $arr2[$j-1];
                        echo "</td>";
                    }
                    else if($j==0){
                         echo "<td>";
                        echo $arr2[$i-1];
                        echo "</td>";
                    }
                    else{
                    $origin = $arr[$i-1]; 
                     $destination = $arr[$j-1];
                     $api = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyC8xRxChdROu55uAMLgTXcuvrGh7L6uN_w");
            $data = json_decode($api);
           
         
         
            echo "<td>";
            echo $data->rows[0]->elements[0]->duration->text;
            echo "</td>";
        
        }
        
                }
                 echo "</tr>";
                 
             }
             ?>
            

          
            
        	

    </body>
</html>