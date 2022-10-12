<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
/**In migration files we create tables which are saved in the database. Like name , id, roll number etcs.
To create a migration go to the terminal and run the command “php artisan make:migration student. Before creating everything in laravel naming conventions keep in your mind.
Migration file located at database/migration . after adding columns then use command to migrate this data in DB. “php artisan migrate” then  go to your DB (DataBase) and refresh your DB and check columns you were added.	

Difference between up and down function in migration file:-

A migration class contains two methods: up and down . The up method is used to add new tables, columns, or indexes to your database, while the down method should reverse the operations performed by the up method.
RollBack or  down function:-
If you want to delete table from db and migration file then go to terminal and use command “php artisan  migrate rollback” and if you want to delete specific table then use “php artisan migrate rollback  - - step= 2”

Migration Reset & Refresh:-
If you want to refresh your migration then use “ php artisan migrate:refresh”. And If you want to reset your migration then use “ php artisan migrate:reset”. */
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
