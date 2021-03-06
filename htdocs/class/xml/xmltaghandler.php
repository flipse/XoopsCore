<?php
// $Id$
/*******************************************************************************
    Location: <strong>xml/XmlTagHandler</strong><br>
     <br>
    XmlTagHandler<br>
    <br>
    Copyright &copy; 2001 eXtremePHP.  All rights reserved.<br>
    <br>
    @author Ken Egervari, Remi Michalski<br>
 *******************************************************************************/

class XmlTagHandler
{
    /**
     * @abstract
     *
     * @return array|string
     */
    function getName() {}

    /**
     * @abstract
     * @param SaxParser $parser
     * @param array $attributes
     * @return void
     */
    function handleBeginElement(&$parser, &$attributes) {}

    /**
     * @abstract
     * @param SaxParser $parser
     * @return void
     */
    function handleEndElement(&$parser) {}

    /**
     * @abstract
     * @param SaxParser $parser
     * @param $data
     * @return void
     */
    function handleCharacterData(&$parser, &$data) {}
}