<html>

   <head>
      <title>File I/O using PHP</title>
   </head>
   
   <body>
      /*This program will show file input output
      <?php
         $filename = "tmp.txt";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "<pre>$filetext</pre>" );
      ?>
      
   </body>
</html>
