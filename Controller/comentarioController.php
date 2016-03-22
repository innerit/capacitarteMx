<?php namespace Controller;
class comentarioController extends BaseController {

    /*-------------------------
    Creamos la variable
    protegida $View
    para almacenar renderizar
    --------------------------*/

    protected $View;

    public function __construct(){
        /*------------------------
        Usamos la variable View e
        inicializamos el controlador

        NOTA: EN VIEW SE ALMACENA
        LOS METODOS DE TWIG(Renderizacion
        de vistas)
        ---------------------------*/

        $this->View=$this::init();
    }

    public function show(){
        $comentario = new \Model\Comentario();
        $comentario->show();
    }
    public function save(){
        extract($_POST);
        session_start();
        $idPost = array('id'=>$_SESSION['idPost']);
        $comentario = new \Model\Comentario();
        $comentario->contenido = $contenido;
        $comentario->posts_id = $idPost['id'];
        $comentario->usuarios_id= 1;
        $comentario->enabled = 1;
        //print_r($comentario);
        $comentario->save();
        echo 1;
    }

}
