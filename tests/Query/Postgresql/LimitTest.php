<?php

namespace DoctrineExtensions\Tests\Query\Postgresql;

use DoctrineExtensions\Tests\Query\PostgresqlTestCase;

class LimitTest extends PostgresqlTestCase
{
    public function testLimit(): void
    {
        $this->assertDqlProducesSql(
            'SELECT LIMIT(1, (SELECT b FROM DoctrineExtensions\Tests\Entities\Blank b)) FROM DoctrineExtensions\Tests\Entities\Blank',
            'SELECT (SELECT b0_ FROM Blank b0_ LIMIT 1) FROM Blank'
        );

        die();

//        $this->assertDqlProducesSql(
//            'SELECT LEAST(2, 3) from DoctrineExtensions\Tests\Entities\Blank b',
//            'SELECT LEAST(2, 3) AS sclr_0 FROM Blank b0_'
//        );
    }
}
