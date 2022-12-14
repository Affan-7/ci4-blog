<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Pages extends BaseController
{
    public function index()
    {
        $model1 = new PostsModel();
        $data['posts'] = $model1->getPosts();

        echo view('pages/home', $data);
    }
    
    public function about()
    {
        echo view('pages/about');
    }

    public function post()
    {
        echo view('pages/post');
    }

    public function newPost()
    {
        $data = [];
        helper('form');

        if (! $this->validate([
            'title' => 'required|min_length[5]|is_unique[posts.title]', //validation rules
            'body' => 'required|min_length[5]',
            'subtitle' => 'required|min_length[5]'
        ],

        //Custom error messages
        ['title' => [
            'required' => 'The post title is required',
            'min_length'=> 'Minimum 5 charecters are required for post title',
            'is_unique' => 'A post with this post title already exists'
        ],
        'body' => [
            'required' => 'The post body is required',
            'min_length'=> 'Minimum 5 charecters are required for post body'
        ],
        'subtitle' => [
            'required' => 'The post subtitle is required',
            'min_length'=> 'Minimum 5 charecters are required for post subtitle'
        ]
        ])) {
            return view('pages/post', [
                'validation' => $this->validator,
            ]);
        }

        $model1 = new PostsModel();
        $model1->newPost($_POST);

        $data['success'] = true;
        $data['posts'] = $model1->getPosts();
        
        return view('pages/home', $data);
    }

    public function showPost($postName)
    {
        $model1 = new PostsModel();
        $data['post'] = $model1->getPost($postName);

        echo view('pages/showpost', $data);
    }
}
