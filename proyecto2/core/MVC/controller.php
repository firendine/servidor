<?php
include_once $config["site"]["coreMVC"] . "router.php";

class Controller extends Router{

	private $controllerName = "";
	private $defaultControllerName = "";
	private $controllerPath = "";
	private $defaultRouterConfig = "";
	private $actionName = "";
	private $defaultActionName = "";
    private $routesFile = "../Configs/routes.php";

    private $params = array();
    protected $globals;

    public function __construct() {
        $this->globals = Globals::getInstance();
		$config = $this->globals->get("config");
		$this->controllerPath = $config["site"]["controllers"];
		$this->defaultRoutesConfig = $config["site"]["configs"] . "routes.php";


        $routesFile = $this->defaultRoutesConfig;

		if(!file_exists($routesFile)) {
			throw new ControllerException("Router configuration file not found.");
		}


		$routes = require_once $routesFile;

		if(!is_array($routes) || !array_key_exists("routes", $routes)) {
			throw new ControllerException("Invlid routes configuration file");
		}

		// Check if defaults are given
		if(array_key_exists("default", $routes)) { 
			if(array_key_exists("controller", $routes["default"])) {
				$this->defaultControllerName = $routes["default"]["controller"];
			}

			if(array_key_exists("action", $routes["default"])) {
				$this->defaultActionName = $routes["default"]["action"];
			}

		}

		$this->addRoutesFromFile($routes);        
	}

	private function setControllerName($controllerName) {
		if(!is_string($controllerName)) {
			throw new ControllerException("Invalid Controller Name.");
		}

		$this->controllerName = ucfirst(strtolower($controllerName)) . "Controller";
	}

	/**
	 * Sets the action full name.
	 *
	 * @param string $actionName The name of the action
	 */
	private function setActionName($actionName) {

		if(!is_string($actionName)) {
			throw new ControllerException("Invalid Action Name.");
		}
		$this->actionName = ucfirst(strtolower($actionName)) . "Action";
	}

	public function run() {
		if(($route = $this->parseUriRouter()) != null) {
			$this->setControllerName($route["controller"]);
			$this->setActionName($route["action"]);
		}

		else {
			$this->setControllerName($this->defaultControllerName);
			$this->setActionName($this->defaultActionName);
		}

		$this->includeController($this->controllerName);
		$controller = new $this->controllerName();
		$controller->run($this->actionName, $this);
	}

	private function includeController($controllerName) {
		$controllerFile = $this->controllerPath . $controllerName . ".php";

		if(!file_exists($controllerFile)) {
			throw new ControllerException("Controller file cannot be found");
		}

		require_once($controllerFile);
	}
}

