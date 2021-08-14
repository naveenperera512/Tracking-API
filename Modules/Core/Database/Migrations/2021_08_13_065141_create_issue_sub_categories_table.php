<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('issue_id')->references('id')->on('issues');
            $table->foreignId('subcategory_id')->references('id')->on('sub_categories');
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
        Schema::dropIfExists('issue_sub_categories');
    }
}
