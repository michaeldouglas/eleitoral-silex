<?php

namespace app\Models\Usuarios;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class usuarios implements UserProviderInterface
{
    private $conn;
    private $request;
    
    public function __construct(\Pimple $container, $request) 
    {
        $this->conn = $container['db'];
        $this->app = $container;
        $this->request = $request;
    }
    
    public function loadUserByUsername($usuario)
    {
        $senha = $this->app['security.encoder.digest']->encodePassword($this->request['senha'], '');
        
        $user = $this->fetchUserFromDatabase($usuario, $senha);

        if ($user == false) {
            throw new UsernameNotFoundException(sprintf('Usuario "%s" não existe.', $usuario));
        }
        
        return new User($user['nm_usuario'],$senha, explode(',', $user['nm_roles']), true, true, true, true); 
    }
    
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }
        
        return $user;
    }
 
    public function supportsClass($class)
    {
        return $class === 'Symfony\Component\Security\Core\User\User';
    }
    
    protected function fetchUserFromDatabase($usuario, $senha)
    {
        $stmt = $this->conn->executeQuery(
            'SELECT * FROM tb_usuario WHERE nm_usuario = ? and nm_senha = ?',
            array(strtolower($usuario), $senha)
        );
        
        return $stmt->fetch();
    }
    
}