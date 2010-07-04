<?php
require("../model/dao/SectionDao.php");
/**
* This class works as an abstraction layer to the DAO.
*/
class ImageService
{
	private $_dao;
	
	function __construct()
	{
		$this->_dao = new SectionDao();
	}
	
	public function fetchSections()
	{
		return $this->_dao->fetchSections();
	}
}

?>