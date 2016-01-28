<?php

namespace app\modules\adminportal\Models\entities\portalpravaler;

/**
 * @Entity
 * @Table(name="tb_regua")
 */
class InteresseAlunos
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_regua")
     */
    public $id_regua;
    
    /**
     * @Column(type="string", nullable=false, name="nm_completo")
     */
    public $nm_completo;
    
    /**
     * @Column(type="string", nullable=false, name="cd_cpf")
     */
    public $cd_cpf;
    
    /**
     * @Column(type="integer", nullable=false, name="nm_email")
     */
    public $nm_email;
    
    /**
     * @Column(type="integer", nullable=false, name="cd_telefone")
     */
    public $cd_telefone;
    
    /**
     * @Column(type="string", nullable=false, name="ds_ja_estuda")
     */
    public $ds_ja_estuda;
    
    /**
     * @Column(type="string", nullable=false, name="cd_tipo_produto")
     */
    public $cd_tipo_produto;
    
    /**
     * @Column(type="string", nullable=false, name="cd_nota_enem")
     */
    public $cd_nota_enem;
    
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
