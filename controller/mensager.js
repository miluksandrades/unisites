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
var dadosMensagem = firebase.database().ref('Mensagens');

//Listen for form submit
document.getElementById('mensagemform').addEventListener('submit', enviarDados);

//Submit form
function enviarDados(e){
    e.preventDefault();
    
    //get values
    var nome = getInputVal('nomemsg');
    var email = getInputVal('emailmsg');
    var mensagem = getInputVal('mensagem');
    
    saveMensagem(nome, email, mensagem);
    
    //Alerta de envio
    document.querySelector('.confirmmsg').style.display = 'block';
    
    //Hide Alerta de envio
    setTimeout(function(){
        document.querySelector('.confirmmsg').style.display = 'none';
    }, 3000);
    
    document.getElementById('mensagemform').reset();
}

function getInputVal(id){
    return document.getElementById(id).value;
}

function saveMensagem(nome, email, mensagem){
    var newMensagemRef = dadosMensagem.push();
    
    newMensagemRef.set({
        nome: nome,
        email: email,
        mensagem: mensagem
    });
}
