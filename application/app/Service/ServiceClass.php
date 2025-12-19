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
            'ghost-mannequin'              => 'services.ghost_mannequin',
            'multi-clipping-path'          => 'services.multi-clipping-path',
            'photo-recoloring'             => 'services.photo_recoloring',
            'school-photo-editing'         => 'services.school-photo-editing',
            'photo-retouching'             => 'services.photo_retouching',
            'jewelry-retouch'              => 'services.jewelry_retouch',
            'product-photo-retouching'     => 'services.product-photo-retouching',
            'beauty-retouching'            => 'services.beauty_retouching',
            'headshot-retouching'          => 'services.headshot_retouching',
            'newborn-baby-photo-editing'   => 'services.newborn-baby-photo-editing',
            'food-photo-retouching'        => 'services.food_retouching',
            'real-estate-photo-retouching' => 'services.realestate',
            'essential-editing'            => 'services.ecommerce',
            'amazon'         => 'services.amazon',
            'ecommerce' => 'services.ecommerce',
            'image-optimization'           => 'services.image_optimization',
            'product-photography'          => 'services.product_photography',
            'apparels-photography'         => 'services.apparels_photography',
            'jewelry-photography'          => 'services.jewelry_photography',
            'school-photography'           => 'services.school_photography',
        ];

  
        if (isset($views[$slug])) {
            return view($views[$slug], compact('title'));
        }

        abort(404);
    }
}
