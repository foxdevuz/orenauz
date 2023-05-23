<?php

use App\Models\Admin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("password");
            $table->string("username")->unique();
            $table->text("temporary_token")->unique();
            $table->timestamps();
        });

        $pass = "orenauz#admin";
        $hashPass = Hash::make($pass);
        $token = Str::random(30);
        Admin::create([
            'name'=> 'OrenaUz Admin',
            'password'=>$hashPass,
            'username'=>"orena-admins",
            'temporary_token'=>$token
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
