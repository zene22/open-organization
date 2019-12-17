<?php
session_start();
    if(isset($_REQUEST['lang'])) {
        $_SESSION['lang'] = $_REQUEST['lang'];
    }
    $language = (isset($_SESSION['lang']) ? $_SESSION['lang'] : "en");

if (($language != "ru") && ($language != "de") && ($language != "en")) {
	$language = "en";
	$_SESSION['lang'] = "en";
}

if(!isset($_SESSION['usr_name'])) {
header("Location: login.php");
}
include('functionPutFieldsets.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://overpass-30e2.kxcdn.com/overpass.css"/>
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/jquery.qtip.css" />
<link rel="stylesheet" href="css/bootstrap-slider.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link href="css/bootstrap-toggle.min.css" rel="stylesheet">


<script src="js/jquery-1.12.4.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.qtip.min.js"></script>
<script>$.fn.slider = null</script>  
<script src="js/bootstrap-slider.js"></script>  
<script src="js/bootstrap-toggle.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 


<script type="text/javascript" >
  $( function() {
$("#input").slider({
//    ticks: [0, 0.5, 1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5],
//    ticks_labels: ['0', '0.5', '1', '1.5', '2', '2.5', '3', '3.5', '4', '4.5', '5'],
    ticks: [0, 0.5, 1, 1.5, 2, 2.5, 3],
    ticks_labels: ['0', '0.5', '1', '1.5', '2', '2.5', '3'],
    step: "0.5",
    id: 'sliderCol',
    min: 0,
    max: 6,
    value: 0,
    tooltip: "show",
    rangeHighlights: [{ "start": 0, "end": 1, "class": "category1"},
                      { "start": 1, "end": 2, "class": "category2"},
                      { "start": 2, "end": 3, "class": "category3"}
							]});
});
</script>
  <script>
//  $( function() {
//    $( "input" ).checkboxradio();
//  } );
  </script>

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img src="images/innovate.png">  Open Organization Capability Model</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
			<li><a href=assess.php?lang=en>English</a></li>
			<li><a href=assess-de.php?lang=de>Deutsch</a></li>
			<li><a href=assess-ru.php?lang=ru>Pусский</a></li>
				<li><p class="navbar-text">Angemeldet als <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="passwd.php">Passwort ändern</a></li>
				<li><a href="logout.php">Abmelden</a></li>
			</ul>
		</div>
	</div>
</nav>
    <div class="container-fluid">
    

<form id="regForm" action="tmp.php">
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
<h3>Wilkommen zum Open Organization Capability Model</h3>

<p class="mainText">
Das Open Organization Capability Model ist ein Werkzeug zur Bewertung der Unternehmenskultur.
</p>

<p class="mainText">
Genauer gesagt, misst das Werkzeug das relative Niveau der Offenheit ihrer Organisation, mit besonderem Augenmerk auf die fünf offenen Prinzipien, die in der <a href="https://github.com/open-organization-ambassadors/open-org-definition/blob/master/open_org_definition.md" target=_blank><b>Open Organization Definition</b></a> dargestellt werden:
</p>

<ul>
        <li class="mainText">Transparenz</li>
        <li class="mainText">Inklusivität</li>
        <li class="mainText">Anpassungsfähigkeit</li>
        <li class="mainText">Zusammenarbeit</li>
        <li class="mainText">Gemeinschaft</li>
</ul>

<p class="mainText">
Im Rahmen des Bewertungsprozesses erfahren Sie, wie Einzelpersonen, Teams und Organisationen ihre Organisationspraktiken kritisch prüfen und ihre Fortschritte auf dem Weg zu einer offeneren Organisation dokumentieren können.
</p>

<p class="mainText">
Dieses Tool basiert auf dem <a href="http://www.opensource.com/open-organization/resources/open-org-maturity-model" target=_blank><b>Open Organization Maturity Model</b></a>, das von der Open Organization Community auf Opensource.com verwaltet wird.
</p>

<p class="mainText">Bevor Sie mit der Bewertung beginnen, denken Sie daran: Alle Organisationen unterscheiden sich und wenden in unterschiedlichem Maße offene Prinzipien und Praktiken an. Das dreistufige Design dieses Modells zielt daher sowohl darauf ab, Organisationen bei der Bestimmung des relativen Grades ihres offenen Handelns zu unterstützen als auch ihnen dabei zu helfen, Möglichkeiten zu erkunden, dies zu tun.
</p>

<p class="mainText">
<b>Wichtiger Hinweis:</b> Dieses Werkzeug ist für die Verwendung in Verbindung mit einem geführten Gespräch in einem Workshop vorgesehen. Die Ergebnisse sollten nur als Diskussionsgrundlage in einem Lernkontext verwendet werden. Dieses Werkzeug dient in keiner Weise einer vollständigen oder umfassenden Bewertung der Fähigkeiten eines gesamten Unternehmens.
</p>

  </div>
  <div class="tab"><h4>Kundendetails</h4>
    <p><input placeholder="Name des Kunden" oninput="this.className = ''" name="customerName" ></p>
    <p><input placeholder="Email Adresse" oninput="this.className = ''" name="rhEmail"  ></p>
    <p><input placeholder="Projekt/Team" oninput="this.className = ''" name="project"  ></p>
<!-- <label class="checkbox-inline">
  <input type="checkbox" class="shareBox" name="share" id="share" checked> Stimmen Sie zu, dass die anonymen Ergebnisse zu Vergleichszwecken verwendet werden dürfen?

 </label>
 --><p>Stimmen Sie zu, dass die anonymen Ergebnisse zu Vergleichszwecken verwendet werden dürfen?</p>

<input type="checkbox" data-toggle="toggle" data-on="Ja" data-off="Nein" name="share" id="share" data-size="normal" data-onstyle="success"  data-offstyle="danger" checked>
    <p class="mainTextItalic">Information: Vergleiche sind nur verfügbar, wenn Sie die Freigabe von Daten aktivieren</p>


 <p>Stimmen Sie zu, dass Red Hat Sie nach dieser Bewertung per E-Mail kontaktieren darf?</p>

<input type="checkbox" data-toggle="toggle" data-on="Ja" data-off="Nein" name="contact" id="contact" data-size="normal" data-onstyle="success"  data-offstyle="danger" checked>
<br><br>
<p>Bitte wählen Sie in den Dropdown-Listen Land und Branche aus</p>
<?php putCountries_de();?>

<?php putLoBs_de();?>
    
  </div>
  
<?php

function printQuestions($title,$area) {
$string = file_get_contents("questionsV2-de.json");
$json = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $string), true );

