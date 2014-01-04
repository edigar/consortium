<?php
	
Class PaginasController extends AppController {
	public $uses = array('Page');
	
	public function index()
    {
        $this->layout = 'admin';
        $page = $this->Page->find('all'); //array('conditions' => array('Page.id' => 1))
        $this->set('principal',$page);
    }

    public function alterar($id)
    {
    	//echo $_POST["data"]["admin"]["titulo"];
    	//echo '<pre>'; print_r($_POST); echo '</pre>';
    	if(isset($_POST["data"])) {
    		$this->Page->read(null, $id);
            if(!isset($_FILES['data']['name']['paginas']['imagem'])) {
                $this->Page->set(array(
                    'titulo' => $_POST["data"]["paginas"]["titulo"],
                    'conteudo' => $_POST["data"]["paginas"]["conteudo"])
                );
            } else {
                $uploaddir = '../webroot/img/';
                $uploadfile = $uploaddir . $_FILES['data']['name']['paginas']['imagem'];     
                if (move_uploaded_file($_FILES['data']['tmp_name']['paginas']['imagem'], $uploadfile)){
                    $this->Page->set(array(
                        'titulo' => $_POST["data"]["paginas"]["titulo"],
                        'conteudo' => $_POST["data"]["paginas"]["conteudo"],
                        'imagem' => 'app/webroot/img/' . $_FILES['data']['name']['paginas']['imagem'])
                    );
                }
            }
    		$this->Page->save();
    	}
    	$page = $this->Page->find('first', array(
        	'conditions' => array('id' => $id))
    	);
    	$this->set('pagina',$page);
    }

    public function adicionar(){
    	//echo '<pre>'; print_r($_POST); echo '</pre>';
    	//echo '<pre>'; print_r($this->request->data); echo '</pre>';
    	if($this->request->isPost() && !empty($_POST["data"])) {
    		
            $uploaddir = '../webroot/img/';
            $uploadfile = $uploaddir . $_FILES['data']['name'][0]['/']['imagem'];

            if (move_uploaded_file($_FILES['data']['tmp_name'][0]['/']['imagem'], $uploadfile)) {
                $pagina["Page"]["imagem"] = 'app/webroot/img/' . $_FILES['data']['name'][0]['/']['imagem'];
                $pagina["Page"]["titulo"] = $_POST["data"][0]["/"]["titulo"];
                $pagina["Page"]["conteudo"] = $_POST["data"][1]["/"]["conteudo"];
                $pagina["Page"]["slug"] = Inflector::slug(strtolower($_POST["data"][0]["/"]["titulo"]));
                if($this->Page->save($pagina)) {
                    $this->redirect("../admin");
                } else $this->Session->setFlash('Página não adicionada! :(');
            }
            else  $this->Session->setFlash('Problema no envio do arquivo de imagem. Página não adicionada.');
    	}
    }

    public function apagar($id){
        if($this->Page->delete($id)) {
            $this->Session->setFlash('Usuário deletado');
            $this->redirect('../paginas');
        }
        $this->Session->setFlash('Usuário não foi deletado');
        $this->redirect('../paginas');
    }
}