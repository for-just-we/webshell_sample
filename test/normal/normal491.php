<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\data;

use yii\helpers\ArrayHelper;

/**
 * ArrayDataProvider implements a data provider based on a data array.
 *
 * The [[allModels]] property contains all data models that may be sorted and/or paginated.
 * ArrayDataProvider will provide the data after sorting and/or pagination.
 * You may configure the [[sort]] and [[pagination]] properties to
 * customize the sorting and pagination behaviors.
 *
 * Elements in the [[allModels]] array may be either objects (e.g. model objects)
 * or associative arrays (e.g. query results of DAO).
 * Make sure to set the [[key]] property to the name of the field that uniquely
 * identifies a data record or false if you do not have such a field.
 *
 * Compared to [[ActiveDataProvider]], ArrayDataProvider could be less efficient
 * because it needs to have [[allModels]] ready.
 *
 * ArrayDataProvider may be used in the following way:
 *
 * ```php
 * $query = new Query;
 * $provider = new ArrayDataProvider([
 *     'allModels' => $query->from('post')->all(),
 *     'sort' => [
 *         'attributes' => ['id', 'username', 'email'],
 *     ],
 *     'pagination' => [
 *         'pageSize' => 10,
 *     ],
 * ]);
 * // get the posts in the current page
 * $posts = $provider->getModels();
 * ```
 *
 * Note: if you want to use the sorting feature, you must configure the [[sort]] property
 * so that the provider knows which columns can be sorted.
 *
 * For more details and usage information on ArrayDataProvider, see the [guide article on data providers](guide:output-data-providers).
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ArrayDataProvider
{
    /**
     * Sorts the data models according to the given sort definition.
     * @param array $models the models to be sorted
     * @param Sort $sort the sort definition
     * @return array the sorted data models
     */
    protected function sortModels($models, $sort)
    {
        $orders = $sort->getOrders();
        if (!empty($orders)) {
            ArrayHelper::multisort($models, array_keys($orders), array_values($orders));
        }

        return $models;
    }
}
?>
