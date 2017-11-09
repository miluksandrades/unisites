//Inicialize firebase
var config = {
    apiKey: "AIzaSyDQxer_9EYZnNwHC0WqOsVrErLF-v-gx6I",
    authDomain: "sites-cdcc1.firebaseapp.com",
    databaseURL: "https://sites-cdcc1.firebaseio.com",
    projectId: "sites-cdcc1",
    storageBucket: "sites-cdcc1.appspot.com",
    messagingSenderId: "958517787397"
};
firebase.initializeApp(config);

//Refernce
var dadosAlunos = firebase.database().ref('Alunos');

//Listen for form submit
document.getElementById('newsletter').addEventListener('submit', enviarDados);

//Submit form
function enviarDados(e){
    e.preventDefault();
    
    //get values
    var nome = getInputVal('nome');
    var email = getInputVal('email');
    
    saveAlunos(nome, email);
    
    //Alerta de envio
    document.querySelector('.confirmacao').style.display = 'block';
    
    //Hide Alerta de envio
    setTimeout(function(){
        document.querySelector('.confirmacao').style.display = 'none';
    }, 3000);
    
    document.getElementById('newsletter').reset();
}

function getInputVal(id){
    return document.getElementById(id).value;
}

function saveAlunos(nome, email){
    var newAlunoRef = dadosAlunos.push();
    
    newAlunoRef.set({
        nome: nome,
        email: email
    });
}
