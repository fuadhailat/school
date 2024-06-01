<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AddAdminUser extends Migration
{
    public function up()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'pro@gmail.com',
            'password' => Hash::make('87654321'),
        ]);
    }

    public function down()
    {
        User::where('email', 'pro@gmail.com')->delete();
    }
}





return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
