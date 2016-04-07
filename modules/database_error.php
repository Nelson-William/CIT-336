<html>
    <title>Teaching Presentation</title>
<head id="page_head"> <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?> </head>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/modules/googletracking.php'; ?>
<div id="wrapper">
    <br>
<header id="page_header"> <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?> </header>
<br>
<nav id="page_nav"> <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?> </nav>
<br>
<div id="main">
    <h1>Database Error</h1>
    <p class="first_paragraph">There was an error connecting to the database.</p>
    
    <p class="last_paragraph">Error message: <?php echo $error_message; ?></p>
</div><!-- end main -->
<footer id="page_footer"> <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?> </footer>

</div> <!--close wrapper-->
</body>
</html>
