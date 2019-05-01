<html>
<head>
<title>Test</title>
</head>
<body>
    <table border=1 cellpadding=1 cellspacing=1>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>price</th>
            <th>image</th>
            <th>Delete</th>
        </tr>
        <?php
            //connect with mysql
            $con = mysqli_connect('localhost','root'.'');
            //select the database
            mysqli_select_db($con,'agile');
            //select query
            $sql = "select * from products";
            //execute the query
            $records=mysqli_query($con,$sql);

            while($row = mysqli_fetch_array($records))
            {
                echo "<td>";?><img src="<?php echo $row['image']; ?>" height="100" width="100"><?php echo "</td>";
                
            }

        ?>
    </table>

</body>
</html>