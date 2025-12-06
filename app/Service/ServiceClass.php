<?php

namespace App\Service;

class ServiceClass
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function show($title, $slug)
    {
        $views = [
            'clipping-path'                => 'services.clipping_path',
            'background-remove'            => 'services.background_remove',
            'shadow-making'                => 'services.shadow_making',
            'image-masking'                => 'services.image-masking',
            'ghost-mannequin'              => 'services.ghost-mannequin',
            'multi-clipping-path'          => 'services.multi-clipping-path',
            'photo-recoloring'             => 'services.photo-recoloring',
            'school-photo-editing'         => 'services.school-photo-editing',
            'photo-retouching'             => 'services.photo-retouching',
            'jewelry-retouch'              => 'services.jewelry-retouch',
            'product-photo-retouching'     => 'services.product-photo-retouching',
            'beauty-retouching'            => 'services.beauty-retouching',
            'headshot-retouching'          => 'services.headshot-retouching',
            'newborn-baby-photo-editing'   => 'services.newborn-baby-photo-editing',
            'food-photo-retouching'        => 'services.food-photo-retouching',
            'real-estate-photo-retouching' => 'services.real-estate-photo-editing',
            'essential-editing'            => 'services.essential-editing',
            'amazon-e-bay-shopify'         => 'services.amazon-e-bay-shopify',
            'ecommerce-360-degree-editing' => 'services.ecommerce-360-degree-editing',
            'image-optimization'           => 'services.image-optimization',
            'product-photography'          => 'services.product-photography',
            'apparels-photography'         => 'services.apparels-photography',
            'jewelry-photography'          => 'services.jewelry-photography',
            'school-photography'           => 'services.school-photography',
        ];

  
        if (isset($views[$slug])) {
            return view($views[$slug], compact('title'));
        }

        abort(404);
    }
}
