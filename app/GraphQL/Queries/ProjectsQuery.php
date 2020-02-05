<?php

namespace App\GraphQL\Queries;

use App\Project;
use Closure;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class ProjectsQuery extends Query
{
    protected $attributes = [
        'name' => 'projects'
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('project'));
    }

    public function args(): array
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'name' => ['name' => 'name', 'type' => Type::string()],
            'description' => ['name' => 'description', 'type' => Type::string()],
            'is_completed' => ['name' => 'is_completed', 'type' => Type::int()],
            'created_at' => ['name' => 'created_at', 'type' => Type::string()],
            'updated_at' => ['name' => 'updated_at', 'type' => Type::string()]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        if (isset($args['id'])) {
            return Project::where('id' , $args['id'])->get();
        }

        if (isset($args['name'])) {
            return Project::where('name', $args['name'])->get();
        }

        return Project::all();
    }
}