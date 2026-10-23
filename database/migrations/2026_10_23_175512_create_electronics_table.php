
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('electronics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->text('specs');
            $table->decimal('price', 12, 2);
            $table->string('image');
            $table->string('category');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('electronics');
    }
};
