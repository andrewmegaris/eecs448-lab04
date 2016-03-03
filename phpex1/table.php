 <?php
    function printTable(){
        echo "alert('test')";
        echo "<table border='1'>";
        
        for($x = 0 ; $x < 101 ; $x++){
            
            echo "<tr>";
            for($y = 0; $y < 101; $y++){
                if($x = 0){
                    echo "<td>" . $y . "</td>";
                }    
                else{
                    echo "<td>" . $x*$y . "</td>";
                }
            }
            
            echo "</tr>";
        
        }
        
        echo "</table>";
    }
    ?>