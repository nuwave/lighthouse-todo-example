<?php

namespace App\Http\GraphQL\Mutations;

class AccountMutator
{
    public function update($root, array $args, $context)
    {
        $attrs = collect($args)->filter();
        $context->user->fill($attrs->toArray());
        $context->user->save();

        return $context->user;
    }
}
