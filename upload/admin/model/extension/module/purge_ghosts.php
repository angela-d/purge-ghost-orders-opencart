<?php
class ModelExtensionModulePurgeGhosts extends Model {
	public function ghostCheck(){

    // only transactions with blank firstname & lastname are candidates for deletion; this prevents any potentially legit transactions from getting mixed up
		$this->db->query("DELETE FROM " . DB_PREFIX . "order WHERE firstname = '' && lastname = '' && DATEDIFF(NOW(), date_modified) > 1");

	}
}
