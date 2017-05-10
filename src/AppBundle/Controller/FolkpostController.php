<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Folkpost;
use AppBundle\Form\FolkpostType;

/**
 * Folkpost controller.
 *
 * @Route("/folkpost")
 */
class FolkpostController extends Controller
{
    /**
     * Lists all Folkpost entities.
     *
     * @Route("/", name="folkpost_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $folkposts = $em->getRepository('AppBundle:Folkpost')->findAll();

        return $this->render('folkpost/index.html.twig', array(
            'folkposts' => $folkposts,
        ));
    }

    /**
     * Creates a new Folkpost entity.
     *
     * @Route("/new", name="folkpost_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $folkpost = new Folkpost();
        $form = $this->createForm('AppBundle\Form\FolkpostType', $folkpost);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($folkpost);
            $em->flush();

            return $this->redirectToRoute('folkpost_show', array('id' => $folkpost->getId()));
        }

        return $this->render('folkpost/new.html.twig', array(
            'folkpost' => $folkpost,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Folkpost entity.
     *
     * @Route("/{id}", name="folkpost_show")
     * @Method("GET")
     */
    public function showAction(Folkpost $folkpost)
    {
        $deleteForm = $this->createDeleteForm($folkpost);

        return $this->render('folkpost/show.html.twig', array(
            'folkpost' => $folkpost,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Folkpost entity.
     *
     * @Route("/{id}/edit", name="folkpost_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Folkpost $folkpost)
    {
        $deleteForm = $this->createDeleteForm($folkpost);
        $editForm = $this->createForm('AppBundle\Form\FolkpostType', $folkpost);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($folkpost);
            $em->flush();

            return $this->redirectToRoute('folkpost_edit', array('id' => $folkpost->getId()));
        }

        return $this->render('folkpost/edit.html.twig', array(
            'folkpost' => $folkpost,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Folkpost entity.
     *
     * @Route("/{id}", name="folkpost_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Folkpost $folkpost)
    {
        $form = $this->createDeleteForm($folkpost);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($folkpost);
            $em->flush();
        }

        return $this->redirectToRoute('folkpost_index');
    }

    /**
     * Creates a form to delete a Folkpost entity.
     *
     * @param Folkpost $folkpost The Folkpost entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Folkpost $folkpost)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('folkpost_delete', array('id' => $folkpost->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
