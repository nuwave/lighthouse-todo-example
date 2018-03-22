<?php

namespace App\Http\GraphQL\Types;

class UserType
{
    /**
     * Resolve User.email field.
     *
     * @param \App\User $root
     * @param array  $args
     *
     * @return string
     */
    public function email($root, array $args)
    {
        return strtolower($root->email) . '.foo';
    }
}
