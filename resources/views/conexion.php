<?php
class mysqlconex
{
    public function conex()
    {
        $enlace = mysqli_conecct("localhost", "root", "donaciones", "libros","prestamos");
        return $enlace;
    }
}
?>