<?php
/**
 * CoolMS2 Map Module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/map for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsMap\Mapping;

use CmsCommon\Mapping\Common\IdentifiableInterface;

interface AreaInterface extends IdentifiableInterface
{
    /**
     * @param MapInterface $map
     * @return self
     */
    public function setMap(MapInterface $map);

    /**
     * @return MapInterface
     */
    public function getMap();

    /**
     * @param string $coords
     * @return self
     */
    public function setCoords($coords);

    /**
     * @return string
     */
    public function getCoords();

    /**
     * @param array $attribs
     * @return self
     */
    public function setAttribs(array $attribs);

    /**
     * @return array
     */
    public function getAttribs();
}
