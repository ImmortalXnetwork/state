<?php 
$servername = "localhost"; $username = "animehin_root"; $password = "Fazal@2002"; $dbname = "animehin_fazal"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } echo "Connected successfully";

$websiteTitle = "AnimeState"; // Website Name
$websiteUrl = "//{$_SERVER['https://heroku.com']}";  // Website URL
$websiteLogo = $websiteUrl . "/files/images/logo.png?v=2"; // Logo
$contactEmail = "Fazal0069@outlook.com"; // Contact Email

$version = "0.4";

//Donate 
$donate = "#";

// Socials 
$telegram = "https://t.me/#"; // telegram
$discord = "https://discord.com/#"; // Discord
$redit = "#"; // Reddit
$twitter = "#"; // Twitter
 


$disqus = "https://indianime.disqus.com"; // Disqus


// API URL
$api = "https://api-animewatch-9a25ea7d3f90.herokuapp.com"; // https://github.com/shashankktiwariii/anikatsu-api


$banner = $websiteUrl . "/files/images/banner.png";  //Banner
?>
