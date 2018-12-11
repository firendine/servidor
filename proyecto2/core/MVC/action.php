<?php

abstract class Action
{
    protected $globals;

    public function run($action) {
        $this->globals = Globals::getInstance();
		// Call the action
		$this->$action();
    }
    
}
