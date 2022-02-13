<?php


namespace App\classes;


class Register
{
    public function getAllUser(){

        return [
            0 => [
                'id' => 1,
                'name' => 'Hasan Ali',
                'email' => 'hsn@gmail.com',
                'password' => '123456',
                'image' => 'avatar1.jpg'
            ],
            1 => [
                'id' => 2,
                'name' => 'Emon Ali',
                'email' => 'emon@gmail.com',
                'password' => '123456',
                'image' => 'avatar2.png'
            ],
        ];
    }
}