<?php

namespace Usuario;

/**
 * 
 * @Entity
 *  @Table(name="tb_usuario")
 */
class usuario 
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_usuario")

     */
    public $id_usuario;
    
    /**
     * @Column(type="string", name="nm_usuario")
     */
    public $nm_usuario;
}