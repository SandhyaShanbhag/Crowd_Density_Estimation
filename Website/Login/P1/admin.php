<?php
    include('../Db/dbconfig.php');
    $data = $database->getReference('Jayanagar')->getValue();
    $cdata = $database->getReference('Chikpete')->getValue();
    $bdata = $database->getReference('Banashnkari')->getValue();
    $ldata = $database->getReference('Lalbagh')->getValue();
    $jdata = $database->getReference('Jpnagar')->getValue();
    $mdata = $database->getReference('Majestic')->getValue();
    foreach($data as $row){
        $temp= $row['Pickup'];
    }
    foreach($cdata as $row){
        $ctemp= $row['Pickup'];
    }
    foreach($bdata as $row){
        $btemp= $row['Pickup'];
    }
    foreach($ldata as $row){
        $ltemp= $row['Pickup'];
    }
    foreach($jdata as $row){
        $jtemp= $row['Pickup'];
    }
    foreach($mdata as $row){
        $mtemp= $row['Pickup'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
    <div class="content">
        <table> 
            <tr>
                <th colspan="7">Route Deatils</th>
            </tr>
            <tr>
                <td>Jayanagar</td>
                <td><p>No.of Passengers In Bus</p> <p>15</p></td>
                <td><p>Number of pickup requests</p> <p><?php echo $temp;?></p></td>
                <td><a href=""><button type="button" class="btn btn-link" onclick="add()">Add Buses</button></a></td>
            </tr>
            <tr>
                <td>Lalbhag</td>
                <td><p>No.of Passengers In Bus</p> <p>24</p></td>
               
                <td><p>Number of pickup requests</p> <p><?php echo $ltemp;?></p></td>
                <td><a href=""><button type="button" class="btn btn-link"onclick="add()">Add Buses</button></a></td>
            </tr>
            <tr>
                <td>Chikpete</td>
                <td><p>No.of Passengers In Bus</p> <p>29</p></td>
               
                <td><p>Number of pickup requests</p> <p><?php echo $ctemp;?></p></td>
                <td><a href=""><button type="button" class="btn btn-link"onclick="add()">Add Buses</button></a></td>
            </tr>
            <tr>
                <td>JP Nagar</td>
                <td><p>No.of Passengers In Bus</p> <p>18</p></td>
                
                <td><p>Number of pickup requests</p> <p><?php echo $jtemp;?></p></td>
                <td><a href=""><button type="button" class="btn btn-link"onclick="add()">Add Buses</button></a></td>
            </tr>
            <tr>
                <td>Banashankari</td>
                <td><p>No.of Passengers In Bus</p> <p>21</p></td>
                
                <td><p>Number of pickup requests</p> <p><?php echo $btemp;?></p></td>
                <td><a href=""><button type="button" class="btn btn-link"onclick="add()">Add Buses</button></a></td>
            </tr>
            <tr>
                <td>Majestic</td>
                <td><p>No.of Passengers In Bus</p> <p>28</p></td>
              
                <td><p>Number of pickup requests</p> <p><?php echo $mtemp;?></p></td>
                <td><a href=""><button type="button" class="btn btn-link"onclick="add()">Add Buses</button></a></td>
            </tr>
        </table>
        <br>
    </div>
    <div class="graph">
    <iframe width="400" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1773434/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
    <iframe width="400" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1773434/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
    <iframe width="405" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/1773434/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
    
    </div>
    <div class="back" style="margin-left:50%">
        <button type="button" class="btn btn-outline-secondary"onclick="window.open('../login/admin_login.html','_self')">Back</button>
    </div>
</body>
<script>
    function add(){
        window.alert("Request for adding buses has been sent");
    }
</script>
</html>