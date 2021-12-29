<?php
use models\Registro;
use models\Usuario;

class registrosController extends Controller
{
    public function __construct()
    {
        parent::__construct();
       // $this->verificarSession();
    }

    public function index()
    {

        $this->verificarMensajes();

        $this->_view->assign('titulo','Registros');
        $this->_view->assign('title','Registros');
        $this->_view->assign('registros', Registro::with('usuario')->orderBy('id','DESC')->get());
        $this->_view->renderizar('index');
    }

    public function view($id = null)
    {
        $this->verificarRegistro($id);
        $this->verificarMensajes();

        $this->_view->assign('titulo','Registro');
        $this->_view->assign('title','Registro');
        $this->_view->assign('registro', Registro::with('usuario')->find($this->filtrarInt($id)));
        $this->_view->assign('type', 'Registro');
        $this->_view->renderizar('view');
    }

    
    #########################################
    /*
    * verifica id de registro
    * @param int id
    * return registros/index
    */

   
}
