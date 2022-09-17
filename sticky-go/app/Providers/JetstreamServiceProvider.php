<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use Illuminate\Http\Request;
use App\Models\{cart, stickers, User};
use Illuminate\Support\Facades\Request as QueryRequest;
class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);

        // Jetstream::inertia()->whenRendering(
        //     '/login',
        //     function(Request $request, array $data){
        //         $searchSticker = stickers::filter(QueryRequest::only('search'))->get();
        //         $filters = QueryRequest::all('search');
        //         return array_merge($data,[
        //             'Search'=>$searchSticker,
        //             'filters'=>$filters,
        //         ]);
        //     }
        // );
        // Jetstream::inertia()->whenRendering(
        //     '/register',
        //     function(Request $request, array $data){
        //         $searchSticker = stickers::filter(QueryRequest::only('search'))->get();
        //         $filters = QueryRequest::all('search');
        //         return array_merge($data,[
        //             'Search'=>$searchSticker,
        //             'filters'=>$filters,
        //         ]);
        //     }
        // );
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
