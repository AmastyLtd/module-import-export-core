<?php

declare(strict_types=1);

/**
 * @author Amasty Team
 * @copyright Copyright (c) Amasty (https://www.amasty.com)
 * @package Import-Export Core for Magento 2 (System)
 */

namespace Amasty\ImportExportCore\Utils\Type\Table;

class ConvertRowToMergedList
{
    /**
     * @var ConvertRowTo2DimensionalArray
     */
    private $rowTo2DimensionalArray;

    public function __construct(ConvertRowTo2DimensionalArray $rowTo2DimensionalArray)
    {
        $this->rowTo2DimensionalArray = $rowTo2DimensionalArray;
    }

    public function convert(array $row, array $headerStructure, string $delimiter = '')
    {
        $result = [];
        $this->rowTo2DimensionalArray->fillRowResult($result, [$row], $headerStructure);

        return $this->mergeMatrix($result, $delimiter);
    }

    public function mergeMatrix(array $matrix, string $delimiter = '')
    {
        $result = [];
        $matrixRowKeys = array_keys(reset($matrix));

        foreach ($matrixRowKeys as $rowKey) {
            $matrixColumn = array_column($matrix, $rowKey);
            /**
             * Its unnecessary to merge columns' data with only one not empty value
             * So check is it possible to merge it with empty delimiter
             */
            $result[] = $this->isColumnHasMultipleValues($matrixColumn)
                ? implode($delimiter, $matrixColumn)
                : implode($matrixColumn);
        }

        return [$result];
    }

    /**
     * @param array $matrixColumn
     * @return bool
     */
    private function isColumnHasMultipleValues(array $matrixColumn): bool
    {
        return count($matrixColumn) > 1;
    }
}
