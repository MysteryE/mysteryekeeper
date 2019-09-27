<?php include("header.php"); ?>

<!-- add css specific for this page here: jquery plugin css, home css, etc -->
<link rel="stylesheet" type="text/css" href="js/datatables.min.css"/>
<link href="css/home.min.css" rel="stylesheet">

</head>

<body>

<?php include("head.php"); ?>

<div class="main-container large-container">
<div id="layout_content">
	<div class="container">
		<div class="row">
			<div class="grid-child n-no-margin-bottom">
				<div class="box-white">
					<div class="box-header">
						<h1 class="ngc-maintitle">MysteryE Keeper's Relics</h1>
						<p class="n-smaller">Big thanks to <strong><a href="https://docs.google.com/spreadsheets/d/1f8OJIQhpycljDQ8QNDk_va1GJ1u7RVoMaNjFcHH0LKk/edit#gid=344457459" target="_blank">FFRK Community Database</a></strong> for all the informations and data!</p>
					</div><!-- .box-header -->
					<div class="form-group">
						<label><strong>Filter Realms:</strong></label>
						<div id="realms_search" class="input-wrap">
						
						</div><!-- .input-wrap -->
					</div><!-- .form-group -->
					<br />

					<a href="" class="btn btn-small btn-orange reset-all">Reset Filter</a>
					<a href="" class="btn btn-small btn-blue toggle-gl">GL Account Only</a>
					<a href="" class="btn btn-small btn-blue toggle-jp">JP Account Only</a>
					<div class="box-content">
			            <div class="table-wrapper">
							<table id="relic-table" class="table bordered striped compact" style="width: 100%;">
						        <thead>
						            <tr>
						                <th>Realms</th>
						                <th>Character</th>
						                <th>Relic Name</th>
						                <th>Relic Type</th>
						                <th>Element</th>
						                <th>Effect</th>
						                <th>GL</th>
						                <th>JP</th>
						            </tr>
						        </thead>
						        <tbody>
						        	<!-- FINAL FANTASY I -->
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Blood Sword</td>
						                <td>AASB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Fifteen single attacks (0.60 each), grants Dark Radiant Shield: 75% to all allies, grants Attach Dark, Awoken Dark and Damage Cap +10000 to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Rune Axe</td>
						                <td>Chain / Gen.1</td>
						                <td>Dark</td>
						                <td>Dark Chain (physical). Activates Dark Chain (max 99, field +20%), twenty-two single attacks (0,36 each)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Rebellion</td>
						                <td>USB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Ten single attacks (0.71 each), grants Attach Dark, Darkness Quick Cycle and Grip of Chaos Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Earthbreaker</td>
						                <td>OSB</td>
						                <td>Dark / NE</td>
						                <td>One single attack (11,25) capped at 99999, 12,75 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Claymore</td>
						                <td>BSB 2</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single attacks (0,83 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Demon Mail</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Restores HP for 100% of the user's maximum HP and grants Quick Cast when HP fall below 20%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Garland's Cloak</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast Darkness abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Demon Shield</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Garland's Helm</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Medium Buff Dark and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Garland</td>
						                <td>Gigantaxe</td>
						                <td>SSB</td>
						                <td>Dark / NE</td>
						                <td>Five group attacks (1.15 each), ATK and DEF -50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Warrior of Light</td>
						                <td>Ragnarok</td>
						                <td>Chain / Gen.1</td>
						                <td>Holy</td>
						                <td>Holy Chain (physical). Activates Holy Chain (max 99, field +20%), eleven single attacks (0,72 each), grants HP Stock (2000) to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Warrior of Light</td>
						                <td>Save the Queen</td>
						                <td>AOSB</td>
						                <td>Holy</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Warrior of Light</td>
						                <td>Excalibur</td>
						                <td>OSB</td>
						                <td>Holy / NE</td>
						                <td>One single attack (11,44~12,93 scaling with hits taken) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Warrior of Light</td>
						                <td>Lustrous Shield</td>
						                <td>BSB</td>
						                <td>Holy / NE</td>
						                <td>Eight single attacks (0.81 each), grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Warrior of Light</td>
						                <td>Ultima Weapon</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-holy. Grants Attach Holy Stacking, Attach Holy and High Quick Cast 2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Warrior of Light</td>
						                <td>Crystal Shield</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>25% chance to cast an ability (PHY: single, 3x 0.42 physical Holy/NE, 1500 HP to an ally) after taking damage from an enemy</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Warrior of Light</td>
						                <td>Flame Shield</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-holy. Grants Attach Holy at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Meia</td>
						                <td>Femme Fatale</td>
						                <td>OSB</td>
						                <td>Water / NE</td>
						                <td>One single attack (37,20), 42,80 multiplier if exploiting elemental weakness, breaks damage cap	</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Meia</td>
						                <td>Arc Mirage</td>
						                <td>BSB</td>
						                <td>Water / NE</td>
						                <td>En-water. Six group attacks (1.99 each), minimum damage 1100, grants Haste, Attach Water and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Meia</td>
						                <td>High Tide Swell</td>
						                <td>Glint</td>
						                <td>Water / NE</td>
						                <td>En-water. Six single attacks (1.25 each), grants Attach Water Stacking and Attach Water to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Matoya</td>
						                <td>Matoya's Broom</td>
						                <td>BSB</td>
						                <td>Fire / Ice / Lightning</td>
						                <td>Eight single attacks (2,00 each), ten attacks if exploiting elemental weakness, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Matoya</td>
						                <td>Matoya's Hat</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Witch abilities deal 25% more damage when equipping a staff</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Wol</td>
						                <td>Organyx</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Eight single ranged attacks (0.96 each), causes Crash -70% for 8 seconds, removes positive effects</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Wol</td>
						                <td>Sargatanas</td>
						                <td>USB 2 / BUSB</td>
						                <td>Earth / Holy</td>
						                <td>Ten single attacks (0.63 each), ATK, MAG and MND -30% for 25 seconds, grants High Quick Cast and Brave Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Wol</td>
						                <td>Monk's Leathers</td>
						                <td>BSB 1</td>
						                <td>NE</td>
						                <td>Seven random attacks (1,08 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Wol</td>
						                <td>Blank Blade</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Four group attacks (1,50 each), ATK and MAG -40% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Echo</td>
						                <td>Seraphic Rod</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Shell + Haste + RES Up 50% 25 secs</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Sarah</td>
						                <td>Ancient Lute</td>
						                <td>SSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Haste</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Master</td>
						                <td>Power Vest</td>
						                <td>USB</td>
						                <td></td>
						                <td>Ten single attacks (0.72 each), ATK and RES +30% to the user for 25 seconds, grants Critical Damage +50% and Flurry Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Master</td>
						                <td>Faerie Claws</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Weakness +30% Boost and 100% Critical 2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Master</td>
						                <td>Soldier's Armlet</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>PHY attacks deal 20% more damage when equipping a fist</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF1</td>
						                <td>Thief(I)</td>
						                <td>Orichalcum</td>
						                <td>BSB</td>
						                <td>Wind / Poison</td>
						                <td>Ten random attacks (0.48 each), ATK and DEF -50% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
									
									<!-- FINAL FANTASY II -->
						            <tr>
						                <td>FF2</td>
						                <td>Leon</td>
						                <td>Longinus</td>
						                <td>USB 1</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single ranged attacks (0,86 each), grants HP Stock (6000), Darkness +30% Boost and Attach Dark to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Leon</td>
						                <td>Rune Axe</td>
						                <td>BSB</td>
						                <td>Dark</td>
						                <td>En-dark. Eight single attacks (0,82 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Leon</td>
						                <td>Defender</td>
						                <td>SSB</td>
						                <td>Dark</td>
						                <td>Three group ranged attacks (2.00 each), grants Sentinel to the user for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Leon</td>
						                <td>Obelisk</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Josef</td>
						                <td>Godhand</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>ATK +50% for 25 seconds, grants Haste and Last Stand, grants Quick Cast 2 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Josef</td>
						                <td>Genji Gloves</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-ice. Grants Attach Ice Stacking, Attach Ice and Heroic Spirit Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Firion</td>
						                <td>Kotetsu</td>
						                <td>AASB</td>
						                <td>Holy / Ice / Fire / NE</td>
						                <td>Fifteen single attacks (0.60 each), grants Medium Buff Holy/Ice/Fire, Awoken Loyal Retainer, Damage Cap +10000 and Trinity Rush Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Firion</td>
						                <td>Lightbringer</td>
						                <td>USB1</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Ten single attacks (0.71 each), grants EX: Loyal Shield and Attach Holy to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Firion</td>
						                <td>Firion's Bandana</td>
						                <td>USB2 / BUSB</td>
						                <td>Holy / Ice / Fire</td>
						                <td>Ten single attacks (0.70 each), grants Critical Chance 75% for 15 seconds, Quick Cast and Brave Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Firion</td>
						                <td>Ragnarok</td>
						                <td>OSB</td>
						                <td>Holy / NE</td>
						                <td>One single attack (11,25/12,50/13,75) capped at 99999 if the user used 9/22 damaging actions</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Firion</td>
						                <td>Sun Blade</td>
						                <td>BSB</td>
						                <td>Holy / NE</td>
						                <td>Four group ranged attacks (1.46 each), grants Magical Blink 1 to all allies, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Firion</td>
						                <td>Diamond Helm</td>
						                <td>SSB 2</td>
						                <td>Holy</td>
						                <td>En-holy. Six group attacks (0.85 each), grants Attach Holy to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Firion</td>
						                <td>Winged Helm</td>
						                <td>LMR2</td>
						                <td></td>
						                <td>25% chance to dualcast Samurai abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Maria</td>
						                <td>Gaia Gear</td>
						                <td>AOSB</td>
						                <td>Earth</td>
						                <td>Three single attacks (26.50 each) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Maria</td>
						                <td>Perseus Bow</td>
						                <td>USB</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Ten single attacks (1.70 each), DEF and MAG +30% to the user for 25 seconds, grants Attach Earth and Black Magic Double to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Maria</td>
						                <td>Selene Bow</td>
						                <td>OSB</td>
						                <td>Earth / NE</td>
						                <td>One single attack (40.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Maria</td>
						                <td>Rune-Graven Bow</td>
						                <td>BSB</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Eight single attacks (1,88 each), grants Haste, Attach Earth and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Maria</td>
						                <td>Ice Bow</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Medium Buff Earth and High Quick Cast 2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Maria</td>
						                <td>Minerva Bustier</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast abilities that deal Earth damage</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Emperor</td>
						                <td>Tempest Rod</td>
						                <td>AASB</td>
						                <td>Earth / Wind / Dark / NE</td>
						                <td>Fifteen single attacks (1.50 each), grants Awoken Imperial, Damage Cap +10000, Major Buff Earth, Major Buff Wind, Major Buff Dark and Resist Break Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Emperor</td>
						                <td>Mateus Malice</td>
						                <td>USB 1</td>
						                <td>Earth / Wind</td>
						                <td>Imperil Earth (2). Eight group attacks (1.73 each), causes Imperil Earth 20% for 25 seconds, ATK, MAG and RES -50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Emperor</td>
						                <td>Violet Robe</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Causes Minor Debuff Lightning, grants High Quick Cast 2 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Emperor</td>
						                <td>Imperial Shell (II)</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Restores HP for 100% of the user's maximum HP and grants Quick Cast when HP fall below 20%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Guy</td>
						                <td>Demon Axe</td>
						                <td>USB</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Ten single attacks (0.71 each), ATK and DEF +30% the user for 25 seconds, grants Attach Earth and Monk Rank Boost to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Guy</td>
						                <td>Gigant Axe</td>
						                <td>BSB</td>
						                <td>Earth / NE</td>
						                <td>Imperil Earth (2). Six group attacks (0.97 each), causes Imperil Earth 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Guy</td>
						                <td>Ogre Killer</td>
						                <td>SSB</td>
						                <td>Earth / NE</td>
						                <td>Imperil Earth (2). Four group attacks (1.47 each), causes Imperil Earth 20% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Guy</td>
						                <td>Viking Axe</td>
						                <td>LMR</td>
						                <td></td>
						                <td>PHY attacks deal 20% more damage when equipping an axe</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Gordon</td>
						                <td>Diamond Shield</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Increases the duration of stat debuffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Minwu</td>
						                <td>Rune Staff</td>
						                <td>AOSB</td>
						                <td>Holy</td>
						                <td>Three single attacks (28.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Minwu</td>
						                <td>Stardust Rod</td>
						                <td>BSB 1</td>
						                <td>Holy</td>
						                <td>Four group attacks (2.38 each), grants Haste and High Regen to all allies, grants Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Minwu</td>
						                <td>Holy Wand</td>
						                <td>BSB 2</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Eight single attacks (2.00 each), grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Minwu</td>
						                <td>Asura Rod</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>En-holy. Grants Attach Holy at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Ricard</td>
						                <td>Holy Lance</td>
						                <td>USB</td>
						                <td>Wind / Lightning</td>
						                <td>Ten single ranged jump attacks (0.71 each), grants Jump Instant Cast and Wyvern's Roar to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Ricard</td>
						                <td>Ricard's Gauntlet</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-wind. Grants Attach Wind at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Hilda</td>
						                <td>Lamia Harp</td>
						                <td>USB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), DEF +100% for 25 seconds, grants Last Stand</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF2</td>
						                <td>Hilda</td>
						                <td>Apollo Harp</td>
						                <td>Glint+</td>
						                <td></td>
						                <td>Grants Protect, Shell and Haste</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY III -->
									<tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Rune Axe</td>
						                <td>Chain / Gen.1</td>
						                <td>Earth</td>
						                <td>Activates Earth Chain (max 99, field +20%), eleven single attacks (0,72 each), grants Last Stand to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
									<tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Giant's Axe</td>
						                <td>USB 2</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Ten single attacks (0.71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Earth and Titan Strike Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Aegis Shield</td>
						                <td>BSB 1</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Four group attacks (1,20 each), grants Haste, Oathsworn Espada, Attach Earth and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Crystal Shield</td>
						                <td>BSB 2</td>
						                <td>Earth</td>
						                <td>Eight single attacks (0,84 each), grants Earth Radiant Shield: 75% to all allies, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Break Blade</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Five single attacks (1,58 each), grants Sentinel to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Genji Armor</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Ingus</td>
						                <td>Knight's Helm</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>25% chance to cast an ability (PHY: single, 3x 0.42 physical Earth/NE, restores 1500 HP to an ally) after using a Knight ability</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
									<tr>
						                <td>FF3</td>
						                <td>Arc</td>
						                <td>Seraphim Mace</td>
						                <td>USB 1</td>
						                <td>Holy / Water</td>
						                <td>En-holy. Ten single attacks (1,80 each), RES and MND +30% to the user for 25 seconds, grants Attach Holy and Dia Splash Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Arc</td>
						                <td>Staff of the Magi</td>
						                <td>BSB 1</td>
						                <td>Holy / NE / Medica</td>
						                <td>Five single attacks (2,34 each), restores HP (55) to all allies, MND +30% to the user for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Arc</td>
						                <td>Wizard Rod</td>
						                <td>BSB 2</td>
						                <td>Holy / Water</td>
						                <td>En-holy. Eight single attacks (2,00 each), grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Arc</td>
						                <td>White Mage Robe</td>
						                <td>SSB 2</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Physical Blink 1</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Arc</td>
						                <td>Lordly Robes</td>
						                <td>LMR</td>
						                <td></td>
						                <td>MND +1% for each hit dealt with White Magic abilities, up to +25%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Refia</td>
						                <td>Godhand</td>
						                <td>AOSB</td>
						                <td>Fire</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Refia</td>
						                <td>Metal Knuckles</td>
						                <td>USB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single attacks (0,71 each), grants Attach Fire, Critical Damage +50%, Quick Cast 1 and Fire Quick Cycle to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Refia</td>
						                <td>Refia's Tunic</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast abilities that deal Fire damage</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Onion Knight</td>
						                <td>Zeus Mace</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Grants Haste and Magical Quick Cast 3, MAG, RES and MND +30% for 25 seconds, grants EX: Sage to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Onion Knight</td>
						                <td>Onion Blade</td>
						                <td>USB 2</td>
						                <td></td>
						                <td>Grants Haste and Critical Chance 50%, ATK +50% for 25 seconds, grants EX: Ninja to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Onion Knight</td>
						                <td>Onion Knight's Guise</td>
						                <td>USB 3</td>
						                <td>Wind / Water / Fire / Earth</td>
						                <td>Ten single attacks (1.65 each), grants EX: Light's Wisdom to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Onion Knight</td>
						                <td>Onion Armor</td>
						                <td>OSB</td>
						                <td></td>
						                <td>One single hybrid attack (13.00 or 40.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Onion Knight</td>
						                <td>Eternal Staff</td>
						                <td>SSB 2</td>
						                <td>Medica</td>
						                <td>Five group attacks (2,84 each), restores HP to all allies for 40% of their maximum HP</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Onion Knight</td>
						                <td>Onion Cape</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Grants Instant Cast 2 at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Cloud of Darkness</td>
						                <td>Empress Kharna</td>
						                <td>USB</td>
						                <td>Dark / Lightning</td>
						                <td>En-dark. Seven group attacks (2,10 each), MAG and RES +30% to all allies for 25 seconds, grants Attach Dark and Lightning Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Cloud of Darkness</td>
						                <td>Everdark</td>
						                <td>OSB</td>
						                <td>Dark / NE</td>
						                <td>One single attack (37.20) capped at 99999, 42.80 multiplier if exploiting elemental weakness</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Cloud of Darkness</td>
						                <td>Calcite Staff</td>
						                <td>BSB 1</td>
						                <td>Dark / Holy</td>
						                <td>Eight random attacks (2.20 each), grants Radiant Shield: 100% to all allies, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Cloud of Darkness</td>
						                <td>Darkening Cloud</td>
						                <td>SSB</td>
						                <td>Dark / Holy</td>
						                <td>En-dark. Five group attacks (2,80 each), grants Attach Dark to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Cloud of Darkness</td>
						                <td>Brooding Armguard</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Desch</td>
						                <td>Gladius</td>
						                <td>USB</td>
						                <td>Lightning / NE</td>
						                <td>Imperil Lightning (2). Ten single attacks (1,70 each), causes Imperil Lightning 20% for 25 seconds, grants Magical Quick Cast 3 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Desch</td>
						                <td>Avenger</td>
						                <td>BSB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Five group attacks (2,34 each), grants Haste, Attach Lightning and Burst Mode to the user	</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Desch</td>
						                <td>Bracer</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>MAG +1% for each hit dealt with damaging BLK attacks, up to +20%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Aria</td>
						                <td>Prism Rod</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Fire Stoneskin: 100% and High Regen</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Aria</td>
						                <td>Spirit Ring</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to grant Heals +30% for 10 seconds to the user after using a WHT ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Luneth</td>
						                <td>Ama-no-Murakumo</td>
						                <td>AASB</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Fifteen single ranged attacks (0.60 each), grants Attach Wind, Awoken Wind, Damage Cap +10000 and No Air Time to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Luneth</td>
						                <td>Dragon Lance</td>
						                <td>OSB</td>
						                <td>Wind / NE</td>
						                <td>One single ranged jump attack (11.20~14.50 scaling with Wind attacks used) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Luneth</td>
						                <td>Mighty Hammer</td>
						                <td>Glint</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Six single attacks (0.52 each), grants Attach Wind Stacking and Attach Wind to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF3</td>
						                <td>Luneth</td>
						                <td>Blessed Hammer</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-wind. Grants Attach Wind at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY IV -->
						            <tr>
						                <td>FF4</td>
						                <td>Kain</td>
						                <td>Kain's Lance</td>
						                <td>Chain / Gen.1</td>
						                <td>Lightning</td>
						                <td>Activates Lightning Chain (max 99, field +20%), twenty-two single ranged jump attacks (0.36 each)</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Kain</td>
						                <td>Gae Bolg</td>
						                <td>SASB</td>
						                <td>Lightning / NE</td>
						                <td>Lv.3 En-lightning. Fifteen single ranged jump attacks (0.60 each), grants Attach Lightning 3 with Stacking, Synchro Mode, Damage Cap +10000 and Spark Spear Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Kain</td>
						                <td>Dragoon Lance</td>
						                <td>AASB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Fifteen single ranged jump attacks (0.60 each), grants Attach Lightning, Awoken Dragoon, Damage Cap +20000 and Boltstorm Spear Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Kain</td>
						                <td>Brionac</td>
						                <td>AOSB</td>
						                <td>Lightning</td>
						                <td>Three single ranged jump attacks (8.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Kain</td>
						                <td>Holy Lance</td>
						                <td>USB 2</td>
						                <td>Lightning</td>
						                <td>En-lightning. Ten single ranged jump attacks (0.72 each), grants Attach Lightning, No Air Time 2 and Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Kain</td>
						                <td>Longinus</td>
						                <td>USB 1</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Ten single ranged jump attacks (0,71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Lightning and Jump Instant Cast to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Kain</td>
						                <td>Abel's Lance</td>
						                <td>BSB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Four group ranged jump attacks (1,25 each), grants Haste, Attach Lightning and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Yang</td>
						                <td>Dragon Claw</td>
						                <td>USB</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Ten single attacks (0.71 each), grants Attach Earth, Furious Kick Finisher and Frying Pan 0 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Yang</td>
						                <td>Yang's Guise</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Monk abilities deal 25% more damage when equipping a fist weapon</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Holy Fang</td>
						                <td>AASB</td>
						                <td>Holy / NE</td>
						                <td>En-Holy. Fifteen single hybrid attacks (0.60 or 1.6 each), grants Attach Holy, Awoken Holy, Damage Cap +10000 to the user and 75% Damage Reduction Barrier 3 to all allies</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Avenger</td>
						                <td>Chain / Gen.0</td>
						                <td>Holy</td>
						                <td>Activates Holy Chain (max 99, field +20%)</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Lightbringer</td>
						                <td>USB 1</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Ten single attacks (0.71 each), grants HP Stock (6000), Attach Holy, and EX: Paladin to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Force Shield</td>
						                <td>USB 2</td>
						                <td></td>
						                <td>DEF and RES +200% for 25 seconds, grants EX: Lunarian to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Kingsword</td>
						                <td>USB 3 / BUSB</td>
						                <td>Holy</td>
						                <td>Ten single attacks (0.72 each), grants Last Stand to all allies, grants Knight +30% Boost and Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Ragnarok</td>
						                <td>OSB</td>
						                <td>Holy / NE</td>
						                <td>One single ranged attack (12.00) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Excalibur</td>
						                <td>BSB 1</td>
						                <td>Holy</td>
						                <td>En-holy. Five group ranged attacks (1.02 each), grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Paladin's Bracer</td>
						                <td>Glint 1</td>
						                <td></td>
						                <td>En-holy. Grants HP Stock (2000), grants Attach Holy to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Paladin Cecil</td>
						                <td>Caesar's Plate</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-holy. Grants Attach Holy at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rosa</td>
						                <td>Fairy's Bow</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants HP Stock (2000) and Magical Blink 1</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rosa</td>
						                <td>Rosa's Guise</td>
						                <td>USB 2</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Regenga and High Quick Cast 2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rosa</td>
						                <td>Artemis Bow</td>
						                <td>SSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Magical Blink 1</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rosa</td>
						                <td>Selene Bow</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast White Magic abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Palom</td>
						                <td>Gokuu Pole</td>
						                <td>AOSB</td>
						                <td>Fire / Lightning / Ice</td>
						                <td>Three single attacks (26.5 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Palom</td>
						                <td>Mirage Rod</td>
						                <td>USB</td>
						                <td>Lightning / Ice</td>
						                <td>En-lightning. Ten single attacks (1,70 each), MAG and RES +30% to the user for 25 seconds, grants Attach Lightning and Black Magic Double to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Palom</td>
						                <td>Chocobo Suit</td>
						                <td>BSB</td>
						                <td>Fire / Lightning / Ice</td>
						                <td>Eight single attacks (2,00 each), ten attacks if exploiting elemental weakness, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Palom</td>
						                <td>Triton's Dagger</td>
						                <td>SSB 1</td>
						                <td>Lightning / NE</td>
						                <td>Eight single attacks (2,20 each)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Palom</td>
						                <td>Asura Rod</td>
						                <td>SSB 2</td>
						                <td>Holy / Fire / Lightning</td>
						                <td>Eight group attacks (1,69 each), MAG and RES -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Palom</td>
						                <td>Hypno Crown</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-lightning. Grants Attach Lightning at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Barbariccia</td>
						                <td>Wind Stick</td>
						                <td>AOSB</td>
						                <td>Wind</td>
						                <td>Twenty single attacks (1.82 each), followed by one single attack (26.50) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Barbariccia</td>
						                <td>Barbariccia's Dagger</td>
						                <td>USB</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Ten single attacks (1,70 each), MAG and RES +30% to the user for 25 seconds, grants Attach Wind and Fair Wind Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Barbariccia</td>
						                <td>Barbariccia's Guise</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-wind. Grants Attach Wind at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>DK Cecil</td>
						                <td>Helter Skelter</td>
						                <td>BSB 2</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single attacks (0,83 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>DK Cecil</td>
						                <td>Demon Shield</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Stoneskin: 100% and Darkness Rank Boost</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>DK Cecil</td>
						                <td>Arondight</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Edward</td>
						                <td>Lamia Harp</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Imperil Holy (2). Causes Imperil Holy 20% for 25 seconds, ATK +50% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Edward</td>
						                <td>Requiem Harp</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Increases the duration of stat buffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Edward</td>
						                <td>Soul Harp</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Eight single attacks (2,00 each), ten attacks if exploiting elemental weakness, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Summoner Rydia</td>
						                <td>AOSB</td>
						                <td>Earth / Water / Holy</td>
						                <td>Three single attacks (26.50 each) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Red Scorpion</td>
						                <td>USB 1</td>
						                <td>Water / NE</td>
						                <td>En-water. Ten single attacks (1.70 each), minimum damage 1100, MAG and RES +30% to all allies for 25 seconds, grants Attach Water to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Wizard Rod</td>
						                <td>OSB</td>
						                <td>Earth / Water /Holy</td>
						                <td>One single attack (37.00) capped at 99999, minimum damage 1100</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Sleipnir's Tail</td>
						                <td>BSB 1</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Five group attacks (2,37 each), minimum damage 1100, grants Haste, Attach Earth and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Minerva Bustier</td>
						                <td>BSB 2</td>
						                <td>Water / Holy</td>
						                <td>Imperil Water (2). Six group attacks (1,99 each), minimum damage 1100, causes Imperil Water 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Rydia's Guise</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>35% chance to grant Quick Cast 1 to the user after using a Summoning ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Diamond Armlet</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-water. Grants Attach Water at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Rydia</td>
						                <td>Platinum Bangle</td>
						                <td>LMR 4</td>
						                <td></td>
						                <td>SUM attacks deal 25% more damage when equipping a whip</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Golbez</td>
						                <td>Gigant Axe</td>
						                <td>USB 1</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Ten single attacks (1.70 each), DEF and MAG +30% to the user for 25 seconds, grants Attach Dark and HP Stock (6000) to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Golbez</td>
						                <td>Master Rod</td>
						                <td>USB 2</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Ten single attacks (1.70 each), damages the user for 99% max HP, grants Attach Dark, Stoneskin: 100% and Shadow Dragon Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Golbez</td>
						                <td>Zeromus Shard</td>
						                <td>BSB 1</td>
						                <td>Dark / NE</td>
						                <td>Seven single attacks (2,49 each), MAG +30% to the user for 25 seconds, grants Haste, Sentinel and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Golbez</td>
						                <td>Golbez's Cloak</td>
						                <td>SSB</td>
						                <td>Dark</td>
						                <td>En-dark. Six group attacks (1,57 each), grants Attach Dark to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Golbez</td>
						                <td>Golbez's Bascinet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Porom</td>
						                <td>Feathered Cap</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Grants Twin Star for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Porom</td>
						                <td>Tabby Suit</td>
						                <td>LMR</td>
						                <td></td>
						                <td>35% chance to grant Quick Cast 1 to the target after using a single-target White Magic ability that restores HP on an ally</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Tellah</td>
						                <td>Professor Robe</td>
						                <td>USB</td>
						                <td></td>
						                <td>En-earth. Grants Magical Quick Cast 2, grants Attach Earth and Desperate Meteor Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Tellah</td>
						                <td>Wizard Rod</td>
						                <td>Glint+</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth Stacking, Attach Earth and Instant Cast 1</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Tellah</td>
						                <td>Wonder Wand</td>
						                <td>BSB</td>
						                <td></td>
						                <td>MAG +30% for 25 seconds, grants Haste and Magical Quick Cast 3, grants Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Tellah</td>
						                <td>Magus Robe</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Increases the duration of stat buffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Cid (IV)</td>
						                <td>Gaia Hammer</td>
						                <td>BSB</td>
						                <td>Lightning / Hammer</td>
						                <td>Eight random attacks (0.92 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Cid (IV)</td>
						                <td>Thor's Hammer</td>
						                <td>SSB 2</td>
						                <td>Lightning / NE</td>
						                <td>Imperil Lightning (2). Five random ranged attacks (1,56 each), causes Imperil Lightning 20% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Edge</td>
						                <td>Edge's Armguard</td>
						                <td>Chain / Gen.0</td>
						                <td>Water</td>
						                <td>Activates Water Chain (max 99, field +20%)</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Edge</td>
						                <td>Kiku-ichimonji</td>
						                <td>USB 1</td>
						                <td>Water / Lightning</td>
						                <td>Ten random attacks (0.71 each), grants Chaotic Moon to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Edge</td>
						                <td>Red Jacket</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Grants Haste, Last Stand and Physical Blink 1</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Edge</td>
						                <td>Edge's Cloak</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to grant Physical Blink 1 to the user after using a Ninja ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Ceodore</td>
						                <td>Enhancer</td>
						                <td>BSB</td>
						                <td>Holy / NE</td>
						                <td>Eight single attacks (0.94 each), restores HP to all allies for 40% of their maximum HP, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Ceodore</td>
						                <td>Force Armor</td>
						                <td>SSB</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Five group attacks (1.01 each), grants Attach Holy to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Ceodore</td>
						                <td>Genji Helm</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>30% chance to cover PHY attacks that target allies, reducing damage taken by 20%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF4</td>
						                <td>Ursula</td>
						                <td>Master Fists</td>
						                <td>BSB</td>
						                <td>Earth / Fire</td>
						                <td>En-earth. Eight single attacks (0.83 each), grants Haste, Attach Earth and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>

						            <!-- FINAL FANTASY V -->
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Freelancer Bartz's Guise</td>
						                <td>AASB 1</td>
						                <td>Fire / Wind / Earth / Water</td>
						                <td>Fifteen single attacks (0.60 each), grants Major Buff Fire, Major Buff Water, Major Buff Wind, Major Buff Earth, Awoken Spellblade, Damage Cap +10000 and Barrage Master Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Man-Eater</td>
						                <td>AOSB</td>
						                <td>Fire / Wind / Earth / Water</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Chicken Knife</td>
						                <td>USB 1</td>
						                <td>Fire / Wind / Earth / Water</td>
						                <td>Ten single attacks (0,70 each), grants EX: Spellblade Barrage to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Zwill Crossblade</td>
						                <td>USB 2</td>
						                <td>Fire / Wind / Earth / Water</td>
						                <td>Ten single attacks (0,69 each), grants EX: Power of the Crystals to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Apocalypse</td>
						                <td>OSB</td>
						                <td>Fire / Wind / Earth / Water</td>
						                <td>Breaks damage cap, ranged attack</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Ragnarok</td>
						                <td>BSB 1</td>
						                <td></td>
						                <td>Six single attacks (1,33 each), grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Grand Helm</td>
						                <td>BSB 2</td>
						                <td>Water / NE</td>
						                <td>En-water. Eight single attacks (0,83 each), grants Haste, Attach Water and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Great Sword</td>
						                <td>BSB 3</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Eight single attacks (0.83 each), grants Haste, Attach Earth and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Excalibur</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Five single attacks (1,58 each), DEF +50% to all allies for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Bartz</td>
						                <td>Bartz's Bracer</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Spellblade High Quick Cast and Spellblade Rank Boost</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Exdeath</td>
						                <td>Whale Whisker</td>
						                <td>USB 1</td>
						                <td>Dark / NE</td>
						                <td>Six group attacks (2,32 each), MAG and MND +30% to all allies for 25 seconds, grants High Runic to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Exdeath</td>
						                <td>Santalum Robe</td>
						                <td>USB 2 / BUSB</td>
						                <td>Dark</td>
						                <td>Imperil Dark (2). Ten random attacks (1.64 each), causes Imperil Dark 20% for 25 seconds, grants Quick Cast and Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Exdeath</td>
						                <td>Demon's Rod</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td>Imperil Dark (2). Six group attacks (1.99 each), causes Imperil Dark 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Exdeath</td>
						                <td>Enuo's Scourge</td>
						                <td>SSB 2</td>
						                <td>Dark / NE</td>
						                <td>Six single attacks (2,93 each), MAG and RES +30% to all allies for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Faris</td>
						                <td>Windslash Bow</td>
						                <td>Chain / Gen.2</td>
						                <td>Wind</td>
						                <td>Wind Chain (physical). Activates Wind Chain (max 150, field +50%), ATK +50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Faris</td>
						                <td>Fairy Bow</td>
						                <td>USB 2</td>
						                <td>Wind / NE</td>
						                <td>Imperil Wind (2). Nine random ranged attacks (0,82 each), causes Imperil Wind 20% for 25 seconds, ATK, MAG, and MND -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Faris</td>
						                <td>Force Shield</td>
						                <td>USB 3</td>
						                <td>Wind / NE</td>
						                <td>Imperil Wind (2). Ten single attacks (0.71 each), causes Imperil Wind 20% for 25 seconds, grants Pirate's Steel Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Faris</td>
						                <td>Perseus Bow</td>
						                <td>BSB 2</td>
						                <td>Wind / Fire</td>
						                <td>Eight single ranged attacks (0,65 each), ATK and DEF -50% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Faris</td>
						                <td>Faris' Bracers</td>
						                <td>SSB 2</td>
						                <td>Wind / Lightning</td>
						                <td>Imperil Wind (2). Four group ranged attacks (1,46 each), causes Imperil Wind 20% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Faris</td>
						                <td>Faris's Epaulet</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Increases damage dealt by 3/6/9/12/20% if 1/2/3/4/5 of the target's stats are lowered</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Faris</td>
						                <td>Longinus</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast Thief abilities</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Gilgamesh</td>
						                <td>Zanmato</td>
						                <td>AOSB</td>
						                <td>Fire</td>
						                <td>Twenty single attacks (0.55 each), followed by one single attack (8.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Gilgamesh</td>
						                <td>Ama-no-Murakumo</td>
						                <td>USB 2</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single attacks (0,71 each), grants Attach Fire and EX: No Discussion to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Gilgamesh</td>
						                <td>Gilgamesh's Naginata</td>
						                <td>OSB</td>
						                <td>NE</td>
						                <td>Breaks damage cap, 13,20 multiplier if all allies are alive</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Gilgamesh</td>
						                <td>Masamune</td>
						                <td>BSB 1</td>
						                <td></td>
						                <td>Eight single attacks (0.98 each), grants Haste, Sentinel and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Gogo</td>
						                <td>Empyrean Rod</td>
						                <td>USB</td>
						                <td></td>
						                <td>En-water. Grants Haste and Last Stand, grants Attach Water to the user, casts the last ability used by an ally twice, default ability (PHY: single, 1.50 physical)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Gogo</td>
						                <td>Mirage Rod</td>
						                <td>Glint+</td>
						                <td></td>
						                <td>En-water. Grants Attach Water Stacking, Attach Water and Instant Cast 1 to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Gogo</td>
						                <td>Mimic's Rod</td>
						                <td>BSB</td>
						                <td>Water / NE</td>
						                <td>En-water. Six group attacks (1,99 each), grants Haste, Attach Water and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Lenna</td>
						                <td>Lenna's Dress</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>ATK, MAG and RES +30% for 25 seconds, grants HP Stock (3000)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Lenna</td>
						                <td>Healing Rod</td>
						                <td>USB 2</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Stoneskin: 30% and Last Stand</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Lenna</td>
						                <td>Holy Rod Rod</td>
						                <td>USB 3</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Regenga, Minor Resist Ice and Minor Resist Water, grants Quick Cast to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Lenna</td>
						                <td>Rune Staff</td>
						                <td>BSB 2</td>
						                <td>Holy / Medica</td>
						                <td>Restores HP (85), damages undeads, grants Minor Resist Ice, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Lenna</td>
						                <td>Mace of Zeus</td>
						                <td>SSB 2</td>
						                <td>Medica</td>
						                <td>Restores HP (85), RES +50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Lenna</td>
						                <td>Laurel Crown</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to cast an ability (WHT: group, restores HP (25)) after using a White Magic ability</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Galuf</td>
						                <td>Platinum Hammer</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>En-earth. ATK and MAG +30%, grants Haste, grants Attach Earth to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Galuf</td>
						                <td>Sledgehammer</td>
						                <td>BSB 1</td>
						                <td>Fire / Earth</td>
						                <td>Imperil Fire (2). Six single attacks (1.27 each), causes Imperil Fire 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Galuf</td>
						                <td>Murasame</td>
						                <td>BSB 2</td>
						                <td>Earth / Fire</td>
						                <td>Imperil Earth (2). Eight single attacks (0,83 each), causes Imperil Earth 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Galuf</td>
						                <td>Lambent Hat</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Xezat</td>
						                <td>Xezat's Helm</td>
						                <td>BSB</td>
						                <td>Ice / Lightning</td>
						                <td>Imperil Ice (2). Eight random attacks (0.79 each), causes Imperil Ice 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Xezat</td>
						                <td>Xezat's Gauntlets</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to dualcast Spellblade abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Krile</td>
						                <td>Gaia Rod</td>
						                <td>USB 3</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Ten single attacks (1.70 each), grants Attach Earth, Quick Cast 1, Earth Quick Cycle and Inherited Essence Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Krile</td>
						                <td>Stardust Rod</td>
						                <td>OSB</td>
						                <td>Fire / NE</td>
						                <td>One single attack (38.00~44.00 scaling with Fire attacks used) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Krile</td>
						                <td>Seraphim's Mace</td>
						                <td>Glint 2</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth Stacking, Attach Earth and High Quick Cast 2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Krile</td>
						                <td>Krile's Dress</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Krile</td>
						                <td>Minerva Bustier</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Kelger</td>
						                <td>Avenger</td>
						                <td>BSB</td>
						                <td>Earth / Wind</td>
						                <td>En-earth. Eight single attacks (0.83 each), grants Haste, Attach Earth and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Kelger</td>
						                <td>Triton's Dagger</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Dorgann</td>
						                <td>Dorgann's Redoubt</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Imperil Earth (2). Causes Imperil Earth 20% for 25 seconds, ATK and DEF +30% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF5</td>
						                <td>Dorgann</td>
						                <td>Dorgann's Blade</td>
						                <td>SSB</td>
						                <td>Wind</td>
						                <td>Six random attacks (1.28 each), DEF -30% to the user for 25 seconds, ATK and MAG +30% to all allies for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- FINAL FANTASY VI -->
						            <tr>
						                <td>FF6</td>
						                <td>Terra</td>
						                <td>Lufenian Saber</td>
						                <td>AASB 1</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Fifteen single attacks (1.50 each), grants Attach Fire, Awoken Fire, Damage Cap +10000 and Terra Trance to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Terra</td>
						                <td>Durandal</td>
						                <td>AOSB 1</td>
						                <td>Fire</td>
						                <td>Three single attacks (26.50 each) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Terra</td>
						                <td>Apocalypse</td>
						                <td>USB 1</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single attacks (1.70 each), grants Attach Fire to the user, grants EX: Magitek to the user for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Terra</td>
						                <td>Blood Sword</td>
						                <td>OSB</td>
						                <td>Fire / NE</td>
						                <td>One single attack (40,00) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Terra</td>
						                <td>Terra's Cloak</td>
						                <td>Glint 1</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire Stacking, Attach Fire and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Terra</td>
						                <td>Terra's Armguards</td>
						                <td>BSB 2</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Eight single attacks (1.88 each), grants Haste, Attach Fire and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Terra</td>
						                <td>Tiara</td>
						                <td>SSB 2</td>
						                <td>Fire</td>
						                <td>En-fire. Four group attacks (3.53 each), grants Attach Fire to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Terra</td>
						                <td>Meister Rod</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Locke</td>
						                <td>Zwill Crossblade</td>
						                <td>Chain / Gen.1</td>
						                <td>Fire</td>
						                <td>Fire Chain. Activates Fire Chain (max 99, field +20%), eleven single attacks (0.72 each), DEF and RES -50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Locke</td>
						                <td>Orichalcum</td>
						                <td>AOSB</td>
						                <td>Fire</td>
						                <td>Twenty single ranged attacks (0,55 each), followed by one single ranged attack (8,00) that breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Locke</td>
						                <td>Platinum Dagger</td>
						                <td>USB 1</td>
						                <td>Fire / NE</td>
						                <td>Imperil Fire (2). Ten random attacks (0,67 each), causes Imperil Fire 20% for 25 seconds, grants Flame Hunt Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Locke</td>
						                <td>Thief Knife</td>
						                <td>BSB 1</td>
						                <td>Fire / Holy</td>
						                <td>Imperil Fire (2). Five group attacks (1.16 each), causes Imperil Fire 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Locke</td>
						                <td>Locke's Sash</td>
						                <td>BSB 2</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Eight single ranged attacks (0,83 each), grants Haste, Attach Fire and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Locke</td>
						                <td>Thief's Cap</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire Stacking, Attach Fire and High Quick Cast 2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Relm</td>
						                <td>Da Vinci Brush</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Stoneskin: 30% and Instant Cast 1</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Relm</td>
						                <td>Unicorn Brush</td>
						                <td>USB 2</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Last Stand, grants Kindred Sketch to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Relm</td>
						                <td>Heavenly Brush</td>
						                <td>USB 3</td>
						                <td>Medica</td>
						                <td>Restores HP (55), grants Regenga, Physical Blink 1 and High Quick Cast 2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Relm</td>
						                <td>Magical Brush</td>
						                <td>BSB</td>
						                <td>Holy / NE / Medica</td>
						                <td>Three group attacks (3.13 each), restores HP (55) to all allies, grants Last Stand to all allies, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Relm</td>
						                <td>Chocobo Brush</td>
						                <td>SSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants High Regen</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Relm</td>
						                <td>Athena Brush</td>
						                <td>Glint 2</td>
						                <td></td>
						                <td>Grants Haste and Physical Blink 1</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Relm</td>
						                <td>Relm's Hat</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>27% chance to grant Magical Blink 1 to the target after using a single-target White Magic ability that restores HP on an ally</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Sabin</td>
						                <td>Ehrgeiz</td>
						                <td>AOSB</td>
						                <td>Fire</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Sabin</td>
						                <td>Avenger</td>
						                <td>USB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single attacks (0,71 each), ATK and RES +30% to the user for 25 seconds, grants Attach Fire, Instant Cast 1 and Phoenix Attack Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Sabin</td>
						                <td>Scissor Fangs</td>
						                <td>OSB</td>
						                <td>Fire / NE</td>
						                <td>One single attack (11,25) capped at 99999, 12,75 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Sabin</td>
						                <td>Godhand</td>
						                <td>BSB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. 7/8/9/10 single attacks (0.70 each) at 700/1250/1700 ATK, grants Haste, Attach Fire and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Sabin</td>
						                <td>Kenpogi</td>
						                <td>Glint+</td>
						                <td></td>
						                <td>En-Fire. En-Fire Stack & Instant Cast 1 to user, Instant Cast & Zero SB Cost</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Sabin</td>
						                <td>Spirit Band</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Monk High Quick Cast and Monk Rank Boost</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Sabin</td>
						                <td>Vishnu Vest</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>ATK +2% for each hit dealt with Monk abilities, up to +34%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Shadow</td>
						                <td>Fuma Shuriken</td>
						                <td>AOSB</td>
						                <td>Dark</td>
						                <td>Twenty single ranged attacks (0.55 each), followed by one single ranged attack (8.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Shadow</td>
						                <td>Kagenui</td>
						                <td>USB 1</td>
						                <td>Dark / NE</td>
						                <td>Ten random attacks (0,66 each), grants Abandoned Past to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Shadow</td>
						                <td>Koga Blade</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Seven group ranged attacks (0.69 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Kefka</td>
						                <td>Fallen Angel's Harp</td>
						                <td>AOSB</td>
						                <td>Dark / Poison</td>
						                <td>Three single attacks (26.50 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Kefka</td>
						                <td>Kefka's Guise</td>
						                <td>USB</td>
						                <td>Dark / Poison</td>
						                <td>En-dark. Ten random attacks (1.62 each), grants Attach Dark and EX: Forged Magitek to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Kefka</td>
						                <td>Kefka's Gloves</td>
						                <td>OSB</td>
						                <td>Dark / NE</td>
						                <td>One single attack (37.50) capped at 99999, 42.50 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Kefka</td>
						                <td>Dancing Mad</td>
						                <td>BSB 1</td>
						                <td>Poison / NE</td>
						                <td>En-poison. Eight random attacks (1,88 each), grants Haste, Attach Poison and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Kefka</td>
						                <td>Black Quena</td>
						                <td>BSB 2</td>
						                <td>Dark / Poison</td>
						                <td>En-dark. Eight random attacks (1,88 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Kefka</td>
						                <td>Hamelin</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Darkness High Quick Cast and Darkness Rank Boost</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Kefka</td>
						                <td>Mischief Cap</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to dualcast abilities that deal Dark damage</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Kefka</td>
						                <td>Blueleaf Flute</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Celes</td>
						                <td>Ice Brand</td>
						                <td>AASB</td>
						                <td>Holy / Ice / NE</td>
						                <td>Fifteen single attacks (0.60 each), grants Magical Blink 1 to all allies, grants Major Buff Ice, Major Buff Holy, Awoken Invincible General, Damage Cap +10000 and Awoken Runic Blade Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Celes</td>
						                <td>Celes's Sword</td>
						                <td>Chain / Gen.2</td>
						                <td>Ice</td>
						                <td>Ice Chain (physical). Activates Ice Chain (max 150, field +50%), ATK +50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Celes</td>
						                <td>Ultima Blade</td>
						                <td>AOSB</td>
						                <td>Holy / Ice / Wind</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Celes</td>
						                <td>Celes's Guise</td>
						                <td>USB 2</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Ten single attacks (0.71 each), grants Attach Ice, High Runic and Arcane Blade to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Celes</td>
						                <td>Lightbringer</td>
						                <td>BSB 1</td>
						                <td></td>
						                <td>En-holy. ATK and MAG +30% to all allies for 25 seconds, grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Celes</td>
						                <td>Ragnarok</td>
						                <td>BSB 2</td>
						                <td>Holy / Ice</td>
						                <td>Eight single attacks (0.94 each), ATK and DEF +35% to the user for 25 seconds, grants Haste, High Runic and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Celes</td>
						                <td>Celes' Cloak</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to dualcast Spellblade abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Celes</td>
						                <td>Platinum Shield</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-ice. Grants Attach Ice at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Edgar</td>
						                <td>Hyper Drill</td>
						                <td>AASB</td>
						                <td>Poison / Fire / Lightning / NE</td>
						                <td>Fifteen single ranged attacks (0.60 each), grants Change Machinery, Awoken Machinery Cultivator, Damage Cap +10000 and Technical Bravo! Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Edgar</td>
						                <td>Edgar's Guise</td>
						                <td>AOSB</td>
						                <td>Poison / Fire / Lightning</td>
						                <td>Twenty single ranged attacks (0.55 each), followed by one single ranged attack (8.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Edgar</td>
						                <td>Edgar's Cloak</td>
						                <td>BSB 1</td>
						                <td>Poison / NE</td>
						                <td>En-poison. Six group attacks (0,80 each), causes Poison (100%), grants Haste, Attach Poison and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Edgar</td>
						                <td>Longinus</td>
						                <td>BSB 2</td>
						                <td>PPoison / Fire / Lightning</td>
						                <td>Eight single attacks (0.82 each), ATK and DEF +30% to the user for 25 seconds, grants Haste, Instant Cast 1 and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Edgar</td>
						                <td>Noiseblaster</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants 100% Critical 2 and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Leo</td>
						                <td>Imperial Highblade</td>
						                <td>SSB</td>
						                <td>Holy / NE</td>
						                <td>Imperil Holy (2). Six group ranged attacks (convergent 1,29 each), causes Imperil Holy 20% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Leo</td>
						                <td>Aegis Shield</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>PHY attacks deal 20% more damage when equipping a sword</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Gogo (VI)</td>
						                <td>Gogo's Falchion</td>
						                <td>USB / BUSB</td>
						                <td></td>
						                <td>ATK, MAG and RES +30%, grants Haste, grants Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Gogo (VI)</td>
						                <td>Helm of Wonders</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Eight single hybrid attacks (0.95 or 2.13 each), ATK and MAG +30% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Gogo (VI)</td>
						                <td>Mimic Blade</td>
						                <td>SSB</td>
						                <td>Medica / Esuna</td>
						                <td>Seven group hybrid attacks (0,83 or 2,00 each), restores HP to all allies for 40% of their maximum HP, removes negative effects to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Gogo (VI)</td>
						                <td>Mimic's Robe</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>Mimic attacks deal 25% more damage</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Mog</td>
						                <td>Mog's Timpani</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>ATK, MAG and MND +30% for 25 seconds, grants Quick Cast 3</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Mog</td>
						                <td>Prism Rod</td>
						                <td>USB 2</td>
						                <td></td>
						                <td>ATK, DEF, MAG, RES and MND -30% for 25 seconds, grants Protect, Shell and Haste to all allies</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Mog</td>
						                <td>Faerie Tail</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Grants Haste, MAG and MND +30% for 25 seconds, grants Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Cyan</td>
						                <td>Cyan's Bracer</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Strago</td>
						                <td>Professor's Robe</td>
						                <td>Chain / Gen.2</td>
						                <td>Water</td>
						                <td>Water Chain (magic). Activates Water Chain (max 150, field +50%), MAG +50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Strago</td>
						                <td>Dragon Rod</td>
						                <td>AOSB</td>
						                <td>Water</td>
						                <td>Twenty single attacks (1.82 each), followed by one single attack (26.50) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Strago</td>
						                <td>Wizer Staff</td>
						                <td>USB</td>
						                <td>Water</td>
						                <td>Ten single attacks (1.73 each), grants Water Radiant Shield: 75% and Instant Cast 1 to all allies</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Strago</td>
						                <td>Strago's Guise</td>
						                <td>OSB</td>
						                <td>Water / Earth</td>
						                <td>One single attack (37.20) capped at 99999, 42.80 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Gau</td>
						                <td>Dual Claw</td>
						                <td>USB</td>
						                <td>Wind / Lightning / NE</td>
						                <td>Twelve single attacks (0.57 each), grants 100% Critical and Combat or Celerity Double to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Gau</td>
						                <td>Impact Claws</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Eight single attacks (0.95 each), grants Dark Bargain to the user for 25 seconds, grants Haste, Quick Cast 3 and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF6</td>
						                <td>Umaro</td>
						                <td>Bone Club</td>
						                <td>BSB</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Seven group attacks (0.70 each), grants Haste, Attach Ice and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- FINAL FANTASY VII -->
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Brave Blade</td>
						                <td>AASB 1</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Fifteen single attacks (0.60 each), grants Attach Wind, Awoken Wind, Damage Cap +10000, 100% Critical, High Quick Cast and Cloudy Wolf Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Ultima Weapon</td>
						                <td>AOSB 1</td>
						                <td>Wind</td>
						                <td>Twenty single ranged attacks (0.55 each), followed by one single ranged attack (8.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Durandal</td>
						                <td>AOSB 2</td>
						                <td>Dark</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Cloud's Gloves</td>
						                <td>USB 2</td>
						                <td>Wind</td>
						                <td>En-wind. Fifteen single attacks (0,48 each), grants Attach Wind and EX: True Self to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Force Stealer</td>
						                <td>USB 1</td>
						                <td>Wind / Dark</td>
						                <td>Five single attacks (1,50 each), grants Auto Critical and EX: Soldier to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Ultima Blade</td>
						                <td>BSB 2</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Eight single attacks (0.83 each), grants Haste, Attach Wind and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>2nd Fusion Sword</td>
						                <td>Glint 1</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Six single attacks (0.52 each), grants Attach Wind Stacking and Attach Wind to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Nail Bat</td>
						                <td>Glint 2</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Six single attacks (0.52 each), grants Attach Dark Stacking and Attach Dark to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Organics+</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast abilities that deal Wind damage</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Save the Queen</td>
						                <td>LMR 4</td>
						                <td></td>
						                <td>En-wind. Grants Attach Wind at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Shinra Uniform</td>
						                <td>LMR 5</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cloud</td>
						                <td>Flametongue</td>
						                <td>LMR 6</td>
						                <td></td>
						                <td>PHY attacks deal 20% more damage when equipping a sword</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>Leather Suit</td>
						                <td>AASB</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Fifteen single attacks (0.60 each), grants Attach Earth, Awoken Monk, Damage Cap +10000 and Gaia Crusher Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>Tifa's Gloves</td>
						                <td>USB 2</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Ten single attacks (0,71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Earth and Monk Double to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>Premium Heart</td>
						                <td>USB 1</td>
						                <td>Earth / NE</td>
						                <td>Ten single attacks (0,70 each), grants Haste, Radiant Shield: 100% and High Regen to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>God's Hand</td>
						                <td>OSB</td>
						                <td>Earth / NE</td>
						                <td>Breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>Oversoul</td>
						                <td>BSB 1</td>
						                <td>Earth</td>
						                <td>En-earth. Eight single attacks (0.83 each), grants Haste, Attach Earth and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>Kaiser's Knuckles</td>
						                <td>BSB 2</td>
						                <td>Earth / NE</td>
						                <td>Imperil Earth (2). Eight single attacks (0,96 each), causes Imperil Earth 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>Master Fist</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Four single attacks (1,95 each), ATK +50% to the user for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Tifa</td>
						                <td>Tifa's Guise</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Conformer</td>
						                <td>AOSB</td>
						                <td>Water</td>
						                <td>Twenty single ranged attacks (0,55 each), followed by one single ranged attack (8,00) that breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Oritsuru</td>
						                <td>USB 2</td>
						                <td>Water / NE</td>
						                <td>En-water. Ten single ranged attacks (0,71 each), grants Attach Water, Physical Blink 1 and Torrent Blade Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Magic Shuriken</td>
						                <td>BSB 1</td>
						                <td>Water / NE</td>
						                <td>En-water. Five group ranged attacks (1.02 each), grants Haste, Attach Water and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Spiral Shuriken</td>
						                <td>BSB 2</td>
						                <td>Water / NE</td>
						                <td>Imperil Water (2). Six group ranged attacks (0,83 each), causes Imperil Water 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Mystile</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Physical Blink 2, Physical Blink Stacking 2 and Ninja Rank Boost</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Crystal Cross</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Three group ranged attacks (2,00 each), grants Physical Blink 1 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Yuffie</td>
						                <td>Yuffie's Guise</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to grant Physical Blink 1 to the user after using a Ninja ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cid</td>
						                <td>Dragoon Lance</td>
						                <td>USB</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Ten single ranged jump attacks (0,71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Wind and Jump Instant Cast to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cid</td>
						                <td>Cid's Goggles</td>
						                <td>SSB 1</td>
						                <td>Wind</td>
						                <td>Twelve random attacks (0,65 each), grants No Air Time 3 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cid</td>
						                <td>Cid's Jacket</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Jump attacks deal 20% more damage when equipping a spear</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Aerith</td>
						                <td>Umbrella</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Shell and HP Stock (2000)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Aerith</td>
						                <td>Healing Rod</td>
						                <td>USB 2</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Last Stand and Physical High Quick Cast 3</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Aerith</td>
						                <td>Wizer Rod</td>
						                <td>BSB 1</td>
						                <td>Holy / Medica</td>
						                <td>Five group attacks (1,90 each), restores HP (85) to all allies, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Aerith</td>
						                <td>Aerith's Jacket</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast White Magic abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Sephiroth</td>
						                <td>Genji Blade</td>
						                <td>AASB 1</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Fifteen single attacks (0.60 each), grants Attach Dark, Awoken Darkness, Damage Cap +10000 and Soul Break Gauge +500 to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Sephiroth</td>
						                <td>Cetra Blade</td>
						                <td>AOSB</td>
						                <td>Dark</td>
						                <td>Twenty single attacks (0.55 each), followed by one single attack (8.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Sephiroth</td>
						                <td>Executioner</td>
						                <td>USB 2</td>
						                <td>Dark</td>
						                <td>En-dark. Fifteen single ranged attacks (0.48 each), grants Attach Dark, Critical Chance 50% for 25 seconds, and EX: Legendary SOLDIER for 15 seconds to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Sephiroth</td>
						                <td>Chirijiraden</td>
						                <td>OSB</td>
						                <td>Dark / Fire</td>
						                <td>One single attack (12.00) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Sephiroth</td>
						                <td>Ama no Murakumo-shinuchi</td>
						                <td>Glint+</td>
						                <td></td>
						                <td>Instant Cast 3 to user, Instant Cast & Zero SB Cost</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Sephiroth</td>
						                <td>Yoshiyuki</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Four single ranged attacks (1,95 each), causes Sap (10%)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Sephiroth</td>
						                <td>Sephiroth's Darkcoat</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Sephiroth</td>
						                <td>Genji Armor</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast Darkness abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Sephiroth</td>
						                <td>Sephiroth's Dragon Mail</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>25% chance to Dualcast Samurai abilities</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Zack</td>
						                <td>Force Stealer (CC)</td>
						                <td>USB</td>
						                <td>Wind / NE</td>
						                <td>Imperil Wind (2). Ten random attacks (0.68 each), Imperil Wind 20% for 25 seconds, grants ATK and DEF +30% for 25 seconds, Quick Cast 1 and Wind Quick Cycle to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Zack</td>
						                <td>Rune Blade</td>
						                <td>BSB</td>
						                <td>Wind / Earth</td>
						                <td>Imperil Wind (2). Eight random ranged attacks (0,96 each), causes Imperil Wind 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Zack</td>
						                <td>Shinra Beta+ (CC)</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>50% chance to cast an ability (PHY: single, 1.08 physical Wind) after using a Celerity ability</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cait Sith</td>
						                <td>Red Megaphone</td>
						                <td>USB</td>
						                <td></td>
						                <td>ATK, DEF, MAG and RES -40% for 25 seconds, grants Protect, Shell and Haste to all allies</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cait Sith</td>
						                <td>Blue Megaphone</td>
						                <td>BSB</td>
						                <td></td>
						                <td>ATK and DEF +30% for 25 seconds, grants Critical Chance 50% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cait Sith</td>
						                <td>Battle Trumpet</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Eight single attacks (2,23 each), grants Critical Chance 50% to all allies for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Cait Sith</td>
						                <td>Cait Sith's Crown</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Grants Quick Cast 3 at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Rufus</td>
						                <td>Riot Riffle</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td>Imperil Dark (2). Eight group ranged attacks (convergent 0,97 each), causes Imperil Dark 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Rufus</td>
						                <td>Rufus' Jacket</td>
						                <td>LMR</td>
						                <td></td>
						                <td>35% chance to grant Quick Cast 1 to the user after using a Dark attack</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Red XIII</td>
						                <td>Centclip</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>ATK, DEF and RES +30% for 25 seconds, grants Haste and Astra</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Red XIII</td>
						                <td>Platinum Barette</td>
						                <td>BSB</td>
						                <td></td>
						                <td>ATK and MAG +30% for 25 seconds, grants High Regen, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Red XIII</td>
						                <td>Seraph Comb</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast Black Magic abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Red XIII</td>
						                <td>Crystal Comb</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>ATK, DEF and MND +30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Reno</td>
						                <td>Power Rod</td>
						                <td>Chain / Gen.0</td>
						                <td>Lightning</td>
						                <td>Activates Lightning Chain (max 99, field +20%)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Reno</td>
						                <td>Shinra Bombshell</td>
						                <td>BSB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Six group ranged attacks (0,82 each), grants Haste, Attach Lightning and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Reno</td>
						                <td>Light Rod</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Three group attacks (4,80 each), causes Silence (100%) and Sleep (100%)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Barret</td>
						                <td>A . M Cannon</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Six group ranged attacks (0,98 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Barret</td>
						                <td>Drill Arm</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>PHY attacks deal 20% more damage when equipping a gun-arm</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Angeal</td>
						                <td>Angeal's Gloves</td>
						                <td>BSB</td>
						                <td>Holy / Wind</td>
						                <td>Eight single attacks (0,83 each), grants Critical Chance 50% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Shelke</td>
						                <td>Shelke's Gloves</td>
						                <td>SSB</td>
						                <td>Esuna</td>
						                <td>Removes positive effects, removes negative effects to all allies, grants High Regen to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Shelke</td>
						                <td>Slash Lance</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Increases the duration of stat debuffs by 30%</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Elena</td>
						                <td>Hornito</td>
						                <td>Chain / Gen.0</td>
						                <td>Fire</td>
						                <td>Activates Fire Chain (max 99, field +20%)</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Elena</td>
						                <td>Magnum</td>
						                <td>USB</td>
						                <td></td>
						                <td>Grants Haste and Critical Chance 50%, ATK and RES +30% to all allies for 25 seconds, grants Turks Bullet Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Elena</td>
						                <td>Research Dept. Pistol</td>
						                <td>BSB</td>
						                <td>Fire / NE</td>
						                <td>Imperil Fire (2). Eight group ranged attacks (0.65 each), causes Imperil Fire 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Elena</td>
						                <td>Elena Special</td>
						                <td>SSB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Eight random ranged attacks (0.97 each), grants Attach Fire to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Vincent</td>
						                <td>Buntline</td>
						                <td>AASB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Fifteen single hybrid ranged attacks (0.60 or 1.50 each), grants Attach Fire, Awoken Fire, Damage Cap +10000 and Galian Beast to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Vincent</td>
						                <td>Riot Gun</td>
						                <td>Chain / Gen.2</td>
						                <td>Fire</td>
						                <td>Fire Chain (magic). Activates Fire Chain (max 150, field +50%), MAG +50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Vincent</td>
						                <td>Cerberus (DoC)</td>
						                <td>USB 1</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Six group hybrid ranged attacks (0.85 or 2.25 each), grants Attach Fire, EX: Hellhound, Quick Cast 1 and Hellhound ATK or Hellhound MAG to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Vincent</td>
						                <td>Long Barrel R</td>
						                <td>USB 2 / BUSB</td>
						                <td>Fire</td>
						                <td>En-fire. Ten single hybrid ranged attacks (0.72 or 1.73 each), grants Attach Fire, Instant Cast 1 and Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Vincent</td>
						                <td>Vincent's Glove</td>
						                <td>BSB 1</td>
						                <td>Fire / NE</td>
						                <td>Six group hybrid attacks (0.94 or 2.26 each), grants Radiant Shield: 100% to all allies, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Vincent</td>
						                <td>Peacemaker</td>
						                <td>BSB 2</td>
						                <td>Fire / NE</td>
						                <td>Eight single hybrid ranged attacks (0.83 or 1.88 each), grants Fire Radiant Shield: 75% to all allies, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Vincent</td>
						                <td>Vincent's Bandana (DoC)</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to dualcast abilities that deal Fire damage</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Vincent</td>
						                <td>Gauntlet (DoC)</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>Grants Quick Cast 3 at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF7</td>
						                <td>Genesis</td>
						                <td>Genesis's Guise (VII-CC)</td>
						                <td>AOSB</td>
						                <td>Fire</td>
						                <td>20 single-target Fire physical attacks & single-target Fire Overflow physical attack</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- FINAL FANTASY VIII -->
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Cutting Trigger+</td>
						                <td>AASB</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Fifteen single attacks (0.60 each), grants Attach Ice, Awoken Ice, Damage Cap +10000, Quick Cast and Blasting Frost to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Enkindler</td>
						                <td>AOSB 1</td>
						                <td>Ice</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Icebrand</td>
						                <td>USB 1</td>
						                <td>Ice / NE</td>
						                <td>Nine single attacks (0.83 each), grants High Quick Cast 2 and EX: SeeD to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Diamond Heart</td>
						                <td>USB 2</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Twelve single attacks (0.58 each), grants Attach Ice and EX: Lion to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Twin Lance +</td>
						                <td>USB 4 / BUSB</td>
						                <td>Ice / Fire</td>
						                <td>Ten single attacks (0.71 each), grants High Quick Cast, Double Junction and Brave Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Axis Blade</td>
						                <td>BSB 2</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Eight single attacks (0,83 each), grants Haste, Attach Ice and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Squall's Contempt</td>
						                <td>Glint 1</td>
						                <td></td>
						                <td>En-ice. Grants Attach Ice Stacking, Attach Ice and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Squall</td>
						                <td>Lion Gloves</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-ice. Grants Attach Ice at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Conformer</td>
						                <td>Chain / Gen.1</td>
						                <td>Ice</td>
						                <td>Ice Chain (magic). Activates Ice Chain (max 99, field +20%), eleven single attacks (1.63 each), minimum damage 543, grants Quick Cast 2 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Cutlass</td>
						                <td>USB 1</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Ten single attacks (1,70 each), grants Attach Ice and EX: Chosen Sorceress the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Hawkeye</td>
						                <td>USB 2 / BUSB</td>
						                <td>Ice / NE</td>
						                <td>En-earth. Ten single attacks (1.73 each), grants Attach Earth, Black Magic +30% Boost and Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Twin Viper</td>
						                <td>OSB</td>
						                <td>Earth / NE</td>
						                <td>Breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Shooting Star</td>
						                <td>BSB 1</td>
						                <td>Ice / Earth</td>
						                <td>Eight group attacks (1,80 each), grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Crystal Cross</td>
						                <td>BSB 2</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Eight group attacks (1,80 each), grants Haste, Attach Ice and Burst Mode the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Wing Edge</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Black Magic Rank Boost and Black Magic High Quick Cast</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Rinoa's Guise</td>
						                <td>SSB 2</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Five group attacks (2,82 each), grants Attach Earth to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Rinoa's Arm Warmers</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>MAG +1% for each hit dealt with damaging BLK attacks, up to +20%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Derringer</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Rinoa</td>
						                <td>Wind Slash</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>En-ice. Grants Attach Ice at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Raijin</td>
						                <td>Musk Stick</td>
						                <td>OSB</td>
						                <td>Lightning / NE</td>
						                <td>One single attack (10.50~14.50 scaling with Monk abilities used) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Raijin</td>
						                <td>Raijin's Staff</td>
						                <td>BSB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Eight single attacks (0.83 each), grants Haste, Attach Lightning and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Raijin</td>
						                <td>Raijin's Pauldron</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Grants Instant Cast 1, Last Stand and High Regen</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Fujin</td>
						                <td>Fujin's Twin Viper</td>
						                <td>Chain / Gen.2</td>
						                <td>Wind</td>
						                <td>Wind Chain (magic). Activates Wind Chain (max 150, field +50%), MAG +50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Fujin</td>
						                <td>Fujin's Wing Edge</td>
						                <td>AOSB</td>
						                <td>Wind</td>
						                <td>Twenty single attacks (1,82 each), followed by one single attack (26,50) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Fujin</td>
						                <td>Fujin's Moon Ring</td>
						                <td>OSB</td>
						                <td>Wind / NE</td>
						                <td>Breaks damage cap, 42,50 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Fujin</td>
						                <td>Fujin's Shin Chakram</td>
						                <td>BSB</td>
						                <td>Wind / NE</td>
						                <td>Five group attacks (2,40 each), MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Fujin</td>
						                <td>Fujin's Jacket</td>
						                <td>SSB</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Eight single attacks (2,14 each), grants Attach Wind to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Fujin</td>
						                <td>Fujin's Bracers</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-wind. Grants Attach Wind at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Ultimecia</td>
						                <td>Phantasmal Garment I</td>
						                <td>USB 1</td>
						                <td>Wind / Dark</td>
						                <td>En-wind. Ten single attacks (1.70 each), MAG and RES +30% to the user for 25 seconds, grants Attach Wind and Black Magic Double to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Ultimecia</td>
						                <td>Staff of the Magi</td>
						                <td>USB 2</td>
						                <td>Wind / Dark</td>
						                <td>Ten single attacks (1.50 each), DEF, RES and MND -40% for 25 seconds, grants Quick Cast and Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Ultimecia</td>
						                <td>Doom Mace</td>
						                <td>OSB</td>
						                <td>Wind / Dark</td>
						                <td>One single attack (37.20) capped at 99999, 42.80 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Ultimecia</td>
						                <td>Demon's Rod</td>
						                <td>BSB</td>
						                <td>Wind / Dark</td>
						                <td>En-wind. Eight single attacks (1.88 each), grants Haste, Attach Wind and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Ultimecia</td>
						                <td>Onyx Dress</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Weakness +30% Boost and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Ultimecia</td>
						                <td>Harmonia Guard</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-wind. Grants Attach Wind at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Irvine</td>
						                <td>Antares</td>
						                <td>USB</td>
						                <td>Fire / NE</td>
						                <td>Ten random ranged attacks (0.68 each), ATK and MAG -50% for 25 seconds, grants Sharpshooter Quick Cast and Clean Shot Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Irvine</td>
						                <td>Betelgeuse</td>
						                <td>BSB</td>
						                <td>Fire / NE</td>
						                <td>Five group ranged attacks (1,20 each), ATK and DEF -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Irvine</td>
						                <td>Exeter</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Six group ranged attacks (0,98 each), ATK, DEF, MAG, RES and MND -30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Laguna</td>
						                <td>Fomalhaut</td>
						                <td>BSB 1</td>
						                <td>Lightning / NE</td>
						                <td>Imperil Lightning (2). Eight random ranged attacks (0,98 each), causes Imperil Lightning 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Laguna</td>
						                <td>Aldebaran</td>
						                <td>BSB 2</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Eight single ranged attacks (0.83 each), grants Haste, Attach Ice and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Laguna</td>
						                <td>Machine Gun</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Six group ranged attacks (1,00 each), causes Slow (100%)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Laguna</td>
						                <td>Vega</td>
						                <td>SSB 2</td>
						                <td>Ice</td>
						                <td>Imperil Ice (2). Seven group ranged attacks (0.85 each), causes Imperil Ice 20% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Laguna</td>
						                <td>Presidential Casual</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>20% chance to cause Minor Imperil Ice to the target after using a Machinist ability on an enemy</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Edea</td>
						                <td>Edea's Valkyrie</td>
						                <td>BSB</td>
						                <td>Ice / Dark</td>
						                <td>En-ice. Eight single attacks (1,88 each), grants Haste, Attach Ice and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Edea</td>
						                <td>Sorceress's Might</td>
						                <td>SSB 1</td>
						                <td>Ice / NE</td>
						                <td>Six group attacks (2.37 each)</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Edea</td>
						                <td>Aura Staff</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-ice. Grants Attach Ice Stacking, Attach Ice and High Quick Cast 2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Edea</td>
						                <td>Rod of Darkness</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-ice. Grants Attach Ice at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Quistis</td>
						                <td>Dragon Whisker</td>
						                <td>USB</td>
						                <td></td>
						                <td>ATK, MAG and RES +30% for 25 seconds, grants Haste and HP Stock (2000)</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Quistis</td>
						                <td>Wyvern Tail</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Protect, Shell and Stoneskin: 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Quistis</td>
						                <td>Beast Killer</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Grants Haste and Magical Quick Cast 3</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Quistis</td>
						                <td>Quistis's Uniform</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast Black Magic abilities</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Zell</td>
						                <td>Kaiser Knuckles</td>
						                <td>AOSB</td>
						                <td>Fire</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Zell</td>
						                <td>Dragon's Claws</td>
						                <td>USB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Twelve single attacks (0.55 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Fire and Fiery Fist Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Zell</td>
						                <td>Zell's Uniform</td>
						                <td>Glint</td>
						                <td>Fire / NE</td>
						                <td>Six single attacks (0.52 each), grants Warlord Mode 1/2/3 to the user if the user has Warlord Mode 0/1/2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Seifer</td>
						                <td>Hyperion Custom</td>
						                <td>Chain / Gen.2</td>
						                <td>Dark</td>
						                <td>Dark Chain (physical). Activates Dark Chain (max 150, field +50%), ATK +50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Seifer</td>
						                <td>Inferno</td>
						                <td>AOSB</td>
						                <td>Dark / Fire</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Seifer</td>
						                <td>Almasy Flametongue</td>
						                <td>USB 1</td>
						                <td>Dark / Fire</td>
						                <td>En-dark. Seven single attacks (0.94~1.50 each scaling with HP%), grants Attach Dark to the user, restores HP to the user for 70% of their maximum HP</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Seifer</td>
						                <td>Almasy Twinlance</td>
						                <td>USB 2</td>
						                <td>Dark / Fire</td>
						                <td>Eighteen single attacks (0.38 each), ATK and DEF +30% to the user for 25 seconds, grants Instant Cast 1 to all allies</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Seifer</td>
						                <td>Almasy Shear Trigger</td>
						                <td>BSB 1</td>
						                <td>Dark / NE</td>
						                <td>Eight single attacks (0.96 each), grants Haste, Sentinel and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Seifer</td>
						                <td>Vishnu Vest</td>
						                <td>Glint</td>
						                <td>Dark / NE</td>
						                <td>Imperil Dark (1). Six single attacks (0.52 each), causes Imperil Dark 10% for 15 seconds, grants Minor Buff Dark to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Seifer</td>
						                <td>Ambition Bracer</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>25% chance to dualcast Darkness abilities</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Selphie</td>
						                <td>Faerie Tail</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Last Stand and High Regen</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Selphie</td>
						                <td>Nunchaku S</td>
						                <td>BSB 2</td>
						                <td>Medica</td>
						                <td>Restores HP (85), RES +100% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF8</td>
						                <td>Selphie</td>
						                <td>Crescent Wish</td>
						                <td>SSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Magical Blink 1</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- FINAL FANTASY IX -->
						            <tr>
						                <td>FF9</td>
						                <td>Zidane</td>
						                <td>Butterfly Edge</td>
						                <td>AASB</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Fifteen single attacks (0.60 each), grants Attach Wind, Awoken Thief, Damage Cap +10000 and Thief Gauge +25% Booster to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Zidane</td>
						                <td>Ozma's Splinter</td>
						                <td>AOSB</td>
						                <td>Wind</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Zidane</td>
						                <td>The Tower</td>
						                <td>USB 2</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Ten single attacks (0,71 each), grants Attach Wind, Thief Rank Boost and Thievery Finisher to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Zidane</td>
						                <td>The Ogre</td>
						                <td>BSB</td>
						                <td>Wind</td>
						                <td>Imperil Wind (2). Six group ranged attacks (0,98 each), causes Imperil Wind 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Zidane</td>
						                <td>Orichalcum</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Four group ranged attacks (1.50 each), ATK -50% for 25 seconds, ATK +35% to the user for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Zidane</td>
						                <td>Zidane's Vest</td>
						                <td>SSB 2</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Eight single attacks (0,97 each), grants Attach Wind to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Zidane</td>
						                <td>Ninja Gear</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast abilities that deal Wind damage</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Grand Mace</td>
						                <td>AASB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Fifteen single attacks (1.50 each), grants Attach Fire, Awoken Fire, Damage Cap +10000 and Vivi Trance to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Sage's Robe</td>
						                <td>AOSB</td>
						                <td>Fire</td>
						                <td>Three single attacks (26.50 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Judicer's Staff</td>
						                <td>USB 1</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single attacks (1,71 each), MAG and RES +30% to the user for 25 seconds, grants Attach Fire and Black Magic Double to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Octagon Rod</td>
						                <td>USB 2</td>
						                <td></td>
						                <td>Grants Haste and HP Stock (2000), ATK and MAG +30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Cloud Staff</td>
						                <td>USB 3</td>
						                <td>Ice / Water / Lightning / NE</td>
						                <td>Ten single attacks (1.65 each), grants Quick Cast, EX: Black Mage and Chaotic Magic 0 to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Black Mage Staff</td>
						                <td>OSB</td>
						                <td>Fire / NE</td>
						                <td>Break damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Flame Staff</td>
						                <td>BSB 1</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Four group attacks (2.98 each), grants Haste, Attach Fire and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Gravity Rod</td>
						                <td>BSB 2</td>
						                <td>Fire / Lightning / Ice</td>
						                <td>Six group attacks (2,01 each), MAG and RES +30% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Mace of Zeus</td>
						                <td>SSB</td>
						                <td>Dark</td>
						                <td>Four group attacks (3,56 each)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Nirvana</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire Stacking, Attach Fire and High Quick Cast 2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Vivi</td>
						                <td>Vivi's Glove</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>Black Magic abilities deal 25% more damage when equipping a rod</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Garnet</td>
						                <td>Garnet's Guise</td>
						                <td>Chain / Gen.2</td>
						                <td>Lightning</td>
						                <td>Lightning Chain (magic). Activates Lightning Chain (max 150, field +50%), MAG +50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Garnet</td>
						                <td>Holy Rod</td>
						                <td>USB 1</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Seven group attacks (2,10 each), min. 1100, MAG and MND +30% to all allies for 25 sec., grants Attach Lightning and Auto Storm's Retribution to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Garnet</td>
						                <td>Dagger of Resolve</td>
						                <td>BSB 1</td>
						                <td>Lightning / Holy</td>
						                <td>Three group attacks (4.75 each), minimum damage 1100, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Garnet</td>
						                <td>Staff of Ramuh</td>
						                <td>BSB 2</td>
						                <td></td>
						                <td>Imperil Lightning (2). Causes Imperil Lightning 20% for 25 seconds, ATK and MAG +30% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Garnet</td>
						                <td>Wizard Rod</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Grants Haste and High Regen, RES +50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Garnet</td>
						                <td>Royal Gown</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>DEF and MAG +30% for 25 seconds, grants HP Stock (3000)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Kuja</td>
						                <td>Achromatic Bolero</td>
						                <td>USB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Ten single attacks (1,70 each), grants Attach Dark and EX: Angel of Death to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Kuja</td>
						                <td>Terra's Legacy</td>
						                <td>BSB 1</td>
						                <td>Dark / NE</td>
						                <td>Eight random attacks (2,20 each), causes Imperil Dark 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Kuja</td>
						                <td>Kuja's Guise</td>
						                <td>SSB 2</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Five group attacks (2.82 each), grants Attach Dark to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Eiko</td>
						                <td>Lamia's Flute</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Last Stand and Haste</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Eiko</td>
						                <td>Trance Eiko's Guise</td>
						                <td>USB 2 / BUSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Critical Chance 50% for 25 seconds, grants Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Eiko</td>
						                <td>Hamelin</td>
						                <td>BSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Critical Chance 50% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Eiko</td>
						                <td>Eiko's Guise</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to dualcast White Magic abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Marcus</td>
						                <td>Marcus's Sword</td>
						                <td>USB</td>
						                <td>Wind / Poison</td>
						                <td>Imperil Wind (2). Ten single attacks (0.63 each), causes Imperil Wind 20% for 25 seconds, grants Swift Poison Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Marcus</td>
						                <td>Platinum Dagger</td>
						                <td>BSB</td>
						                <td>Wind / Poison</td>
						                <td>Six group attacks (1,00 each), DEF and MAG -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Steiner</td>
						                <td>Excalibur II</td>
						                <td>USB 1</td>
						                <td>Fire / Lightning / Ice</td>
						                <td>Ten single attacks (0,70 each), RES +100% to the user for 25 seconds, grants Shining Knight Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Steiner</td>
						                <td>Stoneblade</td>
						                <td>OSB</td>
						                <td>Fire / Lightning / Ice</td>
						                <td>Breaks damage cap, 13,00 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Steiner</td>
						                <td>Gold Armor</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>20% chance to cause Minor Imperil Fire to the target after using a Spellblade ability on an enemy</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Steiner</td>
						                <td>Blood Sword</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>Spellblade abilities deal 25% more damage when equipping a sword</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Amarant</td>
						                <td>Avenger</td>
						                <td>BSB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Six group ranged attacks (0,82 each), grants Haste, Attach Fire and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Beatrix</td>
						                <td>Apocalypse</td>
						                <td>USB</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Ten single attacks (0.71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Holy and Stock Raid Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Beatrix</td>
						                <td>Force Shield</td>
						                <td>SSB 2</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Six group attacks (0.84 each), grants Attach Holy to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Freya</td>
						                <td>Caesar Helm</td>
						                <td>Chain / Gen.0</td>
						                <td>Wind</td>
						                <td>Wind Chain (physical). Activates Wind Chain (max 99, field +20%)</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Freya</td>
						                <td>Holy Lance</td>
						                <td>USB 1</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Ten single ranged jump attacks (0.71 each), DEF and RES -50% for 25 seconds, grants Attach Wind and Jump Quick Cast to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Freya</td>
						                <td>Heavy Lance</td>
						                <td>BSB</td>
						                <td>Wind / NE</td>
						                <td>Eight random ranged jump attacks (0.95 each), ATK and DEF -50% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Quina</td>
						                <td>Qu Garb</td>
						                <td>BSB 1</td>
						                <td></td>
						                <td>Five random ranged attacks (1.50 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Quina</td>
						                <td>Golden Hairpin</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Four group attacks (1.49 each), ATK +50% to all allies for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Quina</td>
						                <td>Silver Fork</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Grants Last Stand and High Regen at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF9</td>
						                <td>Quina</td>
						                <td>Quina's Toque Blanche</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>Grants Quick Cast 3 at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- FINAL FANTASY X -->
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Double Edge</td>
						                <td>Chain / Gen.1</td>
						                <td>Water</td>
						                <td>Water Chain (physical). Activates Water Chain (max 99, field +20%), eleven single attacks (0,72 each), grants Quick Cast 2 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Vigilante</td>
						                <td>AOSB</td>
						                <td>Water</td>
						                <td>Twenty single ranged attacks (0,55 each), followed by one single ranged attack (8,00) that breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Blitz Ace</td>
						                <td>USB 1</td>
						                <td>Water / NE</td>
						                <td>En-water. Ten single ranged attacks (0.71 each), grants Attach Water, EX: Ace and Instant Cast 1 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Beast Blitz</td>
						                <td>USB 2</td>
						                <td>Water</td>
						                <td>En-water. Ten single ranged attacks (0.72 each), grants Attach Water, Quick Cast and Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Apocalypse</td>
						                <td>OSB</td>
						                <td>Water / NE</td>
						                <td>One single attack (12.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Razzmatazz</td>
						                <td>BSB 1</td>
						                <td>Water</td>
						                <td>En-water. Five group ranged attacks (1.02 each), grants Haste, Attach Water and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Twilight Steel</td>
						                <td>BSB 2</td>
						                <td>Water / NE</td>
						                <td>Ten single ranged attacks (0,72 each), ATK and DEF +30% to the user for 25 seconds, grants Haste, Instant Cast 1 and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Wizard Sword</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-water. Grants Attach Water Stacking, Attach Water and High Quick Cast 2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Tidus</td>
						                <td>Tidus's Armguards</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-water. Grants Attach Water at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Kimahri</td>
						                <td>Bright Armlet</td>
						                <td>USB</td>
						                <td></td>
						                <td>ATK, MAG and RES +30% for 25 seconds, grants Water Radiant Shield: 75%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Kimahri</td>
						                <td>Twin Lance</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Five single attacks (1,56 each), grants Magical Blink 1 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Kimahri</td>
						                <td>Harpoon</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-water. Grants Attach Water at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
									<tr>
						                <td>FF10</td>
						                <td>Wakka</td>
						                <td>Noisebreaker</td>
						                <td>AASB</td>
						                <td>Water / NE</td>
						                <td>En-water. Fifteen single ranged attacks (0.60 each), causes ATK, DEF and MAG -70% for 8 seconds, grants Attach Water, Awoken Sharpshooter, Damage Cap +10000 and Techcopied Volley Shot Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
									<tr>
						                <td>FF10</td>
						                <td>Wakka</td>
						                <td>Water Ball</td>
						                <td>USB</td>
						                <td>Water / NE</td>
						                <td>Imperil Water (2). Nine random ranged attacks (0,82 each), causes Imperil Water 20% for 25 seconds, ATK, DEF, MAG, RES and MND -30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Wakka</td>
						                <td>Glorious Armguard</td>
						                <td>BSB</td>
						                <td>NE</td>
						                <td>Twelve random ranged attacks (0,63 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Wakka</td>
						                <td>Cerulean Armguard</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Increases the duration of stat debuffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Auron</td>
						                <td>Spiritual Blade</td>
						                <td>USB 1</td>
						                <td>Fire / NE</td>
						                <td>Eight single attacks (0,90 each), ATK, DEF and RES -50% for 25 seconds, grants Sentinel to the user for 25 seconds, grants Magical Blink 1 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Auron</td>
						                <td>Dual Blade</td>
						                <td>USB 2</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single attacks (0.71 each), grants Attach Fire, Lingering Flame Finisher and Friend's Promise 0 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Auron</td>
						                <td>Warblade</td>
						                <td>BSB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Six group attacks (0.82 each), grants Haste, Attach Fire and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						            	<td>FF10</td>
						            	<td>Auron</td>
						            	<td>Riot Blade</td>
						            	<td>SSB</td>
						            	<td></td>
						            	<td>Five single ranged attacks (1,56 each), ATK and DEF -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Auron</td>
						                <td>Blurry Moon</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>ATK +3% for each hit taken by damaging attacks, up to +35%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Auron</td>
						                <td>Peaceful Slumber</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Yuna</td>
						                <td>Conductor</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), removes KO (40% HP), grants Haste and Last Stand</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Yuna</td>
						                <td>Wind Rod</td>
						                <td>USB 2</td>
						                <td>Holy / Wind</td>
						                <td>Ten single attacks (1.70 each), grants Summoning Rank Boost and EX: Last Summoner to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Yuna</td>
						                <td>Tiny Bee</td>
						                <td>BSB 1</td>
						                <td></td>
						                <td>Ten single attacks (1,80 each), grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Yuna</td>
						                <td>Golden Staff</td>
						                <td>Glint 1</td>
						                <td></td>
						                <td>Grants High Regen and Holy Stoneskin: 50%</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Yuna</td>
						                <td>Bridal Gown</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast White Magic abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Rikku</td>
						                <td>Sorcery Targe</td>
						                <td>Chain 1 / Gen.2</td>
						                <td>Water</td>
						                <td>Water Chain (physical). Activates Water Chain (max 150, field +50%), ATK +50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Rikku</td>
						                <td>Barbed Knuckles</td>
						                <td>USB 2</td>
						                <td>Water / NE</td>
						                <td>Imperil water (2). Ten random ranged attacks (0.67 each), causes Imperil Water 20% for 25 seconds, grants Aqua Toxin Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Rikku</td>
						                <td>Rikku's Dagger</td>
						                <td>BSB 1</td>
						                <td>Water</td>
						                <td>Imperil Water (2). Ten random ranged attacks (0,77 each), causes Imperil Water 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Rikku</td>
						                <td>Onyx Targe</td>
						                <td>BSB 2</td>
						                <td>Water / NE</td>
						                <td>En-water. Eight single ranged attacks (0.83 each), grants Haste, Attach Water and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Rikku</td>
						                <td>Thief Costume</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>ATK and MAG +30% for 25 seconds, grants Instant Cast 2 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Paine</td>
						                <td>Force Stealer</td>
						                <td>USB 1</td>
						                <td>Water / NE</td>
						                <td>En-water. Ten single attacks (0.71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Water and Spellblade Quick Cast: Alternative to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Paine</td>
						                <td>Dark Knight Guise</td>
						                <td>Glint+</td>
						                <td></td>
						                <td>En-water. Grants Attach Water Stacking, Attach Water and Instant Cast 1</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Paine</td>
						                <td>Paine's Guise</td>
						                <td>BSB 1</td>
						                <td>Water / Earth / Wind</td>
						                <td>Six group attacks (0,90 each), damage increases with Spellblade abilities used, removes positive effects, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Paine</td>
						                <td>Painebringer</td>
						                <td>BSB 2</td>
						                <td>Water / NE</td>
						                <td>En-water. Eight single attacks (0.83 each), grants Haste, Attach Water and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Paine</td>
						                <td>Sword of Paine</td>
						                <td>SSB</td>
						                <td>Earth / Wind</td>
						                <td>Seven random attacks (1,10 each), grants Haste to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Paine</td>
						                <td>Gunner's Guise</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>ATK +2% for each hit dealt with Spellblade abilities, up to +34%</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Seymour</td>
						                <td>Seymour's Staff</td>
						                <td>Chain / Gen.1</td>
						                <td>Dark</td>
						                <td>Dark Chain (magic). Activates Dark Chain (max 99, field +20%), eleven single attacks (1.63 each), grants Quick Cast 2 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Seymour</td>
						                <td>Assault</td>
						                <td>USB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Ten single attacks (1.70 each), MAG and RES +30% to the user for 25 seconds, grants Attach Dark and Savage Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Seymour</td>
						                <td>Seymour's Rod</td>
						                <td>BSB 1</td>
						                <td>Dark / NE</td>
						                <td>Imperil Dark (2). Eight random attacks (2.18 each), causes Imperil Dark 20% for 25 seconds, causes Instant KO (9%), grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Seymour</td>
						                <td>Guado Wedding Robes</td>
						                <td>BSB 2</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single attacks (1,88 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Seymour</td>
						                <td>Moonglow Rod</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to dualcast abilities that deal Dark damage</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Jecht</td>
						                <td>Comrade Ball</td>
						                <td>AASB</td>
						                <td>Dark / Fire / NE</td>
						                <td>En-dark/En-fire. 15 single-target Dark/Fire/NE ranged physical attacks, Awoken Legendary Player Mode, Cap Break Level 1, Double Sphere Mode & Vigor Mode to user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Jecht</td>
						                <td>Soul King</td>
						                <td>USB 1</td>
						                <td>Dark / NE</td>
						                <td>Ten single ranged attacks (0.71 each), grants ATK and DEF +30% for 25 seconds, Critical Chance 75%, Quick Cast 1 and Dark Quick Cycle to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Jecht</td>
						                <td>Blitz King</td>
						                <td>OSB</td>
						                <td>Dark / Fire</td>
						                <td>One single ranged attack (11,05) capped at 99999, multiplier increased by 0,0013 for every SB point</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Jecht</td>
						                <td>The Blitz</td>
						                <td>BSB 1</td>
						                <td>Dark</td>
						                <td>En-dark. Eight random attacks (0,83 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Jecht</td>
						                <td>Eye Poker</td>
						                <td>BSB 2</td>
						                <td>Fire / NE</td>
						                <td>Eight single attacks (0.83 each), grants Stoneskin: 30% to all allies, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Jecht</td>
						                <td>Spirit Band</td>
						                <td>Glint 1</td>
						                <td></td>
						                <td>Grants 100% Critical 1, Critical Damage +50% 1 and Instant Cast 1</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Lulu</td>
						                <td>Dreamy Cait Sith</td>
						                <td>AASB</td>
						                <td>Ice / Water / NE</td>
						                <td>Fifteen single attacks (1.50 each), grants Major Buff Ice, Major Buff Water, Awoken Black Scholar, Damage Cap +10000 and Freezing Water Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Lulu</td>
						                <td>Moomba Mage</td>
						                <td>USB 1</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Eight single attacks (2.18 each), MAG and RES +30% to the user for 25 seconds, grants Attach Ice and Instant Cast 2 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Lulu</td>
						                <td>Crimson Bangle</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-ice. Grants Attach Ice at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF10</td>
						                <td>Braska</td>
						                <td>High Summoner's Helm</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- FINAL FANTASY XI -->
						            <tr>
						                <td>FF11</td>
						                <td>Shantotto</td>
						                <td>Iridal Staff</td>
						                <td>Chain / Gen.1</td>
						                <td>Lightning</td>
						                <td>Lightning Chain (magic). Activates Lightning Chain (max 99, field +20%), eleven single attacks (1.63 each), grants Quick Cast 2 to all allies</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Shantotto</td>
						                <td>Dark Staff</td>
						                <td>AOSB</td>
						                <td>Lightning</td>
						                <td>Three single attacks (26.50 each) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Shantotto</td>
						                <td>Federation Signet Staff</td>
						                <td>USB</td>
						                <td>Lightning / Ice / Fire</td>
						                <td>En-lightning. Ten single attacks (1,70 each), grants Attach Lightning and EX: Twinstrike to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Shantotto</td>
						                <td>Tactician Magician's Cuffs</td>
						                <td>BSB</td>
						                <td>Lightning / Fire / Ice</td>
						                <td>En-lightning. Six group attacks (1,94 each), grants Haste, Attach Lightning and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Shantotto</td>
						                <td>Jupiter's Staff</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Eight random attacks (2.23 each), grants Magical Quick Cast 5 to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Shantotto</td>
						                <td>Tactician Magician's Wand</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-lightning. Grants Attach Lightning at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Shantotto</td>
						                <td>Black Cloak</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>MAG +1% for each hit dealt with BLK attacks, up to 20%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Aphmau</td>
						                <td>Platinum Rod</td>
						                <td>AASB</td>
						                <td>Medica</td>
						                <td>Restores HP (105), removes KO (100% HP), grants Dual Blink 1, Haste and Instant Cast 1, grants Awoken Automaton Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Aphmau</td>
						                <td>Jadagna</td>
						                <td>USB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Haste and Instant Cast 1</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Aphmau</td>
						                <td>Aristocrat's Crown</td>
						                <td>BSB</td>
						                <td>Medica</td>
						                <td>Restores HP (55), MAG and MND +30% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Aphmau</td>
						                <td>Earth Doublet</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Grants Astra and High Regen</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Aphmau</td>
						                <td>Alkyoneus's Bracelet</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to grant HP Stock (2000) to the target after using a single-target White Magic ability that restores HP on an ally</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Ayame</td>
						                <td>Zanbato</td>
						                <td>USB</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Ten single attacks (0.71 each), grants Attach Ice, High Retaliate and Critical Damage +50% to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Ayame</td>
						                <td>Kiku-Ichimonji</td>
						                <td>OSB</td>
						                <td>Ice / NE</td>
						                <td>One single attack (11,25) capped at 99999, 12,75 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Ayame</td>
						                <td>Soboro Sukehiro</td>
						                <td>BSB</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Eight single attacks (0,78 each), grants Haste, Meikyo Shisui, Attach Ice and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Ayame</td>
						                <td>Myochin Domaru</td>
						                <td>LMR</td>
						                <td></td>
						                <td>35% chance to grant Quick Cast 1 to the user after using a Samurai ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Prishe</td>
						                <td>Coeurl Cesti</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Ten single attacks (0.72 each), grants Monk Rank Boost, Critical Damage +50% and Monk Quick Cycle: Non-Elemental to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Prishe</td>
						                <td>Scorpion Harness</td>
						                <td>USB 2</td>
						                <td>Lightning / Ice / NE</td>
						                <td>En-lightning. Ten single attacks (0.70 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Lightning and Monk Double to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Prishe</td>
						                <td>Sainti</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Eight single attacks (0,93 each), grants Haste, Monk Quick Cast 5 and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Prishe</td>
						                <td>Monsoon Jinpachi</td>
						                <td>SSB</td>
						                <td>Medica</td>
						                <td>Restores HP for 40% of the target's maximum HP, grants Last Stand and High Regen</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Lion</td>
						                <td>Gaia Doublet</td>
						                <td>SSB</td>
						                <td></td>
						                <td>5/6/7 group attacks (0,99 each) at 174/205 SPD, DEF and RES -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Zeid</td>
						                <td>Chaos Cuirass</td>
						                <td>USB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Ten single attacks (0.71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Dark and Abyssal Bite Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Zeid</td>
						                <td>Arondight</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single attacks (0.78 each), causes Stun (100%), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Curilla</td>
						                <td>Bastard Sword</td>
						                <td>USB 2</td>
						                <td></td>
						                <td>Grants Protect, Shell and Last Stand, grants Extreme Guard to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Curilla</td>
						                <td>Temple Knight Army Sword</td>
						                <td>BSB</td>
						                <td>Holy / NE</td>
						                <td>Six group attacks (0.96 each), grants Intervention to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Curilla</td>
						                <td>Royal Squire's Mufflers</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>30% chance to cover PHY attacks that target allies, reducing damage taken by 20%</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF11</td>
						                <td>Lilisette</td>
						                <td>Darksteel Kukri</td>
						                <td>USB</td>
						                <td></td>
						                <td>Imperil Lightning. ATK, DEF and MAG -70% for 8 seconds, causes Medium Imperil Lightning, grants Whirling Edge Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- FINAL FANTASY XII -->
						            <tr>
						                <td>FF12</td>
						                <td>Ashe</td>
						                <td>Tournesol</td>
						                <td>AOSB</td>
						                <td>Lightning</td>
						                <td>Three single attacks (26,50 each), breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Ashe</td>
						                <td>Ragnarok</td>
						                <td>USB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Ten single attacks (1,70 each), MAG and RES +30% to the user for 25 seconds, grants Attach Lightning and Lightning Sigil Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Ashe</td>
						                <td>Ashe's Defiance</td>
						                <td>BSB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Eight single attacks (2,20 each), grants Haste, Attach Lightning and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Ashe</td>
						                <td>Aegis Shield</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-lightning. Grants Attach Lightning Stacking, Attach Lightning and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Ashe</td>
						                <td>Ashe's Bracher</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-lightning. Grants Attach Lightning at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Larsa</td>
						                <td>Carmagnole</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), removes negative effects, grants Astra and High Regen</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Larsa</td>
						                <td>Cloud Staff</td>
						                <td>SSB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Haste</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Basch</td>
						                <td>Scorpion Tail</td>
						                <td>USB 1</td>
						                <td>Holy / Fire</td>
						                <td>En-holy. Ten single ranged attacks (0,71 each), DEF +100% to the user for 25 seconds, grants Attach Holy and Knight Rank Boost to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Basch</td>
						                <td>Crystal Shield</td>
						                <td>USB 2</td>
						                <td></td>
						                <td>ATK and MAG +30% for 25 seconds, grants Protect, Shell and Haste</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Basch</td>
						                <td>Save the Queen</td>
						                <td>OSB</td>
						                <td>Holy / Dark</td>
						                <td>One single attack (11.20~14.50 scaling with Holy attacks used) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Basch</td>
						                <td>Holy Lance</td>
						                <td>BSB</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Six group ranged attacks (0,82 each), grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Basch</td>
						                <td>Basch's Gloves</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-holy. Grants Attach Holy at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vaan</td>
						                <td>Yagyu Darkblade</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Ten random attacks (0.70 each), ATK and RES -50% for 25 seconds, ATK and RES +30% to the user for 25 seconds, grants EX: Sky Pirate to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vaan</td>
						                <td>Shikari Nagasa</td>
						                <td>OSB</td>
						                <td>NE</td>
						                <td>One single attack (11,00), 11,50/12,00/12,50/13,00/14,00 multiplier if 1/2/3/4/5 of the target's stats are lowered, breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vaan</td>
						                <td>Orichalcum Dirk</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Five single ranged attacks (1,52 each), DEF and MAG -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vaan</td>
						                <td>Valiant Knife</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Six group attacks (0.84 each), ATK and DEF -50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vaan</td>
						                <td>Vaan's Vest</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Increases the duration of stat debuffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Balthier</td>
						                <td>Argyle Armlet</td>
						                <td>USB 2</td>
						                <td>Fire / NE</td>
						                <td>Imperil Fire. Ten single ranged attacks (0.71 each), causes Imperil Fire 20% for 25 seconds, grants Oil Pellet Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Balthier</td>
						                <td>Arcturus</td>
						                <td>OSB</td>
						                <td>Fire / NE</td>
						                <td>One single ranged attack (12,00) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Balthier</td>
						                <td>Spica</td>
						                <td>BSB 2</td>
						                <td>Fire / NE</td>
						                <td>Imperil Fire (2). Eight random ranged attacks (0.96 each), causes Imperil Fire 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Gabranth</td>
						                <td>Highway Star</td>
						                <td>USB 1</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Ten single attacks (0.71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Dark, Quick Cast 1 and Dark Quick Cycle to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Gabranth</td>
						                <td>Balmung</td>
						                <td>USB 2</td>
						                <td>Dark</td>
						                <td>En-dark. Ten single ranged attacks (0.72 each), grants Attach Dark, Heavy Charge Booster and Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Gabranth</td>
						                <td>Helter-Skelter</td>
						                <td>OSB</td>
						                <td>Dark / NE</td>
						                <td>One single attack (11.20~14.50 scaling with Dark attacks used) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Gabranth</td>
						                <td>Nightbringer</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td>Imperil Dark (2). Eight random ranged attacks (0.96 each), causes Imperil Dark 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Gabranth</td>
						                <td>Gabranth's Helm</td>
						                <td>SSB 2</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Five group attacks (0,99 each), grants Attach Dark to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Gabranth</td>
						                <td>Gabranth's Gauntlet</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast abilities that deal Dark damage</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vayne</td>
						                <td>Adaman Hat</td>
						                <td>Chain / Gen.0</td>
						                <td>Dark</td>
						                <td>Activates Dark Chain (max 99, field +20%)</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vayne</td>
						                <td>Deathbringer</td>
						                <td>USB 1</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Ten single hybrid attacks (0.71 or 1.70 each), ATK/DEF or DEF/MAG +30% to the user for 25 seconds, grants Attach Dark and Sephira Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vayne</td>
						                <td>Vayne's Armguard</td>
						                <td>USB 2 / BUSB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Ten single hybrid attacks (0.71 or 1.70 each), grants Instant Cast 1 to all allies, grants Attach Dark and Brave Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vayne</td>
						                <td>Vayne's Gloves</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single hybrid ranged attacks (0.81 or 1.49 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Vayne</td>
						                <td>Novus Leathers</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Penelo</td>
						                <td>Hermes's Suit</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Physical Blink 1, grants HP Stock (2000)</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Penelo</td>
						                <td>Rabanastre Dancing Attire</td>
						                <td>USB 2</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Instant Cast 1, grants Cure Step Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Penelo</td>
						                <td>Doom Mace</td>
						                <td>BSB 2</td>
						                <td>Holy</td>
						                <td>Restores HP (85), damages undeads, grants Last Stand, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Penelo</td>
						                <td>Holy Rod</td>
						                <td>SSB</td>
						                <td>Holy / Medica</td>
						                <td>Three single attacks (4.00 each), restores HP (85) to all allies</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Penelo</td>
						                <td>Feathered Cap</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast White Magic abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Fran</td>
						                <td>Penetrator Crossbow</td>
						                <td>Chain / Gen.0</td>
						                <td>Ice</td>
						                <td>Ice Chain (physical). Activates Ice Chain (max 99, field +20%)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Fran</td>
						                <td>Artemis Bow</td>
						                <td>USB 1</td>
						                <td>Ice / Dark</td>
						                <td>Imperil Ice (2). Six group ranged attacks (0.91 each), causes Imperil Ice 20% for 25 seconds, grants Quick Cast 2 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Fran</td>
						                <td>Perseus Bow</td>
						                <td>BSB 1</td>
						                <td></td>
						                <td>Five group ranged attacks (1.18 each), ATK, DEF, MAG, RES and MND -30% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Fran</td>
						                <td>Fran's Bracers</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>30% chance to cause Stun to the target after using a Support ability on an enemy when equipping a bow</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Fran</td>
						                <td>Fran's Helm</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>Grants Quick Cast 3 at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Reks</td>
						                <td>Bastard Sword</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Grants Haste and Lightning Radiant Shield: 75%, ATK +50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Reks</td>
						                <td>Dalmascan Warblade</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Grants Haste, ATK and DEF +30% for 25 seconds, grants Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Reks</td>
						                <td>Diamond Shield</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Eight single attacks (0.98 each), restores HP to all allies for 40% of their maximum HP</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF12</td>
						                <td>Reks</td>
						                <td>Bonemail</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to cast an ability (NAT: single, restores HP for 40% of the target's maximum HP) after using a Spellblade ability</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- FINAL FANTASY XIII -->
						            <tr>
						                <td>FF13</td>
						                <td>Claire/Lightning</td>
						                <td>Hauteclaire</td>
						                <td>AOSB</td>
						                <td>Lightning</td>
						                <td>Twenty single ranged attacks (0.55 each), followed by one single ranged attack (8.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Claire/Lightning</td>
						                <td>Razor Carbine</td>
						                <td>USB 1</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Ten single attacks (0,71 each), grants Attach Lightning, EX: Blinding and High Quick Cast 1 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Claire/Lightning</td>
						                <td>Gladius</td>
						                <td>OSB</td>
						                <td>Lightning / NE</td>
						                <td>One single attack (11,25/12,00/12,75/13,50) scaling with uses, breaks damage cap</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Claire/Lightning</td>
						                <td>Overture</td>
						                <td>BSB 1</td>
						                <td></td>
						                <td>Seven single attacks (1.15 each), grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Claire/Lightning</td>
						                <td>Enkindler</td>
						                <td>BSB 2</td>
						                <td>Lightning / NE</td>
						                <td>Imperil Lightning (2). Eight random attacks (0,96 each), causes Imperil Lightning 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Claire/Lightning</td>
						                <td>Guardian Corps Cap</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-lightning. Grants Attach Lightning at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Serah</td>
						                <td>Raging Arc</td>
						                <td>USB 1</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Ten single attacks (1,70 each), grants Attach Ice, EX: Farseer and High Quick Cast 1 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Serah</td>
						                <td>Fellowship Arc</td>
						                <td>USB 2</td>
						                <td>Ice</td>
						                <td>Ten single attacks (1.73 each), grants Ice Radiant Shield: 75% to all allies, grants High Quick Cast 1 and Ice High Quick Cycle to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Serah</td>
						                <td>Starseeker</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Five group attacks (2,84 each), causes Slow (100%)</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Serah</td>
						                <td>Beachwear</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to dualcast abilities that deal Ice damage</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Hope</td>
						                <td>Simurgh</td>
						                <td>USB 1</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Ten single attacks (1,70 each), DEF and MAG +30% to the user for 25 seconds, grants Attach Holy and Auto Chain of Destruction to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Hope</td>
						                <td>Ninurta</td>
						                <td>BSB 1</td>
						                <td>Holy</td>
						                <td>En-holy. Four group attacks (2,98 each), grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Hope</td>
						                <td>Hope's Gloves</td>
						                <td>BSB 2</td>
						                <td>Holy / NE</td>
						                <td>Six group attacks (convergent 2,90 each), causes Stun (100%), MAG and RES +30% to the user for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Hope</td>
						                <td>Hope's Guise</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-holy. Grants Attach Holy at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Noel</td>
						                <td>Blazing Spirit</td>
						                <td>USB 1</td>
						                <td>Ice / NE</td>
						                <td>Imperil Ice (2). Ten single ranged attacks (0,66 each), ATK, MAG and RES -50% for 25 seconds, causes Imperil Ice 20% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Noel</td>
						                <td>Flame Fossil</td>
						                <td>BSB 1</td>
						                <td>NE</td>
						                <td>Five single ranged attacks (1,50 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Noel</td>
						                <td>Volatile Spark</td>
						                <td>BSB 2</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Eight single attacks (0.83 each), grants Haste, Attach Ice and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Fang</td>
						                <td>Calamity Spear</td>
						                <td>AOSB</td>
						                <td>Wind</td>
						                <td>Three single ranged jump attacks (8.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Fang</td>
						                <td>Taming Pole</td>
						                <td>USB 2</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Ten single ranged jump attacks (0.71 each), grants Attach Wind, No Air Time and Windfang Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Fang</td>
						                <td>Banescissor Spear</td>
						                <td>OSB</td>
						                <td>Wind / NE</td>
						                <td>One single ranged jump attack (12.00) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Fang</td>
						                <td>Rhomphaia</td>
						                <td>BSB 1</td>
						                <td>Wind / NE</td>
						                <td>Imperil Wind (2). Four group ranged attacks (1,45 each), causes Imperil Wind 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Fang</td>
						                <td>Punisher</td>
						                <td>SSB 1</td>
						                <td>Fire / Wind</td>
						                <td>Six single ranged jump attacks (1,28 each), ATK and MAG -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Fang</td>
						                <td>Pandoran Spear</td>
						                <td>Glint</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Six single ranged attacks (0.52 each), grants Attach Wind Stacking and Attach Wind to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Cid Raines</td>
						                <td>Godhand</td>
						                <td>USB 1</td>
						                <td>Dark / Holy</td>
						                <td>Ten single attacks (1.62 each), 1.87 multiplier with any Doom, grants MAG and RES +30%, Doom: 30, IC1 and Seraph-Wing Buffet Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Cid Raines</td>
						                <td>Oversoul</td>
						                <td>OSB</td>
						                <td>Dark / Holy</td>
						                <td>One single attack (37.39~48.00 scaling with Doom timer, 37.00 default) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Cid Raines</td>
						                <td>Metamorphosis Claw</td>
						                <td>BSB</td>
						                <td>Dark / Holy</td>
						                <td>Six single attacks (2,57 each), 3,31 mult. if the user has any Doom, min. 500, DEF and MAG +30% to all allies for 25 sec., grants Haste and B. M. to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Cid Raines</td>
						                <td>Darksteel Claws</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Vanille</td>
						                <td>Brightwing Staff</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Grants Astra, Protect, Shell and HP Stock (2000)</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Vanille</td>
						                <td>Mistilteinn</td>
						                <td>BSB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), MND +30% to the user for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Vanille</td>
						                <td>Physician's Staff</td>
						                <td>SSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), restores 1 consumed ability use</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Vanille</td>
						                <td>Vanille's Guise</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to grant Heals +30% for 10 seconds to the user after using a WHT ability</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Nabaat</td>
						                <td>Nabaat's Finery</td>
						                <td>SSB</td>
						                <td>Dark / NE</td>
						                <td>Seven random attacks (2,51 each), ATK and MAG -50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Nabaat</td>
						                <td>Minerva Bustier</td>
						                <td>Glint</td>
						                <td>Dark / NE</td>
						                <td>Six random attacks (1.25 each), ATK and MAG -40% for 15 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Nabaat</td>
						                <td>Goggle Mask</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>35% chance to grant Quick Cast 1 to the user after using a Dark attack</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Snow</td>
						                <td>Warrior's Emblem</td>
						                <td>AASB</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Fifteen single attacks (0.60 each), grants Attach Ice, Awoken Ice, Damage Cap +10000 and Diamond Geyser Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Snow</td>
						                <td>Unsetting Sun</td>
						                <td>Chain / Gen.1</td>
						                <td>Ice</td>
						                <td>Ice chain (physical). Activates Ice Chain (max 99, field +20%), eleven single attacks (0.72 each), grants HP Stock (2000) to all allies</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Snow</td>
						                <td>Warlord's Gloves</td>
						                <td>USB 2</td>
						                <td></td>
						                <td>Grants Shell, Haste and 50% Critical, ATK and DEF +30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Snow</td>
						                <td>AMP Coat</td>
						                <td>BSB 1</td>
						                <td>Ice / NE</td>
						                <td>Eight single attacks (0.84 each), 0.96 multiplier if all allies are alive, grants Last Stand to all allies, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Snow</td>
						                <td>Midnight Sun</td>
						                <td>Glint</td>
						                <td>Ice / NE</td>
						                <td>Six single attacks (0.52 each), grants Last Stand to all allies</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF13</td>
						                <td>Sazh</td>
						                <td>Rigels</td>
						                <td>BSB</td>
						                <td></td>
						                <td>ATK and MAG +30% for 25 seconds, grants Haste, Instant Cast 2 and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- FINAL FANTASY XIV -->
						            <tr>
						                <td>FF14</td>
						                <td>Alphinaud</td>
						                <td>Draconomicon</td>
						                <td>AASB</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Fifteen single attacks (1.50 each), grants Attach Wind, Awoken Summoning, Damage Cap +10000 and Cometeor Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Alphinaud</td>
						                <td>Almandal</td>
						                <td>Chain / Gen.2</td>
						                <td>Wind</td>
						                <td>Wind Chain (Magic). Activates Wind Chain (max 150, field +50%), MAG +50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Alphinaud</td>
						                <td>Morkinskinna</td>
						                <td>USB 2 / BUSB</td>
						                <td>Wind</td>
						                <td>Ten single attacks (1.73 each), grants Wind Radiant Shield: 75% to all allies, grants High Quick Cast 2 and Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Alphinaud</td>
						                <td>Veil of Wiyu</td>
						                <td>BSB</td>
						                <td>Wind / NE</td>
						                <td>One single attack (1,90), restores HP to the user for 25% of the damage dealt</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Alphinaud</td>
						                <td>Caller's Loincloth</td>
						                <td>Glint</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Six single attacks (1,25 each), grants Attach Wind Stacking and Attach Wind to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Alphinaud</td>
						                <td>Evoker's Doublet</td>
						                <td>SSB</td>
						                <td></td>
						                <td>ATK and MAG +30% for 25 seconds, grants Radiant Shield: 100%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Alphinaud</td>
						                <td>Caller's Himation</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-wind. Grants Attach Wind at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Minfilia</td>
						                <td>Excalibur Zeta</td>
						                <td>USB</td>
						                <td></td>
						                <td>Grants Haste, ATK, MAG and RES +30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Minfilia</td>
						                <td>Tyrfing</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-holy. Grants HP Stock (2000), grants Attach Holy to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Minfilia</td>
						                <td>Curtana</td>
						                <td>BSB 1</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Eight single attacks (0,81 each), grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Minfilia</td>
						                <td>Hauteclaire</td>
						                <td>BSB 2</td>
						                <td>Holy / NE</td>
						                <td>Eight single attacks (0,83 each), grants Last Stand to all allies, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Minfilia</td>
						                <td>Holy Shield</td>
						                <td>SSB</td>
						                <td></td>
						                <td>ATK +50% for 25 seconds, grants Last Stand</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Papalymo</td>
						                <td>Scion Thaumaturge's Robe</td>
						                <td>USB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single attacks (1.70 each), DEF and MAG +30% to the user for 25 seconds, grants Attach Fire and Intensifying Firaga Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Papalymo</td>
						                <td>Lilith Rod Zeta</td>
						                <td>OSB</td>
						                <td>Fire / NE</td>
						                <td>One single attack (38,00~44,00 scaling with Fire attacks used) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Papalymo</td>
						                <td>Lilith Rod</td>
						                <td>BSB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Eight single attacks (1,88 each), grants Haste, Attach Fire and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Papalymo</td>
						                <td>Gambanteinn</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Magical Instant Cast 3</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Papalymo</td>
						                <td>Stardust Rod</td>
						                <td>SSB</td>
						                <td>Ice</td>
						                <td>En-ice. Five random attacks (3,54 each), grants Attach Ice to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Papalymo</td>
						                <td>Caster's Doublet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Y'shtola</td>
						                <td>Nirvana Zeta</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Grants Dual Blink 1 and High Regen, grants Instant Cast 1 to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Y'shtola</td>
						                <td>Healer Circlet</td>
						                <td>BSB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Stoneskin: 30%, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Y'shtola</td>
						                <td>Truth Seeker</td>
						                <td>Glint+</td>
						                <td></td>
						                <td>DEF and RES +200% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Y'shtola</td>
						                <td>Ironworks Healing Robe</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>30% chance to remove negative effects to the target after using a single-target White Magic ability that restores HP on an ally</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Y'shtola</td>
						                <td>Mistilteinn</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to cast an ability (WHT: group, restores HP (25)) after using a White Magic ability</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Thancred</td>
						                <td>Yukimitsu</td>
						                <td>USB / BUSB</td>
						                <td>Earth / Fire</td>
						                <td>Ten single attacks (0.63 each), DEF and MAG -40% for 25 seconds, grants Ninja +30% Boost and Brave Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Thancred</td>
						                <td>Sasuke's Blade</td>
						                <td>BSB 1</td>
						                <td>Fire / NE</td>
						                <td>Imperil Fire (2). Four group ranged attacks (1,44 each), causes Imperil Fire 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Thancred</td>
						                <td>Magitek Dagger</td>
						                <td>BSB 2</td>
						                <td>Poison / NE</td>
						                <td>Eight single attacks (0.80 each), grants Physical Blink 1 to all allies, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Thancred</td>
						                <td>Hofuds</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast Ninja abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Haurchefant</td>
						                <td>Fortemps Winglet</td>
						                <td>BSB</td>
						                <td>Holy / Ice</td>
						                <td>Eight random attacks (0.77 each), ATK and MAG -50% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Haurchefant</td>
						                <td>Fortemps Haubergeon</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to reduce damage taken by 30% when equipping a shield</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Estinien</td>
						                <td>Drachen Mail</td>
						                <td>BSB</td>
						                <td>Wind / Dark</td>
						                <td>En-wind. Eight single ranged jump attacks (0.83 each), grants Haste, Attach Wind and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Estinien</td>
						                <td>Drachen Gauntlets</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-wind. Grants Attach Wind at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Yda</td>
						                <td>Verethragna</td>
						                <td>AOSB</td>
						                <td>Fire</td>
						                <td>Twenty single attacks (0.55 each), followed by one single attack (8.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Yda</td>
						                <td>Kaiser Knuckles</td>
						                <td>BSB</td>
						                <td>Fire / NE</td>
						                <td>Eight single attacks (0.92 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Cid (XIV)</td>
						                <td>Ferdinand</td>
						                <td>USB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Ten single ranged attacks (0.71 each), grants Attach Fire, Quick Cast and Wildfire Finisher to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Cid (XIV)</td>
						                <td>Garlond Goggles</td>
						                <td>SSB</td>
						                <td>Fire / NE</td>
						                <td>Imperil Fire (2). Seven random ranged attacks (1.11 each), causes Imperil Fire 20% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Ysayle</td>
						                <td>True Ice Rod</td>
						                <td>USB</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Ten single attacks (1.70 each), MAG and RES +30% to the user for 25 seconds, grants Attach Ice and Icebrand Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF14</td>
						                <td>Ysayle</td>
						                <td>Halonic Exorcist's Rod</td>
						                <td>LMR</td>
						                <td></td>
						                <td>20% chance to cause Minor Imperil Ice to the target after using a Ice attack on an enemy</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- FINAL FANTASY XV -->
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Shield of the Just</td>
						                <td>SASB</td>
						                <td>Fire / NE</td>
						                <td>Lv.3 En-fire. Fifteen single attack (0.60 each), grants High Quick Cast 1, Attach Fire 3 with Stacking, Synchro Mode and Damage Cap +10000 to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Axe of the Conqueror</td>
						                <td>AOSB 1</td>
						                <td></td>
						                <td>Three single attacks (8.12 each) capped at 99999, 100% additional critical chance</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Star of the Rogue</td>
						                <td>AOSB 2</td>
						                <td>Fire / Earth / Lightning</td>
						                <td>Twenty single attacks (0.55 each), followed by one single attack (8.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Sword of the Wise</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Ten single attacks (0,74 each), grants EX: Royal Might and Stoneskin: 100% to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Blade of Mystic</td>
						                <td>USB 2</td>
						                <td></td>
						                <td>Ten single attacks (0.74 each), grants Non-Elemental +50% Boost and EX: Future King to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Sword of the Father</td>
						                <td>OSB</td>
						                <td>NE</td>
						                <td>One single attack (15,00) capped at 99999, grants Armiger Mode and Stoneskin: 30% to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Prince's Fatigues</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Ten single attacks (0.77 each), grants Combat King to the user for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Airstep Sword</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Six single attacks (1,27 each), grants Instant Cast 1 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Bow of the Clever</td>
						                <td>Glint 1</td>
						                <td></td>
						                <td>Grants Stoneskin: 100% and Combat Rank Boost</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Noctis' Cap</td>
						                <td>Glint 2</td>
						                <td></td>
						                <td>Grants Critical Damage +50% and Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Bronze Bangle</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to dualcast Combat abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Rune Saber</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>PHY attacks deal 20% more damage when equipping a sword</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Noctis</td>
						                <td>Noctis's Armguard</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>En-fire. En-Fire for 25 seconds at the start of battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Prompto</td>
						                <td>Calamity</td>
						                <td>Chain / Gen.2</td>
						                <td>Lightning</td>
						                <td>Lightning chain (physical). Activates Lightning Chain (max 150, field +50%), ATK +50% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Prompto</td>
						                <td>Cocytus</td>
						                <td>USB</td>
						                <td>Lightning / NE</td>
						                <td>Imperil Lightning (2). Ten random ranged attacks (0.72 each), causes Imperil Lightning 20% for 25 seconds, grants Quick Cast 1 and Machinist Quick Cycle: Lightning to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Prompto</td>
						                <td>Prompto's Fatigues</td>
						                <td>BSB 1</td>
						                <td>Lightning / NE</td>
						                <td>Eight random ranged attacks (0.93 each), ATK and DEF -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Prompto</td>
						                <td>Bioblaster</td>
						                <td>BSB 2</td>
						                <td>Lightning / Fire</td>
						                <td>Eight random ranged attacks (0.79 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Prompto</td>
						                <td>Iron Bangle</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to dualcast Machinist abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Iris</td>
						                <td>Cactuar Plushie</td>
						                <td>USB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), removes KO (40% HP), grants Haste, grants High Quick Cast to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Iris</td>
						                <td>Black Choker</td>
						                <td>Glint+</td>
						                <td></td>
						                <td>Protect, Shell & Haste to party, Instant Cast & Zero SB Cost</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Iris</td>
						                <td>Moogle Plushie</td>
						                <td>BSB</td>
						                <td>Medica</td>
						                <td>Restores HP (55), grants Astra and Stoneskin: 30%, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Iris</td>
						                <td>Power Wristband</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast White Magic abilities</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Aranea</td>
						                <td>Stoss Spear</td>
						                <td>OSB</td>
						                <td>Lightning / Dark</td>
						                <td>Breaks damage cap, 12,75 multiplier if exploiting elemental weakness, ranged jump attack</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Aranea</td>
						                <td>Dragon Mail</td>
						                <td>SSB</td>
						                <td>Lightning / Dark</td>
						                <td>Six single ranged jump attacks (1,23 each), grants Magical Blink 1 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Aranea</td>
						                <td>Aranea's Gauntlet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-lightning. Grants Attach Lightning at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Gladio</td>
						                <td>Blade of Brennaere</td>
						                <td>OSB</td>
						                <td>Earth / NE</td>
						                <td>Breaks damage cap, multiplier increases with hits taken</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Gladio</td>
						                <td>War Sword</td>
						                <td>BSB</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Six group attacks (0,83 each), grants Haste, Attach Earth and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Gladio</td>
						                <td>Two-handed Sword</td>
						                <td>SSB</td>
						                <td></td>
						                <td>ATK +50% to all allies for 25 seconds, grants Last Stand</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Gladio</td>
						                <td>Thunder Shield</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Grants Heavy Rank Boost and Heavy Charge +2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Gladio</td>
						                <td>Kite Shield</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>30% chance to cover PHY attacks that target allies, reducing damage taken by 20%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Gladio</td>
						                <td>Gladiolus's Fatigues</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast Knight abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Gladio</td>
						                <td>Gladiolus's Guise</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Ignis</td>
						                <td>Storm Lance</td>
						                <td>Chain</td>
						                <td>FF15 Realm</td>
						                <td>Activates XV Chain (max 150, field +50%), grants Haste, ATK and MAG +30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Ignis</td>
						                <td>Mythril Lance</td>
						                <td>BSB</td>
						                <td></td>
						                <td>ATK and RES +30% for 25 seconds, grants Haste, grants Ingredients +2 and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Ignis</td>
						                <td>Gold Bangle</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Cor</td>
						                <td>Kiku-ichimonji</td>
						                <td>AASB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Fifteen single attacks (0.60 each), grants Attach Fire, Awoken Samurai, Damage Cap +10000, Samurai Quick Cast, High Retaliate and Critical Damage +50% to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Cor</td>
						                <td>Carbon Bangle</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-fire. Six single attacks (0.52 each), grants Attach Fire Stacking and Attach Fire to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Cor</td>
						                <td>Niella Bracelet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FF15</td>
						                <td>Lunafreya</td>
						                <td>Formal Gown of Oracle</td>
						                <td>SASB</td>
						                <td>Water / Holy / NE</td>
						                <td>Lv.3 En-Water. Fifteen single attacks (? each), grants Attach Water 3 with Stacking, Synchro Mode and Damage Cap +10000</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- FINAL FANTASY TACTICS -->
						            <tr>
						                <td>FFT</td>
						                <td>Cid Orlandeau</td>
						                <td>Ragnarok Masterblade</td>
						                <td>AASB</td>
						                <td>Holy / Dark / NE</td>
						                <td>Fifteen single attacks (0.60 each), 100% add. crit., grants 100% Critical, Awoken Thunder God Mode, Damage Cap +10000 and Thunder God's Might to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Cid Orlandeau</td>
						                <td>Masamune</td>
						                <td>AOSB</td>
						                <td>Holy / Dark</td>
						                <td>Twenty single attacks (0.55 each), followed by one single attack (8.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Cid Orlandeau</td>
						                <td>Excalibur Trueblade</td>
						                <td>USB</td>
						                <td>Holy / Dark</td>
						                <td>Twelve single attacks (0,58 each), 100% additional critical chance, grants Auto Critical and EX: Sword Saint to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Cid Orlandeau</td>
						                <td>Saintly Excalibur</td>
						                <td>OSB</td>
						                <td>Holy / Lightning</td>
						                <td>One single attack (15,00) capped at 99999, grants Thunder God's Might to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Cid Orlandeau</td>
						                <td>Chaos Blade</td>
						                <td>SSB</td>
						                <td>Holy / Lightning</td>
						                <td>Six group attacks (0.84 each), grants Instant Cast 2 to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Cid Orlandeau</td>
						                <td>Flame Shield</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to dualcast Knight or Darkness abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Marche</td>
						                <td>Burglar Sword</td>
						                <td>USB</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Ten single attacks (0,71 each), grants Attach Holy and EX: Speed Combo to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Marche</td>
						                <td>Defender</td>
						                <td>SSB</td>
						                <td>Medica</td>
						                <td>Restores HP for 40% of the target's maximum HP, removes negative effects, DEF +100% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Rapha</td>
						                <td>Musk Pole</td>
						                <td>USB</td>
						                <td></td>
						                <td>En-lightning. MAG +30% for 25 seconds, grants Haste and Magical Quick Cast 3, grants Attach Lightning to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Rapha</td>
						                <td>Cypress Pole</td>
						                <td>USB</td>
						                <td>Lightning / NE</td>
						                <td>Eight random attacks (2.10 each), MAG and RES +30% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Marach</td>
						                <td>Gokuu Pole</td>
						                <td>USB</td>
						                <td>Lightning / NE</td>
						                <td>Eight random attacks (2.07 each), ATK, DEF, MAG and RES -40% for 25 seconds, grants Magical Blink 1 to all allies</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Marach</td>
						                <td>Marach's Guise</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>En-lightning. Grants Attach Lightning at the beginning of the battle</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ovelia</td>
						                <td>Zeus Mace</td>
						                <td>USB</td>
						                <td>Medica</td>
						                <td>Restores HP (85), RES +100% for 25 seconds, grants Last Stand</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ovelia</td>
						                <td>Golden Staff</td>
						                <td>BSB 2</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Stoneskin: 30%, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ovelia</td>
						                <td>Samite Coat</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-holy. Grants HP Stock (2000), grants Attach Holy to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ovelia</td>
						                <td>Pure Staff</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>MND +1% for each hit dealt with White Magic abilities, up to +25%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Alma</td>
						                <td>Nirvana</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>Grants Haste, Protect, Shell, High Regen, Astra and Reraise: 40%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Cloud</td>
						                <td>Materia Blade</td>
						                <td>OSB 2</td>
						                <td>Lightning / Ice / Fire</td>
						                <td>One single attack (7,80) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Diamond Shield</td>
						                <td>Chain / Gen.2</td>
						                <td>Holy</td>
						                <td>Holy Chain (physical). Activates Holy Chain (max 150, field +50%), ATK +50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Ancient Sword</td>
						                <td>AOSB</td>
						                <td>Holy</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Sasuke's Blade</td>
						                <td>USB 1</td>
						                <td></td>
						                <td>ATK, DEF and MAG +30% for 25 seconds, grants Instant Cast 1</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Vigilante</td>
						                <td>USB 2</td>
						                <td>Holy / NE</td>
						                <td>En-holy. Ten single attacks (0.71 each), grants High Quick Cast 1, Attach Holy and Seeker of Truth to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Iga Blade</td>
						                <td>BSB 1</td>
						                <td>Holy</td>
						                <td>Five group attacks (1.17 each), DEF +100% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Kiyomori</td>
						                <td>BSB 2</td>
						                <td></td>
						                <td>En-holy. Grants Haste, ATK +50% for 25 seconds, grants Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Platinum Sword</td>
						                <td>SSB 1</td>
						                <td></td>
						                <td>Grants Haste, ATK +50% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Genji Gloves</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Grants Stoneskin: 30% and Critical Damage +50%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Mercenary Ramza's Guise</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-holy. Grants Stoneskin: 30%, grants Attach Holy to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Brigandine</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Grants Instant Cast 1 at the beginning of the battle, begins the round with full ATB gauge</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Ramza</td>
						                <td>Platinum Armor</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to dualcast abilities that deal Holy damage</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Meliadoul</td>
						                <td>Save the Queen</td>
						                <td>BSB</td>
						                <td>Earth / Holy</td>
						                <td>Seven random attacks (1,09 each), ATK and DEF -50% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Agrias</td>
						                <td>Save the Queen Divine</td>
						                <td>USB 2</td>
						                <td>Holy / NE</td>
						                <td>Imperil Holy (2). Ten random attacks (0.67 each), causes Imperil Holy 20% for 25 seconds, grants Divine Purge Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Agrias</td>
						                <td>Excalibur</td>
						                <td>BSB</td>
						                <td>Holy</td>
						                <td>Imperil Holy (2). Four group ranged attacks (1,47 each), causes Imperil Holy 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Agrias</td>
						                <td>Jade Armlet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast Knight abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Montblanc</td>
						                <td>Guard Staff</td>
						                <td>USB</td>
						                <td>Fire / Ice / Lightning</td>
						                <td>Ten single attacks (1.68 each), ATK, DEF, MAG, RES and MND -30% for 25 seconds, grants Protect and Shell to all allies</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Montblanc</td>
						                <td>Firewheel Rod</td>
						                <td>BSB</td>
						                <td>Fire / Ice / Lightning</td>
						                <td>Ten single attacks (1.67 each), DEF and MAG +30% to all allies for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Montblanc</td>
						                <td>Silken Robe</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>35% chance to grant Quick Cast 1 to the user after using a BLK attack</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Montblanc</td>
						                <td>Circlet</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to cast an ability (NAT: group, ATK/MAG/MND -30%) after using a Dancer ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Delita</td>
						                <td>Vitanova</td>
						                <td>AOSB</td>
						                <td>Holy / Fire / Lightning / Ice</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Mustadio</td>
						                <td>Blaze Gun</td>
						                <td>USB</td>
						                <td>Fire / NE</td>
						                <td>Imperil Fire (2). Ten random ranged attacks (0.68 each), causes Imperil Fire 20% for 25 seconds, grants Quick Cast 1 and Machinist Quick Cycle: Fire to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Mustadio</td>
						                <td>Mythril Gun</td>
						                <td>SSB 2</td>
						                <td></td>
						                <td>Five group ranged attacks (1.17 each), ATK, DEF, MAG, RES and MND -30% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Gaffgarion</td>
						                <td>Power Garb</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Restores HP for 100% of the user's maximum HP and grants Extended Quick Cast when HP fall below 20%</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Gaffgarion</td>
						                <td>Gaffgarion's Shell</td>
						                <td>SSB</td>
						                <td>Dark / NE</td>
						                <td>Four group ranged attacks (1.47 each), smart ether 1 to all allies</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Gaffgarion</td>
						                <td>Golden Axe</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark Stacking, Attach Dark and High Quick Cast 2</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT</td>
						                <td>Orran</td>
						                <td>Orran's Guise</td>
						                <td>BSB</td>
						                <td></td>
						                <td>ATK and RES +30% for 25 seconds, grants Critical Damage +50%, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>


						            <!-- FINAL FANTASY TYPE-0 -->
						            <tr>
						                <td>FFT0</td>
						                <td>Cinque</td>
						                <td>White Cape</td>
						                <td>AOSB</td>
						                <td>Earth</td>
						                <td>Twenty single attacks (0.55 each), followed by one single attack (8.00) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Cinque</td>
						                <td>Buster Hammer</td>
						                <td>Glint+</td>
						                <td>Earth</td>
						                <td>En-earth. One single attack (2.50/3.25/5.70) capped at 99999 at Heavy Charge 0/1/2, grants Attach Earth Stacking and Attach Earth</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Cinque</td>
						                <td>Shock Hammer</td>
						                <td>USB</td>
						                <td>Earth / Wind</td>
						                <td>En-earth. Ten single attacks (0,71 each), grants Attach Earth, Heavy Rank Boost and Heavy Charge Booster to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Cinque</td>
						                <td>Skull Crusher</td>
						                <td>BSB</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Six group ranged attacks (0.96 each), grants Haste, Attach Earth and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Cinque</td>
						                <td>Mythril Bangle</td>
						                <td>SSB</td>
						                <td>Earth / Wind</td>
						                <td>Six group attacks (1,11 each), ATK, DEF, MAG, RES and MND -30% for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Cinque</td>
						                <td>Dominion Helmet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-earth. Grants Attach Earth at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Queen</td>
						                <td>Shamshir</td>
						                <td>AASB</td>
						                <td>Lightning / Dark / NE</td>
						                <td>En-lightning. Fifteen single attacks (0.60 each), grants Attach Lightning, Awoken Lightning, Damage Cap +10000, Merciless Oracle Mode and Merciless Oracle 0 to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Queen</td>
						                <td>Flamberge</td>
						                <td>USB</td>
						                <td>Lightning / Dark</td>
						                <td>En-lightning. Ten single attacks (0.71 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Lightning and Spellblade Quick Cast: Alternative to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Queen</td>
						                <td>Claymore</td>
						                <td>OSB</td>
						                <td>Lightning / Dark</td>
						                <td>One single attack (11,16) capped at 99999, 12,84 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>King</td>
						                <td>Outsiders</td>
						                <td>USB</td>
						                <td>Lightning / NE</td>
						                <td>En-lightning. Twelve single ranged attacks (0,58 each), ATK and DEF +30% to the user for 25 seconds, grants Attach Lightning and Machinist Double to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Rem</td>
						                <td>Survival Edges</td>
						                <td>AASB</td>
						                <td>Holy / Dark / NE</td>
						                <td>En-holy. Fifteen single attacks (1.60 each), grants Attach Holy, Awoken Holy, Damage Cap +10000, High Quick Cast 1 and Holy High Quick Cycle to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Rem</td>
						                <td>Ogrenyxes</td>
						                <td>OSB</td>
						                <td>Holy / Fire</td>
						                <td>Breaks damage cap, 44,94 multiplier if exploiting elemental weakness</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Rem</td>
						                <td>Rem's Guise</td>
						                <td>BSB</td>
						                <td>Holy / Dark</td>
						                <td>En-holy. Eight group attacks (1.68 each), smart ether 1 to the user, grants Haste, Attach Holy and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Rem</td>
						                <td>Lunar Armlet</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>50% chance to cast an ability (WHT: single, 5.05 magical Holy/Fire/NE) after using a Holy attack</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Machina</td>
						                <td>Argentic Rapiers</td>
						                <td>USB</td>
						                <td>Earth / Dark</td>
						                <td>En-earth. Ten single attacks (0.71 each), grants Attach Earth, Assault Mode and Dual Blink 2 to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Machina</td>
						                <td>Clockwork Blades</td>
						                <td>OSB</td>
						                <td>Earth / Dark</td>
						                <td>One single attack (10,50~14,50 scaling with Spellblade abilities used) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Machina</td>
						                <td>Bolt Rapiers</td>
						                <td>BSB</td>
						                <td>Earth / Dark</td>
						                <td>Eight single attacks (0,83 each), grants Stoneskin: 30% to all allies, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Nine</td>
						                <td>Javelin</td>
						                <td>BSB</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Eight single ranged jump attacks (0,83 each), grants Haste, Attach Wind and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Sice</td>
						                <td>Sice's Guise</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td>Eight single attacks (0.83 each), ATK and MND +30% to all allies for 25 seconds, grants Haste and Doom: 30 to all allies, grants Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Deuce</td>
						                <td>Platinum Piccolo</td>
						                <td>USB 3</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants High Regen and High Quick Cast 2 to all allies, grants Cure Melody Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Deuce</td>
						                <td>Deuce's Akademeia Uniform</td>
						                <td>BSB</td>
						                <td>Medica</td>
						                <td>Restores HP (55), ATK and MAG +30% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Deuce</td>
						                <td>Luminous Robe</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Grants Last Stand, Magical Blink 1 and High Regen</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Deuce</td>
						                <td>Feathered Cap</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>Increases the duration of stat buffs by 30%</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Deuce</td>
						                <td>Baroque Flute</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>25% chance to grant Heals +30% for 10 seconds to the user after using a Bard ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Ace</td>
						                <td>Platinum Deck</td>
						                <td>AASB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Fifteen single attacks (1.50 each), grants Attach Fire, Awoken Fire, Damage Cap +10000 and Blind Stud Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Ace</td>
						                <td>Akademeia Deck</td>
						                <td>SSB</td>
						                <td></td>
						                <td>Six single attacks (2.97 each), restores HP to all allies for 40% of their maximum HP</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Ace</td>
						                <td>Argentic Deck</td>
						                <td>LMR 1</td>
						                <td></td>
						                <td>25% chance to grant Physical Blink 1 to the user after using a BLK ability</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Ace</td>
						                <td>Flame Armlet</td>
						                <td>LMR 2</td>
						                <td></td>
						                <td>En-fire. Grants Attach Fire at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Ace</td>
						                <td>Reed Cloak</td>
						                <td>LMR 3</td>
						                <td></td>
						                <td>25?% chance to dualcast abilities that deal Fire damage</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Seven</td>
						                <td>Silver Whipblade</td>
						                <td>USB</td>
						                <td>Ice / NE</td>
						                <td>Imperil Ice (2). Ten single attacks (1.70 each), ATK, MAG and RES -50% for 25 seconds, causes Imperil Ice 20% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Seven</td>
						                <td>Gauntlet</td>
						                <td>LMR</td>
						                <td></td>
						                <td>20% chance to cause Minor Imperil Ice to the target after using a Ice attack on an enemy</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Cater</td>
						                <td>Magicite Blaster</td>
						                <td>USB</td>
						                <td>Fire / Ice / Lightning</td>
						                <td>Ten single ranged attacks (0.70 each), grants Machinist +30% Boost, Quick Cast and Debuff Shot Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Cater</td>
						                <td>Magicite Pistol</td>
						                <td>LMR</td>
						                <td></td>
						                <td>35% chance to grant Quick Cast 1 to the user after using a Machinist ability</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Eight</td>
						                <td>Eight's Akademia Uniform</td>
						                <td>BSB</td>
						                <td>Ice / NE</td>
						                <td>Imperil Ice (2). Eight single attacks (0.65 each), causes Imperil Ice 20% for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>FFT0</td>
						                <td>Trey</td>
						                <td>Argentic Bow</td>
						                <td>USB</td>
						                <td>Fire / Water / Ice / NE</td>
						                <td>Ten single ranged attacks (0.69 each), grants Medium Buff Fire, Medium Buff Ice, Medium Buff Water, Quick Cast and EX: Hawkeye Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- KINGDOM HEARTS -->
						            <tr>
						                <td>KH</td>
						                <td>Sora</td>
						                <td>Lionheart</td>
						                <td>USB</td>
						                <td>Fire / Lightning / Ice</td>
						                <td>Ten single ranged attacks (0.70 each), grants 50% Critical and EX: Connected Hearts to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Sora</td>
						                <td>Metal Chocobo</td>
						                <td>BSB</td>
						                <td>Fire / Lightning / Ice</td>
						                <td>Eight single attacks (0.82 each), ATK and DEF +30% to the user for 25 seconds, grants Haste and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Sora</td>
						                <td>Sora</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast Spellblade abilities</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Riku</td>
						                <td>Oblivion</td>
						                <td>AOSB</td>
						                <td>Dark</td>
						                <td>Three single attacks (8.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Riku</td>
						                <td>Soul Eater</td>
						                <td>BSB</td>
						                <td>Dark / NE</td>
						                <td>En-dark. Eight single attacks (0,83 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Riku</td>
						                <td>Riku Gloves</td>
						                <td>Glint</td>
						                <td></td>
						                <td>En-dark. Grant Attach Dark Stacking, Attach Dark and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Riku</td>
						                <td>Riku</td>
						                <td>LMR</td>
						                <td></td>
						                <td>En-dark. Grants Attach Dark at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Yuffie</td>
						                <td>Shuriken (KH)</td>
						                <td>USB 3</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Ten single ranged attacks (0.71 each), grants Attach Earth, Physical Blink 1 and Stoneshatter Skyshock Follow-Up to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>KH</td>
						                <td>Cloud</td>
						                <td>Buster Sword (KH)</td>
						                <td>BSB 3</td>
						                <td>Dark / Wind</td>
						                <td>En-dark. Eight single attacks (0.83 each), grants Haste, Attach Dark and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						            <!-- WOFF -->
						            <tr>
						                <td>WOFF</td>
						                <td>Reynn</td>
						                <td>Bablizz Mirage</td>
						                <td>BSB</td>
						                <td>Ice / NE</td>
						                <td>En-ice. Six group attacks (1.99 each), minimum damage 1100, grants Haste, Attach Ice and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>WOFF</td>
						                <td>Lann</td>
						                <td>Fritt Mirage</td>
						                <td>BSB</td>
						                <td>Fire / NE</td>
						                <td>En-fire. Six group ranged attacks (0.82 each), grants Haste, Attach Fire and Burst Mode to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>WOFF</td>
						                <td>Aemo</td>
						                <td>White Cape</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast White Magic abilities</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>WOFF</td>
						                <td>Enna Kros</td>
						                <td>Roxanne's Gloves</td>
						                <td>LMR</td>
						                <td></td>
						                <td>25% chance to dualcast Black Magic abilities</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
									
									<!-- CORE -->
						            <tr>
						                <td>Core</td>
						                <td>Elarra</td>
						                <td>Magika Album</td>
						                <td>USB 1</td>
						                <td>Medica</td>
						                <td>Restores HP (85), grants Regenga and High Quick Cast 2</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Elarra</td>
						                <td>Elarra's Guise</td>
						                <td>BSB</td>
						                <td>Holy</td>
						                <td>Restores HP (85), damages undeads, grants Last Stand, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Elarra</td>
						                <td>Magika Pius</td>
						                <td>Glint</td>
						                <td>Medica</td>
						                <td>Restores HP (55)</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Tyro</td>
						                <td>Lustrous Shield</td>
						                <td>AOSB 1</td>
						                <td>Holy / NE</td>
						                <td>Three single ranged attacks (5.20 each) capped at 99999</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Tyro</td>
						                <td>Tome of Fantasy</td>
						                <td>USB 2</td>
						                <td>NE</td>
						                <td>Seventeen single attacks (0,37 each), grants Haste to all allies, ATK, DEF, MAG, RES and MND +15% to all allies for 25 seconds</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Tyro</td>
						                <td>Arbiter's Tome</td>
						                <td>USB 4</td>
						                <td></td>
						                <td>Grants Haste and 50% Critical, grants High Quick Cast and Judge's Apocrypha to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Tyro</td>
						                <td>Keeper's Tome</td>
						                <td>BSB</td>
						                <td></td>
						                <td>Grants Protect, Shell and Magical Blink 1, grants Haste and Burst Mode to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Tyro</td>
						                <td>Purifying Grimoire</td>
						                <td>Glint</td>
						                <td></td>
						                <td>Restores 2000 HP, removes negative effects</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Tyro</td>
						                <td>Keeper's Cap</td>
						                <td>LMR</td>
						                <td></td>
						                <td>Grants Instant Cast 2 at the beginning of the battle</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Wedge</td>
						                <td>Ripper</td>
						                <td>Glint</td>
						                <td>Wind / NE</td>
						                <td>En-wind. Six single hybrid ranged attacks (0.52 or 1.25 each), grants Attach Wind Stacking and Attach Wind to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Biggs</td>
						                <td>Coral Sword</td>
						                <td>Glint 1</td>
						                <td>Earth / NE</td>
						                <td>En-earth. Six single attacks (0.52 each), grants Attach Earth Stacking and Attach Earth to the user</td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						                <td></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Dr. Mog</td>
						                <td>Power Staff</td>
						                <td>Chain</td>
						                <td>Core Realm</td>
						                <td>Core Chain. Activates Core Chain (max 150, field +50%), grants Haste, ATK and MAG +30% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Dr. Mog</td>
						                <td>Judicer's Staff</td>
						                <td>AASB 1</td>
						                <td>Holy / Fire / Ice / Lightning / NE</td>
						                <td>Fifteen single attacks (1.50 each), grants Major Buff Holy, Major Buff Fire, Major Buff Ice, Major Buff Lightning, Awoken Royal Archives, Damage Cap +10000 and Royal Archives' Teachings Follow-Up to the user</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Dr. Mog</td>
						                <td>Dr. Mog's Swim Ring</td>
						                <td>AOSB 3</td>
						                <td>Water</td>
						                <td>Three single attacks (75.00 each) capped at 99999</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>
						            <tr>
						                <td>Core</td>
						                <td>Dr. Mog</td>
						                <td>Scholar Hat</td>
						                <td>Glint</td>
						                <td></td>
						                <td>DEF and RES +200% for 25 seconds</td>
						                <td></td>
						                <td><span class="fas fa-check icon n-green"><span class="n-1-hide">yes</span></span></td>
						            </tr>

						        </tbody>
						        <tfoot>
						            <tr>
						                <th>Realms</th>
						                <th>Character</th>
						                <th>Relic Name</th>
						                <th>Soul Break</th>
						                <th>Element</th>
						                <th>Effect</th>
						                <th>GL</th>
						                <th>JP</th>
						            </tr>
						        </tfoot>
						    </table>
			            </div><!-- .table-wrapper -->
					</div><!-- .box-content -->
				</div><!-- .box-white -->
			</div><!-- .grid-child -->
		</div><!-- .row -->
		
	</div><!-- .container -->
</div><!-- #layout_content -->

</div><!-- .main-container -->

<?php include("foot.php"); ?>
<?php include("footer.php"); ?> 

<!-- call js plugin specific for this page here (that CAN'T work if deferred), if any -->
<script type="text/javascript" src="js/datatables.min.js"></script>

<!-- defer call for jquery plugins -->
<script type="text/javascript">
	function parseJSAtOnload() {
		var links = [
			// call js plugin specific for this page (deferred). Example:
			"js/js-home.js", 
			"js/custom.js"
		],
		headElement = document.getElementsByTagName("head")[0],
		linkElement, i;
		for (i = 0; i < links.length; i++) {
			linkElement = document.createElement("script");
			linkElement.src = links[i];
			headElement.appendChild(linkElement);
		}
	}
	if (window.addEventListener)
		window.addEventListener("load", parseJSAtOnload, false);
	else if (window.attachEvent)
		window.attachEvent("onload", parseJSAtOnload);
	else window.onload = parseJSAtOnload;

	// add "active" class to navigation menu, if used on this project. Example:
	$(".nav-home").addClass("active");

	$('#relic-table').DataTable({
		"paging" : false,
		"language" : {
			"lengthMenu": "<div class='form-group'><div class='select-style radius-small'>_MENU_</div></div>",
			"search": "",
			"info": "Showing <strong>_START_</strong>-<strong>_END_</strong> of <strong>_TOTAL_</strong>",
			"infoEmpty":      "Showing <strong>0-0</strong> of <strong>0</strong>",
			"paginate": {
		        "first":      "First",
		        "last":       "Last",
		        "next":       "<i class='fal fa-angle-right'></i>",
		        "previous":   "<i class='fal fa-angle-left'></i>"
		    }
		},
		initComplete: function () {
            this.api().columns([0]).every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $("#realms_search").empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );

            
        }
	});

	var table = $('#relic-table').DataTable();
	$(document).on( 'click', '.reset-all', function(e) {
       table
		 .search( '' )
		 .columns().search( '' )
		 .draw();
		table.column(6).visible( true );
		table.column(7).visible( true );
       e.preventDefault();
	});
	$(document).on( 'click', '.toggle-jp', function(e) {

		// reset filter
		table
		 .search( '' )
		 .columns().search( '' )
		 .draw();

        table
       .column(7) // or columns???
       .search( 'yes', true, false )
       .draw();

       table.column(7).visible( true );
       table.column(6).visible( false );
       e.preventDefault();
	});
	$(document).on( 'click', '.toggle-gl', function(e) {
		// reset filter
		table
		 .search( '' )
		 .columns().search( '' )
		 .draw();

        table
       .column(6) // or columns???
       .search( 'yes', true, false )
       .draw();

       table.column(6).visible( true );
       table.column(7).visible( false );
       e.preventDefault();
	});

</script>

</body>
</html>