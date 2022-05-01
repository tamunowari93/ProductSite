<html>
  <link rel="stylesheet" href="styles.css">
  <head>
  </head>
  <body>
    <h1>Existing contacts</h1><br>
    <p>Your information is:<p>
    <p>
    <?php
	// GET & DISPLAY CONTACTS INFO FROM FILE
        $file = new SplFileObject("data.txt");
        while(!$file->eof())
        { echo $file->fgets()."<br/>";  }
        $file = null;
        ?>
    </p>
    <a href="contact.html">Return to the main page</a><br>
  </body>
</html>
