<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Test for the creating a knowledge feature.
 *
 * @package Tests\Feature
 */
class CreateKnowledgeTest extends TestCase
{

    /**
     * @test
     */
    public function cannot_create_knowledge_if_not_authenticated()
    {

        $response = $this->json('post', $this->url('knowledges'));

        $response->assertJson([
            'message' => 'Authentication error',
            'data' => 'You must be loged in to perform this action',
        ]);

    }
    
}
