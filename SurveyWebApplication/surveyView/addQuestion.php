<html>
<head><title>Add Question</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<?php
	session_start();
	if(isset($_GET['$sid'])){
		$_SESSION['sID']=$_GET['id'];
	}
	if(!isset($_SESSION["name"])){
		header("location:login.php");
		//$sID = $_SESSION[''];
	}
?>
<style>
.dropbtn {
  background-color: #3498DB;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {
	background-color: #ddd;
}

.show {
	display: block;
}
</style>
	<body>
	<table>
	<form method="post" action ="addQuestionForm.php">
		<tr>
			<td> Title of Question:</td>
			<td><input type="text" name="questionTitle"/></td>
		</tr>
		<!--<tr>
			<td>
				<div class="dropdown
				<button onclick="myFunction()" class="dropbtn">Question Type</button>
				<div id="myDropdown" class="dropdown-content">
					<button  onclick = "freeResponse()"name="freeRes">Free Answer</button>
					<button onclick = "multiChoice()"name = "multChoice">Multiple Choice</button>
					<button onclick = "multiSelect()"name="multiSel">Mulitple Selection</button>
				</div>
			</div></td>
			
			<script>
				function myFunction() {
					document.getElementById("myDropdown").classList.toggle("show");
				}
				window.onclick = function(event) {
					if (!event.target.matches('.dropbtn')) {
						var dropdowns = document.getElementsByClassName("dropdown-content");
						var i;
						for (i = 0; i < dropdowns.length; i++) {
							var openDropdown = dropdowns[i];
							if (openDropdown.classList.contains('show')) {
								openDropdown.classList.remove('show');
							}
						}
					}
				}
				
				function freeResponse(){
					var displaySpan = document.getElementById("display");
					displaySpan.innerHTML = "Enter Question: ";
					displaySpan.innerHTML+=" <input type='text' value=''>"
					
				}
				
				function multiChoice(){
					var displaySpan = document.getElementById("display");
					displaySpan.innerHTML = "Enter Question: ";
					displaySpan.innerHTML+=" <input type='text' value=''>"
				}
				function multiSelect(){
					var displaySpan = document.getElementById("display");
					displaySpan.innerHTML = "Enter Question: ";
					displaySpan.innerHTML+=" <input type='text' value=''>"
				}
			</script>
			</td>
			<br/><br/>
		</tr>
			<td><span id="display"></span></td>
		</tr>-->
		<tr>
			<td><input type="submit" class="button" name="addQuestion" value="Submit"/></td>
		</tr>
	</table>
	</form>
<a href = http://localhost:8080/SurveyWebApplication/SurveyView.php><input class="button"type ="submit" value="Back"/>	
	</body>
	
</html>