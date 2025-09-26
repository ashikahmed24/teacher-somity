<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('upazila_id')->constrained('upazilas')->cascadeOnDelete();
            $table->foreignId('institution_type_id')->constrained('institution_types')->restrictOnDelete();
            $table->string('name', 100);
            $table->string('bn_name', 100);
            $table->string('eiin', 20)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('lat', 20)->nullable();
            $table->string('lon', 20)->nullable();
            $table->year('established_year')->nullable();
            $table->string('website', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutions');
    }
};
