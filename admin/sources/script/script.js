//DECLARACIONES
const formPrecarga = document.forms.namedItem("fileUpload");
const display = document.querySelector("#Display");
const stateDisplay = document.querySelector("#StateDisplay");
const btnUpload = document.querySelector("#btnUpload");



//EVENTOS

// -- Cerrar formulario
document.querySelectorAll('.close-icon')
.forEach(element => {
    element.addEventListener('click', (event) => {
    console.log(event);
    element.closest('.card').fadeOut();
  })
});



// -- Movimiento del boton de subida
btnUpload.addEventListener(
    "mouseover",
    (event) => {
    btnUpload.classList.add("fa-beat");
});

btnUpload.addEventListener(
    "mouseout",
    (event) => {
    btnUpload.classList.remove("fa-beat");
});



// -- Precarga de imagen
formPrecarga.fotos.addEventListener(
"change",
(event) => {
    const formData = new FormData(formPrecarga);

    formData.append("fotos", fotos.files);

    const request = new XMLHttpRequest();

    request.onload = (progress) => {// Función al regresar del request.
        console.log(`REQUEST: ${request.status} - ${request.statusText}.`);//${response.status_code}: ${response.status_text}
        let response;
        try {
            response = JSON.parse(request.response);
            console.log(response);
        } catch (error) {
            console.log("ERROR: " + error + " - " + request.response);
        }

        switch (request.status) {// Mensajes de status
            case 200:
                stateDisplay.innerHTML = `
                    <div class="alert alert-success alert-dismissible fade show">
                        Todos los archivos han sido cargados satisfactoriamente.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                break;

            case 207:
                stateDisplay.innerHTML = `
                    <div class="alert alert-warning alert-dismissible fade show">
                        Solo ALGUNOS de los archivos han sido cargados. En <b>color rojo</b> se marcan los archivos en conflicto.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                break;

            case 417:
                stateDisplay.innerHTML = `
                    <div class="alert alert-danger alert-dismissible fade show">
                        No pudieron cargarse los archivos. Por favor reintente la carga.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                break;

            default:
                stateDisplay.innerHTML = `
                    <div class="alert alert-danger alert-dismissible fade show">
                        Ha ocurrido un <b>error desconocido</b>:<br>${request.status} - ${request.statusText}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`;
                break;
        }

        stateDisplay.scrollIntoView();

        response.forEach(element => {// Imprime los que están bien.
            if (element.status_code > 400){

                display.innerHTML +=
                `<div class="redCard card alert alert-dismissible col-12 mb-3" id="${element.location}-card">
                    <div class="card-header bg-transparent">
                        <h4>${element.original_name}<h4>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="row imgCardContent card-body">
                        <span><b>${element.status_code}</b>: ${element.status_text}</span>
                    </div>
                </div>`;

            } else {

                display.innerHTML +=
                `<div class="col-12 imgCard card mb-3 pt-2" id="${element.id_temp}">
                    <div class="card-header bg-transparent cardTitle">
                        <h4>${element.original_name}</h4>
                        <svg
                            onclick="trash(${element.id_temp})"
                            style="fill: var(--bs-dark);"
                            xmlns="http://www.w3.org/2000/svg"
                            height="1.6em" viewBox="0 0 448 512"
                            ><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"/>
                        </svg>
                    </div>
                    <div class="row imgCardContent card-body">

                        <div class="imgContainer col-12 col-md-5 p-0 bg-secondary border border-dark rounded-2">
                            <img src="${element.location}" alt="404. Imagen no encontrada.">
                        </div>

                        <div class="col-12 col-md-7">
                        <form id="form-${element.id_temp}">
                            <input type="hidden" name="direccion" value="${element.location}">
                            <h5 class="form-title mt-5 mt-md-0">Inserte los datos alusivos a la imágen</h5>

                            <div class="mb-3">
                                <label for="fecha" class="form-label">fecha</label>
                                <input type="text" class="form-control" name="fecha" id="fecha" placeholder="Introduzca la fecha aproximada." required>
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción (opcional)</label>
                                <textarea class="form-control" id="descripcion" name="decripcion" rows="3"></textarea>
                            </div>

                            <div class="mb-3" id="">
                            <input class="btn btn-primary" type="submit" value="Subir">


                            </div>

                            
                            <div class="mb-3">`;

                            // element.pills.forEach((categoria) => {

                            //     display.innerHTML += `
                            //         <label for="etiqueta-${element.location}-${categoria[0]}" class="form-label">${categoria[1]}</label>
                            //         <input class="d-none" type="checkbox" id="etiqueta-${element.location}-${categoria[0]}" value="${categoria[1]}">
                            //     `
                            // })
                            
                            

                            `</div>

                            <button type="submit" class="btn btn-primary">Subir</button>
                        </form>
                        </div>
                    </div>
                </div>`;

            }
        });

    };

    request.open("POST", "system/precarga-imagen.php", true);
    request.send(formData);
    event.preventDefault();//Evita la recarga de la página.
},
false,
);



// -- Cargar imagen
formsubida.addEventListener(
    "submit",
    (event) => {
        const formData = new FormData(formPrecarga);
    
        formData.append("fotos", fotos.files);
    
        const request = new XMLHttpRequest();
    
        request.onload = (progress) => {// Función al regresar del request.
        
        
        };
    
request.open("POST", "system/precarga-imagen.php", true);
request.send(formData);
event.preventDefault();//Evita la recarga de la página.
},
false,
);