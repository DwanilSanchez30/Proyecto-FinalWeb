
<?php 

include ('ConexionDB/Conexion.php');

$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];
    $fecha = date('Y-m-d');
    
}

try {
    $stmt = $conexion->prepare("INSERT INTO contacto (fecha, nombre, correo, asunto, comentario) VALUES (:fecha, :nombre, :correo, :asunto, :comentario)");
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':asunto', $asunto);
    $stmt->bindParam(':comentario', $comentario);
    $stmt->execute();
    
    header("Location: index.php");
    exit();

} catch(PDOException $error) {

}
$conexion = null;
?>


<form method="POST" id="formulario" data-sb-form-api-token="API_TOKEN">
         
                            
    <!-- Name input-->
    <div class="form-floating mb-3">
        <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Escribe tu nombre" data-sb-validations="required" required />
        <label for="nombre">Nombre completo</label>
    </div>

    <!-- Email address input-->
    <div class="form-floating mb-3">
        <input class="form-control" id="correo" name="correo" type="email" placeholder="nombre@example.com" data-sb-validations="required,email" required />
        <label for="correo">Correo Electrónico</label>
    </div>

    <!-- Asunto input-->
    <div class="form-floating mb-3">
        <input class="form-control" id="asunto" name="asunto" type="text" placeholder="Escribe un Titulo para el comentario" data-sb-validations="required" required />
        <label for="asunto">Asunto</label>
    </div>

    <!-- Message input-->
    <div class="form-floating mb-3">
        <textarea class="form-control" id="comentario" name="comentario" type="text" placeholder="Escriba su comentario" style="height: 10rem" data-sb-validations="required" required></textarea>
        <label for="comentario">Comentario</label>
    </div>

    <div class="d-none" id="submitSuccessMessage">
        <div class="text-center mb-3">
            <div class="fw-bolder">¡Gracias por tu comentario!</div>
            <p>¡Lo tomaremos en cuenta!.</p>
        </div>
    </div>

    <!-- Submit Button-->
    <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button>
</form>

<script src="js/fcontacto.js"></script>




                        

                        