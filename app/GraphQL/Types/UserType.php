<?php 

namespace App\GraphQL\Types;

use App\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType {

    protected $attributes = [
        'name' => 'user',
        'description' => 'A user',
        'model' => User::class
    ];

    public function fields(): array 
    {

        return [
            'id' => [
                'type' => Type::int(),
                'description' => '',
                // 'alias' =>  'user_id'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => '',
                // 'alias' =>  'user_name'
            ],
            'email' => [
                'type' => Type::string(),
                'description' => '',
                // 'alias' =>  'user_mail'
            ],                    
        ];
    }
}
