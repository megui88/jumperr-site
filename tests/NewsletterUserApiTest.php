<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NewsletterUserApiTest extends TestCase
{
    use MakeNewsletterUserTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateNewsletterUser()
    {
        $newsletterUser = $this->fakeNewsletterUserData();
        $this->json('POST', '/api/v1/newsletterUsers', $newsletterUser);

        $this->assertApiResponse($newsletterUser);
    }

    /**
     * @test
     */
    public function testReadNewsletterUser()
    {
        $newsletterUser = $this->makeNewsletterUser();
        $this->json('GET', '/api/v1/newsletterUsers/'.$newsletterUser->id);

        $this->assertApiResponse($newsletterUser->toArray());
    }

    /**
     * @test
     */
    public function testUpdateNewsletterUser()
    {
        $newsletterUser = $this->makeNewsletterUser();
        $editedNewsletterUser = $this->fakeNewsletterUserData();

        $this->json('PUT', '/api/v1/newsletterUsers/'.$newsletterUser->id, $editedNewsletterUser);

        $this->assertApiResponse($editedNewsletterUser);
    }

    /**
     * @test
     */
    public function testDeleteNewsletterUser()
    {
        $newsletterUser = $this->makeNewsletterUser();
        $this->json('DELETE', '/api/v1/newsletterUsers/'.$newsletterUser->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/newsletterUsers/'.$newsletterUser->id);

        $this->assertResponseStatus(404);
    }
}
