<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h1>Search STUDENT</h1><br>
    <input type="text" id="fullname" placeholder="Enter full name">
    <button onclick="search()">Search</button>
    <table>
        <tr>
            <th>No</th>
            <th>Student_ID</th>
            <th>Full_name</th>
            <th>Class_name</th>
        </tr>
    <?php
        $conn=new mysqli("localhost", "root", "", "Mana_commodity");
        if ($conn->connect_error) {
            echo "<scipt>aler('Connect database fail')</script>";
            return;
        }
        $temp=0;
        if(!isset($_GET['fullname'])){
            $data=$conn->query('select Student_ID,concat(S_FristName," ",S_LastName) as Full_name,Class_Name from STUDENTS,CLASSES where STUDENTS.Class_ID=CLASSES.Class_ID');
            if($data->num_rows > 0){
                while($row = $data->fetch_assoc()){
                    $temp+=1;
                    echo "<tr>";
                    echo "<td>".$temp."</td>";
                    foreach($row as $key => $value){
                        echo "<td>".$value."</td>";
                    }
                    echo "</tr>";
                }
            }
        }else{
            $data=$conn->query("select Student_ID,concat(S_FristName,' ',S_LastName) as Full_name,Class_Name from STUDENTS,CLASSES where STUDENTS.Class_ID=CLASSES.Class_ID and concat(S_FristName,' ',S_LastName) like '%".$_GET['fullname']."%'");
            if($data->num_rows > 0){
                while($row = $data->fetch_assoc()){
                    $temp+=1;
                    echo "<tr>";
                    echo "<td>".$temp."</td>";
                    foreach($row as $key => $value){
                        echo "<td>".$value."</td>";
                    }
                    echo "</tr>";
                }
            }
        }
    ?>
    </table>
    <script>
        function search(){
            window.location="?fullname="+document.getElementById('fullname').value;
        }
    </script>
</body>
</html>