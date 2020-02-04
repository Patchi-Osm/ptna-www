<!DOCTYPE html>
<html lang="en">

<?php include('html-head.inc'); ?>

<?php include('../script/statistics.php'); ?>

    <body>

      <div id="wrapper">
      
<?php include "header.inc" ?>

        <main id="main" class="results">

            <h2 id="statistics"><img src="/img/GreatBritain16.png" alt="Union Jack" /> Statistics</h2>
            <p>
            </p>
            
            <table id="message-table">
                <thead>
<?php include 'statistics-trth.inc' ?>
                </thead>
                <tbody>
<?php  $network_array = GetAllNetworks();

      foreach ( $network_array as $network ) {
          echo "<!-- $network -->\n";
          PrintNetworkStatistics( $network );
      }
      PrintNetworkStatisticsTotals( );
?>
                </tbody>
            </table>

        </main> <!-- main -->

        <hr />

<?php include "footer.inc" ?>

      </div> <!-- wrapper -->
    </body>
</html>

