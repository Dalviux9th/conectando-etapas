<?php

$title_name = "Preguntas Frecuentes - EESTN°2";
include "includes/head_settings.php";
?>
    <div class="container-fluid">
        <div class="row m-5">
            <div class="col-8">
                <div class="card">
                    <div class="card-header"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit ipsum? </div>
                    <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Sapiente aliquid dignissimos similique saepe eligendi harum tempora nobis molestiae provident voluptatum doloremque,
                         laudantium explicabo sit accusamus quod, nisi esse perspiciatis? Labore.
                    </div>
                </div>
                <div class="card">    
                    <div class="card-header"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit ipsum? </div>
                    <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sapiente aliquid dignissimos similique saepe eligendi harum tempora nobis molestiae provident voluptatum doloremque,
                        laudantium explicabo sit accusamus quod, nisi esse perspiciatis? Labore.
                    </div>
                </div>   
                <div class="card">    
                    <div class="card-header"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit ipsum? </div>
                    <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sapiente aliquid dignissimos similique saepe eligendi harum tempora nobis molestiae provident voluptatum doloremque,
                        laudantium explicabo sit accusamus quod, nisi esse perspiciatis? Labore.
                    </div>
                </div>
            </div>
            <div class="col-4">
                <form action="enviar_consulta.php" method="post">
                    <div class="mb-2">
                        <div class="card">
                            <div class="card-header">¿tiene alguna consulta? escribenos y te responderomos lo mas pronto posible</div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name ="Nombre"required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput2" class="form-label">Direccion de email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" name="Email" required>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Consulta</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Consulta" required></textarea>
                                </div>
                                <div class="mb-2">
                                    <button type="submit" class="btn btn-primary" name="Envio">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include "includes/footer.php";
?>