<?php

use App\Models\Habit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('executions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Habit::class);
            $table->date('executed_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('executions');
    }
};
