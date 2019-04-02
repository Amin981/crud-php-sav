 var config = {
    apiKey: "AIzaSyBxyFc2yoljy0dYVpYzNLyYraMHXlN7cVw",
    authDomain: "projet-59efc.firebaseapp.com",
    databaseURL: "https://projet-59efc.firebaseio.com",
    projectId: "projet-59efc",
    storageBucket: "projet-59efc.appspot.com",
    messagingSenderId: "13905861157"
  };
  firebase.initializeApp(config);


function enregistrer(){
   let name =$("#name").val()
   let lname =$("#lname").val()
   let email =$("#email").val()
   let password =$("#password").val()
firebase.database().ref("feedbacks/"+name.set({
   name:name,
    email:email,
    password:password,   
})
document.querySelector('.alert').style.display = 'block';

}
$("#formulaire").submit(function(e){
    e.preventDefault()
    enregistrer()
})
/*e in the parameters means "event", meaning the event that just happened (submit, click, hover etc...)
preventDefault is a function that will cancel the default action of the event (if a form should submit, it won't)
e.preventDefault() in this case will stop the form from submitting & therefore refreshing.*/


// Show alert
document.querySelector('.alert').style.display = 'none';
// Hide alert after 3 seconds
