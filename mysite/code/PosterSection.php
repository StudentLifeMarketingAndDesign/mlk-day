<?php
class PosterSection extends Section {

	private static $db = array(


	);

	private static $has_one = array(

	);
	private static $belongs_many_many = array (
	);
	private static $has_many = array(
	);


	public function getCMSFields(){
		$f = parent::getCMSFields();

		$gridFieldConfig = GridFieldConfig_RecordEditor::create();
		$gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
		
		$gridField = new GridField("Poster", "Posters", Poster::get(), $gridFieldConfig);
		$f->addFieldToTab("Root.Main", $gridField, "Content"); // add the grid field to a tab in the CMS	*/
			

		return $f;
	}


}
class PosterSection_Controller extends Section_Controller {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();

	}

}