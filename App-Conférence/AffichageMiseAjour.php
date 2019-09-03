<?php
if(isset($_REQUEST['aff'])){
  $id=$_REQUEST['aff'];
}

session_start();
if (!isset($_SESSION['aff'])) {
      $_SESSION['aff']=$id;

}


$xsl=<<<EOB
<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" 
     xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
     xmlns:php="http://php.net/xsl">
<xsl:output method="html" encoding="utf-8" indent="yes"/>                                    
<xsl:template match="register">
<xsl:for-each select="participant">
<xsl:choose>
 <xsl:when test="@id=$id">
<html>
<head>
<title>Formulaire d'inscription </title>
<link rel="stylesheet" href="style1.css"/>
<script>
  function addRowToTable()
{
  var tbl = document.getElementById('tblSample');
  var lastRow = tbl.rows.length;
  // if there's no header row in the table, then iteration = lastRow + 1
  var iteration = lastRow;
  var row = tbl.insertRow(lastRow);
  
  // right cell
  var cellRight = row.insertCell(0);
  var el = document.createElement('input');
  el.type = 'text';
  el.name = 'author[]'+iteration;
  el.id = 'author'+iteration;
  el.size = 20;
  
  
  el.onkeypress = keyPressTest;
  cellRight.appendChild(el);
  
  // select cell
  var cellRightSel = row.insertCell(1);
  var sel = document.createElement('input');
  sel.name = 'affiliation[]'+iteration;
  sel.type = 'text';
  el.id = 'affiliation' + iteration;
  el.size = 20;


  cellRightSel.appendChild(sel);
}
function removeRowFromTable()
{
  var tbl = document.getElementById('tblSample');
  var lastRow = tbl.rows.length;
  if (lastRow > 2) tbl.deleteRow(lastRow - 1);
}
function keyPressTest(e, obj)
{
  var validateChkb = document.getElementById('chkValidateOnKeyPress');
  if (validateChkb.checked) {
    var displayObj = document.getElementById('spanOutput');
    var key;
    if(window.event) {
      key = window.event.keyCode; 
    }
    else if(e.which) {
      key = e.which;
    }
    var objId;
    if (obj != null) {
      objId = obj.id;
    } else {
      objId = this.id;
    }
    displayObj.innerHTML = objId + ' : ' + String.fromCharCode(key);
  }
}
</script>
</head>
<body>
<div class="form-style-5">
<center><h2>Registration</h2></center>
<form action="rigth.php" method="post">
<legend><span class="number">1</span> Candidate Info</legend>
      <label>First Name</label>
      <input type="hidden"  name="id" value="{@id}"/><br/> 
      <input type="text"  name="firstname" value="{firstname}"/><br/> 
      <label>Last Name</label>
      <input type="text" name="lastname" value="{lastname}"/><br/>  
    <label>Sexe</label>

<xsl:if test="@sexe='F'">
   <input type="radio" name="sexe" value="M" id="yes" />
     Male
     <input type="radio" name="sexe" value="F" id="no" checked="checked"/> Female
     <br/>  
</xsl:if>
<xsl:if test="@sexe='M'">
   <input type="radio" name="sexe" value="M" id="yes" checked="checked" />
     Male
     <input type="radio" name="sexe" value="F" id="no" /> Female
     <br/>  
</xsl:if>
  <label>Address</label>
  <input type="text" name="personalAdress" value="{adress}"/> 

    <label>With Paper</label>
    <xsl:if test="@withpaper='yes'">
    <input type="radio" name="withpaper" value="yes" checked="checked" />
     Yes
     <input type="radio" name="withpaper" value="no"/>No<br/><br/>  
    </xsl:if>

    <xsl:if test="@withpaper='no'">
    <input type="radio" name="withpaper" value="yes"  />
     Yes
     <input type="radio" name="withpaper" value="no" checked="checked"/>No<br/><br/>  
    </xsl:if>

    <label for="lname4">Email</label>
    <input type="email" name="Email" value="{Email}"/> <br/>  
  <!--*************************-->

    <label for="lname">Second Email</label>
    <input type="email" name="Email2" value="{Email2}"/> <br/> 
  <!--*************************-->
<legend><span class="number">2</span> Payement</legend>
    <label for="lname">Paye :</label>
    <xsl:if test="payement/@paye='yes'">
    <input type="radio" name="paye" value="yes" id="yes" checked="checked" />Yes
    <input type="radio" name="paye" value="no" id="no" />No
    </xsl:if>
    <xsl:if test="payement/@paye='no'">
    <input type="radio" name="paye" value="yes" id="yes"  />Yes
    <input type="radio" name="paye" value="no" id="no" checked="checked" />No
    </xsl:if>
  <label for="c">*Si oui choisissez quel sorte de payement:</label><br/>  
    <label for="lname">Devise :</label>
      <select id="payement" name="devise">
        <option value="{payement/@devise}"><xsl:value-of select="payement/@devise"/></option>
        <option value="dh">DH</option>
        <option value="euro">Euro</option>
        <option value="dollars">Dollars</option>
      </select><br/>
    <label for="montant" >Montant :</label>
    <input type="number" id="monant" name="montant" value="{payement/@montant}"/><br/> 
    
<!--*************************-->
<legend><span class="number">3</span> Affiliation</legend>
      <label for="c">Country :</label>
      <input type="text" value="{affiliation/@country}" name="country" title="country"/><br/> 
       <label for="c">City :</label>
      <input type="text" value="{affiliation/@city}" name="city" title="city"/><br/> 

