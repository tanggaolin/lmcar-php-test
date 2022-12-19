<?php

namespace App\Service;

class ProductHandler
{
    /**
     * @desc: 获取产品总价
     *
     * @param  array  $products

     * @return int
     */
    public static function getTotalPrice(array $products): int
    {
        $totalPrice = 0;
        foreach ($products as $product) {
            $price = $product['price'] ?: 0;
            $totalPrice += $price;
        }
        return $totalPrice;
    }

    /**
     * @desc: 按照金额倒序，并且支持根据参数过滤type字段
     *
     * @param  array  $products
     * @param  string  $type
     *
     * @return array
     */
    public static function filterTypeAndSortByPrice(array $products, string $type): array
    {
        $products = array_filter($products, function ($val) use ($type) {
            return $type === $val['type'];
        });

        $priceItem = array_column($products, 'price');
        array_multisort($priceItem, SORT_DESC, $products);

        return $products;
    }

    public static function formatProductTime(array $products) : array
    {
        array_walk($products, function (&$product) {
            $product['create_at'] = strtotime($product['create_at']);
        });
        return $products;
    }
}