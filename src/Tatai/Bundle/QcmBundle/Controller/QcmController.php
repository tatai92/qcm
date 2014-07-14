<?php

namespace Tatai\Bundle\QcmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Tatai\Bundle\QcmBundle\Entity\Form;
use Tatai\Bundle\QcmBundle\Form\FormType;
use Tatai\Bundle\QcmBundle\Form\FormEditType;
class QcmController extends Controller
{
    
    /**
     * @Route("/home", name="tatai_qcm_home")
     * @Template()
     */
    public function indexAction()
    {
        $forms = $this->getDoctrine()->getRepository('TataiQcmBundle:Form')->findAll();
        return array('forms' => $forms);
    }  

    /**
     * @Route("/form/add", name="tatai_qcm_form_add")
     * @Template()
     */    
    public function formAddAction(Request $request)
    {
        $qcm_form=new Form();
        $form = $this->createForm(new FormType(), $qcm_form);
        
        if ($request->isMethod('POST')){
          
            if ($form->handleRequest($request)->isValid())
            {
                $em = $this->get('doctrine')->getManager();
                $em->persist($qcm_form);
                $em->flush();
                 // On définit un message flash
                $request->getSession()->getFlashBag()->add('success', 'L\'ajout du formulaire a bien été effectuée');
                return $this->redirect($this->generateUrl('tatai_qcm_home'));
            }

        
        }
        return array(
            'form' => $form->createView(),
        );
    }  
    
    /**
     * @Route("/form/edit/{id}", name="tatai_qcm_form_edit",requirements = {"id" = "\d+"})
     * @Template()
     */
    public function formEditAction(Form $qcm_form,Request $request)
    {
        if ($qcm_form == null) {
            throw $this->createNotFoundException('Formulaire[id='.$qcm_form->getId().'] inexistant');
        }
    
        $form = $this->createForm(new FormEditType(), $qcm_form);

        if ($request->isMethod('POST')){
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($qcm_form);
                $em->flush();
                
                // On définit un message flash
                $request->getSession()->getFlashBag()->add('success', 'La modification du formulaire a bien été effectuée');
                
                return $this->redirect($this->generateUrl('tatai_qcm_home'));
            }
        }

        return array(
           'form' => $form->createView(),
           'qcm_form' => $qcm_form
        );   

    }  
    
    
    
}
