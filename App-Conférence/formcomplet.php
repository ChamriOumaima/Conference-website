<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
  
  // left cell
  var cellLeft = row.insertCell(0);
  var textNode = document.createTextNode(iteration);
  cellLeft.appendChild(textNode);
  
  // right cell
  var cellRight = row.insertCell(1);
  var el = document.createElement('input');
  el.type = 'text';
  el.name = 'author[]'+iteration;
  el.id = 'author'+iteration;
  el.size = 20;
  
  
  el.onkeypress = keyPressTest;
  cellRight.appendChild(el);
  
  // select cell
  var cellRightSel = row.insertCell(2);
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
<form action="formInscription.php" method="post">
<legend><span class="number">1</span> Candidate Infomations</legend>
      <label for="fname">First Name</label>
      <input type="text" id="fsname" name="firstname" placeholder="Your name.."><br/> 
  <!--*************************-->
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br/>  
  <!--*************************-->
    <label for="lname">Sexe</label>
   <input type="radio" name="sexe" value="M" id="yes" checked="checked" >
     Male  <input type="radio" name="sexe" value="F" id="no" >  Female<br/>  
<br/>  

<!--*************************-->
  <label for="lname">Address</label>
  <input type="text" id="lname" name="personalAdress" placeholder="Your address.."><br/>  
<!--*************************-->

    <label for="lname">With Paper</label>
    <input type="radio" name="withpaper" value="yes" id="yes" checked="checked" >
     Yes
     <input type="radio" name="withpaper" value="no" id="no" >No<br/>  
<br/>  
<!--*************************-->

    <label for="lname">Email</label>
    <input type="email" name="Email" placeholder="xxx@xxx.xx"> <br/>  
  <!--*************************-->

    <label for="lname">Second Email</label>
    <input type="email" name="Email2" placeholder="xxx@xxx.xx"> <br/> 
  <!--*************************-->
<legend><span class="number">2</span> Payement</legend>
    <label for="lname">Paye :</label>
    <input type="radio" name="paye" value="yes" id="yes" checked="checked" />Yes
    <input type="radio" name="paye" value="no" id="no" />No
  <label for="c">*Si oui choisissez quel sorte de payement:</label><br/>  
    <label for="lname">Devise :</label>
      <select id="payement" name="devise">
        <option value="dh">DH</option>
        <option value="euro">Euro</option>
        <option value="dollars">Dollars</option>
      </select><br/>
    <label for="montant" >Montant :</label>
    <input type="number" id="monant" name="montant" placeholder="Entrez un montant.."><br/> 
    
<!--*************************-->
<legend><span class="number">3</span> Affiliation</legend>
      <label for="c">Country :</label>
      <input type="text" placeholder="Entrez le pay.." name="country" title="country"><br/> 
       <label for="c">City :</label>
      <input type="text" placeholder="Entrez la ville.." name="city" title="city"><br/> 

<br/>
<!--*************************-->
<legend><span class="number">4</span> Presentation</legend>
      <label for="lname">Date :</label>
      <input type="date" name="date_pre"><br/> 
      <label for="lname">Hour :</label>
      <input type="Time" name="hour">  <br/> 
<!--*************************-->
<legend><span class="number">5</span> Travel</legend>
<legend><span class="num">1</span>Arrival</legend>
<div>
      <label for="lname">Date :</label>
      <input type="date" name="arrivalDate"><br/> 

      <label for="lname">Hour :</label>
      <input type="time" name="arrivalHour"> <br/> 

      <label for="lname">Airoport :</label>
      <input type="text" id="lname" name="arrivalAirport" placeholder="airoport.."><br/>
</div>
<br/>
<legend><span class="num">2</span>Departure</legend>
<div>
      <label for="lname">Date :</label>
      <input type="date" name="departureDate"><br/> 

      <label for="lname">Hour :</label>
      <input type="time" name="departureHour">  <br/> 

      <label for="lname">Airoport :</label>
      <input type="text" id="lname" name="departureAirport" placeholder="airoport.."><br/> 
</div>
<br/>
<!--*************************-->
<legend><span class="number">6</span>Hotel</legend>
     <label for="lname">Name :</label>
           <input type="text" id="lname" name="hotelName" placeholder="hotel's name.."><br/>
     <label for="lname">Address :</label>
           <input type="text" id="lname" name="hotelAddress" placeholder="airoport.."><br/> 
     <label for="lname">Phone Number :</label>
          <input type="tel" name="hotelTel" placeholder="- - -   - - -   - - -"><br/> <!--pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"-->  
 <!--*************************-->
<legend><span class="number">7</span>Paper</legend>
      Title : <input type="text" name="titlePaper" placeholder="Papers title..."><br></br>
      Number:  <input type="number" name="numPaper" >
      <table id="tblSample" class="ft">
      <thead>
      <td>Author </td>
      <td>Name </td>
      <td>Afiliation</td>

      </thead>
    
      <thead>
      <td>1</td>
      <td><input type="text" name="author[]"
         id="author" size="20" onkeypress="keyPressTest(event, this);" /></td>
      <td>
      <input type="text" name="affiliation[]"
         id="affiliation" size="20" onkeypress="keyPressTest(event, this);" />
      </td>
      </thead>
    </table>
    <p>
      <input type="button" class="btnit sendit" value="Add" onclick="addRowToTable();" />
      <input type="button" class="btnit sendit" value="Remove" onclick="removeRowFromTable();" />
    </p>
 

<!--*************************-->
<legend><span class="number">8</span>Social Event</legend>
  <label for="lname">Participate :</label>
   <input type="radio" name="seParticipate" value="yes" id="yes" checked="checked" />Yes
     <input type="radio" name="seParticipate" value="no" id="no" />No<br/>
     <br/>
          <label for="lname">Devise :</label>
            <select id="payement" name="seDevise">
        <option value="dh">DH</option>
        <option value="euro">Euro</option>
        <option value="dollars">Dollars</option>
      </select><br/>
      <label for="montant" >Montant :</label>
            <input type="number" id="monant" name="seMontant" placeholder="Entrez un montant.."><br/> 
          <label for="lname">Accompagned :</label>
   <input type="radio" name="accompagned" value="yes" id="yes" checked="checked" />Yes
     <input type="radio" name="accompagned" value="no" id="no" />No<br/>
     <br/>
       <label for="lname">Prentship :</label>
           <input type="text" id="monant" name="prentship" placeholder="name.."><br/> 
           <br/> 
      <label for="lname">Accompagned Name :</label>
    <input type="text" id="monant" name="accName" placeholder="name.."><br/> 
   <center>
    <button type="reset" value="effacer" class="btn reset">Effacer</button>
    <button type="submit" name="submit" class="btn send">Envoyer</button>
  </center>

   <!--///////////////////////////////////////////////-->
</form>
</div>
 
</body>
</html>
