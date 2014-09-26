<?php
class Atelier
{
	private $_id;
	private $_nom;
	private $_theme;
	private $_type;
	private $_discipline;
	private $_resume;
	private $_duree;
	private $_capacite;
	private $_inscription;
	private $_laboratoire;
	private $_adresse;
	private $_zone;
	private $_remarque;
	
	public function __construct($id, $nom, $theme, $type, $dis, $res, $dur, $cap, $insc, $labo, $adr, $zone, $rq)
	{
		$this->_id = $id;
		$this->_nom = $nom;
		$this->_theme = $theme;
		$this->_type = $type;
		$this->_discipline = $dis;
		$this->_resume = $res;
		$this->_duree = $dur;
		$this->_capacite = $cap;
		$this->_inscription = $insc;
		$this->_laboratoire = $labo;
		$this->_adresse = $adr;
		$this->_zone = $zone;
		$this->_remarque = $rq;
	}
	
	public function get_id()
	{
		return $this->_id;
	}
	
	public function get_nom()
	{
		return $this->_nom;
	}
	
	public function get_theme()
	{
		return $this->_theme;
	}
	
	public function get_type()
	{
		return $this->_type;
	}
	
	public function get_discipline()
	{
		return $this->_discipline;
	}
	
	public function get_resume()
	{
		return $this->_resume;
	}
	
	public function get_duree()
	{
		return $this->_duree;
	}
	
	public function get_capacite()
	{
		return $this->_capacite;
	}
	
	public function get_inscription()
	{
		return $this->_inscription;
	}
	
	public function get_labo()
	{
		return $this->_laboratoire;
	}
	
	public function get_adresse()
	{
		return $this->_adresse;
	}
	
	public function get_zone()
	{
		return $this->_zone;
	}
	
	public function get_remarque()
	{
		return $this->_remarque;
	}
	
	public function set_id($id)
	{
		$this->_id = $id;
	}
	
	public function set_nom($nom)
	{
		$this->_nom = $nom;
	}
	
	public function set_theme($theme)
	{
		$this->_theme = $theme;
	}
	
	public function set_type($type)
	{
		$this->_type = $type;
	}
	
	public function set_discipline($dis)
	{
		$this->_discipline = $dis;
	}
	
	public function set_resume($res)
	{
		$this->_resume = $res;
	}
	
	public function set_duree($dur)
	{
		$this->_duree = $dur;
	}
	
	public function set_capacite($cap)
	{
		$this->_capacite = $cap;
	}
	
	public function set_inscription($insc)
	{
		$this->_inscription = $insc;
	}
	
	public function set_labo($labo)
	{
		$this->_laboratoire = $labo;
	}
	
	public function set_adresse($adr)
	{
		$this->_adresse = $adr;
	}
	
	public function set_zone($zone)
	{
		$this->_zone = $zone;
	}
	
	public function set_remarque($rq)
	{
		$this->_remarque = $rq;
	}
}
?>