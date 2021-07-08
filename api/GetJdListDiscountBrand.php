<?php

/**
 * Class GetJdListDiscountBrand 京东大牌折扣
 * Integer pageId 页码（默认为1）
 * Integer pageSize 每页记录条数（默认20）
 */
class GetJdListDiscountBrand extends DtkClient
{
    protected $pageId;
    protected $pageSize;

    protected $methodType = 'GET';
    protected $requestParams = [];

    const METHOD = "/api/dels/jd/column/list-discount-brand";

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }

    /**
     * 可用参数
     * @return string[]
     */
    public function getParamsField()
    {
        return ['pageId','pageSize'];
    }

    /**
     * @return array
     */
    public function check()
    {
        return ['', true];
    }
}
