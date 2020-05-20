<?php

namespace App\Controller\Api;
use App\entity\Comment;
use Symfony\Component\Security\Core\Security;

class CommentCreateController
{

    private $securiy;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    public function __invoke(Comment $data)
    {
        $data->setAuthor($this->security->getUser());
        return $data;
    }
}