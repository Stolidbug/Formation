<?php


namespace App\Form\Extension;


use App\Entity\StorageLocation;
use App\Entity\Supplier;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('supplier', EntityType::class, [
                'class' => Supplier::class,
                'choice_label' => 'name',
                'label' => 'app.ui.supplier',
            ])
            ->add('storagelocation', EntityType::class, [
                'class' => StorageLocation::class,
                'choice_label' => 'city',
                'label' => 'app.ui.storagelocation',
            ])
            ;
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
