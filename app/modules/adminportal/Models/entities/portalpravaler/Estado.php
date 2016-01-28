<?php

namespace app\modules\adminportal\Models\entities\portalpravaler;

/**
 * @Entity
 * @Table(name="tb_estado")
 */
class Estado
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_estado")

     */
    public $id_estado;
    
    /**
     * @Column(type="string", nullable=false, name="nm_estado")
     */
    public $nm_estado;
    
    /**
     * @Column(type="string", nullable=false, name="cd_estado")
     */
    public $cd_estado;
    
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
    
    
    public function getIdEstado()
    {
        return $this->id_estado;
    }
    public function getNomeEstado()
    {
        return $this->nm_estado;
    }
    
    public function getSiglaEstado()
    {
        return $this->cd_estado;
    }
}
