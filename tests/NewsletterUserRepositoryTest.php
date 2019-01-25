<?php

use App\Models\Admin\NewsletterUser;
use App\Repositories\Admin\NewsletterUserRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NewsletterUserRepositoryTest extends TestCase
{
    use MakeNewsletterUserTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var NewsletterUserRepository
     */
    protected $newsletterUserRepo;

    public function setUp()
    {
        parent::setUp();
        $this->newsletterUserRepo = App::make(NewsletterUserRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateNewsletterUser()
    {
        $newsletterUser = $this->fakeNewsletterUserData();
        $createdNewsletterUser = $this->newsletterUserRepo->create($newsletterUser);
        $createdNewsletterUser = $createdNewsletterUser->toArray();
        $this->assertArrayHasKey('id', $createdNewsletterUser);
        $this->assertNotNull($createdNewsletterUser['id'], 'Created NewsletterUser must have id specified');
        $this->assertNotNull(NewsletterUser::find($createdNewsletterUser['id']), 'NewsletterUser with given id must be in DB');
        $this->assertModelData($newsletterUser, $createdNewsletterUser);
    }

    /**
     * @test read
     */
    public function testReadNewsletterUser()
    {
        $newsletterUser = $this->makeNewsletterUser();
        $dbNewsletterUser = $this->newsletterUserRepo->find($newsletterUser->id);
        $dbNewsletterUser = $dbNewsletterUser->toArray();
        $this->assertModelData($newsletterUser->toArray(), $dbNewsletterUser);
    }

    /**
     * @test update
     */
    public function testUpdateNewsletterUser()
    {
        $newsletterUser = $this->makeNewsletterUser();
        $fakeNewsletterUser = $this->fakeNewsletterUserData();
        $updatedNewsletterUser = $this->newsletterUserRepo->update($fakeNewsletterUser, $newsletterUser->id);
        $this->assertModelData($fakeNewsletterUser, $updatedNewsletterUser->toArray());
        $dbNewsletterUser = $this->newsletterUserRepo->find($newsletterUser->id);
        $this->assertModelData($fakeNewsletterUser, $dbNewsletterUser->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteNewsletterUser()
    {
        $newsletterUser = $this->makeNewsletterUser();
        $resp = $this->newsletterUserRepo->delete($newsletterUser->id);
        $this->assertTrue($resp);
        $this->assertNull(NewsletterUser::find($newsletterUser->id), 'NewsletterUser should not exist in DB');
    }
}
