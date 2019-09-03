<?php

if(isset($_REQUEST['aff']))
$affichage=$_REQUEST['aff'];

$xsl=<<<EOB
<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" 
     xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
     xmlns:php="http://php.net/xsl">
<xsl:output method="html" encoding="utf-8" indent="yes"/>
<xsl:template match="register">

<html>
<head>
	<title>Conference Website</title>
	<link rel="stylesheet" href="styleme.css"/>
</head>

<body>
    <div class="hello">

        <ul id="menu-demo2">    
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
    </div>
	<xsl:for-each select="participant">
	<xsl:choose>
 <xsl:when test="paper/author/affiliation='$affichage'">	
	<center>
<div class="row">
 <table>
 	     	    <tr> <td> First Name</td>
 	         <td><xsl:value-of select="firstname"/></td></tr>
 		<tr> <td> Last Name </td>    
 			 <td><xsl:value-of select="lastname"/></td></tr>
 		<tr> <td> Email </td>        
 			 <td><xsl:value-of select="Email"/></td></tr>
 		<tr> <td> Second Email</td>  
 			 <td><xsl:value-of select="Email2"/></td></tr>
 		<tr> <td> Affiliation</td>   
             <td><xsl:value-of select="paper/author/affiliation"/></td></tr>
 		<tr> <td> Adresse</td>       
 			 <td><xsl:value-of select="adress"/></td></tr>
 		<tr> <td> Hotel</td>       
 			 <td><xsl:value-of select="hotel/name"/></td></tr>
 	    <tr> <td> Hotel's Tel</td>       
 			 <td><xsl:value-of select="hotel/tel"/></td></tr>
 		<tr> <td> Social Event</td>  
 			 <td><xsl:value-of select="socialEvent/@participant"/></td></tr>
 		<tr> <td> Acompagned </td>   
 			 <td><xsl:value-of select="socialEvent/accopagned/@accopagned"/></td></tr>
 </table>
</div>
</center>
</xsl:when>
 <xsl:otherwise>
<h1>False account !</h1>
<h2>Please try again</h2>
<h3>or register by clicking on Home </h3>
 </xsl:otherwise>
</xsl:choose>
</xsl:for-each>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
EOB;

$xsldoc = DOMDocument::loadXML($xsl);
$xmlDoc = new DOMDocument();
$xmlDoc->load("form1.xml");
$proc = new XSLTProcessor();
$proc->registerPHPFunctions();
$proc->importStyleSheet($xsldoc);
echo $proc->transformToXML($xmlDoc);
?>


