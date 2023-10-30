window.addEventListener("click", (event)=>{
    let element = event.target.parentNode.parentNode.parentNode
if (element.classList.contains("Reaccion")){
    console.log(element.id)
    let reaccion = element.id
   
    reaccion = reaccion.substring(reaccion.indexOf("-")+1)
    console.log(reaccion)
    mandarreacionsDB( element.parentNode.id, reaccion, event )
    // let numReac = parseInt(document.getElementById(`number-${element.id}-${element.parentNode.id}`).innerHTML)
    // document.getElementById(`number-${element.id}-${element.parentNode.id}`).innerHTML = numReac+1
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



//REACCIONES

// SEPARA EL CODIGO DE LAS REACCIONES OBTENIDO EN LA DB
// async function separodoCodigoReaccion(id) {

//     let codigo = await InfoDB(2,id); 
//     codigo = JSON.stringify(codigo) 
//     let inicio = codigo.indexOf(":");
//     codigo = codigo.substring(inicio+2, codigo.lastIndexOf('"'))


//     console.log(codigo) 
//     codigo = codigo.split(',');
//     let codseparado = new Array
//     for (let i = 0; i < codigo.length; i++) {
//         codseparado[i] = codigo[i].split("-");
//     }
//     return codseparado;
// }

// async function AumentoReacciones(reaccion, id){
//     let codSeparado = await separodoCodigoReaccion(id)
//     console.log(codSeparado);
//     for (let i = 0; i < codSeparado.length; i++) {
//         if (codSeparado[i][0] == reaccion) {
//             codSeparado[i][1]++;
//         }   
//     }
//     for (let i = 0; i < codSeparado.length; i++) {
//         codSeparado[i] = codSeparado[i].join('-');
//     }
//     codSeparado = codSeparado.join()
//     console.log(codSeparado)
//     await InfoDB(1,id, codSeparado)
// }



// //aumenta la cantidad de reaciones en el inciso que se le inidque 
// function AumentoReacciones(reaccion, id){
//     let codigo = "r-100,c-200,k-300,";
//     //InfoDB(2,id); 
//     let c = codigo.indexOf(reaccion);
//     let a = codigo.substring(c, codigo.indexOf(",",c))
//     a = a.split('-');
//     return a;
// }

