<!DOCTYPE html>
<html lang="en">

<?php $title="GTFS Analysis"; $inc_lang='../../en/'; include $inc_lang.'html-head.inc'; ?>

<?php include('../../script/globals.php'); ?>
<?php include('../../script/gtfs.php'); ?>

    <body>
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
      <script src="/script/gpx.js"></script>
      <script src="/script/showonmap.js"></script>
      <script src="/script/josm.js"></script>
      <script src="/script/routing.js"></script>


      <div id="wrapper">

<?php include $inc_lang.'header.inc' ?>

<?php
    $network          = ( $_GET['network'] )  ? $_GET['network']  : $_POST['network'];
    $trip_id          = ( $_GET['trip_id'] )  ? $_GET['trip_id']  : $_POST['trip_id'];
    $shape_id         = ( $_GET['shape_id'] ) ? $_GET['shape_id'] : $_POST['shape_id'];
    if ( !$trip_id && $shape_id ) {
        $trip_id      = GetGtfsTripIdFromShapeId( $network, $shape_id );
    }
    $route_id         = GetGtfsRouteIdFromTripId( $network, $trip_id );
    $route_short_name = GetGtfsRouteShortNameFromTripId( $network, $trip_id );
    if ( !$route_short_name ) {
        $route_short_name = 'not set';
    }
    $trips            = GetTripDetails( $network, $trip_id );
    $is_invalid       = $trips["ptna_is_invalid"];
    $is_wrong         = $trips["ptna_is_wrong"];
    $comment          = $trips["ptna_comment"];
    $shape_id         = $trips["shape_id"];
?>

        <main id="main" class="results">

            <div id="gtfsmap"></div>
            <div class="gtfs-intro">

                <h2 id="FR"><a href="index.php"><img src="/img/France32.png" alt="tricolore franciase" /></a> GTFS Analysis pour <?php if ( $network && $route_id && $route_short_name && $trip_id ) { echo '<a href="routes.php?network=' .urlencode($network) . '"><span id="network">' . htmlspecialchars($network) . '</span></a> <a href="trips.php?network=' . urlencode($network) . '&route_id=' . urlencode($route_id) . '">Route "<span id="route_short_name">' . htmlspecialchars($route_short_name) . '</span></a>", Trip-Id = "<span id="trip_id">' . htmlspecialchars($trip_id) . '</span>"'; } else { echo '<span id="network">la France</span>'; } ?></h2>
                <div class="indent">
                    <ul>
                        <li><a href="#showonmap">Map</a></li>
                        <li><a href="#proposal">Suggestion for OSM Tagging</a></li>
                        <li><a href="#stoplist">Stops</a></li>
                        <li><a href="#service-times">Service Times</a></li>
                        <?php
                            if ( $shape_id ) { echo '                <li><a href="#shapes">GTFS Shape Data</a></li>'; }
                        ?>
                    </ul>
                </div>

                <hr />

                <h2 id="showonmap">Map</h2>
                <div class="indent">
                    <?php
                        if ( $shape_id ) {
                            echo "                <p>\n";
                            echo "                    The route can be generated as GPX data using the buttons below.\n";
                            echo "                    So-called 'shape' data are available: shape_id = \"" . htmlspecialchars($shape_id) . "\".\n";
                            echo "                    The GPX data corresponds to the actual course.\n";
                            echo "                </p>\n";
                        } else {
                            echo "                <p>\n";
                            echo "                    The route can be generated as GPX data using the buttons below.\n";
                            echo "                    There are no so-called 'shape' data.\n";
                            echo "                    The GPX data corresponds to the linear distance between the stops.\n";
                            echo "                </p>\n";
                        }

                        echo "                <p>\n";
                        echo "                    Please note: The GTFS data may contain errors, indicate an inaccurate route, be incomplete.\n";
                        echo "                </p>\n";

                        if ( $comment ) {
                            echo "                <p>\n";
                            echo "                    This variant was provided with comments:\n";
                            echo "                </p>\n";
                            echo "                <ul>\n";
                            echo "                    <li><strong>"  . preg_replace("/\n/","</strong></li>\n                    <li><strong>", HandlePtnaComment($comment)) . "</strong></li>\n";
                            echo "                </ul>\n";
                        }
                    ?>

                </div>
            </div>

            <div class="clearing">
                <button class="button-create" type="button" onclick="gpxdownload()">GPX-Download</button>
                <button class="button-create" type="button" onclick="callBrouterDe('en','km')">Routing with 'brouter.de'</button>
                <button class="button-create" type="button" onclick="callGraphHopperCom('en','km')">Routing with 'graphhopper.com'</button>
                <button class="button-create" type="button" onclick="callOpenRouteServiceOrg('en','km')">Routing with 'maps.openrouteservice.org'</button>

                <hr />

                <h2 id="proposal">Suggestion for OSM Tagging</h2>
                <div class="indent">
