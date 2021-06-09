<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'PHP for beginners',
            'video' => 'https://www.youtube.com/embed/OK_JCtrrv-c', // Source: freeCodeCamp.org on YouTube
            'category' => 'Programming',
            'length' => '2h 40min',
            'user_id' => 1,
            'featured' => 1,
            'image' => 'php.png', // Source: Markus Spiske from Pexels
            'description' => 'In this course, you will learn to program dynamic web pages in the PHP programming language that will communicate with a MySQL database. This online course consists of two parts:
                PHP programming and MySQL database.
                The course assumes that you know HTML and CSS, knowledge of JavaScript and jQuery is an advantage.
                PHP is a powerful object-oriented scripting language that works on the server side and is used to program dynamic web pages or web applications. PHP is one of the most widely used programming languages today. Without PHP, your website will still be static with the same data.
                In this programming course for complete beginners of PHP and MySQL, after setting up and introducing programming, you will go through the PHP language and make some practical examples. Watch a video from the course to learn more about backend languages and why it is good to learn how to program in PHP.',
        ]);

        DB::table('courses')->insert([
            'name' => 'Photoshop & Illustrator',
            'video' => 'https://www.youtube.com/embed/RXRT3dHu6_o', // Source: Envato Tuts+ on YouTube
            'category' => 'Design',
            'length' => '2h 35min',
            'user_id' => 1,
            'featured' => 1,
            'image' => 'photoshop.png', // Source: Marcus Vinícius A. Ribeiro from Pexels
            'description' => 'This online course will show you how to use InDesign from scratch. You do not need any prior knowledge, but if you have some basics of Photoshop or Illustrator, they can help. You will learn how to work with basic tools. The program allows you to design and publish various documents.
            At the beginning of the course, we will look at the InDesign environment and how to set it up. Then you will learn how to lay out a document, add and work with objects, insert and format text, create styles, tables and work with graphics. In this course, you will find everything you need to be able to create and publish various formats, such as posters, brochures, business cards and much more. We will look at how to work with colors, palettes, various effects, and finally to prepare the document itself for printing.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           The Adobe InDesign online course is designed for anyone who wants to learn how to work with a state-of-the-art program designed for professional work with graphics and text. Graduates of the course will be able to wrap texts into pages, create multi-page publications such as magazines, brochures, posters, catalogs and brochures learned for print or electronic publishing (e-book).',
        ]);

        DB::table('courses')->insert([
            'name' => 'OOP and Laravel',
            'video' => 'https://www.youtube.com/embed/4XGRMcM3UF0', // Source WebDevMatics on YouTube
            'category' => 'Programming',
            'length' => '5h 20min',
            'user_id' => 1,
            'featured' => 1,
            'image' => 'laravel.png', // Source: screenshot from https://laravel.com/
            'description' => 'OOP and Laravel deals with object-oriented programming and PHP framework Laravel. Laravel is a relatively new PHP framework that was released in 2011, but it is currently one of the most popular frameworks in PHP. Thanks to this framework, you will facilitate the development (programming) of web applications. The Laravel framework offers you the following benefits: it enables rapid development; provides well-organized, reusable and sustainable code; solve web security; observes MVC (Model-View-Controller).
                The course requires knowledge of HTML and CSS as well as PHP. Briefly about the frameworks and why we chose Laravel, the introductory video of this course will tell you.
                At the beginning of the course, the lecturer will introduce you to the PHP framework Laravel and all its files and components. You will also learn everything you need to know about object-oriented programming (OOP), how to manage a package, create forms, provide validations and much more. You will learn the MVC principle and also what is the difference between an IDE and a source code editor.',
        ]);

        DB::table('courses')->insert([
            'name' => 'HTML, CSS & JavaScript',
            'video' => 'https://www.youtube.com/embed/zxfhf-V4JFQ', // Source: Easy Tutorials on YouTube
            'category' => 'Front-end',
            'length' => '5h 20min',
            'user_id' => 1,
            'image' => 'html.png', // Source: Nancy Drew from Medium
            'description' => 'The online course is the first complete online web design course. The course consists of 3 modules: HTML and CSS; responsive web design; JavaScript / jQuery.
            All these technologies are needed to create any modern website. Watch the introductory video of the course, in which the course tutor will tell you what HTML and CSS are, responsive design, JavaScript and what you will learn in the course.',
        ]);

        DB::table('courses')->insert([
            'name' => 'Android Developer',
            'video' => 'https://www.youtube.com/embed/K2dodTXARqc', // Source: Google Developers on YouTube
            'category' => 'Mobile apps',
            'length' => '5h 20min',
            'user_id' => 1,
            'image' => 'android.png', // Source: screenshot from https://www.android.com/
            'description' => 'Android Developer is an online course for creating mobile applications for the Android operating system. In this basic course, you will learn the complete basics of Android programming. The course is designed and designed for complete beginners who have at least a minimal knowledge of the Java programming language. In this course, we will teach you to develop applications in the official development environment from Google - Android Studio.',
        ]);

        DB::table('courses')->insert([
            'name' => 'Git for beginners',
            'video' => 'https://www.youtube.com/embed/SWYqp7iY_Tc', // Source: Traversy Media on YouTube
            'category' => 'Version control',
            'length' => '5h 20min',
            'user_id' => 1,
            'image' => 'git.png', // Source: Christina Morillo from Pexels
            'description' => 'Are you part of a small or large team working on the same project? How do you exchange information about which team member wrote what part of the document or program? How do you share these changes? I can not imagine working on one PC and taking turns. I can not even imagine that you would make any changes and by e-mail, you would write to a colleague to change this and that line of code, let him add this and that there. It is not possible to work on team projects in this way.
            Git is here for you and your team. You can easily share changes, files, history, versions and the like with each other.
            In this online course, you will learn to work with files and watching them will be a breeze for you. You will learn to use the right commits, you will understand what branches are. You will also learn how git works and how to use git via the command line,',
        ]);

    }
}
