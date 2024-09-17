
<?php require "partials/header.php" ?>
    <h1 class="text-center p-4" >Seleccione una palabra para ver su definición</h1>
    <form class="d-flex justify-content-center p-3" action="colores-def.php" method="POST">
        <label class="" for="valor">Elige una palabra:</label>
        <select name="valor" id="valor">
            <option value="Respeto">Respeto</option>
            <option value="Igualdad">Igualdad</option>
            <option value="Empatia">Empatia</option>
            <option value="Generosidad">Generosidad</option>
            <option value="Confianza">Confianza</option>
        </select>
        <input type="submit">
    </form>
<?php require "partials/footer.php" ?>


