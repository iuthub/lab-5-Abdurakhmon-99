<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
        <?php
            if ((!$_POST['text']) || (!$_POST['section'])|| (!$_POST['name']) || (!$_POST['cc']))
            {
        ?>

       		<h2>Sorry</h2>
        
        	<p>
        	You didn't fill out the form completely. 
        	<a href="buyagrade.php">Try again?</a>
        	</p>  	
        <?php
            }
            else 
            {
            	$name = $_POST['text'];
    			$section = $_POST['section'];
    			$cardnumber = $_POST['name'];
                $cardtype = $_POST['cc'];

                $data = $name . ";" . $section . ";" . $cardnumber . ";" . $cardtype . "\n";
        ?>
        	<h2>Thanks, sucker!</h2>
        	<p>
        	    Your information has been recorded.
        	</p>
        	<dl>
       			<dt>Name</dt>
            	<dd>
                	<?php
                	    print $name;
               		?>
            	</dd>
            	<dt>Section</dt>
            	<dd>
            	    <?php
            	        print $section;
                	?>
            	</dd>
            	<dt>Credit Card</dt>
            	<dd>
            	    <?php
                	    printf("%s (%s)", $cardnumber, $cardtype);
                	?>
            	</dd>
        	</dl>
    	    <?php
    	        file_put_contents("suckers.txt", $data, FILE_APPEND);
    	    ?>
    	    <div>
    	    	<pre>
    	    		<p>All suckers:</p>
<?php print file_get_contents("suckers.txt")?>
    	    	</pre>
    	    </div>  
   	    <?php
   	        }
        ?>     
	</body>
</html>