// Initialize Firebase
  var config = {
    apiKey: "AIzaSyBqdet0SdWvoFawhy6EdpPHVZrsuBzWyDI",
    authDomain: "robocode-5c572.firebaseapp.com",
    databaseURL: "https://robocode-5c572.firebaseio.com",
    projectId: "robocode-5c572",
    storageBucket: "robocode-5c572.appspot.com",
    messagingSenderId: "832857540314"
  };
  firebase.initializeApp(config);

//Refernce
var dadosEquipe = firebase.database().ref('Equipes');

document.getElementById('formRobocode').addEventListener('submit', enviaEquipe);

function enviaEquipe(e){
    e.preventDefault();
    
    var nomeEquipe = getInputVal('groupname');
    var membro1 = getInputVal('member1');
    var membro2 = getInputVal('member2');
    var membro3 = getInputVal('member3');
    var emailEquipe = getInputVal('emailEquipe');
    
    saveEquipe(nomeEquipe, membro1, membro2, membro3, emailEquipe);
        
    document.getElementById('formRobocode').reset();
}

function getInputVal(id){
    return document.getElementById(id).value;
}

function saveEquipe(nomeEquipe, membro1, membro2, membro3, emailEquipe){
   var newEquipeRef = dadosEquipe.push();
   
   newEquipeRef.set({
       nomeEquipe: nomeEquipe,
       membro1: membro1,
       membro2: membro2,
       membro3: membro3,
       emailEquipe: emailEquipe
   });
}
