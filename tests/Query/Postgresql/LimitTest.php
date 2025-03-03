<?php

namespace DoctrineExtensions\Tests\Query\Postgresql;

use DoctrineExtensions\Tests\Query\PostgresqlTestCase;

class LimitTest extends PostgresqlTestCase
{
    public function testLimit(): void
    {
        $this->assertDqlProducesSql(
            'SELECT LIMIT(1, (SELECT p FROM DoctrineExtensions\Tests\Entities\Product p)) FROM DoctrineExtensions\Tests\Entities\BlogPost bp',
            'SELECT (SELECT p0_.id FROM Product p0_ LIMIT 1) AS sclr_0 FROM BlogPost b1_'
        );
    }
}
