<?php 

namespace App\GraphQL\Types;

use App\Task;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TaskType extends GraphQLType {

    protected $attributes = [
        'name' => 'task',
        'description' => 'A Task',
        'model' => Task::class
    ];

    public function fields(): array 
    {

        return [
            'id' => [
                'type' => Type::int(),
                'description' => '',                
            ],
            'title' => [
                'type' => Type::string(),
                'description' => '',            
            ],
            'project_id' => [
                'type' => Type::int(),
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
