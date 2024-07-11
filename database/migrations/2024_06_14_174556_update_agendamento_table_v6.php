<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAgendamentoTableV6 extends Migration
{
    public function up()
    {
        Schema::table('agendamentos', function (Blueprint $table) {
            // Adicionar colunas de chave estrangeira se não existirem
            if (!Schema::hasColumn('agendamentos', 'tipo_servico_id')) {
                $table->unsignedBigInteger('tipo_servico_id')->nullable()->after('agendamento_id');
                $table->foreign('tipo_servico_id')->references('id')->on('tipo_servicos')->onDelete('set null');
            }

            if (!Schema::hasColumn('agendamentos', 'funcionario_id')) {
                $table->unsignedBigInteger('funcionario_id')->nullable()->after('tipo_servico_id');
                $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('set null');
            }
        });
    }

    public function down()
    {
        Schema::table('agendamentos', function (Blueprint $table) {
            if (Schema::hasColumn('agendamentos', 'tipo_servico_id')) {
                $table->dropForeign(['tipo_servico_id']);
                $table->dropColumn('tipo_servico_id');
            }

            if (Schema::hasColumn('agendamentos', 'funcionario_id')) {
                $table->dropForeign(['funcionario_id']);
                $table->dropColumn('funcionario_id');
            }
        });
    }

};
