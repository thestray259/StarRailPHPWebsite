<?php
include_once "MyHeader.php";
?>

<?php
$MyHeader = "Contact Page";

echo "<br> Contact us using the form below! <br> <br>";
?>

<div class="container">
    <form>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your First Name..." />

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your Last Name..." />

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your Email..." />

        <label for="subject">Subject</label>
        <textarea type="text" id="subject" name="subject" placeholder="Write something..." style="height:200px" />

        <input type="submit" value="Submit" />
    </form>
</div>

<?php
include_once "MyFooter.php";
?>