<?php

namespace App\Resource;

use abstract\resourcemanager;
use entity\list;

/**
 * Class Resource
 * @package App
 */
class ListResource extends AbstractResource
{

    /**
     * @param $id
     *
     * @return string
     */
    public function get($id)
    {
        if ($id === null) {
            $list_item = $this->getEntityManager()->getRepository('entity/list')->findAll();
            $list_item = array_map(function($list_item) {
                return $this->convertToArray($list); },
                $list_item);
            $data = json_encode($list_item);
        } else {
            $data = $this->convertToArray($this->getEntityManager()->find('entity/list', $id));
        }

        // @TODO handle correct status when no data is found...

        return json_encode($data);
    }

    // POST, PUT, DELETE methods...

    private function convertToArray(List $list_item) {
        return array(
            'id' => $list_item->getId(),
            'item' => $list_item->getItem(),
        );
    }
