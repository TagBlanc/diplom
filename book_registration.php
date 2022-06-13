<?php 
include_once "db.php";
$db = new Database();
switch($_POST['type']){
    case 'book':
        $errors = array();
        $file_name = $_FILES['book_file']['name'];
        $file_size = $_FILES['book_file']['size'];
        $file_tmp = $_FILES['book_file']['tmp_name'];
        $file_type = $_FILES['book_file']['type'];
        $file_ext = strtolower(end(explode('.',$_FILES['book_file']['name'])));
        $expansions = array("pdf");
        $move = "books/".$file_name;
        move_uploaded_file($file_tmp, $move);

        $bookName = $_POST['bookName'];
        $bookCategory = $_POST['bookCategory'];
        $bookEdition = $_POST['bookEdition'];
        $bookAuthor = $_POST['bookAuthor'];
        echo($bookName);
        echo('<br/>');
        echo($bookCategory);
        echo('<br/>');
        echo($bookEdition);
        echo('<br/>');
        echo($bookAuthor);
        echo('<br/>');
        echo($file_name);

        $query = "INSERT INTO books (name, id_author, id_edition, id_category, filename) VALUES ('$bookName', '$bookAuthor', '$bookEdition', '$bookCategory', '$file_name')";
        $db->query($query);
        header("Location: index.php"); 
        break;
    case 'category':
        $category = $_POST['addCategory'];
        $query = "INSERT INTO book_category (category) VALUES ('$category')";
        $db->query($query);
        header("Location: index.php"); 
    case 'edition':
        $edition = $_POST['addEdition'];
        $query = "INSERT INTO book_edition (edition) VALUES ('$edition')";
        $db->query($query);
        header("Location: index.php"); 
        break;
    case 'author':
        $authorSname = $_POST['addAuthorSname'];
        $authorName = $_POST['addAuthorName'];
        $authorPname = $_POST['addAuthorPname'];
        $query = "INSERT INTO author (sname, name, pname) VALUES ('$authorSname', '$authorName', '$authorPname')";
        $db->query($query);
        header("Location: index.php");
        break;
    defaut:
        echo('404');
    }
?>