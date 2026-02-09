<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            if (!Schema::hasColumn('services', 'details')) {
                $table->text('details')->nullable();
            }

            if (!Schema::hasColumn('services', 'category')) {
                $table->string('category')->nullable();
            }

            if (!Schema::hasColumn('services', 'duration')) {
                $table->integer('duration')->nullable();
            }

            if (!Schema::hasColumn('services', 'price')) {
                $table->decimal('price', 8, 2)->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'details',
                'category',
                'duration',
                'price',
            ]);
        });
    }
};
