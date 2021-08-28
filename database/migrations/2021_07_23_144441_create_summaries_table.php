<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSummariesTable extends Migration {
    /**
     * Run the migrations. Creates new summaries table with specified columns.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summaries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->year('publication_year');
            $table->text('excerpt');
            $table->string('thumbnail')->nullable();
            $table->timestamps();
            $table->timestamp('published_at')->nullable();//Consider adding column publication year
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('summaries');
    }
}
