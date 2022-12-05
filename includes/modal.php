<!-- The Modal -->
<div id="myModal"  class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <h2 style="visibility: hidden;">Turing-ia</h2>
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <div class="row p-4 d-flex justify-content-center align-items-center">
                <div class="col-12 col-lg-6 p-5 mb-5">
                    <h2 class="display-3 text-uppercase text-center text-lg-start">Turing-ia</h2>
                    <p class="display-6 text-center text-lg-start fw-light">
                        Ponte en contacto con un especialista.
                    </p>
                    <p class="h5 text-center text-lg-start fw-light">
                        O déjanos tus datos y nosotros  nos pondremos en contacto.
                    </p>

                </div>
                <div class="col-12 col-lg-6">
                    <form action="./save_contact.php" method="post">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Nombre*</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Correo*</label>
                                    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Número de Telefono*</label>
                                    <input type="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" 
                                        class="form-control" name="tel" placeholder="55-55-55-55" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Puesto</label>
                                    <input type="text" class="form-control" name="job" placeholder="Nombre del Puesto de Trabajo">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Empresa</label>
                                    <input type="text" class="form-control" name="company" placeholder="Nombre de la Empresa">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mensaje</label>
                                    <textarea class="form-control" name="message" rows="3"></textarea>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="submit" class="btn btn-outline-primary rounded-0 px-5" 
                                        name="save_contact" value="Enviar" >
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>