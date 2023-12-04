<?php
$lokalen = [
    ["nummer" => "1058", "capeciteit"=> 25, "verdieping" => "1"],
    ["nummer" => "2073", "capeciteit" => 25, "verdieping" => "2"],
    ["nummer" => "2083", "capeciteit" => 25, "verdieping" => "2"],
    ["nummer" => "2033", "capeciteit" => 25, "verdieping" => "2"],
    ["nummer" => "1050", "capeciteit" => 25, "verdieping" => "1"]

];

foreach ($lokalen as $lokaal){
    echo "<ul>";
    echo "<li>";
    echo $lokaal["nummer"]. " ". $lokaal["capeciteit"]. " ". $lokaal["verdieping"];
    echo "</li>";
    echo "</ul>";
}
?>



