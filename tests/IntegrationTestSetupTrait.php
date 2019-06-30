<?php

namespace Kontenta\KontourForms\Tests;

trait IntegrationTestSetupTrait
{

    /**
     * Get the service providers for the package.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \Kontenta\KontourForms\KontourFormsServiceProvider::class,
        ];
    }
}
