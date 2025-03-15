<?php


$FullName = filter_input(INPUT_POST, 'FullName');
$Gender = filter_input(INPUT_POST, 'Gender$Gender');
$IDNumber = filter_input(INPUT_POST, 'IDNumber');
$VoterId = filter_input(INPUT_POST, 'VoterId');
$County = filter_input(INPUT_POST, 'County');
$Constituency = filter_input(INPUT_POST,'Constituency');
$Ward = filter_input(INPUT_POST, 'Ward');
$CurrentLocation = filter_input(INPUT_POST,'CurrentLocation');

if(!empty($FullName)){
    if(!empty($Gender)){
        if(!empty($IDNumber)){
            if(!empty($VoterId)){
                if(!empty($County)){
                    if(!empty($Constituency)){
                        if(!empty($Ward)){
                            if(!empty($CurrentLocation)){
                                $host = "localhost";
                                $dbusername ="root";
                                $dbpassword = "";
                                $dbname = "iebc";
                                //creating a connection to the database
                                $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                    
                                if(mysqli_connect_error()){
                                    die('Connection Error('.mysqli_connect_errno().')'
                                    . mysqli_connect_error());
                                }
                                else{
                                    $sql = "INSERT INTO 'userpage' ('name', 'gender', 'ID number', 'voter ID', 'county','constituency','ward','current location')
                                    VALUES ('$FullName', '$Gender', '$IDNumber', '$VoterId', '$County', '$Constituency', '$Ward', '$CurrentLocation')";
                                    $query = mysqli_query($db_conn, $sql);
                                    if($conn->query($sql)){
                                        echo "Record added successfully";
                                    }
                                    else{
                                        echo "Error:". $sql. "<br>". $conn->error;
                                    }
                                    $conn->close();
                                }

                            }
                            else{echo "Error";}
                        }
                    }
                    
                }
                   
            }
               
        }

    }
            
}            
           
?>

<?php
$connection = mysql_connect("localhost", "root","");
$db = mysql_select_db("iebc", $connection);
if(isset($_POST['Submit'])){
    $fullname = $_POST['FullName'];
    $gender = $_POST['Gender'];
    $idnumber = $_POST['IDNumber'];
    $voterid = $_POST['VoterId'];
    $county = $_POST['County'];
    $constituency = $_POST['Constituency'];
    $ward = $_POST['Ward'];
    $currentloc = $_POST['CurrentLocation'];

    if($fullname !='' || $idnumber !=''){
        $query = mysql_query("INSERT INTO 'userpage'(full name, gender, ID number, voter ID, county, constituency,ward,current location) values('$fullname', '$gender', $idnumber, $voterid, '$county', '$constituency', '$ward', '$currentloc')");
        echo "<br/><br/><span> Data inserted successfully! </span>";
    }
    else{
        echo "<p> Failed to insert data<br/>Some fields are blank.</p>";
    }
}
mysql_close($connection);
?>           
           