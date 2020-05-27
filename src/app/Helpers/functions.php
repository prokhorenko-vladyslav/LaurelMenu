<?php

use Laurel\Menu\App\Models\Menu;
use Laurel\Menu\App\Models\MenuItem;
use Laurel\Menu\MenuFacade;

if (!function_exists('loadMenuById')) {
    /**
     * Loads menu using id
     *
     * @param int $id
     * @return Menu|null
     */
    function loadMenuById(int $id): ?Menu
    {
        return MenuFacade::loadMenuById($id);
    }
}

if (!function_exists('loadMenuBySlug')) {
    /**
     * Loads menu using slug
     *
     * @param string $slug
     * @return Menu|null
     */
    function loadMenuBySlug(string $slug): ?Menu
    {
        return MenuFacade::loadMenuBySlug($slug);
    }
}

if (!function_exists('loadMenuItemById')) {
    /**
     * Loads menu item using id
     *
     * @param int $id
     * @return MenuItem|null
     */
    function loadMenuItemById(int $id): ?MenuItem
    {
        return MenuFacade::loadMenuItemById($id);
    }
}

if (!function_exists('loadMenuItemBySlug')) {
    /**
     * Loads menu item using slug
     *
     * @param string $slug
     * @return mixed
     */
    function loadMenuItemBySlug(string $slug)
    {
        return MenuFacade::loadMenuItemBySlug($slug);
    }
}

if (!function_exists('deleteMenuById')) {
    /**
     * Deletes menu using id
     *
     * @param int $id
     * @return bool
     */
    function deleteMenuById(int $id): bool
    {
        return MenuFacade::deleteMenuById($id);
    }
}

if (!function_exists('deleteMenuBySlug')) {
    /**
     * Deletes menu using slug
     *
     * @param string $slug
     * @return bool
     */
    function deleteMenuBySlug(string $slug): bool
    {
        return MenuFacade::deleteMenuBySlug($slug);
    }
}

if (!function_exists('deleteMenuItemById')) {
    /**
     * Deletes menu item using id
     *
     * @param int $id
     * @return bool
     */
    function deleteMenuItemById(int $id): bool
    {
        return MenuFacade::deleteMenuItemById($id);
    }
}

if (!function_exists('deleteMenuItemBySlug')) {
    /**
     * Deletes menu item using slug
     *
     * @param string $slug
     * @return bool
     */
    function deleteMenuItemBySlug(string $slug): bool
    {
        return MenuFacade::deleteMenuItemBySlug($slug);
    }
}

