<?php
namespace portpontrieuxBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
 
// Ne pas oublier d'ajouter :
use portpontrieuxBundle\Entity\Emplacement;
use portpontrieuxBundle\Form\EmplacementType;
 
class EmplacementController extends Controller
{
    public function insererAction(Request $request)
    {
          // Création du formulaire
          $emplacement = new Emplacement();
          $form   = $this->get('form.factory')->create(EmplacementType::class, $emplacement);
            
          // Insertion dans la BDD si method POST ou affichage du formulaire dans le cas contraire
          if ($request->getMethod() == 'POST')
          {
              $form->handleRequest($request); // remplissage du formulaire à partir de la requête Http
              if ($form->isValid())
              {
                   $em = $this->getDoctrine()->getManager();
                   $em->persist($emplacement);
                   $em->flush();
                        
                   $request->getSession()->getFlashBag()->add('info', 'Emplacement bien enregistré.');
                        
                   return $this->redirectToRoute('portpontrieux_homepage');
              }
          }
            
          return $this->render('portpontrieuxBundle:Emplacement:insertion.html.twig', array('form' => $form->createView()));
    }
}