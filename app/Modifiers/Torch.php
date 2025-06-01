<?php

namespace App\Modifiers;

use Statamic\Modifiers\Modifier;
use Torchlight\Engine\CommonMark\Extension;

class Torch extends Modifier
{
    /**
     * Modify a value.
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        $extension = new Extension('github-dark');

        $extension->renderer()
            ->setDefaultGrammar($context['language'] ?? 'php');

        return str()->markdown('```'.PHP_EOL.$value.PHP_EOL.'```', extensions: [
            $extension,
        ]);
    }
}
