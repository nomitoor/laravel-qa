<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\QuestionPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Question::class => QuestionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // \Gate::define('update-questions', function($user,$question){
        //     return $user->id == $question->user_id;
        // });

        // \Gate::define('delete-questions', function($user,$question){
        //     return $user->id == $question->user_id;
        // });
    }
}
