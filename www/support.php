<?php
    // constants to customise this pages headers
    $DESCRIPTION = "Support details for the analogue project";
    $TITLE = "analogue &mdash; Support Details";
    $AUTHOR = "Gavin L. Simpson";
    $KEYWORDS = "analogue, R, modern analogue technique, analogue matching, transfer functions, palaeoecology, palaeolimnology";
    $current = "support";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- head tags here -->
<?php
    include_once("./include/head.inc");
?>

<body>
<!-- wrap starts here -->
<div id="wrap">
		
		<!--header -->
		<div id="header">			
				
			<h1 id="logo-text">ana<span class="gray">logue</span></h1>		
			<h2 id="slogan">a palaeoecological data analysis package for R</h2>
		</div>
		
		<!-- menu -->		
		<?php
            include_once("./include/menu.inc");
		?>			
			
		<!-- content-wrap starts here -->
		<div id="content-wrap">
				
		<!-- side bar -->
        <?php
            include_once("./include/side_bar.inc");
        ?>
				
			<div id="main">
				
				<a name="Welcome"></a>
				<h1>Getting help with using the analogue package</h1>
				
				<h2>Manual Pages</h2>
				<p>The primary help resource for <strong>analogue</strong> are the help pages. Use them to find out
				what functions included in the package do and how to call them from the prompt. To view a help page,
				prepend a '?' to the name of the function you need help with. For example to get help on the 
				<span class="fun">distance()</span> function type <code>?distance</code></p>
				
				<h2>Talk to us!</h2>
				<p>We've created a support forum on the R-Forge site for analogue. Use it to ask for help using
				<strong>analogue</strong>. The <a href="http://r-forge.r-project.org/forum/forum.php?forum_id=200" title="Link to the analogue support forum">support forum</a> 
				is monitored by the project admin, but please make sure you've checked the help pages (above) and the
				other documentation before posting, and remember to include example code to illustrate what the problem 
				you are facing is.</p>

			</div>
		
		<!-- content-wrap ends here -->	
		</div>
					
		<!--footer starts here-->
		<?php
            include_once("./include/footer.inc");
        ?>

<!-- wrap ends here -->
</div>

</body>
</html>