<?php $duration = CreateOsmTaggingSuggestion( $network, $trip_id ); ?>
                </div>

                <hr />

                <h2 id="stoplist">Stops</h2>
                <div class="indent">
                    <p>
                    With <strong>iD</strong> and <strong>JOSM</strong> the environment of a stop can be loaded into an editor.
                    </p>
                    <ul>
                        <li><strong>iD</strong> - the display appears in a new window at zoom level 21.</li>
                        <li><strong>JOSM</strong> - an area of 30 m * 30 m around the stop(s) is downloaded.</li>
                    </ul>
                    <p>
                        In both cases it is not guaranteed that a stop that may be present in OSM is visible (is slightly outside the area or does not exist?).<br />
                        In both cases the position of the stop according to the coordinates available here can unfortunately not be made visible.
                    </p>

                    <button class="button-create" type="button" onclick="josm_load_and_zoom_stops()">Download OSM data around all stops in JOSM</button>

                    <table id="gtfs-single-trip">
                        <thead>
                            <tr class="gtfs-tableheaderrow">
                                <th class="gtfs-name" colspan="7">Stops</th>
                                <th class="gtfs-name" colspan="1">PTNA info for stop</th>
                            </tr>
                            <tr class="gtfs-tableheaderrow">
                                <th class="gtfs-name">Number</th>
                                <th class="gtfs-name">Name</th>
                                <th class="gtfs-name">Download</th>
                                <th class="gtfs-date">Departure time (1)</th>
                                <th class="gtfs-number">Latitude</th>
                                <th class="gtfs-number">Longitude</th>
                                <th class="gtfs-text">Stop-ID</th>
                                <th class="gtfs-comment">Comment</th>
                            </tr>
                        </thead>
                        <tbody>
<?php $duration += CreateGtfsSingleTripEntry( $network, $trip_id ); ?>
                        </tbody>
                    </table>
                    <p><strong>(1) Example for departure time</strong></p>
                </div>

                <hr />

                <h2 id="service-times">Service Times</h2>
                <div class="indent">
                    <table id="gtfs-service-ids">
                        <thead>
                            <tr class="gtfs-tableheaderrow">
                                <th class="gtfs-name" colspan="2">Valid</th>
                                <th class="gtfs-name" colspan="7">Weekday</th>
                                <th class="gtfs-name" colspan="2">Exceptions</th>
                                <th class="gtfs-name" rowspan="2">Departure times</th>
                                <th class="gtfs-name" rowspan="2">Duration</th>
                                <th class="gtfs-name" rowspan="2">Service-ID</th>
                            </tr>
                            <tr class="gtfs-tableheaderrow">
                                <th class="gtfs-name">From</th>
                                <th class="gtfs-name">Until</th>
                                <th class="gtfs-name">Mo</th>
                                <th class="gtfs-name">Tu</th>
                                <th class="gtfs-name">We</th>
                                <th class="gtfs-name">Th</th>
                                <th class="gtfs-name">Fr</th>
                                <th class="gtfs-name">Sa</th>
                                <th class="gtfs-name">Su</th>
                                <th class="gtfs-name">Also on</th>
                                <th class="gtfs-name">Not on</th>
                            </tr>
                        </thead>
                        <tbody>
<?php $duration += CreateGtfsSingleTripServiceTimesEntry( $network, $trip_id ); ?>
                        </tbody>
                    </table>
                </div>

<?php $duration += CreateGtfsSingleTripShapeEntry( $network, $trip_id ); ?>

                <?php printf( "<p>SQL-Queries took %f seconds to complete</p>\n", $duration ); ?>

            </div>

            <script>
                showtriponmap();
            </script>


        </main> <!-- main -->

        <hr />

<?php include $inc_lang.'gtfs-footer.inc' ?>

      </div> <!-- wrapper -->

      <iframe style="display:none" id="hiddenIframe" name="hiddenIframe"></iframe>

    </body>
</html>
