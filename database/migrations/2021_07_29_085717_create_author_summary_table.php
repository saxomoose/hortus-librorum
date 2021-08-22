<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorSummaryTable extends Migration
{
    /**
     * Run the migrations. Intermediate table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_summary', function (Blueprint $table) {
            $table->id();

            $table->unique(['author_id', 'summary_id']);
            $table->foreignId('author_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('summary_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_summary');
    }
}
