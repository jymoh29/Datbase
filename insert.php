<!doctype html>
<html>
    <head>
        <h1>insert data into our table
</head>
<body>
    <center>
        <?php
        require "dbconnect.php";
        $book_author = $_REQUEST['book_author'];
        $book_title = $_REQUEST['book_title'];
        $year_of_publication = $_REQUEST['year_of_publication'];
        $sql = "insert into staff values('$book_author', '$book_title', '$year_of_publication')";
        if($conn ->query($sql)===true) {
            echo "records inserted";
        }else {
            echo "error";
        }
        ?>
        </center>
    </body>
    </html>