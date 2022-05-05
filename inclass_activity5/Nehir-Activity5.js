var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };
var is_first_click = true


window.onload = function () {
	$("add").onclick = addScore;
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("name").focus();
};

function displayResults()
{
	var average = 0;
	for(var i=0;i<scores.length;i++)
	{
		average = (average*(i)+scores[i])/(i+1);

	}
	document.getElementById("results").innerHTML="<h2> Results </h2><p> Average score is "+average + "</p> " + "<p> High score = " + names[scores.indexOf(Math.max(...scores))] + " with a score of " + Math.max(...scores) + " </p>" 
}

function addScore(){
	var score = parseInt($("score").value)
	var name = $("name").value
	if(validateScore(score) && name !== ""){
		names.push($("name").value) 
		scores.push(parseInt($("score").value))
	}
	else{
		alert("You must enter a name and a valid score")
	}
	// clear input fields
	$("name").value = ""
	$("score").value = ""
	// cursor
	$("name").focus();
	
}

function displayScores(){
	table = $("scores_table")

	// insert <h2> tag before <table> (new element is created for each click that's why I used is_first_click lag)
	if(is_first_click){
		title = document.createElement("h2")
		title.innerHTML = "Scores"
		table.parentNode.insertBefore(title, table)
		is_first_click = false // do not create this element again
	}
	
	table.innerHTML = "<tr> <th> Name </th> <th> Score </th> </tr>"

	for(var i=0;i<scores.length;i++)
	{
		table.innerHTML +=" <tr> <td> " + names[i] + " </td> <td> " + scores[i] + " </td> </tr>" 
	}
	
}

// helper function to validate score
function validateScore(score){
	if(Number.isInteger(score)){
		if(score <= 100 && score >= 0){
			return true;
		}
		return false;
	}
	return false;
}