 <meta http-equiv="refresh" content="10">
 <body style="float: right;">
 <table cellpadding="5px">
 	<tr>
 		<td valign="top" >
 			<?php
 header("refresh: 10");

 /*

// Ping Single IP Address

$ip = "10.5.1.238";
$ping = exec("ping -n 1 $ip",$output,$status);

echo "$status";

if($status!="0"){
    echo '<div style="width:20px;height:20px; background: #FF0000;"></div>';
}
else {
    echo '<div style="width:20px;height:20px; background: #00FF00;"></div>';
}

*/

/*
// Ping Multiple IP Address
$iplist = ["10.5.1.238","10.6.252.21","192.168.0.1"];
$i = count($iplist);

for ($j=0; $j < $i; $j++) { 
    $ip = $iplist[$j];
    $ping = exec("ping -n 1 $ip",$output,$status);
    echo "$status";
    echo "<br/>";

}
*/

// Create a table showing the results


    $iplist = [
        ["10.10.242.18", "BG DC DNS"],

        ["10.255.252.185", "PCL-P2P"],

        ["10.255.252.225", "BDCOM-P2P"],

        ["10.5.255.254", "BCDL L3 SW"],

        ["10.5.252.4", "BCDL-SW1"],

        ["10.5.252.2", "BCDL-SW2"],

        ["10.5.252.3", "BCDL-SW3"],

        ["10.5.252.6", "CCTV-DS-SW"],

        ["10.5.1.227", "Accounts-Server"],

        ["10.5.21.1", "TFW Server"],

        ["10.5.252.49", "Bajus-Uplink-L1"],

        ["10.5.252.48", "Bajus-SW1-L19"],

        ["10.5.252.42", "Bajus-SW3-L19"],

        ["10.5.252.7", "Display Center"],

        ["10.5.252.50", "FH-L8-SW1"],

        ["10.6.251.244", "WLC-L16"],

        ["10.5.251.6", "AP-54-IT"],

        ["10.5.251.7", "AP-57-Admin"],

        ["10.5.251.5", "AP-58-AC"],

        ["10.5.41.200", "Bajus-NVR-L19"],

        ["10.5.41.100", "FH-DVR-L8"],

        ["10.5.2.250", "BM-DVR-250"],

        ["10.5.200.201", "IDIS-NVR-201"],

        ["10.5.200.202", "IDIS-NVR-202"],

        // array("10.5.1.238","IT_Printer"),

        ["10.5.2.246", "A-DEVICE-46"],

        ["10.5.2.247", "A-DEVICE-47"],

        ["10.5.2.248", "A-DEVICE-48"],

        ["10.5.2.249", "A-DEVICE-49"],

        ["10.5.2.245", "A-DEVICE-45"],

        ["10.5.2.244", "A-DEVICE-44"],

        ["10.5.252.8", "BCDL-Mech-L-9"],

        ["10.5.252.9", "BCDL-Elec-L-10"],

    ];

    $i = count($iplist);
    $results = [];

    for ($j = 0; $j < $i; $j++) {
        $ip = $iplist[$j][0];
        $ping = exec("ping -n 1 -w 1000 $ip", $output, $status);

        $results[] = $status;
    }

    // Table

    echo "<table border='1px solid black' cellpadding='2px'; style='text-align: left; '>";
    

    foreach ($results as $item => $k) {
        echo "<tr>";

        echo "<td>" . $iplist[$item][1] . "</td>";

        if ($results[$item] == 0) {
            echo '<td><div style="width:20px;height:20px; background: #00FF00;"></div></td>';
        } else {
            echo '<td><div style="width:20px;height:20px; background: #FF0000;"></div><p style="display: block;"></p></td>';
            $myAudioFile = "alarm_beep_3.mp3";
            echo '<audio autoplay="true" style="display:none;">
         	<source src="' .
                $myAudioFile .
                '" type="audio/mp3">
      		</audio>';
        }

        echo "</tr>";
        // code...
    }

    echo " </table>";

    ?></td>

 		<td valign="top" ><?php
 


/*

==========================
|                        |
| 2nd Column (TFW Part)  |
|                        |
==========================

*/


   $iplist = [
       ["10.6.255.254", "TFW-L16-L3-SW"],
       ["10.5.252.51", "TFW-SW-D"],
       ["10.5.252.52", "TFW-SW1"],
       ["10.5.252.53", "TFW-SW3"],
       ["10.5.252.54", "TFW-SW4"],
       ["10.5.252.55", "TFW-SW5"],
       ["10.5.252.56", "TFW-SW6"],
       ["10.5.21.1", "TFW-Server"],
       ["10.6.252.21", "TFW-L1-MK"],
       ["10.6.252.11", "TFW-BM-1"],
       ["10.6.252.15", "TFW-BM-1-S"],
       ["10.6.252.22", "TFW-L10-SW"],
       ["10.6.252.23", "TFW-L11-SW"],
       ["10.6.252.20", "TFW-L12-SW"],
       ["10.6.252.17", "TFW-L13-SW1"],
       ["10.6.252.13", "TFW-L13-SW2"],
       ["10.6.252.19", "TFW-L13-SW3"],
       ["10.6.252.3", "TFW-L14-SW"],
       ["10.6.252.5", "TFW-L15-SW"],
       ["10.6.252.1", "TFW-L16-SW"],
       ["10.6.252.7", "TFW-L17-SW"],
       ["10.6.252.9", "TFW-L18-SW"],
       ["10.5.251.8", "TFW-AP-70"],
       ["10.5.251.7", "TFW-AP-71"],
       ["10.5.251.4", "TFW-AP-72"],
       ["10.5.251.3", "TFW-AP-76"],
       ["10.5.50.100", "TFW-NVR"],
       ["10.6.200.100", "TFW-NVR-100"],
       ["10.6.200.200", "TFW-NVR-200"],
       ["10.6.200.250", "TFW-NVR-250"],
       ["10.6.17.250", "L13-ER-NVR-17.250"],
       ["10.6.70.201", "HADO Z1"],
       ["10.6.70.202", "HADO Z2"],
   ];

   $i = count($iplist);
   $results = [];

   for ($j = 0; $j < $i; $j++) {
       $ip = $iplist[$j][0];
       $ping = exec("ping -n 1 -w 1000 $ip", $output, $status);

       $results[] = $status;
   }

   // Table

   echo "<table border='1px solid black' cellpadding='2px'; style='text-align: left; '>";
  

   foreach ($results as $item => $k) {
       echo "<tr>";
       

       echo "<td>" . $iplist[$item][1] . "</td>";

       if ($results[$item] == 0) {
           echo '<td><div style="width:20px;height:20px; background: #00FF00;"></div></td>';
       } else {
           echo '<td><div style="width:20px;height:20px; background: #FF0000;"></div><p style="display: block;"></p></td>';
           $myAudioFile = "alarm_beep_3.mp3";
           echo '<audio autoplay="true" style="display:none;">
         	<source src="' .
               $myAudioFile .
               '" type="audio/mp3">
      		</audio>';
       }


       echo "</tr>";
   }

   echo " </table>";
   ?>
 	
 </td>
 	</tr>


 	
 </table>
 </body>