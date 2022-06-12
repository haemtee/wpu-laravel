<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post //extends Model
{
    // use HasFactory;
    private static $blog_post = [
        [
            "id" => 1,
            "title" => "Blog Post 1",
            "author" => "John Doe",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem molestias nostrum amet, voluptatem voluptate, voluptatum fugit tempore officiis eum qui, delectus nam a quidem! Accusantium sequi earum cumque deleniti ullam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem molestias nostrum amet, voluptatem voluptate, voluptatum fugit tempore officiis eum qui, delectus nam a quidem! Accusantium sequi earum cumque deleniti ullam! ",
        ],
        [
            "id" => 2,
            "title" => "Post 2",
            "author" => "Jane Doe",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo quod vero, suscipit deserunt possimus veritatis iste. Nemo, similique, adipisci ab quod ea praesentium voluptas quibusdam nobis inventore eos autem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam explicabo quod vero, suscipit deserunt possimus veritatis iste. Nemo, similique, adipisci ab quod ea praesentium voluptas quibusdam nobis inventore eos autem!",
        ],
        [
            "id" => 3,
            "title" => "Third Post",
            "author" => "John Doe",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate accusantium temporibus officia nam nisi quos odit animi aut unde veniam corrupti, fugit quam voluptatum accusamus a magnam quo dignissimos perspiciatis? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate accusantium temporibus officia nam nisi quos odit animi aut unde veniam corrupti, fugit quam voluptatum accusamus a magnam quo dignissimos perspiciatis?",
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_post);
    }
    public static function find($id)
    {
        return static::all()->firstWhere('id', $id);
    }
}
