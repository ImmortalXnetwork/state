<?php 
$conn = mysqli_connect("localhost","root","Fazal@2002","animehin_fazal");

$websiteTitle = "AniKatsu"; // Website Name
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";  // Website URL
$websiteLogo = $websiteUrl . "/files/images/logo.png?v=2"; // Logo
$contactEmail = "xyz@gmail.com"; // Contact Email

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
