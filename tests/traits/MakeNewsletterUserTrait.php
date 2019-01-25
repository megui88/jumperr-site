<?php

use Faker\Factory as Faker;
use App\Models\Admin\NewsletterUser;
use App\Repositories\Admin\NewsletterUserRepository;

trait MakeNewsletterUserTrait
{
    /**
     * Create fake instance of NewsletterUser and save it in database
     *
     * @param array $newsletterUserFields
     * @return NewsletterUser
     */
    public function makeNewsletterUser($newsletterUserFields = [])
    {
        /** @var NewsletterUserRepository $newsletterUserRepo */
        $newsletterUserRepo = App::make(NewsletterUserRepository::class);
        $theme = $this->fakeNewsletterUserData($newsletterUserFields);
        return $newsletterUserRepo->create($theme);
    }

    /**
     * Get fake instance of NewsletterUser
     *
     * @param array $newsletterUserFields
     * @return NewsletterUser
     */
    public function fakeNewsletterUser($newsletterUserFields = [])
    {
        return new NewsletterUser($this->fakeNewsletterUserData($newsletterUserFields));
    }

    /**
     * Get fake data of NewsletterUser
     *
     * @param array $postFields
     * @return array
     */
    public function fakeNewsletterUserData($newsletterUserFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'email' => $fake->word,
            'status_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $newsletterUserFields);
    }
}
