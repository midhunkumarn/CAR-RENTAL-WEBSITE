function myfunction(){
 var un = document.forms["myforms"]["user"].value;
 var pw = document.forms["myforms"]["pass"].value;

 if(un=="midhunkumar@gmail.com" && pw=="midhun78")
 {
    window.location.href="showdata.php";
 }
 else{
    alert("invalid")
 }

}