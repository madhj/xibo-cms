<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php include('../../template.php'); ?>
<html>
    <head>
        <meta name="generator" content="HTML Tidy, see www.w3.org">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

        <title><?php echo PRODUCT_NAME; ?> Documentation</title>
        <link rel="stylesheet" type="text/css" href="../../css/doc.css">
        <meta http-equiv="Content-Type" content="text/html">
		<meta name="keywords" content="digital signage, signage, narrow-casting, <?php echo PRODUCT_NAME; ?>, open source, agpl" />
		<meta name="description" content="<?php echo PRODUCT_NAME; ?> is an open source digital signage solution. It supports all main media types and can be interfaced to other sources of data using CSV, Databases or RSS." />
        <link href="img/favicon.ico" rel="shortcut icon">
        <!-- Javascript Libraries -->
		<script type="text/javascript" src="lib/jquery.pack.js"></script>
		<script type="text/javascript" src="lib/jquery.dimensions.pack.js"></script>
		<script type="text/javascript" src="lib/jquery.ifixpng.js"></script>
    </head>

    <body>
        <h1>Content</h1>
        <h2>Overview</h2>

		<p><?php echo PRODUCT_NAME; ?> uses content to on layouts. The content library is a store of all the content that
		has been used on layouts in the past, and content to be used on new layouts.</p>
			
        <p>In <?php echo PRODUCT_NAME; ?> content refers to individual &ldquo;items&rdquo; that you want to be
        available for displaying.</p>

        <p">For example a picture is considered as a piece of content and so is a piece of text.
        Each piece of content has information relating to it that <?php echo PRODUCT_NAME; ?> uses to display it in the best way. You will be
        prompted to enter all the required information when you come to add pieces of content.</p>

        <p>Adding content on its own is not enough to actually display it on the screen, there
        are further steps required before this can happen (i.e. Layouts).</p>
 
		<a name="When_should_content_be_added" id="When_should_content_be_added"></a><h2>When should content be added?</h2>
		<p>From this content library page, content should be added before it is needed. However
		content can also be added when creating layouts using the layout designer.</p>

		<?php include('../../template/footer.php'); ?>
    </body>
</html>
