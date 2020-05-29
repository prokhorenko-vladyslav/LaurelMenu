<?php
    return [
        /**
         * Use cache or not
         */
        'use_cache' => false,

        /**
         * Cache driver
         */
        'cache_driver' => env('CACHE_DRIVER'),

        /**
         * Need to attach user to menu and menu item
         */
        'attach_user' => true,

        /**
         * Need to delete items of menu, if menu has been deleted
         */
        'delete_items_on_delete_menu' => true,

        /**
         * User model
         */
        'user_model' => config('auth.providers.users.model'),

        /**
         * Menu model
         */
        'menu_model' => \Laurel\Menu\App\Models\Menu::class,

        /**
         * Menu item model
         */
        'menu_item_model' => \Laurel\Menu\App\Models\MenuItem::class,
    ];
