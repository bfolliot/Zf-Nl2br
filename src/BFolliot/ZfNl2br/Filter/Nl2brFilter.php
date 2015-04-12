<?php
namespace BFolliot\ZfNl2br\Filter;

use Zend\Filter\FilterInterface;

class Nl2brFilter implements FilterInterface
{
    public function filter($value)
    {
        return nl2br($value);
    }
}
