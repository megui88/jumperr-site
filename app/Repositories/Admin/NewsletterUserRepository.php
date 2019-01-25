<?php

namespace App\Repositories\Admin;

use App\Models\Admin\NewsletterUser;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NewsletterUserRepository
 * @package App\Repositories\Admin
 * @version January 25, 2019, 7:00 pm UTC
 *
 * @method NewsletterUser findWithoutFail($id, $columns = ['*'])
 * @method NewsletterUser find($id, $columns = ['*'])
 * @method NewsletterUser first($columns = ['*'])
*/
class NewsletterUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'status_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return NewsletterUser::class;
    }
}
