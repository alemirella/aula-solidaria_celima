<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donaciones', function (Blueprint $table) {
            $table->id(); // Crea la columna 'id' de tipo BIGINT UNSIGNED y es la clave primaria.
            $table->string('nombre_donante'); // Nombre del donante
            $table->decimal('monto', 10, 2); // Monto de la donación
            $table->date('fecha_donacion'); // Fecha de la donación
            $table->text('comentarios')->nullable(); // Comentarios adicionales sobre la donación (opcional)
            $table->timestamps(); // Created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donaciones');
    }
}
