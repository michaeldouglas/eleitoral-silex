<?php

namespace app\modules\adminportal\Models\entities\portalpravaler;

/**
 * @Entity
 * @Table(name="tb_campus")
 */
class Campus
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_campus")
     */
    public $id_campus;
    
    /**
     * @OneToOne(targetEntity="Cursos", inversedBy="campus")
     * @JoinColumn(name="id_campus", referencedColumnName="id_campus")
     */
    private $cursos;
    
    /**
     * @Column(type="string", nullable=false, name="nm_campus")
     */
    public $nm_campus;
    
    /**
     * @Column(type="integer", nullable=false, name="id_instituicao")
     */
    public $id_instituicao;
    
    /**
     * @Column(type="integer", nullable=false, name="id_estado")
     */
    public $id_estado;
    
    /**
     * @Column(type="integer", nullable=false, name="id_cidade")
     */
    public $id_cidade;
    
    /**
     * @Column(type="string", nullable=false, name="nm_logo")
     */
    public $nm_logo;
    
    /**
     * @Column(type="string", nullable=false, name="nm_endereco")
     */
    public $nm_endereco;
    
    /**
     * @Column(type="string", nullable=false, name="ds_complemento")
     */
    public $ds_complemento;
    
    /**
     * @Column(type="string", nullable=false, name="nm_bairro")
     */
    public $nm_bairro;
    
    /**
     * @Column(type="string", nullable=false, name="cd_cep")
     */
    public $cd_cep;
    
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
}
