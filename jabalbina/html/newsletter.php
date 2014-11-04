<?php

if (isset($_GET["newsletter"])) {
    $newsletter = $_GET["newsletter"];
    ?>
    <object data="newsletters/<?php echo $newsletter ?>" type="application/pdf" width="100%" height="90%">
        <p>It appears you don't have a PDF plugin for this browser.
            No biggie... you can <a href="/<?php echo $newsletter ?>">click here to
                download the PDF file.</a></p>

    </object>
<?php

} else {
    echo "<p>newsletter missing</p>";
}
?>

