<?php


	private function _tree($data){

   		$tree = array();
   		foreach ($data as $item) {
               if(isset($data[$item['parent_id']])){
                  $data[$item['parent_id']]['sub'][] = &$data[$item['cat_id']];
               } else {
                  $tree[] = &$data[$item['cat_id']];
               }
   		}
   		return $tree;
   	}