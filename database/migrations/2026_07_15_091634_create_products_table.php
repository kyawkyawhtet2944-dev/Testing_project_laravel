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
       Schema::create('products', function (Blueprint $table) {
        $table->id(); // Auto Increment ID
        $table->string('name'); // Product နာမည်အတွက် Text Field
        $table->integer('price'); // Product ဈေးနှုန်းအတွက် Integer Field
        $table->text('description')->nullable(); // အကြောင်းအရာ (မထည့်လည်း ရအောင် nullable လုပ်ထားတယ်)
        $table->timestamps(); // created_at နဲ့ updated_at ကို အလိုအလျောက် ထည့်ပေးတာ
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
