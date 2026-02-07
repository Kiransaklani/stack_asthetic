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
        Schema::create('inquiry_brand_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // display label e.g. "Super Pulse CO2"
            $table->string('value')->unique(); // form value (same as name for simplicity)
            $table->string('category', 20)->default('product'); // product, service, other
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->timestamps();
        });

        // Seed the options: products first, then Machine Services, then Others
        $now = now();
        $options = [
            ['name' => 'Super Pulse CO2', 'value' => 'Super Pulse CO2', 'category' => 'product', 'sort_order' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Salmon-DNA-Serum', 'value' => 'Salmon-DNA-Serum', 'category' => 'product', 'sort_order' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Skin Control Mask', 'value' => 'Skin Control Mask', 'category' => 'product', 'sort_order' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Revital Cream', 'value' => 'Revital Cream', 'category' => 'product', 'sort_order' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Machine Services', 'value' => 'Machine Services', 'category' => 'service', 'sort_order' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Others', 'value' => 'Others', 'category' => 'other', 'sort_order' => 6, 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('inquiry_brand_options')->insert($options);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiry_brand_options');
    }
};
