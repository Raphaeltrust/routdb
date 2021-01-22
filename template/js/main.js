//open navigation bar
var openNav= document.getElementById("navicon");
openNav.onclick= function(){
document.getElementById("nav-menu").style.width="100%";
}
// close the navigation bar
var openNav= document.getElementById("close");
openNav.onclick= function(){
document.getElementById("nav-menu").style.width="0%";
}
// Displaying the popup modal with onlick event
function openModal(){
document.getElementById("pop-up").style.display="block";
}
// close the popup modal
function closeModal(){
document.getElementById("pop-up").style.display="none";
}
function openHelp(){
var getPopUp= document.getElementById("pop-up").style.display="block";
}
function closeHelp(){
var getPopUp= document.getElementById("pop-up").style.display="none";
}
//Validate form before processing it
function authForm(){
var msg = document.getElementById("errors").style.display="block";
var authSession = document.forms["routdbForm"]["sname"].value;
var authServername = document.forms["routdbForm"]["servername"].value;
var authUsername = document.forms["routdbForm"]["username"].value;
if(authSession == ""){
document.getElementById("errors").innerHTML="There was an error creating the session: Session name field cannot be empty";
return false;
return msg;
}
if(authServername == ""){
document.getElementById("errors").innerHTML="There was an error creating the session: Servername field cannot be empty";
return false;
return msg;
}
if(authUsername == ""){
document.getElementById("errors").innerHTML="There was an error creating the session: Username field cannot be empty";
return false;
return msg;
}
if(authSession.length < 4){
document.getElementById("errors").innerHTML="There was an error creating the session: Session name must be greater than 4 characters or letters";
return false;
return msg;
}
if(authSession.length > 10){
document.getElementById("errors").innerHTML="There was an error creating the session: Session name must be between 4 - 10 characters or latters";
return false;
return msg;
}
}

function authDbForm(){
var err = document.getElementById("errors").style.display="block";
var authDbName = document.forms["dbForm"]["dbname"].value;
if(authDbName == ""){
document.getElementById("errors").innerHTML="There was an error creating the database: Database name field cannot be empty";
return false;
return err;
}
}

function authDel(){
var err = document.getElementById("errors").style.display="block";
var authdel = document.forms["delForm"]["deldb"].value;
if(authdel == ""){
document.getElementById("errors").innerHTML="Please input the database name you want to delete: Database name field cannot be empty";
return false;
return err;
}
}