<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author          trabis <lusopoemas@gmail.com>
 * @version         $Id$
 */

defined('XOOPS_ROOT_PATH') or die('XOOPS root path not defined');

class Images extends Xoops_Module_Helper_Abstract
{
    /**
     * Init the module
     *
     * @return null|void
     */
    public function init()
    {
        $this->setDirname('images');
    }

    /**
     * @return Images
     */
    static function getInstance()
    {
        return parent::getInstance();
    }

    /**
     * @return ImagesimageHandler
     */
    public function getHandlerImages()
    {
        return $this->getHandler('image');
    }

    /**
     * @return ImagesCategoryHandler
     */
    public function getHandlerCategories()
    {
        return $this->getHandler('category');
    }

    /**
     * @return ImagesImagebodyHandler
     */
    public function getHandlerImagesBody()
    {
        return $this->getHandler('imagebody');
    }
}