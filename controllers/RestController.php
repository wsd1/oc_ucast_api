<?php namespace Ucast\Api\Controllers;

use Ucast\Api\Models\Camera;
use Ucast\Api\Models\Settings;
use RainLab\User\Models\User;
use Illuminate\Routing\Controller;
use Db;

class RestController extends Controller
{

    /**
     * Fetch cameras
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return input("xid");

        //Camera::all()->toArray();


        //json_encode(Db::table('ucast_api_cameras')->get()->pluck('name'));


/*
        $query = Camera::isPublished()
            ->select('camera_id', 'name', 'location', 'camera_ctx', 'activate', 'last_seen', 'description')
            ->orderBy('activate', 'desc');

        // Select custom columns
        if ($custom = Settings::get('index_select_custom', false)) {
            $columns = explode(',', $custom);
            foreach ($columns as $column) {
                $query->addSelect($column);
            }
        }


        // Search
        if ($search = input('search')) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', '%'.$search.'%')->orWhere('content', 'LIKE', '%'.$search.'%');
                // @todo: search blog tags if plugin is installed
            });
        }

        // Eager load the author information
        if (Settings::get('index_with_user', false)) {
            $query->addSelect('user_id')->with([
                'user' => function($user) {
                    $user->select('id', 'first_name', 'last_name', 'login', 'email');
                },
            ]);
        }

        // Eager load images
        if (Settings::get('index_with_featured_images', false)) {
            $query->with([
                'featured_images' => function($image) {
                    $image->select('attachment_id', 'disk_name', 'file_name', 'title', 'description');
                },
            ]);
        }

        // Paginate the results
        if ($perPage = Settings::get('index_per_page', 10)) {
            $currentPage = input('page') ?: 1;
            $query->skip($perPage * ($currentPage - 1))->take($perPage);
        }

        // Query caching
        if ($cache = Settings::get('index_cache', false)) {
            $query->remember($cache);
        }

        return $query->get();
*/    }

    /**
     * Show a blog post
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * @return \RainLab\Blog\Models\Camera
     */
    public function show($slug)
    {
        return Camera::whereSlug($slug)->firstOrFail();
    }
}
