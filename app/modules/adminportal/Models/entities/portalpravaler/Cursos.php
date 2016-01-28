<?php

namespace app\modules\adminportal\Models\entities\portalpravaler;

/**
 * @Entity
 * @Table(name="tb_curso")
 */
class Cursos
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_curso")
     */
    public $id_curso;
    
    /**
     * @Column(type="string", nullable=false, name="nm_curso")
     */
    public $nm_curso;
    
    /**
     * @Column(type="integer", nullable=false, name="id_campus")
     */
    public $id_campus;
    
    /**
     * @OneToOne(targetEntity="Campus", mappedBy="cursos")
     */
    private $campus;
    
    /**
     * @Column(type="integer", nullable=false, name="id_curso_tipo")
     */
    public $id_curso_tipo;
    
    /**
     * @Column(type="integer", nullable=false, name="id_periodo")
     */
    public $id_periodo;
    
    /**
     * @Column(type="integer", nullable=false, name="id_curso_modalidade")
     */
    public $id_curso_modalidade;
    
    /**
     * @Column(type="integer", nullable=false, name="cd_nota_enade")
     */
    public $cd_nota_enade;
    
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
    
    /**
     *
     * @Column(type="float", name="vl_mensalidade", nullable=false)
     */
    public $vl_mensalidade;
    
    /**
     *
     * @Column(type="integer", name="qt_meses", nullable=false)
     */
    public $qt_meses;
    
    public function getCurso()
    {
        return $this->nm_curso;
    }
}
