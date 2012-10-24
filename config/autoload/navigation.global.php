<?php

return array(
    // All navigation-related configuration is collected in the 'navigation' key
    'navigation' => array(

        // The DefaultNavigationFactory we configured in (1) uses 'default' as the sitemap key
        'default' => array(

            // And finally, here is where we define our page hierarchy
            'PhotoAlbum' => array(
                'label' => 'Photo Album',
                'route' => 'photoalbum',
                'pages' => array(
                    'home' => array(
                        'label' => 'Dashboard',
                        'route' => 'photoalbum',
                    ),
                    'Admin' => array(
                        'label' => 'Admin',
                        'route' => 'photoAlbumAdmin',
                    ),
                ),
            ),
        ),
        'admin' => array(
            //And finally, here is where we define our page hierarchy
            'Resident' => array(
                'label' => 'Resident',
                'route' => 'zfcadmin/real-estate-admin',
                'pages' => array(
                    'Add' => array(
                        'label' => 'real-estate',
                        'route' => 'add',
                    ),
                    'Delete' => array(
                        'label' => 'real-estate',
                        'route' => 'delete',
                    ),
                ),
            ),
        ),
    ),
);
