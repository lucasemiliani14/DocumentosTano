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
    
// PARA QUE PREGUNTE SI ESTAS SEGURO QUE TE QUERES IR DE LA NOTA, YA ESTA HECHO DE MEJOR FORMA EN LA NOTA IGUAL
// var botonBack = document.getElementById('back')
//     console.log(botonBack)
//     botonBack.onclick = function (evento) {
//         if (confirm("Guardaste todo perro? mira que si no guardaste perdes todo pipi") == false ){
//             evento.preventDefault()
//         }
//     }

var formControls = document.getElementsByClassName('form-control')
for (let i = 0; i < formControls.length; i++) { formControls[i].style.backgroundColor = "#1c2938";
      formControls[i].style.color = "beige" }
  
        