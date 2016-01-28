<?php

namespace app\modules\adminportal\Models;

use Doctrine\ORM\Tools\Pagination\Paginator;

abstract class BaseModel
{

    const PATH = "app\\modules\\adminportal\\Models\\entities\\";

    protected $entityManager;
    protected $entity;
    protected $typeDB;

    public function __construct(\Doctrine\ORM\EntityManager $container)
    {
        $this->entityManager = $container;
    }

    public function count($entity = null)
    {
        $entityCount = $this->getNameSpaceEntityManager($entity);
        return $this->entityManager
                        ->createQuery("SELECT COUNT(entity) FROM $entityCount entity where entity.deleted_at is null")
                        ->getSingleScalarResult();
    }

    private function getNameSpaceEntityManager($entity)
    {
        return sprintf("%s%s\\%s", self::PATH, $this->typeDB, $entity);
    }

    public function paginator($currentPage = 1, $pageSize = 10)
    {
        $query = $this->entityManager->createQuery($this->getDql())
                ->setFirstResult($pageSize * ($currentPage - 1))
                ->setMaxResults($pageSize);
        
        $paginator = (new Paginator($query, $fetchJoinCollection = true))->setUseOutputWalkers(false);

        $result = [];
        foreach ($paginator as $data) {
            $result[] = $data;
        }
        
        $totalItems = count($paginator);
        $pagesCount = ceil($totalItems / $query->getMaxResults());
        
        return ["data" => $result, "total" => $totalItems, "per_page" => $pagesCount];
    }
    
    protected function getEntity()
    {
        return $this->getNameSpaceEntityManager($this->entity);
    }

    public function setDQL($dql = null, $select = null)
    {
        $selectData = (is_null($select) ? $this->entity : $select);
        $this->dql = sprintf("SELECT %s FROM %s %s %s", $selectData, $this->getEntity(), $this->entity, $dql);
        return $this;
    }
    
    protected function getDql()
    {
        return $this->dql;
    }
}
