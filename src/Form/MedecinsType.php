<?php

namespace App\Form;

use App\Entity\Medecins;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedecinsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance')
            ->add('lieuNaissance')
            ->add('gsm')
            ->add('fixe')
            ->add('fax')
            ->add('sexe')
            ->add('adresse')
            ->add('etatActuel')
            ->add('anneeDiplome')
            ->add('epouse')
            ->add('siteWeb')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('deletedAt')
            ->add('idNationalite')
            ->add('idSpecialite')
            ->add('idDiplome')
            ->add('idVille')
            ->add('idExercice')
            ->add('idDelegation')
            ->add('idMode')
            ->add('idGouvernorat')
            ->add('idTypeMode')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Medecins::class,
        ]);
    }
}
