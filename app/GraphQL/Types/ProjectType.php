<?php 

namespace App\GraphQL\Types;

use App\Project;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProjectType extends GraphQLType {

    protected $attributes = [
        'name' => 'user',
        'description' => 'A project',
        'model' => Project::class
    ];

    public function fields(): array 
    {

        return [
            'id' => [
                'type' => Type::int(),
                'description' => '',                
            ],
            'name' => [
                'type' => Type::string(),
                'description' => '',            
            ],
            'description' => [
                'type' => Type::string(),
                'description' => '',
            ],                    
            'is_completed' => [
                'type' => Type::int(),
                'description' => '',
            ],                    
            'created_at' => [
                'type' => Type::string(),
                'description' => '',
            ],                    
            'updated_at' => [
                'type' => Type::string(),
                'description' => '',
            ],                    
        ];
    }
}
