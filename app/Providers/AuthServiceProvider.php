<?php

namespace App\Providers;

use App\Models\ContattiAbilita;
use App\Models\ContattiRuoli;
use App\Models\Contatto;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        if (app()->environment() !== "testing")  {

            ContattiRuoli::all()->each(
                function (ContattiRuoli $ruolo) {
                    Gate::define(
                        $ruolo->nome,
                        function (Contatto $contatto) use ($ruolo) {
                            return $contatto->ruoli->contains('nome', $ruolo->nome);
                        }
                    );
                }
            );
            // echo("Passo 3");
            ContattiAbilita::all()->each(function (ContattiAbilita $abilita) {
                Gate::define(
                    $abilita->skill,
                    function (Contatto $contatto) use ($abilita) {
                        $check = false;
                        foreach ($contatto->ruoli as $item) {
                            if ($item->abilita->contains('skill', $abilita->skill)) {
                                $check = true;
                                break;
                            }
                        }
                        return $check; 
                    }
                );
            });

        }
    }
}
