<?php

namespace app\modules\adminportal\Models\entities\admin;

/**
 * @Entity
 * @Table(name="tb_usuario")
 */
class Usuario
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_usuario")

     */
    public $id_usuario;
    
    /**
     * @Column(type="string", nullable=false, name="nm_usuario")
     */
    public $nm_usuario;
    
    /**
     * @Column(type="string", nullable=false, name="nm_senha")
     */
    public $nm_senha;
    
    /**
     * @Column(type="string", nullable=false, name="nm_roles")
     */
    public $nm_roles;
    
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
    
    
    public function getUser()
    {
        return $this->nm_usuario;
    }
    public function getRoles()
    {
        return $this->nm_roles;
    }
    
    public function getPassword()
    {
        return $this->nm_senha;
    }
}
