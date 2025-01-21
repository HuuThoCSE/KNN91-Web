<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {

    }
    td, th {
        border: 1px solid black;
    }

    form {
        display: flex;
        align-items: center;
        justify-content: center;


        gap: 5px;

        padding: 1px;

        width: 70%;

    }

    input {
        flex: 1; /* Đảm bảo input chiếm không gian tối ưu */

        outline: none;
        border-radius: 5px; /* Bo góc input */

        text-indent: 5%; /* Đẩy nội dung trong input sang bên phải */
    }

    input::placeholder {
        font-weight: bold; /* Làm chữ đậm */
    }

    button {
        margin-top: 2px;

        padding: 0 20px;

        cursor: pointer;

        border-radius: 5px; /* Bo góc input */
        background-color: transparent;
        color: white;

        /* transition: background-color 0.3s, color 0.3s; */
    } 

    button:hover {
        background-color: white; /* Màu khi hover */
        color: darkslategray;
    }
</style>
<body>
    <div style="width: 30%">
        <h1 style="text-align: right; color: blue;">Search STUDENT</h1>

        <form action="" method="GET" style="background-color: darkslategray; height: 50px; ">
            <input type="text" placeholder="Enter Full Name" style="height: 40px; margin: 0px;" name="txtFullName">
            <button style="height: 40px; margin: 0px;">Search</button>
        </form>

        <table style="width: 90%">
            <tr style="text-align: center; background: cornflowerblue; font-weight: bold; color: red; font-size: 24px">
                <td colspan="4">Result of search</td>
            </tr>
            <tr style="text-align: center; background: cornflowerblue">
                <td>No</td>
                <td>Student_ID</td>
                <td>Full_Name</td>
                <td>Class_Name</td>
            </tr>
            <?php
            $i = 0;
            if(isset($_GET['txtFullName'])){
                $cnn = new mysqli('localhost', 'root', '', 'mana_commodity');

                if($cnn->connect_error) die("Kết nối thất bại");

                $sql = "SELECT Student_ID, CONCAT(s.S_LastName, ' ', s.S_FirtName) as FullName,  c.Class_Name
                    FROM students s
                    JOIN classes c ON c.Class_ID = s.Class_ID
                    WHERE CONCAT(s.S_LastName,  ' ', s.S_FirtName) LIKE '%".$_GET['txtFullName']."%'
                ";
                
            } else {
                $sql = "SELECT Student_ID, CONCAT(s.S_LastName, ' ', s.S_FirtName) as FullName,  c.Class_Name
                    FROM students s
                    JOIN classes c ON c.Class_ID = s.Class_ID
                ";
            }
            $rs = mysqli_query($cnn, $sql);
            while($rw = $rs->fetch_assoc()){
                $i++;
                echo "
                <tr>
                    <td>{$i}</td>
                    <td>{$rw['Student_ID']}</td>
                    <td>{$rw['FullName']}</td>
                    <td>{$rw['Class_Name']}</td>
                </tr>
                ";
            }
            ?>
        </table>
    </div>
</body>
</html>