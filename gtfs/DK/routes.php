<!DOCTYPE html>
<?php   include( '../../script/globals.php'     );
        include( '../../script/gtfs.php'        );
        include( '../../script/parse_query.php' );
?>
<html lang="<?php echo $html_lang ?>">

<?php $title="GTFS Analysis"; $lang_dir="../../$ptna_lang/"; include $lang_dir.'html-head.inc'; ?>

    <body>
      <script src="/script/ptna-list.js"></script>

      <div id="wrapper">

<?php   include $lang_dir.'header.inc' ?>

        <main id="main" class="results">

            <h2 id="DK"><a href="index.php"><img src="/img/Denmark32.png" alt="Flag til Danmark" /></a> GTFS-analyser for <?php if ( $feed ) { echo '<span id="network">' . htmlspecialchars($feed) . '</span>'; } else { echo '<span id="feed">Danmark</span>'; } ?></h2>
            <div class="indent">

                <h3 id="feeds">Available GTFS sources</h3>
                <div class="indent">

<?php   $months_short = array( "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" );

        CreateGtfsTimeLine( $feed, $release_date, $months_short ) ;

        include $lang_dir.'gtfs-feed-legend.inc';
?>

                </div>

                <h3 id="routes">Existing Routes</h3>
                <div class="indent">

<?php   include $lang_dir.'gtfs-routes-head.inc' ?>

                    <?php
                        $ptna = GetPtnaDetails( $network );
                        if ( $ptna['comment'] ) {
                            printf( "<p><strong>%s</strong></p>\n", htmlspecialchars($ptna['comment']) );
                        }
                        $osm = GetOsmDetails( $network );
                        if ( $osm['gtfs_agency_is_operator'] ) {
                            $include_agency = 1;
                        } else {
                            $include_agency = 0;
                        }
                ?>

                    <button class="button-create" type="button" onclick="ptnalistdownload( <?php echo $include_agency; ?> )">Download som en CSV-liste til PTNA</button>

                    <table id="gtfs-routes">
                        <thead>
<?php include $lang_dir.'gtfs-routes-trth.inc' ?>
                        </thead>
                        <tbody>
<?php $duration = CreateGtfsRoutesEntry( $network ); ?>
                        </tbody>
                    </table>

                    <?php printf( "<p>SQL-forespørgsler tog %f sekunder</p>\n", $duration ); ?>
                </div>
            </div>

        </main> <!-- main -->

        <hr />

<?php include $lang_dir.'gtfs-footer.inc' ?>

      </div> <!-- wrapper -->
    </body>
</html>
