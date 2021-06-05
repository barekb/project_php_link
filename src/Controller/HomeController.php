<?php

namespace Controller;

use Entity\Link;
use Entity\User;
use ludk\Http\Request;
use ludk\Http\Response;
use ludk\Controller\AbstractController;

class HomeController extends AbstractController
{

    public function display(Request $request): Response
    {

        $linkRepo = $this->getOrm()->getRepository(Link::class);
        $userRepo = $this->getOrm()->getRepository(User::class);

        $links = [];
        if ($request->query->has('search')) {
            $strToSearch = $request->query->get('search');
            $posOfTheAtCharacter = strpos($strToSearch, "@");

            if ($posOfTheAtCharacter === 0) {
                $userName = substr($strToSearch, 1);
                $users = $userRepo->findBy(array("nickname" => $userName));
                if (count($users) == 1) {
                    $links = $linkRepo->findBy(array("user" => $users[0]->id));
                }
            } else {
                $links = $linkRepo->findBy(
                    array("desc" => "%$strToSearch%")
                );
            }
        } else {
            $links = $linkRepo->findAll();
        }
        $data = array(
            'links' => $links
        );
        return $this->render('display.php', $data);
    }
}
