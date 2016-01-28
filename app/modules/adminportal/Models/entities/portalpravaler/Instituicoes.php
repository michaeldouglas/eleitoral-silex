<?php

namespace app\modules\adminportal\Models\entities\portalpravaler;

/**
 * @Entity
 * @Table(name="tb_instituicao")
 */
class Instituicoes
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_instituicao")
     */
    public $id_instituicao;
    
    /**
     * @Column(type="string", nullable=false, name="nm_instituicao")
     */
    public $nm_instituicao;
    
    /**
     * @Column(type="integer", nullable=false, name="cd_nota_igc")
     */
    public $cd_nota_igc;
    
    /**
     * @Column(type="datetime", name="created_at", nullable=false,
     * columnDefinition="TIMESTAMP DEFAULT CURRENT_TIMESTAMP")
     */
    public $created_at;
    
    /**
     *
     * @Column(type="datetime", name="updated_at", nullable=false, columnDefinition="TIMESTAMP DEFAULT NULL")
     */
    public $updated_at;
    
    /**
     *
     * @Column(type="datetime", name="deleted_at", nullable=false, columnDefinition="TIMESTAMP DEFAULT NULL")
     */
    public $deleted_at;
    
    
    public function getIdInstituicao()
    {
        return $this->id_instituicao;
    }
    public function getNomeInstituicao()
    {
        return $this->nm_instituicao;
    }
    
    public function getNotaIGC()
    {
        return $this->cd_nota_igc;
    }
    
    public function rowCount()
    {
        echo "<pre>", print_r(get_class_methods($this), 1), "<pre>";
        die;
    }
}
