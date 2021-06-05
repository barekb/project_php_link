<?php

namespace Controller;

use Entity\Link;
use Entity\User;
use ludk\Http\Request;
use ludk\Http\Response;
use ludk\Controller\AbstractController;

class ContentController extends AbstractController
{
    public function create(Request $request): Response
    {
        $linkRepo = $this->getOrm()->getRepository(Link::class);
        $manager = $this->getOrm()->getManager();
        if (
            ($request->getSession()->has('user'))
            && ($request->request->has('name'))
            && ($request->request->has('desc'))
            && ($request->request->has('url'))
        ) {
            $errorMsg = NULL;

            if (strlen(trim($request->request->get('name'))) < 2) {
                $errorMsg = "Le nom doit comprendre au moins 3 lettres ";
            } elseif (strlen(trim($request->request->get('desc'))) <= 2) {
                $errorMsg = "La description est vide";
            } elseif (strlen(trim($request->request->get('url'))) <= 2) {
                $errorMsg = "Le lien doit contenir plus de lettre";
            }
            if ($errorMsg) {
                $data = array(
                    "errorMsg" => $errorMsg
                );
                return $this->render('createLink.php', $data);
            } else {
                $newLink = new Link();
                // $newLink->created_at = date("Y-m-d H:i:s");
                $newLink->name = $request->request->get('name');
                $newLink->url = $request->request->get('url');
                $newLink->desc = $request->request->get('desc');
                $newLink->user = $request->getSession()->get('user');
                $manager->persist($newLink);
                $manager->flush();
                return $this->redirectToRoute('display');
            }
        }

        return $this->render('createLink.php');
    }
}
