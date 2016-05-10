<?php include 'db.php';?>
<?php

//Query the DB for messages
$strsql = "select * from alumno";
if ($result = $mysqli->query($strsql)) {
   // printf("<br>Select returned %d rows.\n", $result->num_rows);
} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>RAWR</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
   <link rel="stylesheet" href="styles/layout.css" type="text/css">

</head>
<body>
	<div class="wrapper row1">
  		<header id="header" class="clear">
    		<div id="hgroup">
      			<h1><a href="#">Ez Cloud</a></h1>
      			<h2>GG Adae</h2>
    		</div>
    		<nav>
      			<ul>
        			<li><a href="#">Hector</a></li>
			        <li><a href="#">Angel</a></li>
			        <li><a href="#">Nicolas</a></li>
			        <li><a href="#">Manrique</a></li>
			        <li class="last"><a href="#">Espinoza</a></li>
      			</ul>
   			</nav>
  		</header>
	</div>
	<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="slider"><a href="#"><img src="images/ingresa-aqui-el-nombre-de-la-imagen-larga.-extension-" alt="Imagen larga"></a></section>
    <!-- main content -->
    <div id="homepage">
      <!-- Services -->
      <section id="services" class="clear">
        <article class="one_third">
          <figure><img src="images/nombre de imagen izquierda.extension" width="290" height="180" alt="imagen izquierda">
            <figcaption>
              <h2>Indonectetus facilis</h2>
              <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna.</p>
              <footer class="more"><a href="#">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
        <article class="one_third">
          <table>
			<tr>
				<td>
					<table border="1" style="background-color:‪#‎FF0000‬;border-collapse:collapse;border:2px #000000;color:‪#‎FFFFFF‬">
 				        <tbody>
        					<?php
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings
            }
            echo "</tr>\n";
            mysqli_data_seek ( $result, 0 );
            if($result->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
            $result->close();
            mysqli_close();
        ?>
        				</tbody>
    				</table>
   				 </td>
				<td>
					<table border="1" style="background-color:‪#‎FF0000‬;border-collapse:collapse;border:2px #000000;color:‪#‎FFFFFF‬">
						<tbody>
        
        					<?php
        $strsql = "select * from curso";
		if ($result = $mysqli->query($strsql)) {
   				// printf("<br>Select returned %d rows.\n", $result->num_rows);
			} else {
        //Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
        echo "<b>Can't query the database, did you <a href = init.php>Create the table</a> yet?</b>";
    }
            echo "<tr>\n";
            while ($property = mysqli_fetch_field($result)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings
            }
            echo "</tr>\n";
            mysqli_data_seek ( $result, 0 );
            if($result->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
                }
                echo "</tr>\n";
            }
            $result->close();
            mysqli_close();
        ?>
        				</tbody>
  	  				</table>
				</td>
			</tr>
			</table>
        </article>
        <article class="one_third lastbox">
          <figure><img src="images/imagen deracha. extension" width="290" height="180" alt="Imagen derecha">
            <figcaption>
              <h2>Indonectetus facilis</h2>
              <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna.</p>
              <footer class="more"><a href="#">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>

      <section id="intro" class="last clear">
        <article>
        <h2>Pernsonaliza esto</h2>
              <p>Puedes copiar el primer div aqui si necesitas la imagen larga. Template de :<a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
          <figure><img src="images/¨nombre-de-imagen-final.extension" width="450" height="250" alt="Imagen fin">
            
          </figure>
        </article>
      </section>
      <!-- / Introduction -->
    </div>
    <!-- / content body -->
  </div>

</body>

</html>