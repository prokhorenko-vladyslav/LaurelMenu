<?php
    return [
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
    ];
