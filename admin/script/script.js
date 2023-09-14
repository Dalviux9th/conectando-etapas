const form = document.forms.namedItem("fileUpload");
const display = document.querySelector("#Display");

form.addEventListener(
"submit",
(event) => {
    const formData = new FormData(form);

    formData.append("fotos", fotos.files);

    const request = new XMLHttpRequest();

    request.onload = (progress) => {
        console.log("REQUEST:" + request.status + " - " + request.statusText);
        let response = JSON.parse(request.response);

        switch (request.status) {

            case 200:
                display.innerHTML += `<div class="alert alert-success">Todos los archivos han sido cargados satisfactoriamente.</div>`;
                break;

            case 207:
                display.innerHTML += `<div class="alert alert-warning">Solo ALGUNOS de los archivos han sido cargados. En <b>color rojo</b> se marcan los archivos en conflicto.</div>`;
                break;

            case 417:
                display.innerHTML += `<div class="alert alert-danger">No pudieron cargarse los archivos. Por favor reintente la carga.</div>`;
                break;
                
            default:
                display.innerHTML += `<div class="alert alert-danger">Ha ocurrido un <b>error desconocido</b>:<br>${request.status} - ${request.statusText}</div>`;
                break;
        }

        response.forEach(element => {
            if (element.status_code > 400){

                display.innerHTML +=`<div class="redCard col-12 mb-3 alert alert-danger">${element.status_text}</div>`;

            } else {

                display.innerHTML +=`
                <div class="col-12 imgCard card mb-3 pt-2">
                    <div class="row">
                        <div class="col-7">
                            <img src="${element.location}" alt="404. Imagen no encontrada." width="100%">
                        </div>
                        <form class="col-5" >
                        <h5 class="form-title mt-5">Inserte los datos alusivos a la imagen</h5>
                        <input type="hidden" name="imagen">
                            <div class="mb-3">
                                <label for="fecha" class="form-label">fecha</label>
                                <input type="text" class="form-control" name="imagen" placeholder="Introduzca la fecha aproximada." required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción(opcional)</label>
                                <input type="descripcion" class="form-control" id="descripcion" name="decripcion">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción(opcional)</label>
                                <input type="descripcion" class="form-control" id="descripcion" name="decripcion">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                `;
            }
        });

    };
    
    request.open("POST", "system/precarga-imagen.php", true);
    request.send(formData);
    event.preventDefault();
},
false,
);