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

use CmsCommon\Mapping\Common\DescribableInterface,
    CmsCommon\Mapping\Common\IdentifiableInterface,
    CmsCommon\Mapping\Common\NameableInterface;

interface MapInterface extends IdentifiableInterface, NameableInterface, DescribableInterface
{
    /**
     * @param AreaInterface[] $areas
     * @return self
     */
    public function setAreas($areas);

    /**
     * @param AreaInterface[] $areas
     * @return self
     */
    public function addAreas($areas);

    /**
     * @param AreaInterface $area
     * @return self
     */
    public function addArea(AreaInterface $area);

    /**
     * @param AreaInterface[] $areas
     * @return self
     */
    public function removeAreas($areas);

    /**
     * @param AreaInterface $area
     * @return self
    */
    public function removeArea(AreaInterface $area);

    /**
     * @param AreaInterface $area
     * @return bool
     */
    public function hasArea(AreaInterface $area);

    /**
     * @return bool
     */
    public function hasAreas();

    /**
     * Removes all areas
     *
     * @return self
     */
    public function clearAreas();

    /**
     * @return AreaInterface[]
     */
    public function getAreas();
}
