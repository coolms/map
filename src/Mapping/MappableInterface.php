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

interface MappableInterface
{
    /**
     * @param MapInterface[] $maps
     */
    public function setMaps($maps);

    /**
     * @param MapInterface[] $maps
     */
    public function addMaps($maps);

    /**
     * @param MapInterface $map
     */
    public function addMap(MapInterface $map);

    /**
     * @param MapInterface[] $maps
     */
    public function removeMaps($maps);

    /**
     * @param MapInterface $map
     */
    public function removeMap(MapInterface $map);

    /**
     * @param MapInterface $map
     * @return bool
     */
    public function hasMap(MapInterface $map);

    /**
     * Removes all maps
     */
    public function clearMaps();

    /**
     * @return MapInterface[]
     */
    public function getMaps();
}
