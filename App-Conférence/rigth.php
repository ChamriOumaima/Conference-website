<?php
$aff=null;
if(isset($_REQUEST['id'])){
  $aff=$_REQUEST['id'];
}

$nom = $prenom = $email = $sexe = $email2 = $withpaper = $paye = $devise = $montant = $city = $country = $address = "";
$date = $hour = $arrivalDate = $arrivalHour = $arrivalAirport = "";
$departureDate = $departureHour = $departureAirport = "";
$numPaper = $titlePaper = "";
/*!!!!!!!!!!!!!!!!!!!!!!!!!!!*/$author_list = $affiliation_list = "";/*!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
$hotelName = $hotelAddress = $hotelTel = "";
$seParticipate = $seDevise = $seMontant = "";
$accompagned = $prentship = $accName = "";

$nomErr = $prenomErr = $emailErr = $email2Err = $sexeErr = $withpaperErr = $payeErr = $deviseErr = $montantErr = $cityErr = $countryErr = $dateErr = $hourErr = $arrivalDateErr = $arrivalHourErr = $arrivalAirportErr = $departureDateErr = $departureHourErr = $departureAirportErr = $numPaperErr = $authorNameErr = $authorAffiliationErr = $titlePaperErr = $hotelNameErr = $hotelAddressErr = $hotelTelErr = $seParticipateErr = $seDeviseErr = $seMontantErr = $accompagnedErr = $prentshipErr = $accNameErr = $addressErr= "";

$fille = $garçon = false ;
$yes = $no = $yespaye = $nopaye = $yesSE =$noSE = $accyes = $accno =$yesseParticipate =$noseParticipate = false ;
$Dh = $Euro = $Dollar = $DhSE = $EuroSE = $DollarSE = false ;

function nom_valide(){
    global $nomErr, $nom;
    if(isset($_POST["firstname"])){
      $nom = $_POST["firstname"];
      if (preg_match("/^[a-zA-Z ]+$/",$nom)){
        return true;
      }
      else{
        $nom = "";
        $nomErr = "Nom invalide ";
        return false;
      }
    }
    else {
      $nomErr = "Veuillez entrer votre Nom ";
      return false;
    }
  }
function prenom_valide(){
    global $prenom, $prenomErr;
    if(isset($_POST["lastname"])){
      $prenom = $_POST["lastname"];
      if (preg_match("/^[a-zA-Z ]+$/",$prenom)){
        return true;
      }
      else{
        $prenom = "";
        $prenomErr = "prenom invalide";
        return false;
      }
    }
    else {
      $prenomErr = "Veuillez entrer votre Prenom";
      return false ;
    }
  }
function email_valide(){
    global $email;
    global $emailErr;
    if(isset($_POST["Email"])){
      $email = $_POST["Email"];
      if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
      }
      else{
        $email = "";
        $emailErr = "Email invalide";
        return false;
      }
    }
    else {
      $emailErr = "Veuillez entrer votre Email";
      return false ;
    }
  }
function email2_valide(){
    global $email2;
    global $email2Err;
    if(isset($_POST["Email2"])){
      $email2 = $_POST["Email2"];
      if (filter_var($email2, FILTER_VALIDATE_EMAIL)){
        return true;
      }
      else{
        $email2 = "";
        $email2Err = "Email invalide";
        return false;
      }
    }
    else {
      $email2Err = "Veuillez entrer votre Email";
      return false ;
    }
  }
function sexe_valide(){
    global $sexe, $sexeErr,$fille, $garçon;

    if(isset($_POST["sexe"])){
      $sexe = $_POST["sexe"];
      if($sexe == "F")
        $fille = true;
      else $garçon =true;
        return true ;
    }
    else {
      $sexeErr = "Veuillez choisir votre sexe";
      return false ;
    }
  }
function withpaper_valide(){
    global $withpaper, $withpaperErr,$yes, $no;

    if(isset($_POST["withpaper"])){
      $withpaper = $_POST["withpaper"];
      if($withpaper == "yes")
        $yes = true;
      else $no =true;
        return true ;
    }
    else {
      $withpaperErr = "Veuillez choisir votre choix";
      return false ;
    }
  }
function paye_valide(){
    global $paye, $payeErr,$yespaye, $nopaye;

    if(isset($_POST["paye"])){
      $paye = $_POST["paye"];
      if($paye == "yes")
        $yespaye = true;
      else $nopaye =true;
        return true ;
    }
    else {
      $payeErr = "Veuillez choisir !?";
      return false ;
    }
  }
function devise_valide(){
    global $devise, $deviseErr,$Dh, $Euro,$Dollar;

    if(isset($_POST["devise"])){
      $devise = $_POST["devise"];
      if($devise == "Dh")
        $Dh = true;
      else { if ($devise == "Euro") 
                $Euro =true;
             else $Dollar =true;
        }return true ;
    }
    else {
      $deviseErr = "Veuillez choisir !?";
      return false ;
    }
  }
function montant_valide(){
    global $montant, $montantErr;
    if(isset($_POST["montant"])){
      $montant = $_POST["montant"];
      if (preg_match("/^[0-9]+$/",$montant)){
        return true;
      }
      else{
        $montant = "";
        $montantErr = "montant invalide";
        return false;
      }
    }
    else {
      $montantErr = "Veuillez entrer votre montant";
      return false ;
    }
  }
function city_valide(){
    global $city, $cityErr;
    if(isset($_POST["city"])){
      $city = $_POST["city"];
      if (preg_match("/^[a-zA-Z ]+$/",$city)){
        return true;
      }
      else{
        $city = "";
        $cityErr = "city invalide";
        return false;
      }
    }
    else {
      $cityErr = "Veuillez entrer votre city";
      return false ;
    }
  }
function contry_valide(){
    global $country, $countryErr;
    if(isset($_POST["country"])){
      $country = $_POST["country"];
      if (preg_match("/^[a-zA-Z ]+$/",$country)){
        return true;
      }
      else{
        $country = "";
        $countryErr = "country invalide";
        return false;
      }
    }
    else {
      $countryErr = "Veuillez entrer votre country";
      return false ;
    }
  }
function address_valide(){
    global $address, $addressErr;
    if(isset($_POST["personalAdress"])){
      $address = $_POST["personalAdress"];
      if (preg_match("/^[a-zA-Z ]+$/",$address)){
        return true;
      }
      else{
        $address = "";
        $addressErr = "address invalide";
        return false;
      }
    }
    else {
      $addressErr = "Veuillez entrer votre address";
      return false ;
    }
  }
function date_valide(){
    global $date, $dateErr;
    if(isset($_POST["date_pre"])){
      $date = $_POST["date_pre"];
      if (strptime($date, "%Y-%m-%d")){ 
        return true;
      }
      else{
        $date = "";
        $dateErr = "date invalide";
        return false;
      }
    }
    else {
      $dateErr = "Veuillez entrer votre date";
      return false ;
    }
  }
function hour_valide(){
    global $hour, $hourErr;
    if(isset($_POST["hour"])){
      $hour = $_POST["hour"];
        if ($hour!=null) {
            return true;
           }
           else {
            $hour = "";
            $hourErr = "l'heure n'est pas valide";
            return false;
           }
        }
    else {
      $hourErr = "Veuillez entrer votre heure";
      return false ;
    }
  }
function arrivalDate_valide(){
    global $arrivalDate, $arrivalDateErr;
    if(isset($_POST["arrivalDate"])){
      $arrivalDate = $_POST["arrivalDate"];
      if (strptime($arrivalDate, "%Y-%m-%d")){
        return true;
      }
      else{
        $arrivalDate = "";
        $arrivalDateErr = "date invalide";
        return false;
      }
    }
    else {
      $arrivalDateErr = "Veuillez entrer votre date";
      return false ;
    }
  }
function departureDate_valide(){
    global $departureDate, $departureDateErr;
    if(isset($_POST["departureDate"])){
      $departureDate = $_POST["departureDate"];
      if (strptime($departureDate, "%Y-%m-%d")){
        return true;
      }
      else{
        $departureDate = "";
        $departureDateErr = "departureDate invalide";
        return false;
      }
    }
    else {
      $departureDateErr = "Veuillez entrer votre departureDate";
      return false ;
    }
  }
function arrivalHour_valide(){
    global $arrivalHour, $arrivalHourErr;
    if(isset($_POST["arrivalHour"])){
      $arrivalHour = $_POST["arrivalHour"];
        if ($arrivalHour!=null) {
            return true;
           }
           else {
            $arrivalHour = "";
            $arrivalHourErr = "l'heure n'est pas valide";
            return false;
           }
        }
    else {
      $arrivalHourErr = "Veuillez entrer votre heure";
      return false ;
    }
  }
function arrivalAirport_valide(){
    global $arrivalAirport, $arrivalAirportErr;
    if(isset($_POST["arrivalAirport"])){
      $arrivalAirport = $_POST["arrivalAirport"];
      if (preg_match("/^[a-zA-Z ]+$/",$arrivalAirport)){
        return true;
      }
      else{
        $arrivalAirport = "";
        $arrivalAirportErr = "Airport invalide";
        return false;
      }
    }
    else {
      $arrivalAirportErr = "Veuillez entrer votre Airport";
      return false ;
    }
  }
function departureHour_valide(){
    global $departureHour, $departureHourErr;
    if(isset($_POST["departureHour"])){
      $departureHour = $_POST["departureHour"];
        if ($departureHour!=null) {
            return true;
           }
           else {
            $departureHour = "";
            $departureHourErr = "l'heure n'est pas valide";
            return false;
           }
        }
    else {
      $departureHourErr = "Veuillez entrer votre heure";
      return false ;
    }
  }
function departureAirport_valide(){
    global $departureAirport, $departureAirportErr;
    if(isset($_POST["departureAirport"])){
      $departureAirport = $_POST["departureAirport"];
      if (preg_match("/^[a-zA-Z ]+$/",$departureAirport)){
        return true;
      }
      else{
        $departureAirport = "";
        $departureAirportErr = "Airport invalide";
        return false;
      }
    }
    else {
      $departureAirportErr = "Veuillez entrer votre Airport";
      return false ;
    }
  }
function numPaper_valide(){
    global $numPaper, $numPaperErr;
    if(isset($_POST["numPaper"])){
      $numPaper = $_POST["numPaper"];
      if (preg_match("/^[0-9]+$/",$numPaper)){
        return true;
      }
      else{
        $numPaper = "";
        $numPaperErr = "Nombre de pages invalide";
        return false;
      }
    }
    else {
      $numPaperErr = "Veuillez entrer le nombre de pages";
      return false ;
    }
  }
function titlePaper_valide(){
    global $titlePaper, $titlePaperErr;
    if(isset($_POST["titlePaper"])){
      $titlePaper = $_POST["titlePaper"];
      if (preg_match("/^[a-zA-Z ]+$/",$titlePaper)){
        return true;
      }
      else{
        $titlePaper = "";
        $titlePaperErr = "titre invalide";
        return false;
      }
    }
    else {
      $titlePaperErr = "Veuillez entrer le titre";
      return false ;
    }
  }
function hotelName_valide(){
    global $hotelName, $hotelNameErr;
    if(isset($_POST["hotelName"])){
      $hotelName = $_POST["hotelName"];
      if (preg_match("/^[a-zA-Z ]+$/",$hotelName)){
        return true;
      }
      else{
        $hotelName = "";
        $hotelNameErr = "Nom du hotel invalide";
        return false;
      }
    }
    else {
      $hotelNameErr = "Veuillez entrer le nom du hotel";
      return false ;
    }
  }
function hotelAddress_valide(){
    global $hotelAddress, $hotelAddressErr;
    if(isset($_POST["hotelAddress"])){
      $hotelAddress = $_POST["hotelAddress"];
      if (preg_match("/^[a-zA-Z0-9 ]+$/",$hotelAddress)){
        return true;
      }
      else{
        $hotelAddress = "";
        $hotelAddressErr = "Address invalide";
        return false;
      }
    }
    else {
      $hotelAddressErr = "Veuillez entrer address du hotel";
      return false ;
    }
  }
function hotelTel_valide(){
    global $hotelTel, $hotelTelErr;
    if(isset($_POST["hotelTel"])){
      $hotelTel = $_POST["hotelTel"];
      if (preg_match('`[0-9]{10}`',$hotelTel)){
        return true;
      }
      else{
        $hotelTel = "";
        $hotelTelErr = "tel invalide";
        return false;
      }
    }
    else {
      $hotelTelErr = "Veuillez entrer le tel";
      return false ;
    }
  }
function seDevise_valide(){
    global $seDevise, $seDeviseErr,$Dh, $Euro,$Dollar;

    if(isset($_POST["seDevise"])){
      $seDevise = $_POST["seDevise"];
      if($seDevise == "Dh")
        $DhSE = true;
      else { if ($seDevise == "Euro") 
                $EuroSE =true;
             else $DollarSE =true;
        }return true ;
    }
    else {
      $seDeviseErr = "Veuillez choisir !?";
      return false ;
    }
  }
function seMontant_valide(){
    global $seMontant, $seMontantErr;
    if(isset($_POST["seMontant"])){
      $seMontant = $_POST["seMontant"];
      if (preg_match("/^[0-9]+$/",$seMontant)){
        return true;
      }
      else{
        $seMontant = "";
        $seMontantErr = "montant invalide";
        return false;
      }
    }
    else {
      $seMontantErr = "Veuillez entrer votre montant";
      return false ;
    }
  }
function seParticipate_valide(){
    global $seParticipateErr, $seParticipate ,$noseParticipate ,$yesseParticipate;

    if(isset($_POST["seParticipate"])){
      $seParticipate = $_POST["seParticipate"];
      if($seParticipate == "yes")
        $yesseParticipate = true;
      else $noseParticipate =true;
        return true ;
    }
    else {
      $seParticipateErr = "Veuillez choisir !?";
      return false ;
    }
  }
function accompagned_valide(){
    global $accompagned, $accompagnedErr,$accyes, $accno;

    if(isset($_POST["accompagned"])){
      $accompagned = $_POST["accompagned"];
      if($accompagned == "yes")
        $accyes = true;
      else $accno =true;
        return true ;
    }
    else {
      $accompagnedErr = "Veuillez choisir !?";
      return false ;
    }
  }
function prentship_valide(){
    global $prentshipErr, $prentship;
    if(isset($_POST["prentship"])){
      $prentship = $_POST["prentship"];
      if (preg_match("/^[a-zA-Z ]+$/",$prentship)){
        return true;
      }
      else{
        $prentship = "";
        $prentshipErr = "prentship invalide ";
        return false;
      }
    }
    else {
      $prentshipErr = "Veuillez entrer le prentship ";
      return false;
    }
  }
function accName_valide(){
    global $accNameErr, $accName;
    if(isset($_POST["accName"])){
      $accName = $_POST["accName"];
      if (preg_match("/^[a-zA-Z ]+$/",$accName)){
        return true;
      }
      else{
        $accName = "";
        $accNameErr = "accName invalide ";
        return false;
      }
    }
    else {
      $accNameErr = "Veuillez entrer le accName ";
      return false;
    }
  }

function form_valide(){
        nom_valide();
        prenom_valide();
        email_valide();
        email2_valide();
        sexe_valide();
        withpaper_valide();
        paye_valide();
        devise_valide();
        montant_valide();
        city_valide();
        contry_valide();
        address_valide();
        date_valide();
        hour_valide();
        departureDate_valide();
        arrivalHour_valide();
        arrivalAirport_valide();
        arrivalDate_valide();
        departureHour_valide();
        departureAirport_valide();
        numPaper_valide();
        titlePaper_valide();
        hotelName_valide();
        hotelAddress_valide();
        hotelTel_valide();
        withpaper_valide();
        seDevise_valide();
        seMontant_valide();
        accompagned_valide();
        prentship_valide();
        accName_valide();
        seParticipate_valide();
      return (nom_valide() && prenom_valide() && email_valide() && email2_valide() && sexe_valide() && withpaper_valide() 
        && paye_valide() && devise_valide() && montant_valide() && city_valide() && contry_valide() && address_valide() && date_valide() && hour_valide() && departureDate_valide() && arrivalHour_valide() && arrivalAirport_valide() 
        && arrivalDate_valide() && departureHour_valide() && departureAirport_valide() && numPaper_valide() && titlePaper_valide() 
        && hotelName_valide() && hotelAddress_valide() && hotelTel_valide() && withpaper_valide() && seDevise_valide() 
        && seMontant_valide() && accompagned_valide() && prentship_valide() && accName_valide() && seParticipate_valide());
}


function show_form(){
      global $nom , $prenom , $email , $sexe , $email2 , $withpaper , $paye , $devise , $montant , $city , $country , $address ,$date, $hour , $arrivalDate , $arrivalHour , $arrivalAirport , $departureDate , $departureHour , $departureAirport , $numPaper, $titlePaper ,$hotelName , $hotelAddress , $hotelTel , $seParticipate , $seDevise , $seMontant ,$accompagned , $prentship , $accName ;
      global $nomErr , $prenomErr , $emailErr , $email2Err , $withpaperErr , $payeErr , $deviseErr , $montantErr , $cityErr , $countryErr , $addressErr , $dateErr ,$hourErr , $arrivalDateErr , $arrivalHourErr ,$arrivalAirportErr , $departureDateErr, $departureHourErr , $departureAirportErr , $numPaperErr , $authorNameErr , $authorAffiliationErr , $titlePaperErr , $hotelNameErr , $hotelAddressErr , $hotelTelErr , $seParticipateErr ,$seDeviseErr , $seMontantErr , $accompagnedErr , $prentshipErr , $accNameErr;
    echo "<div class=\"form-style-5\">
<center><h2>Registration</h2></center>
<form action=\"rigth.php\" method=\"post\">
<legend><span class=\"number\">1</span> Candidate Info</legend>
      <label for=\"fname\">First Name</label>
      <input type=\"text\" id=\"fsname\" name=\"firstname\" placeholder=\"Your name..\"> 
      <span class=\"error\">$nomErr</span><br>

  <!--*************************-->
      <label for=\"lname\">Last Name</label>
      <input type=\"text\" id=\"lname\" name=\"lastname\" placeholder=\"Your last name..\">
            <span class=\"error\">$prenomErr</span><br> 
  <!--*************************-->
    <label for=\"lname\">Sexe</label>
   <input type=\"radio\" name=\"sexe\" value=\"M\" id=\"yes\" checked=\"checked\" >
     Male  <input type=\"radio\" name=\"sexe\" value=\"F\" id=\"no\" >  Female 
      <span class=\"error\">$sexeErr</span><br>

<!--*************************-->
  <label for=\"lname\">Address</label>
  <input type=\"text\" id=\"lname\" name=\"personalAdress\" placeholder=\"Your address..\">
        <span class=\"error\">$addressErr</span><br>
<!--*************************-->

    <label for=\"lname\">With Paper</label>
    <input type=\"radio\" name=\"withpaper\" value=\"yes\" id=\"yes\" checked=\"checked\" >
     Yes
     <input type=\"radio\" name=\"withpaper\" value=\"no\" id=\"no\" >No     <span class=\"error\">$withpaperErr</span><br>

<br/>  
<!--*************************-->

    <label for=\"lname\">Email</label>
    <input type=\"email\" name=\"Email\" placeholder=\"xxx@xxx.xx\"/><span class=\"error\">$emailErr</span><br>

  <!--*************************-->

    <label for=\"lname\">Second Email</label>
    <input type=\"email\" name=\"Email2\" placeholder=\"xxx@xxx.xx\">
    <span class=\"error\">$email2Err</span><br>

  <!--*************************-->
<legend><span class=\"number\">2</span> Payement</legend>
    <label for=\"lname\">Paye :</label>
    <input type=\"radio\" name=\"paye\" value=\"yes\" id=\"yes\" checked=\"checked\" />Yes
    <input type=\"radio\" name=\"paye\" value=\"no\" id=\"no\" />No
        <span class=\"error\">$payeErr</span><br>

    <label for=\"lname\">Devise :</label>
      <select id=\"payement\" name=\"devise\">
        <option value=\"dh\">DH</option>
        <option value=\"euro\">Euro</option>
        <option value=\"dollars\">Dollars</option>
      </select>        <span class=\"error\">$deviseErr</span><br>

    <label for=\"montant\" >Montant :</label>
    <input type=\"number\" id=\"monant\" name=\"montant\" placeholder=\"Entrez un montant..\">      <span class=\"error\">$montantErr</span><br></tr>

    
<!--*************************-->
<legend><span class=\"number\">3</span> Affiliation</legend>
      <label for=\"c\">Country :</label>
      <input type=\"text\" placeholder=\"Entrez le pay..\" name=\"country\" title=\"country\">        <span class=\"error\">$countryErr</span><br></td>

       <label for=\"c\">City :</label>
      <input type=\"text\" placeholder=\"Entrez la ville..\" name=\"city\" title=\"city\">        <span class=\"error\">$cityErr</span><br><td>


<br/>
<!--*************************-->
<legend><span class=\"number\">4</span> Presentation</legend>
      <label for=\"lname\">Date :</label>
      <input type=\"date\" name=\"date_pre\">            <span class=\"error\">$dateErr</span><br><td>
 
      <label for=\"lname\">Hour :</label>
      <input type=\"Time\" name=\"hour\">              <span class=\"error\">$hourErr</span><br></td> 

<!--*************************-->
<legend><span class=\"number\">5</span> Travel</legend>
<legend><span class=\"num\">1</span>Arrival</legend>
<div>
      <label for=\"lname\">Date :</label>
      <input type=\"date\" name=\"arrivalDate\">           <span class=\"error\">$arrivalDateErr</span><br>


      <label for=\"lname\">Hour :</label>
      <input type=\"time\" name=\"arrivalHour\">             <span class=\"error\">$arrivalHourErr</span><br>
 

      <label for=\"lname\">Airoport :</label>
      <input type=\"text\" id=\"lname\" name=\"arrivalAirport\" placeholder=\"airoport..\">            <span class=\"error\">$arrivalAirportErr</span><br>

</div>
<br/>
<legend><span class=\"num\">2</span>Departure</legend>
<div>
      <label for=\"lname\">Date :</label>
      <input type=\"date\" name=\"departureDate\">            <span class=\"error\">$departureDateErr</span><br>

      <label for=\"lname\">Hour :</label>
      <input type=\"time\" name=\"departureHour\">              <span class=\"error\">$departureHourErr</span><br> 


      <label for=\"lname\">Airoport :</label>
      <input type=\"text\" id=\"lname\" name=\"departureAirport\" placeholder=\"airoport..\">          <span class=\"error\">$departureAirportErr</span><br>

</div>
<br/>
<!--*************************-->
<legend><span class=\"number\">6</span>Hotel</legend>
     <label for=\"lname\">Name :</label>
           <input type=\"text\" id=\"lname\" name=\"hotelName\" placeholder=\"hotel's name..\">          <span class=\"error\">$hotelNameErr</span><br></tr>

     <label for=\"lname\">Address :</label>
           <input type=\"text\" id=\"lname\" name=\"hotelAddress\" placeholder=\"airoport..\">          <span class=\"error\">$hotelAddressErr</span><br>

     <label for=\"lname\">Phone Number :</label>
          <input type=\"tel\" name=\"hotelTel\" placeholder=\"- - -   - - -   - - -\">        <span class=\"error\">$hotelTelErr</span><br>

 <!--*************************-->
<legend><span class=\"number\">7</span>Paper</legend>
      Title : <input type=\"text\" name=\"titlePaper\" placeholder=\"Papers title...\">            <span class=\"error\">$titlePaperErr</span><br>
</br>
      Number:  <input type=\"number\" name=\"numPaper\" >            <span class=\"error\">$numPaperErr</span>

      <table id=\"tblSample\" class=\"ft\">
      <thead>
      <td>Author </td>
      <td>Name </td>
      <td>Afiliation</td>

      </thead>
    
      <thead>
      <td>1</td>
      <td><input type=\"text\" name=\"author[]\"
         id=\"author\" size=\"20\" onkeypress=\"keyPressTest(event, this);\" /></td>
      <td>
      <input type=\"text\" name=\"affiliation[]\"
         id=\"affiliation\" size=\"20\" onkeypress=\"keyPressTest(event, this);\" />
      </td>
      </thead>
    </table>
    <p>
      <input type=\"button\" class=\"btnit sendit\" value=\"Add\" onclick=\"addRowToTable();\" />
      <input type=\"button\" class=\"btnit sendit\" value=\"Remove\" onclick=\"removeRowFromTable();\" />
    </p>
 

<!--*************************-->
<legend><span class=\"number\">8</span>Social Event</legend>
  <label for=\"lname\">Participate :</label>
   <input type=\"radio\" name=\"seParticipate\" value=\"yes\" id=\"yes\" checked=\"checked\" />Yes
     <input type=\"radio\" name=\"seParticipate\" value=\"no\" id=\"no\" />No      <span class=\"error\">$seParticipateErr</span><br>

     <br/>
          <label for=\"lname\">Devise :</label>
            <select id=\"payement\" name=\"seDevise\">
        <option value=\"dh\">DH</option>
        <option value=\"euro\">Euro</option>
        <option value=\"dollars\">Dollars</option>
      </select>        <span class=\"error\">$seDeviseErr</span><br>

      <label for=\"montant\" >Montant :</label>
            <input type=\"number\" id=\"monant\" name=\"seMontant\" placeholder=\"Entrez un montant..\">            <span class=\"error\">$seMontantErr</span><br>

          <label for=\"lname\">Accompagned :</label>
   <input type=\"radio\" name=\"accompagned\" value=\"yes\" id=\"yes\" checked=\"checked\" />Yes
     <input type=\"radio\" name=\"accompagned\" value=\"no\" id=\"no\" />No      <span class=\"error\">$accompagnedErr</span><br>

     <br/>
       <label for=\"lname\">Prentship :</label>
           <input type=\"text\" id=\"monant\" name=\"prentship\" placeholder=\"name..\">          <span class=\"error\">$prentshipErr</span><br>
           <br/> 
      <label for=\"lname\">Accompagned Name :</label>
    <input type=\"text\" id=\"monant\" name=\"accName\" placeholder=\"name..\">      <span class=\"error\">$accNameErr</span><br>
   <center>
    <button type=\"reset\" value=\"effacer\" class=\"btn reset\">Effacer</button>
    <button type=\"submit\" name=\"submit\" class=\"btn send\">Envoyer</button>
  </center>

</form>
</div>";
    }
   

    if(form_valide()){
        ////////////////////////////////////////////////////////////////////////////
        function participant($dom, $id, $sexe, $withpaper, $nom, $prenom, $email,$email2, $paye, $devise, $montant, $author_list, $affiliation_list, $city , $country , $address ,$date, $hour , $arrivalDate , $arrivalHour , $arrivalAirport , $departureDate , $departureHour , $departureAirport , $numPaper, $titlePaper ,$hotelName , $hotelAddress , $hotelTel , $seParticipate , $seDevise , $seMontant ,$accompagned , $prentship , $accName)
{
    $participant_node = $dom->createElement('participant');

    $attr_participant_id = new DOMAttr('id', $id);

    $participant_node->setAttributeNode($attr_participant_id);

    $attr_participant_sexe = new DOMAttr('sexe', $sexe);

    $participant_node->setAttributeNode($attr_participant_sexe);

    $attr_participant_paper = new DOMAttr('withpaper', $withpaper);

    $participant_node->setAttributeNode($attr_participant_paper);

    $child_node_firstName = $dom->createElement('firstname', $nom);

    $participant_node->appendChild($child_node_firstName);

    $child_node_lastName = $dom->createElement('lastname', $prenom);

    $participant_node->appendChild($child_node_lastName);

    $child_node_email = $dom->createElement('Email', $email);

    $participant_node->appendChild($child_node_email);

    $child_node_email2 = $dom->createElement('Email2', $email2);

    $participant_node->appendChild($child_node_email2);

    // payement child
    $child_node_payement = $dom->createElement('payement');

    // payement attributes
    $attr_payement_paye = new DOMAttr('paye', $paye);

    $child_node_payement->setAttributeNode($attr_payement_paye);

    $attr_payement_devise = new DOMAttr('devise', $devise);

    $child_node_payement->setAttributeNode($attr_payement_devise);

    $attr_payement_montant = new DOMAttr('montant', $montant);

    $child_node_payement->setAttributeNode($attr_payement_montant);

    $participant_node->appendChild($child_node_payement);

    // affiliation child
    $child_node_affiliation = $dom->createElement('affiliation');

    $participant_node->appendChild($child_node_affiliation);

    // affiliation attributes
    $attr_affiliation_city = new DOMAttr('city', $city);

    $child_node_affiliation->setAttributeNode($attr_affiliation_city);

    $attr_affiliation_country = new DOMAttr('country', $country);

    $child_node_affiliation->setAttributeNode($attr_affiliation_country);

    // Address child
    $child_node_address = $dom->createElement('adress',$address);

    $participant_node->appendChild($child_node_address);

    // presentation child
    $child_node_presentation = $dom->createElement('presentation');

    $participant_node->appendChild($child_node_presentation);

    // presentation attributes
    $attr_presentation_date = new DOMAttr('date', $date);

    $child_node_presentation->setAttributeNode($attr_presentation_date);

    $attr_presentation_hour = new DOMAttr('hour', $hour);

    $child_node_presentation->setAttributeNode($attr_presentation_hour);

    // travel child
    $child_node_travel = $dom->createElement('travel');

    // travel's children
    //arrival
    $grandChild_node_arrival = $dom->createElement('arrival');

    $child_node_travel->appendChild($grandChild_node_arrival);

    $attr_arrival_date = new DOMAttr('date', $arrivalDate);

    $grandChild_node_arrival->setAttributeNode($attr_arrival_date);

    $attr_arrival_hour = new DOMAttr('hour', $arrivalHour);

    $grandChild_node_arrival->setAttributeNode($attr_arrival_hour);

    $attr_arrival_airport = new DOMAttr('airport',$arrivalAirport);

    $grandChild_node_arrival->setAttributeNode($attr_arrival_airport);

    $child_node_travel->appendChild($grandChild_node_arrival);

    //departure
    $grandChild_node_departure = $dom->createElement('departure');

    $child_node_travel->appendChild($grandChild_node_departure);

    $attr_departure_date = new DOMAttr('date', $departureDate);

    $grandChild_node_departure->setAttributeNode($attr_departure_date);

    $attr_departure_hour = new DOMAttr('hour', $departureHour);

    $grandChild_node_departure->setAttributeNode($attr_departure_hour);

    $attr_departure_airport = new DOMAttr('airport', $departureAirport);

    $grandChild_node_departure->setAttributeNode($attr_departure_airport);

    $child_node_travel->appendChild($grandChild_node_departure);

    $participant_node->appendChild($child_node_travel);

// paper child
    $child_node_paper = $dom->createElement('paper');

    // paper attributes
    $attr_paper_number = new DOMAttr('number', $numPaper);

    $child_node_paper->setAttributeNode($attr_paper_number);

    $grandChild_node_author = $dom->createElement('author');

    $child_node_paper->appendChild($grandChild_node_author);
////////////////////////////!!!!!!!!!!important!!!!!!!!!!////////////////////////////////////////
    for ($i = 0; $i < count($author_list); $i++) {
        $ggrandChild_node_name = $dom->createElement('name', $author_list[$i]);

        $grandChild_node_author->appendChild($ggrandChild_node_name);

        $ggrandChild_node_affiliation = $dom->createElement('affiliation', $affiliation_list[$i]);

        $grandChild_node_author->appendChild($ggrandChild_node_affiliation);
    }
////////////////////////////////////////////////////////////////////
    $grandChild_node_title = $dom->createElement('title',$titlePaper);

    $child_node_paper->appendChild($grandChild_node_title);

    $participant_node->appendChild($child_node_paper);

// hotel child
    $child_node_hotel = $dom->createElement('hotel');

    $grandChild_node_name = $dom->createElement('name',$hotelName);

    $child_node_hotel->appendChild($grandChild_node_name);

    $grandChild_node_addresse = $dom->createElement('addresse',$hotelAddress);

    $child_node_hotel->appendChild($grandChild_node_addresse);

    $grandChild_node_tel = $dom->createElement('tel',$hotelTel);

    $child_node_hotel->appendChild($grandChild_node_tel);

    $participant_node->appendChild($child_node_hotel);

// social event
    $child_node_socialEvent = $dom->createElement('socialEvent');

    // social event attributes
    $attr_social_participant = new DOMAttr('participant', $seParticipate);

    $child_node_socialEvent->setAttributeNode($attr_social_participant);

    $participant_node->appendChild($child_node_socialEvent);

// payement child
    $child_node_payement_t = $dom->createElement('payement');

// payement attributes
    //$attr_payement_paye_t = new DOMAttr('paye', $paye);

    //$child_node_payement_t->setAttributeNode($attr_payement_paye_t);

    $attr_payement_devise_t = new DOMAttr('devise',$seDevise);

    $child_node_payement_t->setAttributeNode($attr_payement_devise_t);

    $attr_payement_montant_t = new DOMAttr('montant', $seMontant);

    $child_node_payement_t->setAttributeNode($attr_payement_montant_t);

    $child_node_socialEvent->appendChild($child_node_payement_t);

// accopagned

    $child_node_accopagned = $dom->createElement('accopagned');

// payement attributes
    $attr_accopagned_accopagned = new DOMAttr('accopagned', $accompagned);

    $child_node_accopagned->setAttributeNode($attr_accopagned_accopagned);

    $attr_accopagned_prentship = new DOMAttr('prentship', $prentship);

    $child_node_accopagned->setAttributeNode($attr_accopagned_prentship);

    $child_node_socialEvent->appendChild($child_node_accopagned);

    $grandchild_node_accopagned_name = $dom->createElement('name', $accName);

    $child_node_accopagned->appendChild($grandchild_node_accopagned_name);

    return $participant_node;
}

$author_list = $_POST['author'];
$affiliation_list = $_POST['affiliation'];

//var_dump($_POST['author']);

$xml_file_name = 'form1.xml';

if (file_exists('form1.xml')) {

    $dom = new DOMDocument();
    $dom->encoding = 'utf-8';
    $dom->xmlVersion = '1.0';
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->load($xml_file_name);
    $list = $dom->getElementsByTagName("participant");
    $participant_num = count($list);
    $root = $dom->getElementsByTagName("register")->item(0);

     $participant_node = participant($dom,$aff, $sexe, $withpaper, $nom, $prenom,$email, $email2, $paye, $devise, $montant, $author_list, $affiliation_list, $city , $country , $address ,$date, $hour , $arrivalDate , $arrivalHour , $arrivalAirport , $departureDate , $departureHour , $departureAirport , $numPaper, $titlePaper ,$hotelName , $hotelAddress , $hotelTel , $seParticipate , $seDevise , $seMontant ,$accompagned , $prentship , $accName);
 
 foreach ($list as $k) {

   if($k->getAttribute('id')==$aff){
    echo "dans ";
    $root->replaceChild($participant_node,$k);
    break;
   }

 }

/////////////////////////////////////////////////////////////////////////////

    $dom->appendChild($root);

    $dom->save($xml_file_name);

    header('Location: index.html');

} else {

    // in case there is no file called participant.xml
    $dom = new DOMDocument();
    $dom->encoding = 'utf-8';
    $dom->xmlVersion = '1.0';
    $dom->formatOutput = true;
    $root = $dom->createElement('register');
    $root->appendChild($participant_node);
    $dom->appendChild($root);

    $participant_node = participant($dom,$aff, $sexe, $withpaper, $nom, $prenom,$email, $email2, $paye, $devise, $montant, $author_list, $affiliation_list, $city , $country , $address ,$date, $hour , $arrivalDate , $arrivalHour , $arrivalAirport , $departureDate , $departureHour , $departureAirport , $numPaper, $titlePaper ,$hotelName , $hotelAddress , $hotelTel , $seParticipate , $seDevise , $seMontant ,$accompagned , $prentship , $accName);

 
      $root->appendChild($participant_node);


    $dom->save($xml_file_name);
        header('Location: webindex.html');


}
    }else{
      show_form();
    }


?>
</body>
</html>