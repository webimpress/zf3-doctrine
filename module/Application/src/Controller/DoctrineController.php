<?php

namespace Application\Controller;

use Application\Entity\Album;
use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController;

class DoctrineController extends AbstractActionController
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function indexAction()
    {
        return [
            'albums' => $this->em->getRepository(Album::class)->findAll(),
        ];
    }
}
