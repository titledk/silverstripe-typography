<?php
class SimpleTypographyTestPage extends TypographyTestPage {

	private static $description = 'Typography Test';

	static $defaults = array(
		'URLSegment' => 'typography',
		'ShowInMenus' => true,
		'ShowInSearch' => false,
		'Title' => 'Typography Test',
		'Content' => 'auto-completed - do not alter',
		'Sort' => 99999
	);

}

class SimpleTypographyTestPage_Controller extends TypographyTestPage_Controller {


	function init() {
		Page_Controller::init();
	}

	protected function typographyhtml() {
		return $this->renderWith('SimpleTypographySample');
	}

	function Form() {
		return null;
	}

}