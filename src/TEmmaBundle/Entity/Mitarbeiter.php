<?php

namespace TEmmaBundle\Entity;

/**
 * Mitarbeiter
 */
class Mitarbeiter
{
    /**
     * @var string
     */
    private $mitarbeitername;

    /**
     * @var string
     */
    private $mitarbeitervorname;

    /**
     * @var string
     */
    private $mitarbeitertelefon;

    /**
     * @var string
     */
    private $mitarbeiteradresse;

    /**
     * @var string
     */
    private $passwd;

    /**
     * @var string
     */
    private $mitarbeiterid;


    /**
     * Set mitarbeitername
     *
     * @param string $mitarbeitername
     *
     * @return Mitarbeiter
     */
    public function setMitarbeitername($mitarbeitername)
    {
        $this->mitarbeitername = $mitarbeitername;

        return $this;
    }

    /**
     * Get mitarbeitername
     *
     * @return string
     */
    public function getMitarbeitername()
    {
        return $this->mitarbeitername;
    }

    /**
     * Set mitarbeitervorname
     *
     * @param string $mitarbeitervorname
     *
     * @return Mitarbeiter
     */
    public function setMitarbeitervorname($mitarbeitervorname)
    {
        $this->mitarbeitervorname = $mitarbeitervorname;

        return $this;
    }

    /**
     * Get mitarbeitervorname
     *
     * @return string
     */
    public function getMitarbeitervorname()
    {
        return $this->mitarbeitervorname;
    }

    /**
     * Set mitarbeitertelefon
     *
     * @param string $mitarbeitertelefon
     *
     * @return Mitarbeiter
     */
    public function setMitarbeitertelefon($mitarbeitertelefon)
    {
        $this->mitarbeitertelefon = $mitarbeitertelefon;

        return $this;
    }

    /**
     * Get mitarbeitertelefon
     *
     * @return string
     */
    public function getMitarbeitertelefon()
    {
        return $this->mitarbeitertelefon;
    }

    /**
     * Set mitarbeiteradresse
     *
     * @param string $mitarbeiteradresse
     *
     * @return Mitarbeiter
     */
    public function setMitarbeiteradresse($mitarbeiteradresse)
    {
        $this->mitarbeiteradresse = $mitarbeiteradresse;

        return $this;
    }

    /**
     * Get mitarbeiteradresse
     *
     * @return string
     */
    public function getMitarbeiteradresse()
    {
        return $this->mitarbeiteradresse;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     *
     * @return Mitarbeiter
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Get mitarbeiterid
     *
     * @return string
     */
    public function getMitarbeiterid()
    {
        return $this->mitarbeiterid;
    }
    
    public function createId() {
        $id = substr($this->mitarbeitervorname, 0, 1);
        $id = $id . $this->mitarbeitername;
        return substr($id, 0, 5);
    }
    
    public function __toString() {
        return $this->mitarbeitername . " " . $this->mitarbeitervorname;
    }
}
