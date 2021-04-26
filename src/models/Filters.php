<?php
namespace src\models;
use \core\Model;

use \src\models\Brands;

class Filters extends Model
{
    public function getFilters($filters = [])
    {
        $brands = new Brands();
        $products = new Products();

        $array = [
            'brands' => [],
            'maxslider' => 1400,
            'stars' => [
				'0' => 0,
				'1' => 0,
				'2' => 0,
				'3' => 0,
				'4' => 0,
				'5' => 0
            ],
            'sale' => 0,
            'options' => []
        ];

        $array['brands'] = $brands->getList();
        $brand_products = $products->getListOfBrands($filters);

        // Filtro marcas
        foreach($array['brands'] as $bkey => $bitem) {
            $array['brands'][$bkey]['count'] = '0';
            foreach($brand_products as $bprod) {
                if($bprod['id_brand'] == $bitem['id']) {
                    $array['brands'][$bkey]['count'] = $bprod['c'];
                }
            }

            if($array['brands'][$bkey]['count'] == '0') {
                unset($array['brands'][$bkey]);
            }
        }

        // Filtro preço
        $array['maxslider'] = $products->getMaxPrice($filters);

        // Filtro estrelas
        $star_products = $products->getListOfStars($filters);
        foreach($array['stars'] as $skey => $item)
        {
            foreach($star_products as $key => $sproduct)
            {
                if($sproduct['rating'] == $skey) {
                    $array['stars'][$skey] = $sproduct['c'];
                }
            }
        }

        // Filtro promoções
        $array['sale'] = $products->getSaleCount($filters);

        // Filtro opções
        $array['options'] = $products->getAvailableOptions($filters);

        return $array;
    }
}