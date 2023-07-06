<?php 

namespace App\Action;

use App\Product\ProductAttribute;
use App\Product\ProductCategory;


class CompareAction {
    public static function getRatings($products)
    {
       $ratings = [];
        foreach ($products as $product) {
            $ratings[] = [
                'avg' => round($product->rating_avg_rating,1),
                'count' => optional($product->rating)->count() ?? 0
            ];
        }
        return $ratings;
    }
    public static function getCategories($products)
    {
        $categories = [];
        foreach ($products as $key => $product) {
            $categories[] = ProductCategory::find(optional($product->category)->id); //return category model instance 
        }
        return $categories;
    }

    /**
     * Extracts attributes from product model instances 
     *      and returns an array of all products' attributes as array
     */
    public static function getProductAttributes($products)
    {
        $attributes = [];
        foreach ($products as $product) {
            $attribute_json = $product->attributes;
            $attributes[$product->id] = $attribute_json ? json_decode($attribute_json, true) : [];
        }
        return $attributes;
    }

    public static function getAttributes($product_attributes)
    {
        $instance = new CompareAction();
        $attribute_ids = $instance->getAttributeIds($product_attributes);
        return ProductAttribute::whereIn('id', $attribute_ids)->get();
    }

    public static function getAttributeIds($product_attributes)
    {
        $attributes = [];
        foreach ($product_attributes as $product_attribute) {
            if ($product_attribute) {
                $attributes = array_keys($product_attribute);
            }
        }
        return array_unique($attributes);
    }

    public static function getAllProductsAttributes($products)
    {
        $instance = new CompareAction();
        $product_attributes = $instance->getProductAttributes($products);
        $all_attributes = $instance->getAttributes($product_attributes);


        $result = [];
        foreach ($product_attributes as $product_id => $all_attributes) {
            if (!empty($all_attributes)) {
                $all_attributes_reverse = array_reverse($all_attributes);
                $first = array_pop($all_attributes_reverse);
                
                foreach ($all_attributes as $key => $values) {
                    $item_attrs = [];
                    $name = !empty($values[0]) ? $values[0]['type'] : '';
                    foreach ($values as $key => $value) {
                        $item_attrs[$product_id][] = $value['name'];
                    }
                    $result[$name] = $item_attrs;
                }
            }
        }

        return $result;
    }
}
