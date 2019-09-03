<?php

if(isset($_REQUEST['id']))
$doc = new DOMDocument();
$doc -> load('form1.xml');
 
$animations = $doc->documentElement;
$anim = $animations->getElementsByTagName("participant");
 
foreach($anim as $animation)
{
if ($animation->hasAttribute("id") == $_REQUEST['id']) 
	{
	if ($animation->getAttribute("id") == $_REQUEST['id'])
		{
		//print_r($animation);
		$animations->removeChild($animation);
		}
	}
}
 $doc->save("form1.xml"); 
echo '<html>
<head>
<title>Conference Website</title>
    <link href="styleindex.css" rel="stylesheet" type="text/css">
</head> 
    <header>
        
    <div class="row">
        <div class="logo">
        <img src="logo.png"
        </div>
            
    <ul class="main-nav">    
        <li class="active"><a href="index.html"> Home </a>
        </li>
        <!--li><a href="formcomplet.php"> Registration </a></li-->
        <li><a href="#"> Search </a>
            <ul>
                <li><a href="RechercheId.php">By ID</a></li>
                <li><a href="RechercheMail.php">By Email</a></li>
                <li><a href="RechercheHotel.php">By Hotel</a></li>
                <li><a href="RechercheAff.php">By Affiliate</a></li>
            </ul>
        </li>
        
        <li><a href="#"> Modification </a>
            <ul>
            <li><a href="SuppressionNom.php">Suppression</a></li>
                <li><a href="AffichageMiseAJour.php">Update</a></li>
            
            </ul>
        </li>
        <li><a href="#"> Extraction </a>
            <ul>
                <li><a href="AffichageAttPart.php">Certificate of participation</a></li>
                <li><a href="AffichageRecus.php">Payment receipts</a></li>
                <li><a href="AffichageBadeg.php">Participation badge</a></li>
                
            </ul>
        </li>
    </ul>  
<div class="hero"> <h1> Your regestiration has been deleted !</h1></div>
</header>

</body>
</html>';


?>