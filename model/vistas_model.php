<?php
class vistaModelo
{
    
    protected static function obtener_vista($vista)
    {
        $palabras_permitidas = ['usuario', 'producto', 'descripcion', 'ofertas', 'carrito', 'mujer', 'varon','perfil', 'pedido','direccion','ayuda', 'moneda'];
    
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/".$vista.".php")) {
                $contenido = "./views/".$vista.".php";  
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
