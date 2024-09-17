<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $valor = $_POST['valor'];

        $mensajes = [
            "Respeto" => [
                "mensaje" => "Tratar al otro de la misma manera que me gustaria que me trataran a mi, mas alla de las diferencias.",
                "clase" => "success"
            ],
            "Igualdad" => [
                "mensaje" => "No hacer diferencias con el otro, independientemente de su sexo, religion, nacionalidad.",
                "clase" => "warning"
            ],
            "Empatia" => [
                "mensaje" => "Ponernos en el lugar del otro y tratar de entender la situacion en la que se encuentra.",
                "clase" => "primary"
            ],
            "Generosidad" => [
                "mensaje" => "Ayudar al otro en todo lo que se pueda sin esperar nada a cambio. ",
                "clase" => "danger"
            ],
            "Confianza" => [
                "mensaje" => "Creer en las virtudes propias y del otro para poder trabajar en equipo y en un ambiente más confortable.",
                "clase" => "info"
            ]
        ];

        if(array_key_exists($valor, $mensajes)){
            $mensaje= $mensajes[$valor]["mensaje"];
            $clase= $mensajes[$valor]["clase"];
        }else{
            $mensaje= "Por favor seleccione un color";
            $clase="text-muted";
        }
    }
?>

<?php require "partials/header.php" ?>

<div class="container mt-5">
    <div class="col-5 mx-auto">
        <h1 class="mb-4 fs-3"><?=$valor?></h1>
        <div class="alert alert-<?= $clase ?>" role="alert">
            <?= $mensaje ?>
        </div>
        <a href="index.php" class="btn btn-<?= $clase ?>">Volver</a>
    </div>
</div>


<?php require "partials/footer.php"?>