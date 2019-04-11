var botoneseliminar = document.getElementsByClassName('btn btn-danger')
    console.log(botoneseliminar)
    for (let i = 0; i < botoneseliminar.length; i++) {
    botoneseliminar[i].onclick = function (evento) {
        if (confirm("Seguro queres borrar esto perro?") == false) {
            evento.preventDefault()
        } else {
          if (confirm("Segurisimo? mira que todo lo que este adentro de esto se va a borrar para siempre") == false) {
          evento.preventDefault()
          }
        }
      }
    }
    
// PARA QUE PREGUNTE SI ESTAS SEGURO QUE TE QUERES IR DE LA NOTA
var botonBack = document.getElementById('back')
    console.log(botonBack)
    botonBack.onclick = function (evento) {
        if (confirm("Guardaste todo perro? mira que si no guardaste perdes todo pipi") == false ){
            evento.preventDefault()
        }
    }

    //PARA EL MODO NOCHE
    var formControls = document.getElementsByClassName('form-control')
    for (let i = 0; i < formControls.length; i++) { formControls[i].style.backgroundColor = "#1c2938";
         formControls[i].style.color = "beige" }
    // var body = document.querySelector('body')
    // var botonModoNoche = document.getElementById('modoNoche')
    // var tituloNav = document.getElementById('tituloNav')
    // var nav = document.getElementById('nav')
    // var hr = document.querySelector('hr')
    // var botones = document.querySelector('button')
    // botonModoNoche.onclick = function(evento){
    //     botonModoNoche.removeAttribute('class') 
    //     botonModoNoche.setAttribute('class', 'btn btn-light')
    //     botonModoNoche.innerHTML = "Modo Dia"
    //     body.style.backgroundColor = "#10171e"
    //     body.style.color = "beige"
    //     tituloNav.style.color = "beige"
    //     botonModoNoche.removeAttribute('class') 
    //     botonModoNoche.setAttribute('class', 'btn btn-light')
    //     nav.style.backgroundColor = "#1c2938"
    //     hr.style.backgroundColor = "#1c2938"
    
        