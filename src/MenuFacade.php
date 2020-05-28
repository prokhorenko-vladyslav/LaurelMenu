<?php

namespace Laurel\Menu;

use Laurel\Menu\App\Models\Menu;
use Laurel\Menu\App\Models\MenuItem;

/**
 * Main package class
 *
 * Class Menu
 * @package Laurel\MultiRoute
 */
class MenuFacade
{
    /**
     * Loads menu with items using id
     *
     * @param int $id
     * @return Menu|null
     */
    public static function loadMenuById(int $id) : ?Menu
    {
        $menu = config('menu.menu_model')::findById($id);
        return $menu ? $menu->load('children') : null;
    }

    /**
     * Loads menu with items using slug
     *
     * @param string $slug
     * @return Menu|null
     */
    public static function loadMenuBySlug(string $slug) : ?Menu
    {
        $menu = config('menu.menu_model')::findBySlug($slug);
        return $menu ? $menu->load('children') : null;
    }

    /**
     * Loads menu item using id
     *
     * @param int $id
     * @return Menu|null
     */
    public static function loadMenuItemById(int $id) : ?MenuItem
    {
        return config('menu.menu_item_model')::findById($id);
    }

    /**
     * Loads menu item using slug
     *
     * @param string $slug
     * @return Menu|null
     */
    public static function loadMenuItemBySlug(string $slug) : ?MenuItem
    {
        return config('menu.menu_item_model')::findBySlug($slug);
    }

    /**
     * Deletes menu using id
     *
     * @param int $id
     * @return bool
     */
    public static function deleteMenuById(int $id) : bool
    {
        $menuItem = config('menu.menu_model')::findById($id);
        return $menuItem ? $menuItem->delete() : true;
    }

    /**
     * Deletes menu using slug
     *
     * @param string $slug
     * @return bool
     */
    public static function deleteMenuBySlug(string $slug) : bool
    {
        $menuItem = config('menu.menu_model')::findBySlug($slug);
        return $menuItem ? $menuItem->delete() : true;
    }

    /**
     * Deletes menu item using id
     *
     * @param int $id
     * @return bool
     */
    public static function deleteMenuItemById(int $id) : bool
    {
        $menuItem = config('menu.menu_item_model')::findById($id);
        return $menuItem ? $menuItem->delete() : true;
    }

    /**
     * Deletes menu item using slug
     *
     * @param string $slug
     * @return bool
     */
    public static function deleteMenuItemBySlug(string $slug) : bool
    {
        $menuItem = config('menu.menu_item_model')::findBySlug($slug);
        return $menuItem ? $menuItem->delete() : true;
    }
}
