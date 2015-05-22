<?php
/**
 * Created by PhpStorm.
 * User: robertarandazzo
 * Date: 21/05/15
 * Time: 13:18
 */
include("conn.php");
include'header.html';


?>

<h1>Tutte Le News! </h1>

<div>
    <section>
        <?php



        $sql=('SELECT * FROM news ORDER BY data');

        foreach (($connessione->query($sql)) as $row) {

            //stampa tutto il DB riga per riga
            echo '<h3>' . $row['titolo'] . '</h3>
                     <div>' . $row['data'] . '</div>
                     <div>' . $row['immagine'] . '</div>
                     <div>' . $row['testo'] . '</div>';

        }
        ?>


    </section>
</div>
</body>
</html>
<?php
include'footer.html';