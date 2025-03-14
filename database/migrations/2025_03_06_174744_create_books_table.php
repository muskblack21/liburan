<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->string('author')->nullable();
        $table->string('cover_image')->nullable();
        $table->longText('content')->nullable()->after('description');
        $table->date('published_at')->nullable();
        $table->timestamps();
    });
}

public function down() : void 
{
  Schema::dropIfExists('books');
}
};
