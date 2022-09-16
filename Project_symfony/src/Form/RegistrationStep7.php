<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RegistrationStep7 extends AbstractType
{

    const tabLanguage = ['Francais'=> 'Francais', 'Anglais'=> 'Anglais','Portugais'=> 'Portugais','Japonais'=> 'Japonais', 'Espagnol'=> 'Espagnol', 'Italien'=> 'Italien', 'Russe'=> 'Russe', 'Allemand'=> 'Allemand', 'Irlandais'=> 'Irlandais', 'Créole haïtien'=> 'Créole haïtien', 'Arménien'=> 'Arménien','Coréen'=> 'Coréen', 'Polonais'=>'Polonais', 'Suédois' => 'Suédois', 'Corse' => 'Corse', 'Écossais' => 'Écossais', 'Nederlands' => 'Nederlands', 'Slovaque' => 'Slovaque', 'Ukrainien' => 'Ukrainien'];

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('language',ChoiceType::class, ['choices' => [self::tabLanguage],
        'expanded' => false,
        'multiple' => true,
        'required' => false,
        'data' => self::tabLanguage])
         ->add('country',ChoiceType::class,['choices'=>['Brazil'=>'BR','Afghanistan'=> 'AF', 'Îles Åland'=> 'AX','Algérie'=> 'DZ','Angola'=> 'AO', 'Argentine'=> 'AR', 'Arménie'=> 'AM', 'Australie'=> 'AU', 'Bahamas'=> 'BS', 'Bangladesh'=> 'BD', 'Biélorussie'=> 'BY', 'Belgique'=> 'BE','Bolivie'=> 'BO',  'Bulgarie' => 'BG','Cambodge'=> 'KH', 'Cameroun'=> 'CM','Canada'=> 'CA','Cap-Vert'=> 'CV', 'Iles Cayman'=> 'KY', 'Chili'=> 'CL', 'Chine'=> 'CN', 'Hong Kong'=> 'HK', 'Colombie'=> 'CO', 'Comores'=> 'KM', 'République du Congo'=> 'CG','Costa Rica'=> 'CR', 'Côte d’Ivoire'=>'CI', 'Croatie' => 'HR', 'Cuba'=> 'CU', 'République tchèque'=> 'CZ','Danemark'=> 'DK','République dominicaine'=> 'DO', 'Équateur'=> 'EC', 'Égypte'=> 'EG', 'Salvador'=> 'SV', 'Estonie'=> 'EE', 'Éthiopie'=> 'ET', 'Fidji'=> 'FJ', 'Finlande'=> 'FI','France'=> 'FR', 'Guyane française'=>'GF', 'Polynésie française' => 'PF','Géorgie'=> 'GE', 'Allemagne'=> 'DE','Grèce'=> 'GR','Groenland'=> 'GL', 'Guadeloupe'=> 'GP', 'Guatemala'=> 'GT', 'Haïti'=> 'HT', 'Honduras'=> 'HN', 'Hongrie'=> 'HU', 'Islande'=> 'IS', 'Inde'=> 'IN','Indonésie'=> 'ID', 'Iran'=>'IR', 'Irak' => 'IQ', 'Israël'=> 'IL', 'Italie'=> 'IT', 'Jamaïque'=> 'JM','Japon'=> 'JP', 'Jordanie'=> 'JO', 'Corée du Nord'=> 'KP', 'Corée du Sud'=> 'KR', 'Liban'=> 'LB', 'Lituanie'=> 'LT', 'Luxembourg'=> 'LU', 'Madagascar'=> 'MG','Maldives'=> 'MV', 'Martinique'=>'MQ', 'Mexique' => 'MX','Monaco'=> 'MC', 'Mongolie'=> 'MN','Mozambique'=> 'MZ','Pays-Bas'=> 'NL', 'Nigeria'=> 'NG', 'Norvège'=> 'NO', 'Pakistan'=> 'PK', 'Palestine'=> 'PS', 'Panama'=> 'PA', 'Paraguay'=> 'PY', 'Pérou'=> 'PE','Pologne'=> 'PL', 'Portugal'=>'PT', 'Roumanie' => 'RO', 'Russie'=> 'RU', 'Arabie Saoudite'=> 'SA','Sénégal'=> 'SN','Serbie'=> 'RS', 'Singapour'=> 'SG', 'Égypte'=> 'EG', 'Salvador'=> 'SV', 'Estonie'=> 'EE', 'Éthiopie'=> 'ET', 'Fidji'=> 'FJ', 'Finlande'=> 'FI','France'=> 'FR', 'Guyane française'=>'GF', 'Polynésie Slovaquie' => 'SK','Afrique du Sud'=> 'ZA', 'Espagne'=> 'ES','Sri Lanka'=> 'LK','Suède'=> 'SE', 'Suisse'=> 'CH', 'Taiwan'=> 'TW', 'Thaïlande'=> 'TH', 'Tunisie'=> 'TN', 'Turquie'=> 'TR', 'Ukraine'=> 'UA', 'États-Unis'=> 'US','Royaume-Uni'=> 'GB', 'Uruguay'=>'UY', 'Venezuela' => 'VE', 'Viêt Nam'=> 'VN','Sahara occidental'=> 'EH', 'Zambie'=>'ZM', 'Zimbabwe' => 'ZW']]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}