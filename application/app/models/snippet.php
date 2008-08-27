<?php
class Snippet extends AppModel {
	var $hasAndBelongsToMany = array('Command');

	var $hasMany = array('SnippetCommand');

	var $validate = array(
		'user_id' => array(
			'rule' => 'notEmpty', 'message' => 'Please specify a user.'
		)
		, 'title' => array(
			'rule' => 'notEmpty', 'message' => 'Please specify a title.'
		)
	);
}
?>