window.addEventListener("click", (event)=>{
    let element = event.target.parentNode.parentNode.parentNode
if (element.classList.contains("Reaccion")){
    console.log(element.id)
    let reaccion = element.id

    reaccion = reaccion.substring(reaccion.indexOf("-")+1)
    console.log(reaccion)
    mandarreacionsDB( element.parentNode.id, reaccion, event )
}
})

// llamada a la DB para manipulacion de datos
function mandarreacionsDB(id, reaccion, event){
    let formData = new FormData
    formData.append("ID", id);
    formData.append("reaccion", reaccion)
    fetch('http://localhost/www/system/subirReacciones.php',{
        method: "post",
        body: formData, 
    })
    .then(res => res.json())
    .then(res => {
        if (res["result"] == "success"){

            event.target.parentNode.classList.add("selected")
            let numReac = parseInt(document.getElementById(`number-${reaccion}-${id}`).innerHTML)
            document.getElementById(`number-${reaccion}-${id}`).innerHTML = numReac+1

            if(res["oldReac"] != null){
                console.log(res["oldReac"],  document.getElementById(`${id}-${res["oldReac"]}`))
                document.getElementById(`${id}-${res["oldReac"]}`).firstElementChild.firstElementChild.classList.remove("selected")
                let numReac = parseInt(document.getElementById(`number-${res["oldReac"]}-${id}`).innerHTML)
                document.getElementById(`number-${res["oldReac"]}-${id}`).innerHTML = numReac-1
            }
        }
    })
}
