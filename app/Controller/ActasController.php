<?php
/*Estas son las tablas de Horarios :

 ambientes
 especialidades
 versionespecialidades
 competenciaversionespecialidades
 competencias
 resultadoaprendizajes
 proyectos
 resultadoproyectos
 grupos
 horarioespecial
 horarios
 horariosadministrativos
 instructores
 calendarioacademicos
 tipo_formaciones
 usuarios
 aplicativos usuarios */

App::uses('AppController', 'Controller');
/**
 * Actas Controller
 *
 * @property Acta $Acta
 */
class ActasController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this -> layout = "principal";
        $this -> Acta -> recursive = 0;

        if ($this -> request -> is('post') or isset($this -> params['named']['sort']) && !empty($this -> params['named']['sort'])) {

            //debug($this->data);

            if ($this -> request -> is('post')) {
                $busqueda = $this -> data["Busqueda"]["frase"];
                $this -> Session -> write('busqueda', $busqueda);

            } else {
                $busqueda = $this -> Session -> read('busqueda');
            }

            $idActa = $this -> Acta -> find('list', array('conditions' => array('OR' => array('Acta.id LIKE' => "%$busqueda%", //'Acta.created LIKE' => "%$busqueda%",
            )), 'fields' => array('Acta.id')));

            $idGrupos = $this -> Acta -> Grupo -> find('list', array('conditions' => array('OR' => array('Grupo.nombre LIKE' => "%$busqueda%", )), 'fields' => array('Grupo.id')));

            $idsTrimestres = $this -> Acta -> Trimestre -> find('list', array('conditions' => array('OR' => array('Trimestre.nombre LIKE' => "%$busqueda%", )), 'fields' => array('Trimestre.id')));

            $idsEtapas = $this -> Acta -> Etapa -> find('list', array('conditions' => array('OR' => array('Etapa.descripcion LIKE' => "%$busqueda%", )), 'fields' => array('Etapa.id')));

            $idsTipos = $this -> Acta -> Tipo -> find('list', array('conditions' => array('OR' => array('Tipo.nombre LIKE' => "%$busqueda%", )), 'fields' => array('Tipo.id')));

            $conditions['OR']['Acta.id'] = $idActa;
            $conditions['OR']['Acta.grupo_id'] = $idGrupos;
            $conditions['OR']['Acta.trimestre_id'] = $idsTrimestres;
            $conditions['OR']['Acta.tipo_id'] = $idsTipos;
            $conditions['OR']['Acta.etapa_id'] = $idsEtapas;
        }

        if (!empty($conditions)) {
            $this -> paginate = array('conditions' => $conditions);
        }

        //$this -> paginate = array('limit' => 10);
        $actas = $this -> paginate();
        $this -> set(compact('actas'));
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this -> Acta -> id = $id;
        if (!$this -> Acta -> exists()) {
            throw new NotFoundException(__('Invalid acta'));
        }
        $this -> set('acta', $this -> Acta -> read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this -> layout = "principal";
        if ($this -> request -> is('post')) {
            $data = array();
            $data = array("Acta" => $this -> data["Acta"]);

            foreach ($this->data["Actainstructore"]["instructore_id"] as $key => $value) {
                if ($value != "undefined") {
                    $data["Actainstructore"][] = array("instructore_id" => $value);
                }
            }

            foreach ($this->data["Actausuario"]["usuariosid"] as $key => $value) {
                if ($value != "undefined") {
                    $data["Actausuario"][] = array("usuario_id" => $value);
                }
            }

            $this -> Acta -> create();
            if ($this -> Acta -> saveAll($data)) {
                $this -> Session -> setFlash(__('El acta fue creada correctamente'));
                $this -> redirect(array('action' => 'index'));
            } else {
                $this -> Session -> setFlash(__('El acta no fue creada correctamente. Por favor, intenta de nuevo.'));
            }
        }

        $this -> loadModel("Grupo");
        $versionEsp = $this -> Grupo -> find('first', array("fields" => array("versionespecialidade_id")));
        $versionEsp = $versionEsp['Grupo']['versionespecialidade_id'];
        $trimestres = $this -> Acta -> Trimestre -> find('list', array("fields" => array("id", "nombre")));
        $this -> loadModel("Etapa");
        $etapas = $this -> Etapa -> find('list', array("fields" => array("id", "descripcion")));
        $this -> loadModel("Especialidade");
        $especialidades = $this -> Especialidade -> find("list", array("fields" => array("id", "nombre")));
        $this -> loadModel("Usuario");
        $usuarios = $this -> Usuario -> find("list", array("fields" => array("id", "nombre_completo")));
        $this -> set(compact('trimestres', 'aprendices', 'etapas', 'grupos', "especialidades", "usuarios"));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this -> Acta -> id = $id;
        if (!$this -> Acta -> exists()) {
            throw new NotFoundException(__('Invalid acta'));
        }
        if ($this -> request -> is('post') || $this -> request -> is('put')) {
            if ($this -> Acta -> save($this -> request -> data)) {
                $this -> Session -> setFlash(__('The acta has been saved'));
                $this -> redirect(array('action' => 'index'));
            } else {
                $this -> Session -> setFlash(__('The acta could not be saved. Please, try again.'));
            }
        } else {
            $this -> request -> data = $this -> Acta -> read(null, $id);
        }
        $trimestres = $this -> Acta -> Trimestre -> find('list');
        $aprendices = $this -> Acta -> Aprendice -> find('list');
        $etapas = $this -> Acta -> Etapa -> find('list');
        $this -> set(compact('trimestres', 'aprendices', 'etapas'));
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this -> request -> is('post')) {
            throw new MethodNotAllowedException();
        }
        $this -> Acta -> id = $id;
        if (!$this -> Acta -> exists()) {
            throw new NotFoundException(__('Invalid acta'));
        }
        if ($this -> Acta -> delete()) {
            $this -> Session -> setFlash(__('Acta borrada correctamente'));
            $this -> redirect(array('action' => 'index'));
        }
        $this -> Session -> setFlash(__('Acta was not deleted'));
        $this -> redirect(array('action' => 'index'));
    }

    //Funci�n que obtiene los grupos asociados a una especialidad
    function obtenerGrupos() {
        $this -> autoRender = false;
        $this -> layout = '';
        $idEspe = $_POST["idEsp"];

        $gruposJson = array();

        $this -> loadModel("Versionespecialidade");
        $idVersionEsp = $this -> Versionespecialidade -> find("list", array("fields" => array("id"), "conditions" => array("Versionespecialidade.especialidade_id" => $idEspe)));

        $this -> loadModel("Grupo");
        $grupos = $this -> Grupo -> find("list", array("conditions" => array("Grupo.versionespecialidade_id" => $idVersionEsp)));
        /*for ($i = 0; $i < count($grupos); $i++) {
         $gruposJson[$grupos[$i]["grupos"]["id"]] = $grupos[$i]["grupos"]["nombre"];
         } */

        //print_r($idVersionEsp);

        echo json_encode($gruposJson);
    }

    //Funci�n que obtiene los instructores asociados a una especialdiad
    function obtenerInstructores() {
        $this -> autoRender = false;
        $this -> layout = 'ajax';
        $idEspe = $_POST["idEsp"];

        $sql = "";
        $sql = "SELECT instructores.id, instructores.documento, instructores.nombres, instructores.apellidos 
             FROM instructores,instructoreespecialidades,especialidades
             WHERE instructoreespecialidades.especialidade_id = especialidades.id
             AND instructoreespecialidades.instructore_id = instructores.id
             AND especialidades.id='$idEspe' ORDER BY instructores.nombres asc";

        $this -> loadModel("Grupo");
        $instEspe = $this -> Grupo -> query($sql);

        //debug($instEspe);

        for ($i = 0; $i < count($instEspe); $i++) {
            $instructores[$instEspe[$i]["instructores"]["id"]] = $instEspe[$i]["instructores"]["nombres"] . " " . $instEspe[$i]["instructores"]["apellidos"];
        }

        echo json_encode($instructores);
    }

    function obtenerResultados() {
        $this -> autoRender = false;
        $this -> layout = 'ajax';
        $idComp = $_POST["idComp"];
        //Id de la competencia

        $this -> loadModel("Resultadoaprendizaje");
        $resultados = $this -> Resultadoaprendizaje -> find("list", array("conditions" => array("Resultadoaprendizaje.competencia_id" => $idComp)));

        echo json_encode($resultados);
    }

    function evaluarActa($idActa = null) {
        $this -> layout = "principal";
        $idGrupo = $this -> Acta -> find("list", array('conditions' => array("Acta.id" => $idActa), "fields" => ("grupo_id")));

        $this -> loadModel("Competencia");
        $competencias = $this -> Competencia -> find("list");
        $this -> loadModel("Aprendicegrupo");
        $aprendices = $this -> Aprendicegrupo -> find("all", array("conditions" => array("Aprendicegrupo.grupo_id" => $idGrupo)));
        $this -> loadModel("Frase");
        $frases = $this -> Frase -> find("list", array("fields" => array("id", "frase")));
        $this -> Acta -> recursive = 0;
        $infoActa = $this -> Acta -> find("all", array("conditions" => array("Acta.id" => $idActa)));
		
		//debug($infoActa);
        $this -> set(compact('competencias', 'aprendices', "frases", "idActa", "infoActa"));
    }

    function obtenerAprendices() {
        $this -> autoRender = false;
        $this -> layout = 'ajax';
        $idComp = $_POST["idComp"];
        //Id de la competencia

        $competencias = $this -> Resultadoaprendizaje -> find("list", array("conditions" => array("Resultadoaprendizaje.competencia_id" => $idComp)));

        echo json_encode($competencias);
    }

    function obtenerIntructorResultadoAprendizaje() {

        $this -> autoRender = false;
        $this -> layout = 'ajax';

        $this -> loadModel("Resultadoproyecto");
        $idResultado = $_POST["idRes"];

        $idInstructor = $this -> Resultadoproyecto -> find("list", array("conditions" => array("resultadoaprendizaje_id" => $idResultado)));

        $this -> loadModel("Instructore");
        $this -> Instructore -> recursive = -1;
        $instructor = $this -> Instructore -> find("all", array("conditions" => array("Instructore.id" => $idInstructor)));

        $data = array();
        if (!empty($instructor)) {
            $data["res"] = "si";
            $data["id_instructor"] = $instructor[0]["Instructore"]["id"];
            $data["nombre_completo"] = $instructor[0]["Instructore"]["nombre_completo"];
        } else {
            $data["res"] = "no";
        }

        echo json_encode($data);
    }

    /*
     function obtenerActas()
     {
     $this->autoRender = false;
     $this->layout = 'ajax';
     $this->Acta->recursive=1;
     $actas = $this->Acta->find("all");

     //Configuracion del Grid
     $page = 1; // The current page
     $sortname = 'id'; // Sort column
     $sortorder = 'asc'; // Sort order
     $qtype = ''; // Search column

     // Get posted data
     if (isset($_POST['page'])) {
     $page = mysql_real_escape_string($_POST['page']);
     }
     if (isset($_POST['sortname'])) {
     $sortname = mysql_real_escape_string($_POST['sortname']);
     }
     if (isset($_POST['sortorder'])) {
     $sortorder = mysql_real_escape_string($_POST['sortorder']);
     }
     if (isset($_POST['qtype'])) {
     $qtype = mysql_real_escape_string($_POST['qtype']);
     }
     if (isset($_POST['query'])) {
     $query = mysql_real_escape_string($_POST['query']);
     }
     if (isset($_POST['rp'])) {
     $rp = mysql_real_escape_string($_POST['rp']);
     }

     // Setup sort and search SQL using posted data
     $sortSql = "order by $sortname $sortorder";
     $searchSql = ($qtype != '' && $query != '') ? "where $qtype = '$query'" : '';
     // Get total count of records

     $total = count($actas);
     // Setup paging SQL
     $pageStart = ($page-1)*$rp;
     $limitSql = "limit $pageStart, $rp";

     // Return JSON data
     $data = array();
     $data['page'] = $page;
     $data['total'] = $total;
     $data['rows'] = array();

     for($i=0; $i<=count($actas)-1; $i++) {
     $data["rows"][] = array("id"=>$actas[$i]["Acta"]["id"],
     'cell'=>array($actas[$i]["Acta"]["id"], $actas[$i]["Tipo"]["nombre"],
     $actas[$i]["Acta"]["fecha"], $actas[$i]["Grupo"]["nombre"],
     $actas[$i]["Etapa"]["descripcion"] ,$actas[$i]["Trimestre"]["nombre"],
     "<a href='#'>Evaluar ddd</a>"));
     }

     //debug($data);
     echo json_encode($data);

     }
     */

    function mostrar() {
        $this -> layout = 'modal';

    }

    function detallesActa() {
        
        $this -> layout = "";
        $this -> autoRender = false;
        $this -> recursive = 0;
        $id = $_POST["idActa"];
        $acta = $this -> Acta -> find("all", array("conditions" => array("Acta.id" => $id)));

        $idVersionEspecialidad = $acta[0]["Grupo"]["versionespecialidade_id"];
        $this -> loadModel("Versionespecialidade");
        $idEspecialidad = $this -> Versionespecialidade -> find("list", array('fields' => array('especialidade_id'), "conditions" => array("Versionespecialidade.id" => $idVersionEspecialidad)));
        foreach ($idEspecialidad as $key => $value) {
            $idEspecialidad = $value;
        }

        $this -> loadModel("Especialidade");
        $especialidad = $this -> Especialidade -> find("list", array("conditions" => array("Especialidade.id" => $idEspecialidad)));
        foreach ($especialidad as $key => $value) {
            $especialidad = $value;
        }

        $data = array();
        $data["especialidad"] = $especialidad;
        $data["trimestre"] = $acta[0]["Trimestre"]["nombre"];
        $data["etapa"] = $acta[0]["Etapa"]["descripcion"];
        $data["grupo"] = $acta[0]["Grupo"]["nombre"];
        $data["tipo"] = $acta[0]["Tipo"]["nombre"];
        $data["fecha_programada"] = $acta[0]["Acta"]["fecha"];

        $instructores = array();
        $this -> loadModel("Instructore");
        foreach ($acta[0]["Actainstructore"] as $key => $value) {
            $insts = $this -> Instructore -> find('list', array("fields" => array("nombre_completo"), "conditions" => array("Instructore.id" => $value["instructore_id"])));
            foreach ($insts as $key => $value) {
                //echo $value;
                $instructores[] = $value;

            }

        }
        $data["instructores"] = $instructores;

        $usuarios = array();
        $this -> loadModel("Usuario");
        foreach ($acta[0]["Actausuario"] as $key => $value) {
            $usus = $this -> Usuario -> find('list', array("fields" => array("nombre_completo2"), "conditions" => array("Usuario.id" => $value["usuario_id"])));
            foreach ($usus as $key => $value) {
                $usuarios[] = $value;
            }
        }

        $data["usuarios"] = $usuarios;
        $data["longitud"] = count($data);

        echo json_encode($data);
    }

}
