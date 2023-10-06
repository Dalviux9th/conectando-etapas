const form = document.forms.namedItem("fileUpload");
const display = document.querySelector("#Display");
const stateDisplay = document.querySelector("#StateDisplay");
const btnUpload = document.querySelector("#btnUpload");

// Movimiento del boton de subida
btnUpload.addEventListener("mouseover", (event) => {
    btnUpload.classList.add("fa-beat");
});

btnUpload.addEventListener("mouseout", (event) => {
    btnUpload.classList.remove("fa-beat");
});

form.fotos.addEventListener(
"change",
(event) => {
    const formData = new FormData(form);

    formData.append("fotos", fotos.files);

    const request = new XMLHttpRequest();

    request.onload = (progress) => {
        console.log(`REQUEST: ${request.status} - ${request.statusText}.`);//${response.status_code}: ${response.status_text}
        console.log(request);
        let response = JSON.parse(request.response);
        console.log(response);

        switch (request.status) {
            case 200:
                stateDisplay.innerHTML = `<div class="alert alert-success">Todos los archivos han sido cargados satisfactoriamente.</div>`;
                break;

            case 207:
                stateDisplay.innerHTML = `<div class="alert alert-warning">Solo ALGUNOS de los archivos han sido cargados. En <b>color rojo</b> se marcan los archivos en conflicto.</div>`;
                break;

            case 417:
                stateDisplay.innerHTML = `<div class="alert alert-danger">No pudieron cargarse los archivos. Por favor reintente la carga.</div>`;
                break;
                
            default:
                stateDisplay.innerHTML = `<div class="alert alert-danger">Ha ocurrido un <b>error desconocido</b>:<br>${request.status} - ${request.statusText}</div>`;
                break;
        }

        response.forEach(element => {
            if (element.status_code > 400){

                display.innerHTML +=
                `<div class="redCard card alert alert-dismissible col-12 mb-3">
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
                `<div class="col-12 imgCard card mb-3 pt-2">
                    <div class="card-header bg-transparent">
                        <h4>${element.original_name}<h4>
                    </div>
                    <div class="row imgCardContent card-body">

                        <div class="col-12 col-md-7 col-lg-6">
                            <img src="${element.location}" alt="404. Imagen no encontrada." width="100%">
                        </div>

                        <div class="col-12 col-md-5 col-lg-6">
                        <form>
                            <p class="form-title mt-5">Inserte los datos alusivos a la imagen</p>
                            <input type="hidden" name="imagen" value="${element.location}">

                            <div class="mb-3">
                                <label for="fecha" class="form-label">fecha</label>
                                <input type="text" class="form-control" name="imagen" placeholder="Introduzca la fecha aproximada." required>
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción(opcional)</label>
                                <input type="descripcion" class="form-control" id="descripcion" name="decripcion">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>`;

            }
        });

    };
    
    request.open("POST", "system/precarga-imagen.php", true);
    request.send(formData);
    event.preventDefault();
},
false,
);