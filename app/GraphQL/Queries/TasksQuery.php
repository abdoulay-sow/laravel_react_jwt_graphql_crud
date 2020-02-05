<?php

namespace App\GraphQL\Queries;

use App\Task;
use Closure;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class TasksQuery extends Query
{
    protected $attributes = [
        'name' => 'tasks'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('task'));
    }

    public function args(): array
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'title' => ['name' => 'title', 'type' => Type::string()],
            'project_id' => ['name' => 'project_id', 'type' => Type::int()],
            'is_completed' => ['name' => 'is_completed', 'type' => Type::int()],
            'created_at' => ['name' => 'created_at', 'type' => Type::string()],
            'updated_at' => ['name' => 'updated_at', 'type' => Type::string()]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        if (isset($args['id'])) {
            return Task::where('id' , $args['id'])->get();
        }

        if (isset($args['project_id'])) {
            return Task::where('project_id', $args['project_id'])->get();
        }

        return Task::all();
    }
}