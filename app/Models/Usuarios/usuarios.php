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
    
    public function __construct(\Pimple $container) 
    {
        $this->conn = $container['db'];
        $this->app = $container;
    }
    
    public function loadUserByUsername($usuario)
    {
        $senha = $this->app['security.encoder.digest']->encodePassword(filter_input(INPUT_POST, '_password'), '');
        $stmt = $this->conn->executeQuery('SELECT * FROM tb_usuario WHERE nm_usuario = ? and nm_senha = ?', array(
            strtolower($usuario),
            $senha
            ));
        $user = $stmt->fetch();

        if ($user == false) {
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $usuario));
        }
//        echo "<pre>";
//        var_dump($user['nm_usuario']);
//        var_dump($senha);
//        var_dump($user);
//        var_dump(explode(',', $user['nm_roles']));
        
        $u = new User($user['nm_usuario'], $senha, explode(',', $user['nm_roles']), true, true, true, true);
        
//        echo "<pre>", print_r($u, 1), "<pre>";
//        die;
//        print $u->getSalt();
//        print_r($u->getRoles());
//        die;
        return $u; 
    }
    
    
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }
 
        return $this->loadUserByUsername($user->getUsername());
    }
 
    public function supportsClass($class)
    {
        return $class === 'Symfony\Component\Security\Core\User\User';
    }
    
}