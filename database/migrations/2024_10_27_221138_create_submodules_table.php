<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('submodules', function (Blueprint $table) {
            $table->integer('id', true, true)->autoIncrement(); 
            $table->string('title', 255);
            $table->integer('module_id')->unsigned();
            $table->boolean('is_active');
            $table->text('path_url'); // Добавлено поле path_url
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
    
            // Индекс и внешний ключ на поле `module_id`
            $table->index('module_id', 'submodule_module');
            $table->foreign('module_id', 'submodule_module')
                  ->references('id')
                  ->on('modules')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('submodules', function (Blueprint $table) {
            $table->dropForeign('submodule_module'); // Удаление внешнего ключа
        });

        Schema::dropIfExists('submodules');
    }
};
