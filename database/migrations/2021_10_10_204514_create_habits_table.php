<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('habits', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('habits');
    }
};
