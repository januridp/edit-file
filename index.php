<?php

// configuration
$url = 'http://localhost/editfile/index.php';
$file = 'file/apaja.html';

// check if form has been submitted
if (isset($_POST['text']))
{
    // save the text contents
    file_put_contents($file, $_POST['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($file);

?>
<!-- HTML form -->
<form action="" method="post">
<textarea name="text" style="background:#333;color:f1f1f1;width:100%;height:600px;"><?php echo htmlspecialchars($text) ?></textarea>
<input type="submit" value="Simpan"/>
<input type="reset" value="Ulangi"/> <a href="http://ibacor.com/media/" target="_blank">Free online tools</a>
</form>