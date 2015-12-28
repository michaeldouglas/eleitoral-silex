<?php

namespace app\Models\Usuarios;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class usuarios implements UserProviderInterface
{
    private $app;
    private $request;
    
    public function __construct(\Pimple $container, $request) 
    {
        $this->app = $container;
        $this->request = $request;
    }
    
    public function loadUserByUsername($usuario)
    {
        
        $senha = $this->app['security.encoder.digest']->encodePassword($this->request['senha'], '');
        
        $user = $this->fetchUserFromDatabase($usuario, $senha);

        if ($user == NULL) {
            throw new UsernameNotFoundException(sprintf('Usuario "%s" não existe.', $usuario));
        }
        
        return new User($user->getUser(), $senha, explode(',', $user->getRoles()), true, true, true, true); 
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
        return $this->app['entityManager']->getRepository('app\Models\entities\usuario')
        ->findOneBy(array('nm_usuario' => strtolower($usuario), 'nm_senha' => $senha));
    }
}
