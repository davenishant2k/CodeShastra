// document.addEventListener("click",function(){
//   alert("mai chutya");
// });


firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    alert("im in");
  } else {
    // No user is signed in.
  }
});

function login(){


var userEmail=document.getElementById("inputEmail").value;
var userPass=document.getElementById("inputPassword").value;
firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  alert("Error : "+errorMessage);
  // ...
});
}
