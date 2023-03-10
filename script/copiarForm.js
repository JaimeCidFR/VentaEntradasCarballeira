const $buscar = document.querySelector("#buscar")


function renderBoton(){
    const $boton = document.querySelector("#pegar")
    $boton.addEventListener("click",e=>{
        console.log("HOLA")
        let datos = document.querySelectorAll($boton.data.id)
        
        console.log(datos)
    })

}

window.addEventListener("load",e=>{
    console.log("wenas")
    const $tabla = document.querySelector("table")
    console.log($tabla)

    $tabla.addEventListener("click",e=>{
        let id ="socio" +e.target.dataset.id
        console.log(id)

        let datos = document.getElementsByClassName(`${id}`);

        console.log(datos[1].innerHTML)

        let $nome = document.getElementsByName("nomeCompleto")
        let $telefono = document.getElementsByName("tlf")
        let $email = document.getElementsByName("email")
        let $idSocio = document.getElementsByName("idSocio")
        let $radioSocioSi = document.querySelector("input[type=radio][value=SI]")
        console.log($nome[0])
        $nome[0].value = datos[1].innerHTML
        $telefono[0].value = datos[2].innerHTML
        $email[1].value = datos[3].innerHTML
        $idSocio[0].value = datos[0].innerHTML
        
        $radioSocioSi.checked=true
    })

})
