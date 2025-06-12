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
        DB::unprepared('
            CREATE TRIGGER update_stock
            AFTER UPDATE ON carts
            FOR EACH ROW
            BEGIN
                UPDATE products 
                SET stock = (stock + OLD.qty) - NEW.qty
                WHERE product_id = NEW.product_id;
            END');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
