<?php
$myHeader = "Page Manager";
include_once "MyHeader.php";

// Use this page to change the value of a page

?>

<form>
    <label for="title">Title</label>
    <input type="text" id="title" name="title" placeholder="Enter Title" />


    <label for="header">Header</label>
    <input type="text" id="header" name="header" placeholder="Enter Header" />

    <label for="contents">Contents</label>
    <textarea type="text" id="contents" name="contents" placeholder="Page Contents Here" style="height:200px"></textarea>

    <input type="submit" value="Create Page" />
</form>

<br />
<br />
My sugestion: Create a Table that lists all the pages (records) in the database. Each record will have an Edit and Delete link.
<br />
Each link takes the person to a page where they can edit the content

<?php
include_once "MyHeader.php";
?>