<br/>
<!--*************************-->
<legend><span class="number">4</span> Presentation</legend>
      <label for="lname">Date :</label>
      <input type="date" name="date_pre" value="{presentation/@date}"/><br/> 
      <label for="lname">Hour :</label>
      <input type="Time" name="hour" value="{presentation/@hour}"/>  <br/> 
<!--*************************-->
<legend><span class="number">5</span> Travel</legend>
<legend><span class="num">1</span>Arrival</legend>
<div>
      <label for="lname">Date :</label>
      <input type="date" name="arrivalDate" value="{travel/arrival/@date}"/><br/> 

      <label for="lname">Hour :</label>
      <input type="time" name="arrivalHour" value="{travel/arrival/@hour}"/> <br/> 

      <label for="lname">Airoport :</label>
      <input type="text" name="arrivalAirport" value="{travel/arrival
/@airport}"/><br/>
</div>
<br/>
<legend><span class="num">2</span>Departure</legend>
<div>
      <label for="lname">Date :</label>
      <input type="date" name="departureDate" value="{travel/departure/@date}"/><br/> 

      <label for="lname">Hour :</label>
      <input type="time" name="departureHour" value="{travel/departure/@hour}"/>  <br/> 

      <label for="lname">Airoport :</label>
      <input type="text"  name="departureAirport" value="{travel/departure/@airport}"/><br/> 
</div>
<br/>
<!--*************************-->
<legend><span class="number">6</span>Hotel</legend>
     <label for="lname">Name :</label>
           <input type="text" name="hotelName" value="{hotel/name}"/><br/>
     <label for="lname">Address :</label>
           <input type="text" name="hotelAddress" value="{hotel/addresse}"/><br/> 
     <label for="lname">Phone Number :</label>
          <input type="tel" name="hotelTel" value="{hotel/tel}"/><br/>  
 <!--*************************-->
<legend><span class="number">7</span>Paper</legend>
      Title : <input type="text" name="titlePaper" value="{paper/title}"/><br></br>
      Number:  <input type="number" name="numPaper" value="{paper/@number}" />
      <table id="tblSample" class="ft">
      <thead>
      <td>Author's Name </td>
      <td>Author's Afiliation</td>

      </thead>
    
      <thead>
      <xsl:for-each select="paper/author">
      <tr>
      <td><input type="text" name="author[]"
         id="author" size="20" onkeypress="keyPressTest(event, this);" value="{name}" /></td>
      <td>
      <input type="text" name="affiliation[]"
         id="affiliation" size="20" onkeypress="keyPressTest(event, this);" value="{affiliation}" />
      </td>
      </tr>
      </xsl:for-each>
      </thead>
    </table>
    <p>
      <input type="button" class="btnit sendit" value="Add" onclick="addRowToTable();" />
      <input type="button" class="btnit sendit" value="Remove" onclick="removeRowFromTable();" />
    </p>
 

<!--*************************-->
<legend><span class="number">8</span>Social Event</legend>
  <label for="lname">Participate :</label>
  <xsl:if test="socialEvent/@participant='yes'">
   <input type="radio" name="seParticipate" value="yes" id="yes" checked="checked" />Yes
     <input type="radio" name="seParticipate" value="no" id="no" />No<br/>
     </xsl:if>
     <xsl:if test="socialEvent/@participant='no'">
   <input type="radio" name="seParticipate" value="yes" id="yes"  />Yes
     <input type="radio" name="seParticipate" value="no" id="no" checked="checked"/>No<br/>
     </xsl:if>
     <br/>
          <label for="lname">Devise :</label>
            <select id="payement" name="seDevise">
            <option value="{socialEvent/payement/@devise}">
            <xsl:value-of select="socialEvent/payement/@devise"/>
            </option>
        <option value="dh">DH</option>
        <option value="euro">Euro</option>
        <option value="dollars">Dollars</option>
      </select><br/>
      <label for="montant" >Montant :</label>
            <input type="number" id="monant" name="seMontant" value="{socialEvent/payement/@montant}"/><br/> 
          <label for="lname">Accompagned :</label>

      <xsl:if test="socialEvent/accopagned/@accopagned='yes'">
   <input type="radio" name="accompagned" value="yes" id="yes" checked="checked" />Yes
     <input type="radio" name="accompagned" value="no" id="no" />No<br/>
     </xsl:if>

     <xsl:if test="socialEvent/accopagned/@accopagned='no'">
   <input type="radio" name="accompagned" value="yes" id="yes" />Yes
     <input type="radio" name="accompagned" value="no" id="no" checked="checked" />No<br/>
     </xsl:if>

     <br/>
       <label for="lname">Prentship :</label>
           <input type="text" name="prentship" value="{socialEvent
/accopagned/@prentship}"/><br/> 
           <br/> 
      <label for="lname">Accompagned Name :</label>
    <input type="text"  name="accName" value="{socialEvent
/accopagned/name}"/><br/> 
   <center>
    <button type="submit" name="submit" class="btn send">Envoyer</button>
  </center>
</form>


   <!--///////////////////////////////////////////////-->
</div>
 </body>
 </html>
</xsl:when>
 <xsl:otherwise>
 <div class="hello">

        <ul id="menu-demo2">    
        <li class="active"><a href="webindex.html"> Home </a>
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
  <link rel="stylesheet" href="styleme.css"/>
 <center>
<h1>False account !</h1>
<h2>Please try again</h2>
<h3>or register by clicking on Home </h3>
</center>
 </xsl:otherwise>
</xsl:choose>
</xsl:for-each>
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













	
