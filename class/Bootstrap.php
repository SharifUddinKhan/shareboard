<?php 

class Bootstrap{

	protected $controller;
	protected $request;
	protected $action;

	public function __construct($request){
		$this->request = $request;

		if($this->request['controller'] == ''){
			$this->controller = 'home';
		}else {
			$this->controller = $this->request['controller'];
		}

		if($this->request['action'] == ''){
			$this->action = 'index';
		}else {
			$this->action = $this->request['action'];
		}
	}

	public function createController(){
		if(class_exists($this->controller)){
			$parents = class_parents($this->controller);

			if(in_array("Controller", $parents)){

				if(method_exists($this->controller, $this->action)){
					return new $this->controller($this->action, $this->request);
				}else{
					echo '<h3>Method does not exist</h3>';
				}
			}else{
				echo '<h3>Class controller does not exist</h3>';
			}
		}else{
			echo '<h3>Class does not exist</h3>';
		}
	}

}

 ?>