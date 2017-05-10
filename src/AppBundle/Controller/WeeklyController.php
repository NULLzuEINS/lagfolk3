<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Weekly;
use AppBundle\Form\WeeklyType;

/**
 * Weekly controller.
 *
 * @Route("/weekly")
 */
class WeeklyController extends Controller
{
    /**
     * Lists all Weekly entities.
     *
     * @Route("/", name="weekly_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $weeklies = $em->getRepository('AppBundle:Weekly')->findAll();

        return $this->render('weekly/index.html.twig', array(
            'weeklies' => $weeklies,
        ));
    }

    /**
     * Creates a new Weekly entity.
     *
     * @Route("/new", name="weekly_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $weekly = new Weekly();
        $form = $this->createForm('AppBundle\Form\WeeklyType', $weekly);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($weekly);
            $em->flush();

            return $this->redirectToRoute('weekly_show', array('id' => $weekly->getId()));
        }

        return $this->render('weekly/new.html.twig', array(
            'weekly' => $weekly,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Weekly entity.
     *
     * @Route("/{id}", name="weekly_show")
     * @Method("GET")
     */
    public function showAction(Weekly $weekly)
    {
        $deleteForm = $this->createDeleteForm($weekly);

        return $this->render('weekly/show.html.twig', array(
            'weekly' => $weekly,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Weekly entity.
     *
     * @Route("/{id}/edit", name="weekly_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Weekly $weekly)
    {
        $deleteForm = $this->createDeleteForm($weekly);
        $editForm = $this->createForm('AppBundle\Form\WeeklyType', $weekly);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($weekly);
            $em->flush();

            return $this->redirectToRoute('weekly_edit', array('id' => $weekly->getId()));
        }

        return $this->render('weekly/edit.html.twig', array(
            'weekly' => $weekly,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Weekly entity.
     *
     * @Route("/{id}", name="weekly_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Weekly $weekly)
    {
        $form = $this->createDeleteForm($weekly);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($weekly);
            $em->flush();
        }

        return $this->redirectToRoute('weekly_index');
    }

    /**
     * Creates a form to delete a Weekly entity.
     *
     * @param Weekly $weekly The Weekly entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Weekly $weekly)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('weekly_delete', array('id' => $weekly->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
