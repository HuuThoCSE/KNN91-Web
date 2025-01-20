<?php 
    $conn = mysqli_connect('localhost','root', '','wd05_books');
    mysqli_set_charset($conn, 'utf8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,th,td{
        font-size:20px;
    }
    td{
        padding: 5px;
    }
    th{
        font-weight:bold;
    }
    table{
        margin:20px auto;
    }
</style>
<body>
    <H1 style="text-align: center;color: blue;">LIST BOOKS</H1>
    <table border="1" style="border-collapse: collapse;" cellpadding="2">
        <tr>
            <th>No</th>
            <th>Book Name</th>
            <th>Book Category</th>
            <th>Action</th>
        </tr>
        <?php
            if($conn)
            {
                $sql = "SELECT book.id_book, name, bc.book_category
                from book, books_category bc
                where book.id_book_category = bc.id_book_category";

                $res = mysqli_query($conn, $sql);
                $no = 1;
                while($row = mysqli_fetch_assoc($res))
                {
                    ?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['book_category'];?></td>
                         <td>  <a href="index.php?id=<?php echo $row['id_book'];?>">View</a></td>
                    </tr>
                    <?php
                    $no++;
                }
            }
        ?>
    </table>
</body>
</html>