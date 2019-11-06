<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <title>PTNA - Results</title>
        <meta name="generator" content="PTNA" />
        <meta name="keywords" content="OSM Public Transport PTv2" />
        <meta name="description" content="PTNA - Results of the Analysis of various Networks" />
        <meta name="robots" content="noindex,nofollow" />
        <link rel="stylesheet" href="/css/main.css" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="icon" type="image/png" href="/favicon.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/favicon.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="/favicon.svg" sizes="any" />
        <?php include('../../script/entries.php'); ?>
    </head>
    <body>
      <div id="wrapper">
        <header id="headerblock">
            <div id="headerimg" class="logo">
                <a href="/"><img src="/img/logo.png" alt="logo" /></a>
            </div>
            <div id="headertext">
                <h1><a href="/">PTNA - Public Transport Network Analysis</a></h1>
                <h2>Statische Auswertungen für OpenStreetMap</h2>
            </div>
            <div id="headernav">
                <a href="/">Home</a> |
                <a href="/contact.html">Kontakt</a> |
                <a target="_blank" href="https://www.openstreetmap.de/impressum.html">Impressum</a> |
                <a target="_blank" href="https://www.fossgis.de/datenschutzerklaerung">Datenschutzerklärung</a> |
                <a href="/en/index.html" title="english"><img src="/img/GreatBritain16.png" alt="Union Jack" /></a>
                <a href="/de/index.html" title="deutsch"><img src="/img/Germany16.png" alt="deutsche Flagge" /></a>
                <!-- <a href="/fr/index.html" title="français"><img src="/img/France16.png" alt="Tricolore Française" /></a> -->
            </div>
        </header>

        <nav id="navigation">
            <h2 id="DE"><img src="/img/Germany32.png" alt="deutsche Flagge" /> Auswertungen für Deutschland</h2>
            <ul>
                <li><a href="#bahnverkehr">Bahnverkehr in Deutschland</a></li>
                <li><a href="#verkehrsverbuende">Verkehrsverbünde in Deutschland</a></li>
             </ul>
        </nav>

        <hr />

        <main id="main" class="results">

            <p>
                Die erste Spalte der Tabelle enthält jeweils einen Link auf das Ergebnis der Analyse.
            </p>
            <p>
                In der Spalte "Letzte Änderung" stehen Links auf HTML-Seiten, in der die Änderungen zur vorangegangenen Auswertung farblich markiert sind -
                siehe dort die Navigationsbuttons <img class="diff-navigate" src="/img/diff-navigate.png" alt="Navigation"> rechts unten bzw. die Zeichen 'j' (vorwärts) und 'k' (rückwärts), mit denen man sich von Differenz zu Differenz "vorhangeln" kann.
                Diese Spalte enthält das Datum der letzten Auswertung bei der relevante Änderungen an den Daten vorlagen.
                Ältere Datumsangaben bedeuten, dass sich am Ergebnis der Auswertung seit diesem Datum nichts geändert hat, die Daten selber stammen jedoch vom Tag der Auswertung.
            </p>

            <hr />

            <h3 id="bahnverkehr">Bahnverkehr in Deutschland</h3>
            <table id="networksDEBahn">
                <thead>
                    <tr class="results-tableheaderrow">
                        <th class="results-name">Name</th>
                        <th class="results-region">Stadt/Region</th>
                        <th class="results-network">Verkehrsverbund</th>
                        <th class="results-datadate">Datum der Auswertung</th>
                        <th class="results-analyzed">Letzte Änderung</th>
                        <th class="results-discussion">Diskussion</th>
                        <th class="results-route">Linien</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="results-tablerow">
                        <td data-ref="DE-Bahnverkehr-name" class="results-name"><a href="DE-Bahnverkehr-Analysis.html" title="zur Auswertung">DE-Bahnverkehr</a></td>
                        <td data-ref="DE-Bahnverkehr-region" class="results-region"><a href="https://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D2%5D%5Bname~'Deutschland'%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Deutschland</a></td>
                        <td data-ref="DE-Bahnverkehr-network" class="results-network">Deutsche Bahn und viele weitere</td>
                        <?php CreateEntry("DE-Bahnverkehr"); ?>
                        <td data-ref="DE-Bahnverkehr-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Germany/Railway/Route_Network/Analysis" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-Bahnverkehr-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Germany/Railway/Route_Network/Analysis/DE-Bahnverkehr-Routes" title="im OSM-Wiki">Bahnlinien in DE</a></td>
                    </tr>
                </tbody>
            </table>

            <hr />

            <h3 id="verkehrsverbuende">Verkehrsverbünde in Deutschland</h3>
            <table id="networksDEVerbund">
                <thead>
                    <tr class="results-tableheaderrow">
                        <th class="results-name">Name</th>
                        <th class="results-region">Stadt/Region</th>
                        <th class="results-network">Verkehrsverbund</th>
                        <th class="results-datadate">Datum der Auswertung</th>
                        <th class="results-analyzed">Letzte Änderung</th>
                        <th class="results-discussion">Diskussion</th>
                        <th class="results-route">Linien</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BE-VBB-name" class="results-name"><a href="/results/DE/BE/DE-BE-VBB-Analysis.html" title="zur Auswertung">DE-BE-VBB</a></td>
                        <td data-ref="DE-BE-VBB-region" class="results-region"><a href="https://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D4%5D%5Bname~'(Berlin%7CBrandenburg)'%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Berlin / Brandenburg</a></td>
                        <td data-ref="DE-BE-VBB-network" class="results-network">Verkehrsverbund Berlin-Brandenburg</td>
                        <?php CreateEntry("DE-BE-VBB"); ?>
                        <td data-ref="DE-BE-VBB-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Verkehrsverbund_Berlin-Brandenburg/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BE-VBB-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Verkehrsverbund_Berlin-Brandenburg/Analyse/DE-BE-VBB-Routes" title="im OSM-Wiki">VBB Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BW-DING-name" class="results-name"><a href="/results/DE/BW/DE-BW-DING-Analysis.html" title="zur Auswertung">DE-BW-DING</a></td>
                        <td data-ref="DE-BW-DING-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27(Ulm%7CLandkreis%20Sigmaringen%7CLandkreis%20Neu-Ulm%7CLandkreis%20Biberach%7CAlb-Donau-Kreis%7CLandkreis%20Göppingen%7CLandkreis%20Heidenheim%7CLandkreis%20Ravensburg%7CLandkreis%20Reutlingen)%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Donau-Iller</a></td>
                        <td data-ref="DE-BW-DING-network" class="results-network">Donau-Iller-Nahverkehrsverbund-GmbH</td>
                        <?php CreateEntry("DE-BW-DING"); ?>
                        <td data-ref="DE-BW-DING-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:DING/Transportation/DING-Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BW-DING-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/DING/Transportation/DING-Linien" title="im OSM-Wiki">DING Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BW-DING-SWU-name" class="results-name"><a href="/results/DE/BW/DE-BW-DING-SWU-Analysis.html" title="zur Auswertung">DE-BW-DING-SWU</a></td>
                        <td data-ref="DE-BW-DING-SWU-region" class="results-region"><a href="https://overpass-turbo.eu/map.html?Q=node(around%3A30%2C48.4539045%2C9.9891665%2C48.4226263%2C9.8661771%2C48.3578424%2C9.8687857%2C48.3193944%2C9.9358786%2C48.3347822%2C10.1169242%2C48.4308096%2C10.0760772)%3B%0Aout%3B" title="auf der Karte anzeigen">Ulm / Neu-Ulm</a></td>
                        <td data-ref="DE-BW-DING-SWU-network" class="results-network">Donau-Iller-Nahverkehrsverbund-GmbH, Betreiber Stadtwerke Ulm</td>
                        <?php CreateEntry("DE-BW-DING-SWU"); ?>
                        <td data-ref="DE-BW-DING-SWU-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Ulm_Neu-Ulm/Transportation/SWU-Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BW-DING-SWU-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Ulm_Neu-Ulm/Transportation/SWU-Linien" title="im OSM-Wiki">SWU Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BW-KV.SHA-name" class="results-name"><a href="/results/DE/BW/DE-BW-KV.SHA-Analysis.html" title="zur Auswertung">DE-BW-KV.SHA</a></td>
                        <td data-ref="DE-BW-KV.SHA-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27Landkreis%20Schwäbisch%20Hall%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Schwäbisch Hall</a></td>
                        <td data-ref="DE-BW-KV.SHA-network" class="results-network"><a href="https://kreisverkehr-sha.de/">Kreisverkehr Schwäbisch Hall</a></td>
                        <?php CreateEntry("DE-BW-KV.SHA"); ?>
                        <td data-ref="DE-BW-KV.SHA-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Landkreis_Schwäbisch_Hall/KV.SHA/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BW-KV.SHA-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Landkreis_Schwäbisch_Hall/KV.SHA/Analyse/DE-BW-KV.SHA-Linien" title="im OSM-Wiki">KV.SHA Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BW-VVS-name" class="results-name"><a href="/results/DE/BW/DE-BW-VVS-Analysis.html" title="zur Auswertung">DE-BW-VVS</a></td>
                        <td data-ref="DE-BW-VVS-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27(Stuttgart%7CLandkreis%20Ludwigsburg%7CRems-Murr-Kreis%7CLandkreis%20Göppingen%7CLandkreis%20Esslingen%7CLandkreis%20Böblingen)%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Stuttgart</a></td>
                        <td data-ref="DE-BW-VVS-network" class="results-network">Verkehrs- und Tarifverbund Stuttgart</td>
                        <?php CreateEntry("DE-BW-VVS"); ?>
                        <td data-ref="DE-BW-VVS-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Stuttgart/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BW-VVS-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Stuttgart/Transportation/VVS-Linien-gesamt" title="im OSM-Wiki">VVS Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-AVV-name" class="results-name"><a href="/results/DE/BY/DE-BY-AVV-Analysis.html" title="zur Auswertung">DE-BY-AVV</a></td>
                        <td data-ref="DE-BY-AVV-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27(Augsburg%7CLandkreis%20Aichach-Friedberg%7CLandkreis%20Dillingen%20an%20der%20Donau)%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Augsburg</a></td>
                        <td data-ref="DE-BY-AVV-network" class="results-network">Augsburger Verkehrs- und Tarifverbund</td>
                        <?php CreateEntry("DE-BY-AVV"); ?>
                        <td data-ref="DE-BY-AVV-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Augsburg/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-AVV-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Augsburg/Transportation/AVV-Linien-gesamt" title="im OSM-Wiki">AVV Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-DGF-name-name" class="results-name"><a href="/results/DE/BY/DE-BY-DGF-Analysis.html" title="zur Auswertung">DE-BY-DGF</a></td>
                        <td data-ref="DE-BY-DGF-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20Dingolfing-Landau%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Dingolfing-Landau</a></td>
                        <td data-ref="DE-BY-DGF-network" class="results-network"> Dingolfinger Regionalbusnetz</td>
                        <?php CreateEntry("DE-BY-DGF"); ?>
                        <td data-ref="DE-BY-DGF-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Dingolfing/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-DGF-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Dingolfing/Transportation/Analyse/DE-BY-DGF-Linien" title="im OSM-Wiki">DGF Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-FRG-name" class="results-name"><a href="/results/DE/BY/DE-BY-FRG-Analysis.html" title="zur Auswertung">DE-BY-FRG</a></td>
                        <td data-ref="DE-BY-FRG-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27Landkreis%20Freyung-Grafenau%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Freyung-Grafenau</a></td>
                        <td data-ref="DE-BY-FRG-network" class="results-network">Regionalbusnetz Landkreis Freyung-Grafenau</td>
                        <?php CreateEntry("DE-BY-FRG"); ?>
                        <td data-ref="DE-BY-FRG-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Freyung-Grafenau/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-FRG-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Freyung-Grafenau/Transportation/Analyse/DE-BY-FRG-Linien" title="im OSM-Wiki">FRG Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-INVG-name" class="results-name"><a href="/results/DE/BY/DE-BY-INVG-Analysis.html" title="zur Auswertung">DE-BY-INVG</a></td>
                        <td data-ref="DE-BY-INVG-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27Ingolstadt%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Stadt und Landkreis Ingolstadt</a></td>
                        <td data-ref="DE-BY-INVG-network" class="results-network">Ingolstädter Verkehrsgesellschaft mbH</td>
                        <?php CreateEntry("DE-BY-INVG"); ?>
                        <td data-ref="DE-BY-INVG-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Ingolstadt/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-INVG-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Ingolstadt/Transportation/INVG-Linien-gesamt" title="im OSM-Wiki">INGV Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-LAVV-name" class="results-name"><a href="/results/DE/BY/DE-BY-LAVV-Analysis.html" title="zur Auswertung">DE-BY-LAVV</a></td>
                        <td data-ref="DE-BY-LAVV-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27Landshut%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Stadt und Landkreis Landshut</a></td>
                        <td data-ref="DE-BY-LAVV-network" class="results-network">Landshuter Verkehrsverbund</td>
                        <?php CreateEntry("DE-BY-LAVV"); ?>
                        <td data-ref="DE-BY-LAVV-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Landshut/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-LAVV-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Landshut/Transportation/Analyse/DE-BY-LAVV-Linien" title="im OSM-Wiki">LAVV Linien</a></td>
                    </tr>

                    <?php CreateFullEntry( "DE-BY-MVV" ); ?>

                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-PAF-name" class="results-name"><a href="/results/DE/BY/DE-BY-PAF-Analysis.html" title="zur Auswertung">DE-BY-PAF</a></td>
                        <td data-ref="DE-BY-PAF-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20Pfaffenhofen%20an%20der%20Ilm%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Pfaffenhofen an der Ilm</a></td>
                        <td data-ref="DE-BY-PAF-network" class="results-network">Stadtbus Pfaffenhofen und weitere</td>
                        <?php CreateEntry("DE-BY-PAF"); ?>
                        <td data-ref="DE-BY-PAF-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Pfaffenhofen_an_der_Ilm/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-PAF-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Pfaffenhofen_an_der_Ilm/Transportation/Analyse/DE-BY-PAF-Linien" title="im OSM-Wiki">PAF Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-RBA-name" class="results-name"><a href="/results/DE/BY/DE-BY-RBA-Analysis.html" title="zur Auswertung">DE-BY-RBA</a></td>
                        <td data-ref="DE-BY-RBA-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D5%5D%5Bname~%27Schwaben%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der KArte anzeigen">Region Schwaben</a></td>
                        <td data-ref="DE-BY-RBA-network" class="results-network">Regionalbus Augsburg und weitere</td>
                        <?php CreateEntry("DE-BY-RBA"); ?>
                        <td data-ref="DE-BY-RBA-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Region_Augsburg/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-RBA-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Region_Augsburg/Transportation/Analyse/DE-BY-RBA-Linien" title="im OSM-Wiki">RBA Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-RBO-name" class="results-name"><a href="/results/DE/BY/DE-BY-RBO-Analysis.html" title="zur Auswertung">DE-BY-RBO</a></td>
                        <td data-ref="DE-BY-RBO-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D5%5D%5Bname~%27(Niederbayern%7COberpfalz)%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Ostbayern (Niederbayern / Oberpfalz)</a></td>
                        <td data-ref="DE-BY-RBO-network" class="results-network">Regionalbus Ostbayern</td>
                        <?php CreateEntry("DE-BY-RBO"); ?>
                        <td data-ref="DE-BY-RBO-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Ostbayern/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-RBO-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Ostbayern/Transportation/Analyse/DE-BY-RBO-Linien" title="im OSM-Wiki">RBO Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-REG-name" class="results-name"><a href="/results/DE/BY/DE-BY-REG-Analysis.html" title="zur Auswertung">DE-BY-REG</a></td>
                        <td data-ref="DE-BY-REG-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20Regen%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Regen</a></td>
                        <td data-ref="DE-BY-REG-network" class="results-network">Arberlandverkehr Landkreis Regen und weitere</td>
                        <?php CreateEntry("DE-BY-REG"); ?>
                        <td data-ref="DE-BY-REG-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Regen/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-REG-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Regen/Transportation/Analyse/DE-BY-REG-Linien" title="im OSM-Wiki">REG Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-RVO-name" class="results-name"><a href="/results/DE/BY/DE-BY-RVO-Analysis.html" title="zur Auswertung">DE-BY-RVO</a></td>
                        <td data-ref="DE-BY-RVO-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D5%5D%5Bname%3D%27Oberbayern%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Oberbayern</a></td>
                        <td data-ref="DE-BY-RVO-network" class="results-network">Regionalverkehr Oberbayern</td>
                        <?php CreateEntry("DE-BY-RVO"); ?>
                        <td data-ref="DE-BY-RVO-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Oberbayern/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-RVO-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Oberbayern/Transportation/RVO-Linien-gesamt" title="im OSM-Wiki">RVO Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-RVV-name" class="results-name"><a href="/results/DE/BY/DE-BY-RVV-Analysis.html" title="zur Auswertung">DE-BY-RVV</a></td>
                        <td data-ref="DE-BY-RVV-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27Regensburg%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Stadt und Landkreis Regensburg</a></td>
                        <td data-ref="DE-BY-RVV-network" class="results-network">Regensburger Verkehrsverbund</td>
                        <?php CreateEntry("DE-BY-RVV"); ?>
                        <td data-ref="DE-BY-RVV-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Regensburg/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-RVV-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Regensburg/Transportation/Analyse/DE-BY-RVV-Linien" title="im OSM-Wiki">RVV Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VGA-name" class="results-name"><a href="/results/DE/BY/DE-BY-VGA-Analysis.html" title="zur Auswertung">DE-BY-VGA</a></td>
                        <td data-ref="DE-BY-VGA-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20Eichst%C3%A4tt%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Eichstätt</a></td>
                        <td data-ref="DE-BY-VGA-network" class="results-network">Verkehrsgmeinschaft Altmühltal und weitere</td>
                        <?php CreateEntry("DE-BY-VGA"); ?>
                        <td data-ref="DE-BY-VGA-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Eichst%C3%A4tt/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VGA-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Eichst%C3%A4tt/Transportation/Analyse/DE-BY-VGA-Linien" title="im OSM-Wiki">VGA Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VGN-name" class="results-name"><a href="/results/DE/BY/DE-BY-VGN-Analysis.html" title="zur Auswertung">DE-BY-VGN</a></td>
                        <td data-ref="DE-BY-VGN-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Verkehrsverbund%20Gro%C3%9Fraum%20N%C3%BCrnberg%20GmbH%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Nürnberg</a></td>
                        <td data-ref="DE-BY-VGN-network" class="results-network">Verkehrsverbund Großraum Nürnberg</td>
                        <?php CreateEntry("DE-BY-VGN"); ?>
                        <td data-ref="DE-BY-VGN-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Nürnberg/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VGN-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Nürnberg/Transportation/Analyse/DE-BY-VGN-Linien" title="im OSM-Wiki">VGN Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VGND-name" class="results-name"><a href="/results/DE/BY/DE-BY-VGND-Analysis.html" title="zur Auswertung">DE-BY-VGND</a></td>
                        <td data-ref="DE-BY-VGND-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20Neuburg-Schrobenhausen%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Neuburg-Schrobenhausen</a></td>
                        <td data-ref="DE-BY-VGND-network" class="results-network">Verkehrsgmeinschaft Neuburg an der Donau und weitere</td>
                        <?php CreateEntry("DE-BY-VGND"); ?>
                        <td data-ref="DE-BY-VGND-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Neuburg_an_der_Donau/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VGND-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Neuburg_an_der_Donau/Transportation/Analyse/DE-BY-VGND-Linien" title="im OSM-Wiki">VGND Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VGRI-name" class="results-name"><a href="/results/DE/BY/DE-BY-VGRI-Analysis.html" title="zur Auswertung">DE-BY-VGRI</a></td>
                        <td data-ref="DE-BY-VGRI-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20Rottal-Inn%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Rottal-Inn</a></td>
                        <td data-ref="DE-BY-VGRI-network" class="results-network">Verkehrsgemeinschaft Rottal-Inn;Stadtbus Pfarrkirchen</td>
                        <?php CreateEntry("DE-BY-VGRI"); ?>
                        <td data-ref="DE-BY-VGRI-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Pfarrkirchen/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VGRI-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Pfarrkirchen/Transportation/Analyse/DE-BY-VGRI-Linien" title="im OSM-Wiki">VGRI Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VLC-name" class="results-name"><a href="/results/DE/BY/DE-BY-VLC-Analysis.html" title="zur Auswertung">DE-BY-VLC</a></td>
                        <td data-ref="DE-BY-VLC-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20Cham%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Cham</a></td>
                        <td data-ref="DE-BY-VLC-network" class="results-network">Verkehrsgemeinschaft Landkreis Cham</td>
                        <?php CreateEntry("DE-BY-VLC"); ?>
                        <td data-ref="DE-BY-VLC-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Cham/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VLC-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Cham/Transportation/Analyse/DE-BY-VLC-Linien" title="im OSM-Wiki">VLC Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VLD-name" class="results-name"><a href="/results/DE/BY/DE-BY-VLD-Analysis.html" title="zur Auswertung">DE-BY-VLD</a></td>
                        <td data-ref="DE-BY-VLD-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27Landkreis%20Deggendorf%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Deggendorf</a></td>
                        <td data-ref="DE-BY-VLD-network" class="results-network">Verkehrsgemeinschaft Landkreis Deggendorf;Stadtbusnetz Deggendorf</td>
                        <?php CreateEntry("DE-BY-VLD"); ?>
                        <td data-ref="DE-BY-VLD-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Deggendorf/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VLD-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Deggendorf/Transportation/Analyse/DE-BY-VLD-Linien" title="im OSM-Wiki">VLD Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VLK-name" class="results-name"><a href="/results/DE/BY/DE-BY-VLK-Analysis.html" title="zur Auswertung">DE-BY-VLK</a></td>
                        <td data-ref="DE-BY-VLK-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20Kelheim%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Kelheim</a></td>
                        <td data-ref="DE-BY-VLK-network" class="results-network">Verkehrsverbund Landkreis Kelheim</td>
                        <?php CreateEntry("DE-BY-VLK"); ?>
                        <td data-ref="DE-BY-VLK-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Kelheim/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VLK-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Kelheim/Transportation/Analyse/DE-BY-VLK-Linien" title="im OSM-Wiki">VLK Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VLMÜ-name" class="results-name"><a href="/results/DE/BY/DE-BY-VLMÜ-Analysis.html" title="zur Auswertung">DE-BY-VLMÜ</a></td>
                        <td data-ref="DE-BY-VLMÜ-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20M%C3%BChldorf%20am%20Inn%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Mühldorf am Inn</a></td>
                        <td data-ref="DE-BY-VLMÜ-network" class="results-network">Verkehrsgemeinschaft Landkreis Mühldorf am Inn</td>
                        <?php CreateEntry("DE-BY-VLMÜ"); ?>
                        <td data-ref="DE-BY-VLMÜ-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Mühldorf/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VLMÜ-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Mühldorf/Transportation/Analyse/DE-BY-VLMÜ-Linien" title="im OSM-Wiki">VLMÜ Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VLP-name" class="results-name"><a href="/results/DE/BY/DE-BY-VLP-Analysis.html" title="zur Auswertung">DE-BY-VLP</a></td>
                        <td data-ref="DE-BY-VLP-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27Passau%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Stadt und Landkreis Passau</a></td>
                        <td data-ref="DE-BY-VLP-network" class="results-network">Verkehrsgemeinschaft Landkreis Passau;Verkehrsbetriebsgesellschaft Passau</td>
                        <?php CreateEntry("DE-BY-VLP"); ?>
                        <td data-ref="DE-BY-VLP-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Passau/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VLP-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Passau/Transportation/Analyse/DE-BY-VLP-Linien" title="im OSM-Wiki">VLP Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VSL-name" class="results-name"><a href="/results/DE/BY/DE-BY-VSL-Analysis.html" title="zur Auswertung">DE-BY-VSL</a></td>
                        <td data-ref="DE-BY-VSL-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27Straubing%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Stadt Straubing und Landkreis Straubing-Bogen</a></td>
                        <td data-ref="DE-BY-VSL-network" class="results-network">Verkehrsgemeinschaft Straubinger Land;Stadt-Bus-Verkehr Straubing</td>
                        <?php CreateEntry("DE-BY-VSL"); ?>
                        <td data-ref="DE-BY-VSL-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Straubing/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VSL-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Straubing/Transportation/Analyse/DE-BY-VSL-Linien" title="im OSM-Wiki">VSL Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VVM-Mainfranken-name" class="results-name"><a href="/results/DE/BY/DE-BY-VVM-Mainfranken-Analysis.html" title="zur Auswertung">DE-BY-VVM-Mainfranken</a></td>
                        <td data-ref="DE-BY-VVM-Mainfranken-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27(W%C3%BCrzburg%7CLandkreis%20Main-Spessart%7CLandkreis%20Kitzingen)%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Stadt- und Landkreis Würzburg, Landkreis Main-Spessart und Landkreis Kitzingen</a></td>
                        <td data-ref="DE-BY-VVM-Mainfranken-network" class="results-network"><a href="https://www.vvm-info.de">Verkehrsunternehmens-Verbund Mainfranken</a></td>
                        <?php CreateEntry("DE-BY-VVM-Mainfranken"); ?>
                        <td data-ref="DE-BY-VVM-Mainfranken-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Mainfranken/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VVM-Mainfranken-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Mainfranken/Transportation/VVM-Linien-gesamt" title="im OSM-Wiki">VVM Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-BY-VVM-Mittelschwaben-name" class="results-name"><a href="/results/DE/BY/DE-BY-VVM-Mittelschwaben-Analysis.html" title="zur Auswertung">DE-BY-VVM-Mittelschwaben</a></td>
                        <td data-ref="DE-BY-VVM-Mittelschwaben-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27(Landkreis%20G%C3%BCnzburg%7CLandkreis%20Unterallg%C3%A4u)%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Günzburg und Landkreis Unterallgäu</a></td>
                        <td data-ref="DE-BY-VVM-Mittelschwaben-network" class="results-network"><a href="http://www.vvm-online.de/">Verkehrsverbund Mittelschwaben</a></td>
                        <?php CreateEntry("DE-BY-VVM-Mittelschwaben"); ?>
                        <td data-ref="DE-BY-VVM-Mittelschwaben-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Mittelschwaben/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-BY-VVM-Mittelschwaben-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Mittelschwaben/Transportation/VVM-Linien-gesamt" title="im OSM-Wiki">VVM Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-HB-VBN-name" class="results-name"><a href="/results/DE/HB/DE-HB-VBN-Analysis.html" title="zur Auswertung">DE-HB-VBN</a></td>
                        <td data-ref="DE-HB-VBN-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Verkehrsverbund%20Bremen%2FNiedersachsen%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Bremen / Niedersachsen</a></td>
                        <td data-ref="DE-HB-VBN-network" class="results-network">Verkehrsverbund Bremen/Niedersachsen</td>
                        <?php CreateEntry("DE-HB-VBN"); ?>
                        <td data-ref="DE-HB-VBN-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Bremen/Transport/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-HB-VBN-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Bremen/Transport/Analyse/DE-HB-VBN-Linien" title="im OSM-Wiki">VBN Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-HE-NVV-name" class="results-name"><a href="/results/DE/HE/DE-HE-NVV-Analysis.html" title="zur Auswertung">DE-HE-NVV</a></td>
                        <td data-ref="DE-HE-NVV-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27(Kassel%7CWerra-Mei%C3%9Fner-Kreis%7CSchwalm-Eder-Kreis%7CWaldeck-Frankenberg%7CHersfeld-Rotenburg)%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Kassel / Nordhessen</a></td>
                        <td data-ref="DE-HE-NVV-network" class="results-network">Nordhessischer VerkehrsVerbund</td>
                        <?php CreateEntry("DE-HE-NVV"); ?>
                        <td data-ref="DE-HE-NVV-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Kassel/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-HE-NVV-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Kassel/Transportation/Analyse/DE-HE-NVV-Linien" title="im OSM-Wiki">NVV Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-HH-HVV-name" class="results-name"><a href="/results/DE/HH/DE-HH-HVV-Analysis.html" title="zur Auswertung">DE-HH-HVV</a></td>
                        <td data-ref="DE-HH-HVV-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Hamburger%20Verkehrsverbund%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Hamburg</a></td>
                        <td data-ref="DE-HH-HVV-network" class="results-network">Hamburger Verkehrsverbund</td>
                        <?php CreateEntry("DE-HH-HVV"); ?>
                        <td data-ref="DE-HH-HVV-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Hamburger_Verkehrsverbund/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-HH-HVV-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Hamburger_Verkehrsverbund/Analyse/DE-HH-HVV-Routes" title="im OSM-Wiki">HVV Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-MV-MVVG-name-name" class="results-name"><a href="/results/DE/MV/DE-MV-MVVG-Analysis.html" title="zur Auswertung">DE-MV-MVVG</a></td>
                        <td data-ref="DE-MV-MVVG-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Mecklenburgische%20Seenplatte%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Mecklenburgische Seenplatte</a></td>
                        <td data-ref="DE-MV-MVVG-network" class="results-network"><a href="https://mvvg-bus.de/">Mecklenburg-Vorpommersche-Verkehrsgesellschaft</a></td>
                        <?php CreateEntry("DE-MV-MVVG"); ?>
                        <td data-ref="DE-MV-MVVG-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Mecklenburg-Vorpommern/%C3%96PNV/MVVG/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-MV-MVVG-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Mecklenburg-Vorpommern/%C3%96PNV/MVVG/Analyse/MVVG-Linien" title="im OSM-Wiki">MVVG Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-NI-BVE-name" class="results-name"><a href="/results/DE/NI/DE-NI-BVE-Analysis.html" title="zur Auswertung">DE-NI-BVE</a></td>
                        <td data-ref="DE-NI-BVE-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20Emsland%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Emsland Mitte/Nord</a></td>
                        <td data-ref="DE-NI-BVE-network" class="results-network">Busverkehr Emsland-Mitte/Nord</td>
                        <?php CreateEntry("DE-NI-BVE"); ?>
                        <td data-ref="DE-NI-BVE-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Emsland-Mitte-Nord/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-NI-BVE-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Emsland-Mitte-Nord/Transportation/Analyse/DE-NI-BVE-Linien" title="im OSM-Wiki">BVE Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-NI-VEJ-name" class="results-name"><a href="/results/DE/NI/DE-NI-VEJ-Analysis.html" title="zur Auswertung">DE-NI-VEJ</a></td>
                        <td data-ref="DE-NI-VEJ-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27Wilhelmshaven%7CEmden%7CLandkreis%20Aurich%7CLandkreis%20Friesland%7CLandkreis%20Leer%7CLandkreis%20Wittmund%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Ems-Jade</a></td>
                        <td data-ref="DE-NI-VEJ-network" class="results-network">Verkehrsverbund Ems-Jade</td>
                        <?php CreateEntry("DE-NI-VEJ"); ?>
                        <td data-ref="DE-NI-VEJ-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Ems-Jade/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-NI-VEJ-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Ems-Jade/Transportation/Analyse/DE-NI-VEJ-Linien" title="im OSM-Wiki">VEJ Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-NI-VGC-name" class="results-name"><a href="/results/DE/NI/DE-NI-VGC-Analysis.html" title="zur Auswertung">DE-NI-VGC</a></td>
                        <td data-ref="DE-NI-VGC-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20Cloppenburg%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Cloppenburg</a></td>
                        <td data-ref="DE-NI-VGC-network" class="results-network">Verkehrsgemeinschaft Cloppenburg</td>
                        <?php CreateEntry("DE-NI-VGC"); ?>
                        <td data-ref="DE-NI-VGC-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Cloppenburg/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-NI-VGC-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Cloppenburg/Transportation/Analyse/DE-NI-VGC-Linien" title="im OSM-Wiki">VGC Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-NI-VGE-name" class="results-name"><a href="/results/DE/NI/DE-NI-VGE-Analysis.html" title="zur Auswertung">DE-NI-VGE</a></td>
                        <td data-ref="DE-NI-VGE-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname%3D%27Landkreis%20Emsland%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Emsland Süd</a></td>
                        <td data-ref="DE-NI-VGE-network" class="results-network">Verkehrsgemeinschaft Emsland-Süd</td>
                        <?php CreateEntry("DE-NI-VGE"); ?>
                        <td data-ref="DE-NI-VGE-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Emsland-Süd/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-NI-VGE-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Emsland-Süd/Transportation/Analyse/DE-NI-VGE-Linien" title="im OSM-Wiki">VGE Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-NI-VOS-name" class="results-name"><a href="/results/DE/NI/DE-NI-VOS-Analysis.html" title="zur Auswertung">DE-NI-VOS</a></td>
                        <td data-ref="DE-NI-VOS-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27Osnabr%C3%BCck%7CLandkreis%20Osnabr%C3%BCck%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Stadt und Landkreis Osnabrück</a></td>
                        <td data-ref="DE-NI-VOS-network" class="results-network">Verkehrsgemeinschaft Osnabrück</td>
                        <?php CreateEntry("DE-NI-VOS"); ?>
                        <td data-ref="DE-NI-VOS-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Osnabrück/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-NI-VOS-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Osnabrück/Transportation/Analyse/DE-NI-VOS-Linien" title="im OSM-Wiki">VOS Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-NI-VRB-name" class="results-name"><a href="/results/DE/NI/DE-NI-VRB-Analysis.html" title="zur Auswertung">DE-NI-VRB</a></td>
                        <td data-ref="DE-NI-VRB-region" class="results-region"><a href="https://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Verkehrsverbund%20Region%20Braunschweig%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Städte: Braunschweig, Salzgitter, Wolfsburg; Landkreise: Gifhorn, Goslar, Helmstedt, Peine, Wolfenbüttel</a></td>
                        <td data-ref="DE-NI-VRB-network" class="results-network"><a href="https://www.vrb-online.de">Verkehrsverbund Region Braunschweig</a></td>
                        <?php CreateEntry("DE-NI-VRB"); ?>
                        <td data-ref="DE-NI-VRB-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Verkehrsverbund_Region_Braunschweig/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-NI-VRB-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Verkehrsverbund_Region_Braunschweig/Analyse/DE-NI-VRB-Routes" title="im OSM-Wiki">VRB Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-NW-AVV-name" class="results-name"><a href="/results/DE/NW/DE-NW-AVV-Analysis.html" title="zur Auswertung (ca. ?,? MB)">DE-NW-AVV</a></td>
                        <td data-ref="DE-NW-AVV-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Aachener%20Verkehrsverbund%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Aachen</a></td>
                        <td data-ref="DE-NW-AVV-network" class="results-network">Aachener Verkehrsverbund</td>
                        <?php CreateEntry("DE-NW-AVV"); ?>
                        <td data-ref="DE-NW-AVV-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/DE_Talk:Aachener_Verkehrsverbund/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-NW-AVV-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/DE:Aachener_Verkehrsverbund/Analyse/AVV-Linien" title="im OSM-Wiki">AVV Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-NW-VRR-name" class="results-name"><a href="/results/DE/NW/DE-NW-VRR-Analysis.html" title="zur Auswertung (ca. 7,5 MB)">DE-NW-VRR</a></td>
                        <td data-ref="DE-NW-VRR-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Verkehrsverbund%20Rhein-Ruhr%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Rhein-Ruhr</a></td>
                        <td data-ref="DE-NW-VRR-network" class="results-network">Verkehrsverbund Rhein-Ruhr;NRW Regionalverkehr</td>
                        <?php CreateEntry("DE-NW-VRR"); ?>
                        <td data-ref="DE-NW-VRR-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:VRR/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-NW-VRR-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/VRR/Analyse/VRR-Linien" title="im OSM-Wiki">VRR Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-NW-VRS-name" class="results-name"><a href="/results/DE/NW/DE-NW-VRS-Analysis.html" title="zur Auswertung">DE-NW-VRS</a></td>
                        <td data-ref="DE-NW-VRS-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Verkehrsverbund%20Rhein-Sieg%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Rhein-Sieg</a></td>
                        <td data-ref="DE-NW-VRS-network" class="results-network">Verkehrsverbund Rhein-Sieg;NRW Regionalverkehr</td>
                        <?php CreateEntry("DE-NW-VRS"); ?>
                        <td data-ref="DE-NW-VRS-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:VRS/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-NW-VRS-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/VRS/Analyse/VRS-Linien" title="im OSM-Wiki">VRS Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-NW-WT-name" class="results-name"><a href="/results/DE/NW/DE-NW-WT-Analysis.html" title="zur Auswertung (ca. 7,5 MB)">DE-NW-WT</a></td>
                        <td data-ref="DE-NW-WT-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(%20relation%5Bboundary%3Dpublic_transport%5D%5B%22name%22~%22WestfalenTarif.%22%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Westfalen</a></td>
                        <td data-ref="DE-NW-WT-network" class="results-network">WestfalenTarif</td>
                        <?php CreateEntry("DE-NW-WT"); ?>
                        <td data-ref="DE-NW-WT-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/DE_Talk:WestfalenTarif/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-NW-WT-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/DE:WestfalenTarif/Analyse/WestfalenTarif-Linien" title="im OSM-Wiki">WT Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-RP-VRM-name" class="results-name"><a href="/results/DE/RP/DE-RP-VRM-Analysis.html" title="zur Auswertung">DE-RP-VRM</a></td>
                        <td data-ref="DE-RP-VRM-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Verkehrsverbund%20Rhein-Mosel%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Rhein-Mosel</a></td>
                        <td data-ref="DE-RP-VRM-network" class="results-network">Verkehrsverbund Rhein-Mosel</td>
                        <?php CreateEntry("DE-RP-VRM"); ?>
                        <td data-ref="DE-RP-VRM-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Verkehrsverbund_Rhein-Mosel/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-RP-VRM-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Verkehrsverbund_Rhein-Mosel/Analyse/DE-RP-VRM-Routes" title="im OSM-Wiki">VRM Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-RP-VRN-name" class="results-name"><a href="/results/DE/RP/DE-RP-VRN-Analysis.html" title="zur Auswertung">DE-RP-VRN</a></td>
                        <td data-ref="DE-RP-VRN-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Verkehrsverbund%20Rhein-Neckar%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Rhein-Neckar</a></td>
                        <td data-ref="DE-RP-VRN-network" class="results-network">Verkehrsverbund Rhein-Neckar</td>
                        <?php CreateEntry("DE-RP-VRN"); ?>
                        <td data-ref="DE-RP-VRN-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Verkehrsverbund_Rhein-Neckar/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-RP-VRN-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Verkehrsverbund_Rhein-Neckar/Analyse/DE-RP-VRN-Linien" title="im OSM-Wiki">VRN Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-RP-VRT-name" class="results-name"><a href="/results/DE/RP/DE-RP-VRT-Analysis.html" title="zur Auswertung">DE-RP-VRT</a></td>
                        <td data-ref="DE-RP-VRT-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Verkehrsverbund%20Region%20Trier%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karten anzeigen">Region Trier</a></td>
                        <td data-ref="DE-RP-VRT-network" class="results-network">Verkehrsverbund Region Trier</td>
                        <?php CreateEntry("DE-RP-VRT"); ?>
                        <td data-ref="DE-RP-VRT-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Verkehrsverbund_Region_Trier/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-RP-VRT-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Verkehrsverbund_Region_Trier/Analyse/DE-RP-VRT-Routes" title="im OSM-Wiki">VRT Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-SH-NAH.SH-name" class="results-name"><a href="/results/DE/SH/DE-SH-NAH.SH-Analysis.html" title="zur Auswertung">DE-SH-NAH.SH</a></td>
                        <td data-ref="DE-SH-NAH.SH-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D4%5D%5Bname~%27Schleswig-Holstein%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Schleswig-Holstein</a></td>
                        <td data-ref="DE-SH-NAH.SH-network" class="results-network"><a href="https://www.nah.sh">Nahverkehrsverbund Schleswig-Holstein</a></td>
                        <?php CreateEntry("DE-SH-NAH.SH"); ?>
                        <td data-ref="DE-SH-NAH.SH-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Schleswig-Holstein/NAH.SH/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-SH-NAH.SH-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Schleswig-Holstein/NAH.SH/Analyse/DE-SH-NAH.SH-Linien" title="im OSM-Wiki">NAH.SH Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-SL-saarVV-name" class="results-name"><a href="/results/DE/SL/DE-SL-saarVV-Analysis.html" title="zur Auswertung">DE-SL-saarVV</a></td>
                        <td data-ref="DE-SL-saarVV-region" class="results-region"><a href="https://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3D%27public_transport%27%5D%5Bname%3D%22Saarl%C3%A4ndischer%20Verkehrsverbund%22%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Saarland</a></td>
                        <td data-ref="DE-SL-saarVV-network" class="results-network">Saarländischer Verkehrsverbund</td>
                        <?php CreateEntry("DE-SL-saarVV"); ?>
                        <td data-ref="DE-SL-saarVV-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:saarVV/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-SL-saarVV-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/saarVV/Analyse/DE-SL-saarVV-Routes" title="im OSM-Wiki">saarVV Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-SN-MDV-name" class="results-name"><a href="/results/DE/SN/DE-SN-MDV-Analysis.html" title="zur Auswertung">DE-SN-MDV</a></td>
                        <td data-ref="DE-SN-MDV-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(%20relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Mitteldeutscher%20Verkehrsverbund%20GmbH%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Mitteldeutschland um Leipzig</a></td>
                        <td data-ref="DE-SN-MDV-network" class="results-network">Mitteldeutscher Verkehrsverbund</td>
                        <?php CreateEntry("DE-SN-MDV"); ?>
                        <td data-ref="DE-SN-MDV-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Saxony/Transportation/Mitteldeutscher_Verkehrsverbund/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-SN-MDV-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Saxony/Transportation/Mitteldeutscher_Verkehrsverbund/Analyse/DE-SN-MDV-Linien" title="im OSM-Wiki">MDV Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-SN-VMS-name" class="results-name"><a href="/results/DE/SN/DE-SN-VMS-Analysis.html" title="zur Auswertung">DE-SN-VMS</a></td>
                        <td data-ref="DE-SN-VMS-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dpublic_transport%5D%5Bname%3D%27Verkehrsverbund%20Mittelsachsen%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Region Mittelsachsen (Chemnitz / Zwickau)</a></td>
                        <td data-ref="DE-SN-VMS-network" class="results-network">Verkehrsverbund Mittelsachsen</td>
                        <?php CreateEntry("DE-SN-VMS"); ?>
                        <td data-ref="DE-SN-VMS-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Saxony/Transportation/Verkehrsverbund_Mittelsachsen/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-SN-VMS-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Saxony/Transportation/Verkehrsverbund_Mittelsachsen/Analyse/DE-SN-VMS-Linien" title="im OSM-Wiki">VMS Linien</a></td>
                    </tr>
                    <tr class="results-tablerow">
                        <td data-ref="DE-ST-VTO-name" class="results-name"><a href="/results/DE/ST/DE-ST-VTO-Analysis.html" title="zur Auswertung">DE-ST-VTO</a></td>
                        <td data-ref="DE-ST-VTO-region" class="results-region"><a href="http://overpass-turbo.eu/map.html?Q=%5Bout%3Ajson%5D%5Btimeout%3A25%5D%3B(relation%5Bboundary%3Dadministrative%5D%5Badmin_level%3D6%5D%5Bname~%27Landkreis%20Harz%27%5D%3B)%3Bout%20body%3B%3E%3Bout%20skel%20qt%3B" title="auf der Karte anzeigen">Landkreis Harz</a></td>
                        <td data-ref="DE-ST-VTO-network" class="results-network">Verkehrs- und Tarifgemeinschaft Ostharz</td>
                        <?php CreateEntry("DE-ST-VTO"); ?>
                        <td data-ref="DE-ST-VTO-discussion" class="results-discussion"><a href="https://wiki.openstreetmap.org/wiki/Talk:Landkreis_Harz/Transportation/Analyse" title="im OSM-Wiki">Diskussion</a></td>
                        <td data-ref="DE-ST-VTO-route" class="results-route"><a href="https://wiki.openstreetmap.org/wiki/Landkreis_Harz/Transportation/Analyse/DE-ST-VTO-Linien" title="im OSM-Wiki">VTO Linien</a></td>
                    </tr>
                </tbody>
            </table>

        </main> <!-- main -->

        <hr />

        <footer id="footer">
            <p>
                All geographic data <a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors</a>.
            </p>
            <p>
                This program is free software: you can redistribute it and/or modify it under the terms of the <a href="https://www.gnu.org/licenses/gpl.html">GNU GENERAL PUBLIC LICENSE, Version 3, 29 June 2007</a> as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version. Get the source code via <a href="https://github.com/osm-ToniE">GitHub</a>.
            </p>
        </footer>

      </div> <!-- wrapper -->
    </body>
</html>