$i=1;
$qnum = $json[$area]['qnum'];

print '   <h2>' . $title . '</h2><b>' . $json[$area]['overview'] . '</b>
<br><br>
<div class="divTable">
<div class="divTableBody">
<div class="divTableRow">';

while( $i < 4) {
	if($i % 2 == 0){
	print '<div class="dark">';	
	} else {
	print '<div class="divTableCell">';	
	}
#	print '<div class="divTableCell">';
#	$sum = $i . '-summary';
#	print '<p><b>Summary:</b>' . $json[$area][$sum] . '</p>';
   print '<b>Level ' . $i . '</b>'; 
	print '<p>' . $json[$area][$i] . "</p>";
#	if ($json[$type][$area][$i]['description'] != "XXX") {
#		print '<a href="#" title="' . $json[$type][$area][$i]['description'] . '">Mehr Details</a>';
#	}
	print "</div>";
$i++;
}
print '</div>
</div>';
print '</div>';
print "<hr><h4 class='headerCentered'>Status Quo</h4>";
print '<input data-slider-id="sliderCol" class="slider" type="range" data-slider-value="1"  name="d' . $qnum . '" type="text" data-slider-rangeHighlights=[{ "start": 0, "end": 1, "class": "category1" }, { "start": 1, "end": 2, "class": "category2" }, { "start": 2, "end": 3, "class": "category3" }] />';
print "
<h4 class='headerCentered'>Vision</h4>";
print '<input data-slider-id="sliderCol" class="slider" type="range" data-slider-value="1"  name="o' . $qnum . '" type="text" data-slider-rangeHighlights=[{ "start": 0, "end": 2, "class": "category1" }, { "start": 1, "end": 2, "class": "category2" }, { "start": 2, "end": 3, "class": "category3" }] />';
print "<br>";
print "<h4>Hinweise</h4>";
print '<textarea form=regForm name="comments_' . $area . '" id="comments_' . $area . ' wrap="soft" rows="2"></textarea>';
};

?>  
  
  <div class="tab">
<?php printQuestions("Transparenz","transparency");  ?>
  </div>

  <div class="tab">
<?php printQuestions("Inklusivität","inclusivity");  ?>
  </div>

  <div class="tab">
<?php printQuestions("Anpassungsfähigkeit","adaptability");  ?>
  </div>

  <div class="tab">
<?php printQuestions("Zusammenarbeit","collaboration");  ?>
  </div>

  <div class="tab">
<?php printQuestions("Gemeinschaft","community");  ?>
  </div>

  <div class="tab">
<h2>Diskussionspuntke</h2>
  <h4> Bitte fügen sie etwaige Diskussionspunkte oder weitere Informationen hier ein</h4>
<br>
<textarea form=regForm name="comments" id="comments" wrap="soft" rows="20"></textarea>
  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtnCJ" onclick="nextPrev(-1)">Zurück</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Weiter</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>    
    <span class="step"></span>     
    <span class="step"></span>     
         </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtnCJ").style.display = "none";
  } else {
    document.getElementById("prevBtnCJ").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Abschicken";
  } else {
    document.getElementById("nextBtn").innerHTML = "Weiter";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = true;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script type="text/javascript" >
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>




  <script>
$(".slider").slider({
    step: 0.5,
    min: 1,
    max: 3,
    value: 1,
    ticks: [1, 1.5, 2, 2.5, 3],

    slide: function(event, ui) {
//        $("input[name=" + $(this).attr("id")).val(ui.value);
        $("input[name=" + $(this).attr("id")).val((ui.value / 10) - 0.1 + 1);
    }
});

  </script>
<div>
<script type="text/javascript" >
 $(document).ready(function()
 {
     // Show tooltip on all <a/> elements with title attributes, but only when
     // clicked. Clicking anywhere else on the document will hide the tooltip
     $('a[title]').qtip({
         show: 'click',
         hide: 'unfocus'
     });
 });
</script>  
  <script>
  $( function() {
    $( "#country" )
      .selectmenu()
      .selectmenu( "menuWidget" )
        .addClass( "overflow" );

    $( "#lob" )
      .selectmenu()
      .selectmenu( "menuWidget" )
        .addClass( "overflow" );

  } );
  </script>
</body>
</html>
