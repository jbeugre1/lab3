<?php
include 'dbconnection.php';

echo("<style>body {
background-color: rgba(151, 151, 151, 0.829);
}
table, th, td {
  border: 1px solid black;
  text-align: center;
  min-width: 70px;
}
table { background-color: white; }
th { background-color: gainsboro; }
.updateform{
margin-top: 60px;
margin-left: 30px;
}

</style>");
$searchbar =  $_POST['searchbar'];
$mfr = $_POST['manufacturer'];
$type = $_POST['type'];

echo("man");
echo($mfr);
echo("type");
echo($type);

if($searchbar == ""){
    if($mfr == "" && $type == ""){
        echo "<script>alert(\" Name is empty \" )</script>";
    }
    elseif($mfr != "" && $type == ""){
        $sql = "select * from cereal WHERE mfr = \"" . $mfr . "\"" ;
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Manufactor</th><th>Type</th><th>Calories</th><th>Protein</th><th>Fat</th><th>Sodium</th><th>Fiber</th><th>Carbo</th><th>Surgars</th><th>Potass</th><th>Vitamins</th><th>Shelf</th><th>Weight</th><th>Cups</th><th>Rating</th><th>Id</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            #echo $row['title'] . "<br>";
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mfr'] . "</td><td>". $row['type'] ."</td><td>". $row['calories'] . "</td><td>". $row['protein'] . "</td><td>". $row['fat'] ."</td><td>". $row['sodium']. "</td><td>". $row['fiber']. "</td><td>". $row['carbo']. "</td><td>". $row['sugars']. "</td><td>". $row['potass']. "</td><td>". $row['vitamins']. "</td><td>". $row['shelf']. "</td><td>". $row['weight']. "</td><td>". $row['cups']. "</td><td>". $row['rating']. "</td><td>". $row['id']. "</td></tr>";
        }
        } else {
            echo "No results";
            }
        mysqli_close($conn);
        echo "</table>";

    }

    elseif($mfr == "" && $type != ""){
        $sql = "select * from cereal WHERE type = \"" . $type . "\"" ;
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Manufactor</th><th>Type</th><th>Calories</th><th>Protein</th><th>Fat</th><th>Sodium</th><th>Fiber</th><th>Carbo</th><th>Surgars</th><th>Potass</th><th>Vitamins</th><th>Shelf</th><th>Weight</th><th>Cups</th><th>Rating</th><th>Id</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            #echo $row['title'] . "<br>";
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mfr'] . "</td><td>". $row['type'] ."</td><td>". $row['calories'] . "</td><td>". $row['protein'] . "</td><td>". $row['fat'] ."</td><td>". $row['sodium']. "</td><td>". $row['fiber']. "</td><td>". $row['carbo']. "</td><td>". $row['sugars']. "</td><td>". $row['potass']. "</td><td>". $row['vitamins']. "</td><td>". $row['shelf']. "</td><td>". $row['weight']. "</td><td>". $row['cups']. "</td><td>". $row['rating']. "</td><td>". $row['id']. "</td></tr>";
        }
        } else {
            echo "No results";
            }
        mysqli_close($conn);
        echo "</table>";

    }

    else{
        $sql = "select * from cereal WHERE mfr = \"" . $mfr . "\" and type= \"". $type .  "\"";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Manufactor</th><th>Type</th><th>Calories</th><th>Protein</th><th>Fat</th><th>Sodium</th><th>Fiber</th><th>Carbo</th><th>Surgars</th><th>Potass</th><th>Vitamins</th><th>Shelf</th><th>Weight</th><th>Cups</th><th>Rating</th><th>Id</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            #echo $row['title'] . "<br>";
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mfr'] . "</td><td>". $row['type'] ."</td><td>". $row['calories'] . "</td><td>". $row['protein'] . "</td><td>". $row['fat'] ."</td><td>". $row['sodium']. "</td><td>". $row['fiber']. "</td><td>". $row['carbo']. "</td><td>". $row['sugars']. "</td><td>". $row['potass']. "</td><td>". $row['vitamins']. "</td><td>". $row['shelf']. "</td><td>". $row['weight']. "</td><td>". $row['cups']. "</td><td>". $row['rating']. "</td><td>". $row['id']. "</td></tr>";
        }
        } else {
            echo "No results";
            }
        mysqli_close($conn);
        echo "</table>";
    }



}
else{
    if($mfr == "" && $type == ""){
        $sql = "select * from cereal WHERE name REGEXP \"" . $searchbar . "\"";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Manufactor</th><th>Type</th><th>Calories</th><th>Protein</th><th>Fat</th><th>Sodium</th><th>Fiber</th><th>Carbo</th><th>Surgars</th><th>Potass</th><th>Vitamins</th><th>Shelf</th><th>Weight</th><th>Cups</th><th>Rating</th><th>Id</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            #echo $row['title'] . "<br>";
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mfr'] . "</td><td>". $row['type'] ."</td><td>". $row['calories'] . "</td><td>". $row['protein'] . "</td><td>". $row['fat'] ."</td><td>". $row['sodium']. "</td><td>". $row['fiber']. "</td><td>". $row['carbo']. "</td><td>". $row['sugars']. "</td><td>". $row['potass']. "</td><td>". $row['vitamins']. "</td><td>". $row['shelf']. "</td><td>". $row['weight']. "</td><td>". $row['cups']. "</td><td>". $row['rating']. "</td><td>". $row['id']. "</td></tr>";
            }
        } 
        else {
        echo "No results";
            }
        mysqli_close($conn);
        echo "</table>";
    }
    elseif($mfr != "" && $type == ""){
        $sql = "select * from cereal WHERE name REGEXP \"" . $searchbar . "\" and mfr = \"" . $mfr . "\"";
        echo($sql);
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Manufactor</th><th>Type</th><th>Calories</th><th>Protein</th><th>Fat</th><th>Sodium</th><th>Fiber</th><th>Carbo</th><th>Surgars</th><th>Potass</th><th>Vitamins</th><th>Shelf</th><th>Weight</th><th>Cups</th><th>Rating</th><th>Id</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            #echo $row['title'] . "<br>";
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mfr'] . "</td><td>". $row['type'] ."</td><td>". $row['calories'] . "</td><td>". $row['protein'] . "</td><td>". $row['fat'] ."</td><td>". $row['sodium']. "</td><td>". $row['fiber']. "</td><td>". $row['carbo']. "</td><td>". $row['sugars']. "</td><td>". $row['potass']. "</td><td>". $row['vitamins']. "</td><td>". $row['shelf']. "</td><td>". $row['weight']. "</td><td>". $row['cups']. "</td><td>". $row['rating']. "</td><td>". $row['id']. "</td></tr>";
        }
        } else {
            echo "No results";
            }
        mysqli_close($conn);
        echo "</table>";

    }

    elseif($mfr == "" && $type != ""){
        $sql = "select * from cereal WHERE name REGEXP \"" . $searchbar . "\" and type = \"" . $type . "\"";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Manufactor</th><th>Type</th><th>Calories</th><th>Protein</th><th>Fat</th><th>Sodium</th><th>Fiber</th><th>Carbo</th><th>Surgars</th><th>Potass</th><th>Vitamins</th><th>Shelf</th><th>Weight</th><th>Cups</th><th>Rating</th><th>Id</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            #echo $row['title'] . "<br>";
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mfr'] . "</td><td>". $row['type'] ."</td><td>". $row['calories'] . "</td><td>". $row['protein'] . "</td><td>". $row['fat'] ."</td><td>". $row['sodium']. "</td><td>". $row['fiber']. "</td><td>". $row['carbo']. "</td><td>". $row['sugars']. "</td><td>". $row['potass']. "</td><td>". $row['vitamins']. "</td><td>". $row['shelf']. "</td><td>". $row['weight']. "</td><td>". $row['cups']. "</td><td>". $row['rating']. "</td><td>". $row['id']. "</td></tr>";
        }
        } else {
            echo "No results";
            }
        mysqli_close($conn);
        echo "</table>";

    }

    else{
        $sql = "select * from cereal WHERE name REGEXP \"" . $searchbar . "\" and mfr = \"" . $mfr . "\" and type = \"" . $type . "\"" ;
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Manufactor</th><th>Type</th><th>Calories</th><th>Protein</th><th>Fat</th><th>Sodium</th><th>Fiber</th><th>Carbo</th><th>Surgars</th><th>Potass</th><th>Vitamins</th><th>Shelf</th><th>Weight</th><th>Cups</th><th>Rating</th><th>Id</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            #echo $row['title'] . "<br>";
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mfr'] . "</td><td>". $row['type'] ."</td><td>". $row['calories'] . "</td><td>". $row['protein'] . "</td><td>". $row['fat'] ."</td><td>". $row['sodium']. "</td><td>". $row['fiber']. "</td><td>". $row['carbo']. "</td><td>". $row['sugars']. "</td><td>". $row['potass']. "</td><td>". $row['vitamins']. "</td><td>". $row['shelf']. "</td><td>". $row['weight']. "</td><td>". $row['cups']. "</td><td>". $row['rating']. "</td><td>". $row['id']. "</td></tr>";
        }
        } else {
            echo "No results";
            }
        mysqli_close($conn);
        echo "</table>";
    }





}
/*
if($searchbar != "" && $mfr == "" && $type == ""){
    $sql = "select * from cereal WHERE name REGEXP \"" . $searchbar . "\"";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Manufactor</th><th>Type</th><th>Calories</th><th>Protein</th><th>Fat</th><th>Sodium</th><th>Fiber</th><th>Carbo</th><th>Surgars</th><th>Potass</th><th>Vitamins</th><th>Shelf</th><th>Weight</th><th>Cups</th><th>Rating</th><th>Id</th></tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        #echo $row['title'] . "<br>";
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mfr'] . "</td><td>". $row['type'] ."</td><td>". $row['calories'] . "</td><td>". $row['protein'] . "</td><td>". $row['fat'] ."</td><td>". $row['sodium']. "</td><td>". $row['fiber']. "</td><td>". $row['carbo']. "</td><td>". $row['sugars']. "</td><td>". $row['potass']. "</td><td>". $row['vitamins']. "</td><td>". $row['shelf']. "</td><td>". $row['weight']. "</td><td>". $row['cups']. "</td><td>". $row['rating']. "</td><td>". $row['id']. "</td></tr>";
    }
    } else {
        echo "No results";
            }
    mysqli_close($conn);
    echo "</table>";

}
elseif($mfr != "" && $type == ""){
    $sql = "select * from cereal WHERE " . $filter ." = \"" . $searchbar . "\"";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Manufactor</th><th>Type</th><th>Calories</th><th>Protein</th><th>Fat</th><th>Sodium</th><th>Fiber</th><th>Carbo</th><th>Surgars</th><th>Potass</th><th>Vitamins</th><th>Shelf</th><th>Weight</th><th>Cups</th><th>Rating</th><th>Id</th></tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        #echo $row['title'] . "<br>";
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mfr'] . "</td><td>". $row['type'] ."</td><td>". $row['calories'] . "</td><td>". $row['protein'] . "</td><td>". $row['fat'] ."</td><td>". $row['sodium']. "</td><td>". $row['fiber']. "</td><td>". $row['carbo']. "</td><td>". $row['sugars']. "</td><td>". $row['potass']. "</td><td>". $row['vitamins']. "</td><td>". $row['shelf']. "</td><td>". $row['weight']. "</td><td>". $row['cups']. "</td><td>". $row['rating']. "</td><td>". $row['id']. "</td></tr>";
    }
    } else {
        echo "No results";
            }
    mysqli_close($conn);
    echo "</table>";
}
elseif($mfr == "" && $type != ""){
    $sql = "select * from cereal WHERE " . $filter ." = \"" . $searchbar . "\"";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Manufactor</th><th>Type</th><th>Calories</th><th>Protein</th><th>Fat</th><th>Sodium</th><th>Fiber</th><th>Carbo</th><th>Surgars</th><th>Potass</th><th>Vitamins</th><th>Shelf</th><th>Weight</th><th>Cups</th><th>Rating</th><th>Id</th></tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        #echo $row['title'] . "<br>";
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mfr'] . "</td><td>". $row['type'] ."</td><td>". $row['calories'] . "</td><td>". $row['protein'] . "</td><td>". $row['fat'] ."</td><td>". $row['sodium']. "</td><td>". $row['fiber']. "</td><td>". $row['carbo']. "</td><td>". $row['sugars']. "</td><td>". $row['potass']. "</td><td>". $row['vitamins']. "</td><td>". $row['shelf']. "</td><td>". $row['weight']. "</td><td>". $row['cups']. "</td><td>". $row['rating']. "</td><td>". $row['id']. "</td></tr>";
    }
    } else {
        echo "No results";
            }
    mysqli_close($conn);
    echo "</table>";
}
elseif($mfr != "" && $type != ""){
    $sql = "select * from cereal WHERE " . $filter ." = \"" . $searchbar . "\"";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Manufactor</th><th>Type</th><th>Calories</th><th>Protein</th><th>Fat</th><th>Sodium</th><th>Fiber</th><th>Carbo</th><th>Surgars</th><th>Potass</th><th>Vitamins</th><th>Shelf</th><th>Weight</th><th>Cups</th><th>Rating</th><th>Id</th></tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        #echo $row['title'] . "<br>";
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['mfr'] . "</td><td>". $row['type'] ."</td><td>". $row['calories'] . "</td><td>". $row['protein'] . "</td><td>". $row['fat'] ."</td><td>". $row['sodium']. "</td><td>". $row['fiber']. "</td><td>". $row['carbo']. "</td><td>". $row['sugars']. "</td><td>". $row['potass']. "</td><td>". $row['vitamins']. "</td><td>". $row['shelf']. "</td><td>". $row['weight']. "</td><td>". $row['cups']. "</td><td>". $row['rating']. "</td><td>". $row['id']. "</td></tr>";
    }
    } else {
        echo "No results";
            }
    mysqli_close($conn);
    echo "</table>";
}

#$sql = "select * from Bookslab";
*/
/*
$result = mysqli_query($conn, $sql);
echo "<table>";
echo "<tr><th>BookID</th><th>title</th><th>author</th><th>genre</th><th>book condition</th><th>repurposing</th><th>Availability</th></tr>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      #echo $row['title'] . "<br>";
      echo "<tr><td>" . $row['BookID'] . "</td><td>" . $row['title'] . "</td><td>". $row['author'] ."</td><td>". $row['genre'] . "</td><td>". $row['bookcondition'] . "</td><td>". $row['repurposing'] ."</td><td>". $row['Availability']. "</td></tr>";
    }
} else {
    echo "No results";
}
mysqli_close($conn);
echo "</table>";
*/
?>