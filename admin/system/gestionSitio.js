//editor de texto 
let toolbarOptions =  [
    ['bold', 'italic', 'underline', 'strike'],  
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
    [{ 'color': [] }, { 'background': [] }],
    [{ 'align': [] }],
    ['clean']                          
    ];


var editorAnec = new Quill('#infoAnec', {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow'
});

var editorProyecto = new Quill('#infoProyectos', {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow'
});
var editorOrientacion = new Quill('#infoOrientacion    ', {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow'
});

// ANECDOTAS
//  subir
document.getElementById('subirAnec').addEventListener('click',()=> {
    let portada = document.getElementById('anecportada').value;
    let autor = document.getElementById('anecautor').value;
    let fecha = document.getElementById('anecfecha').value;
    let informacion = editorAnec.root.innerHTML;
    let info = ["anecdotas", 0, portada,autor,fecha,informacion];
    ajax(info)
})
//eliminar
document.getElementById("anecdotasMuestra").addEventListener('click', (event)=>{

    if(event.target.classList.contains("delete")){
        console.log(event.target.id)
        let info = ["anecdotas", 1, event.target.id]
        ajax(info)
    }

})

//PROYECTO
//subir
document.getElementById('subirProyecto').addEventListener('click',()=>{

    let orientacion = document.getElementById('proyectoOrinentacion').value;
    let titulo = document.getElementById('proyectoTitulo').value;
    let contenido = editorProyecto.root.innerHTML;
    let resumen = document.getElementById('proyectoResumen').value;
    let info =["proyecto", 0, orientacion,titulo,contenido,resumen]
    ajax(info)

})

// eliminar
document.getElementById("proyectoMuestra").addEventListener('click', (event)=>{

    if(event.target.classList.contains("delete")){
        console.log(event.target.id)
        let info = ["proyecto", 1, event.target.id]
        ajax(info)
    }

})

//Orinetacion
//subir
document.getElementById('subirOrientacion').addEventListener('click',()=>{

    let orientacion = document.getElementById('Orinetacion').value;
    let contenido = editorProyecto.root.innerHTML;
    let info =["orientacion", 0, orientacion, contenido]
    ajax(info)

})

// eliminar
document.getElementById("orientacionMuestra").addEventListener('click', (event)=>{

    if(event.target.classList.contains("delete")){
        console.log(event.target.id)
        let info = ["proyecto", 1, event.target.id]
        ajax(info)
    }

})






function ajax(array) {
    data = new FormData;
    data.append('info', array);
    fetch('http://localhost/admin/system/AnecProyectOrient.php',{
        method: "POST",
        body: data
    })
    .then(res => res.json())
    .then(res=>{
        console.log(res)
    })
    
}