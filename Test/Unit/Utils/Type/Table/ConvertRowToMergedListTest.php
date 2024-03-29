<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) Amasty (https://www.amasty.com)
 * @package Import-Export Core for Magento 2 (System)
 */

namespace Amasty\ImportExportCore\Test\Unit\Utils\Type\Table;

use Amasty\ImportExportCore\Utils\Type\Table;
use Amasty\ImportExportCore\Test\Unit\Traits;

/**
 * @covers Table\ConvertRowToMergedList
 * @see ConvertRowTo2DimensionalArrayTest
 */
class ConvertRowToMergedListTest extends \PHPUnit\Framework\TestCase
{
    use Traits\ObjectManagerTrait;

    /**
     * @return array
     */
    public function validateDataProvider(): array
    {
        return [
            'basic' => [
                [
                    'col-first' => 'first',
                    'col-second' => 'second',
                    'col-third' => 'third'
                ],
                [
                    'col-first' => '',
                    'col-second' => '',
                    'col-third' => '',
                ],
                [
                    [
                        'first',
                        'second',
                        'third'
                    ]
                ]
            ],
            'multi' => [
                [
                    'col-first' => 'first',
                    'col-second' => 'second',
                    'items' => [
                        [
                            'col-third' => 'third',
                            'col-fourth' => 'fourth'
                        ],
                        [
                            'col-third' => 'third1',
                            'col-fourth' => 'fourth1'
                        ],
                    ],
                    'items-2' => [
                        [
                            'col-fifth' => 'fifth1',
                            'col-sixth' => 'sixth1'
                        ],
                        [
                            'col-fifth' => 'fifth2',
                            'col-sixth' => 'sixth2'
                        ],
                        [
                            'col-fifth' => 'fifth3',
                            'col-sixth' => 'sixth3'
                        ],
                    ]
                ],
                [
                    'col-first' => '',
                    'col-second' => '',
                    'items' => [
                        'col-third' => '',
                        'col-fourth' => ''
                    ],
                    'items-2' => [
                        'col-fifth' => '',
                        'col-sixth' => ''
                    ]
                ],
                [
                    [
                        'first',
                        'second',
                        'third,third1',
                        'fourth,fourth1',
                        'fifth1,fifth2,fifth3',
                        'sixth1,sixth2,sixth3'
                    ]
                ]
            ],
            'multi-with-empty-values' => [
                [
                    'col-first' => 'first',
                    'col-second' => 'second',
                    'items' => [
                        [
                            'col-third' => '',
                            'col-fourth' => 'fourth'
                        ],
                        [
                            'col-third' => 'third1',
                            'col-fourth' => ''
                        ],
                        [
                            'col-third' => '',
                            'col-fourth' => ''
                        ],
                    ],
                    'items-2' => [
                        [
                            'col-fifth' => '',
                            'col-sixth' => ''
                        ],
                        [
                            'col-fifth' => '',
                            'col-sixth' => ''
                        ],
                        [
                            'col-fifth' => '',
                            'col-sixth' => ''
                        ],
                        [
                            'col-fifth' => '',
                            'col-sixth' => 'sixth4'
                        ],
                    ]
                ],
                [
                    'col-first' => '',
                    'col-second' => '',
                    'items' => [
                        'col-third' => '',
                        'col-fourth' => ''
                    ],
                    'items-2' => [
                        'col-fifth' => '',
                        'col-sixth' => ''
                    ]
                ],
                [
                    [
                        'first',
                        'second',
                        ',third1,',
                        'fourth,,',
                        ',,,',
                        ',,,sixth4',
                    ]
                ]
            ],
        ];
    }

    /**
     * @param array $row
     * @param array $headerStructure
     * @param $expectedResult
     *
     * @dataProvider validateDataProvider
     */
    public function testConvert(array $row, array $headerStructure, $expectedResult)
    {
        $convertRowTwo2DimensionalArray = $this->getObjectManager()
            ->getObject(Table\ConvertRowTo2DimensionalArray::class);
        $converter = $this->getObjectManager()->getObject(
            Table\ConvertRowToMergedList::class,
            [
                'rowTo2DimensionalArray' => $convertRowTwo2DimensionalArray
            ]
        );
        $this->assertSame($expectedResult, $converter->convert($row, $headerStructure, ','));
    }
}
