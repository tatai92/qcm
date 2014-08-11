<?php
namespace Tatai\Bundle\QcmBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tatai\Bundle\QcmBundle\Entity\FormKind;

class FormKinds implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Liste des noms de compétences à ajouter
    $names = array('Case à cocher', 'Bouton radio');
    $liste_names=array();
    foreach($names as $i => $name)
    {
      // On crée la compétence
      $liste_names[$i] = new FormKind();
      $liste_names[$i]->setName($name);

      // On la persiste
      $manager->persist($liste_names[$i]);
    }                            

    // On déclenche l'enregistrement
    $manager->flush();
  }
}