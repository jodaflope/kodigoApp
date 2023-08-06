<?php require ('templates/Header.php');?>

<h1>Form to add new bootcamp</h1>

<form method="POST" action="<?php $_SERVER ['PHP_SELF']?>">
<input type="text" name="title" placeholder="Type your title"/>
<input type="text" name="description" placeholder="Type your description"/>
<input type="date" name="start_bootcamp" placeholder="Type your start bootcamp"/>
<input type="date" name="end_bootcamp" placeholder="Type your end bootcamp"/>
<input type="number" name="modules" placeholder="Type your module bootcamp"/>

<button type="submit">ADD NEW BOOTCAMP</button>

</form>

<?php require ('templates/Footer.php');?>